
<?php
include 'connect.php';
session_start(); // Start the session


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {

    // Check if user is logged in
    if (!$user_id) {
        echo "<p>Please log in first.</p>";
    } else {
        // Create a user folder if it doesn't exist
        $uploadDir = "uploads/$user_id/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Prepare file info
        $fileName   = basename($_FILES["file"]["name"]);
        $targetFile = $uploadDir . $fileName;

        // Move uploaded file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            
            // Insert file record into database
            $sql = "INSERT INTO files (user_id, file_name, file_path)
                    VALUES ('$user_id', '$fileName', '$targetFile')";
            $conn->query($sql);

            echo "<p>File uploaded successfully.</p>";
        } else {
            echo "<p>File upload failed.</p>";
        }
    }
}

// Display user's files
if ($user_id){

$result = $conn->query("SELECT * FROM files WHERE user_id='$user_id'");

        if ($result && $result->num_rows > 0){
            echo "<tr><th>File Name</th><th>Action</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["file_name"]) . "</td>";
                echo "<td><a href='delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Delete this file?');\">Delete</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No files uploaded.</p>";
        }
    }
    ?>
    </div>
</body>
</html>