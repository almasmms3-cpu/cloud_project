<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Qassim Cloud</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="styyle.css">
</head>
<body class="bg-light">
 <div class="container mt-4">
   <h2 class="mb-4 text-center">Qassim Cloud Storage</h2>

   <!-- File Upload Form -->
   <div class="card mb-4 p-3 shadow-sm">
     <h5>Upload New File</h5>
     <form action="upload.php" method="post" enctype="multipart/form-data">
       <input type="file" name="file" class="form-control mb-2" required>
       <button class="btn btn-primary w-100">Upload File</button>
     </form>
   </div>

   <!-- Uploaded Files Table -->
   <div class="card p-3 shadow-sm">
     <h5>Uploaded Files</h5>
     <table class="table table-striped table-hover mt-2">
       <thead>
         <tr>
           <th>File Name</th>
           <th>Upload Date</th>
           <th>Actions</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>example.pdf</td>
           <td>2025-11-10</td>
           <td>
             <a class="btn btn-success btn-sm" href="#">Download</a>
             <a class="btn btn-danger btn-sm" href="#">Delete</a>
           </td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>
</body>
</html>