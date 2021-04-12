<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/users.css">
<link rel="stylesheet" href="admin_assets/css/admin.css">
<title>hPharma - Welcome Admin</title>
</head>
<body>

  <input type="checkbox" id="check">
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light nav px-3">
        <label for="check">
          <i class="fas fa-bars" id="sideview_btn"></i>
        </label>
        <img src="/assets/img/logo/icons8-caduceus-medical-100.png" alt="" width="40">
        <a class="navbar-brand" href="#">hPharma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin_dashboard.html">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" id="signUp">
              <a class="nav-link" href="">Logout</a>
            </li>
          </ul>
        </div>
    </nav>

    

    <!-- Admin Side Dashboard -->
    <div class="admin-sidebar">
      <center>
        <img src="admin_assets/img/admin.PNG" alt="" class="admin_img">
        <h4>Admin</h4>
      </center>
      
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Manage Users</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>Check Bookings</span></a>
    </div>

    <!-- Dashboard Background -->
    <div class="content">
      <h2 class="page-title">Current Activities</h2>
      <center>
        <table>
          <thead>
            <th>SN</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
          </thead>
  
          <tbody>
            <tr>
              <td>1</td>
              <td>First paragrapg</td>
              <td>Awa</td>
              <td><a href="#" class="edit">edit</a></td>
            </tr>
          </tbody>
        </table>
      </center>
      
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    
</body>
</html>