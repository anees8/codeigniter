<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" ></script>
    <title>Home</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-lg-12 d-flex">
<h1 class="">Hello.. <?php echo $_SESSION['username'] ?></h1>

<a href="<?php echo base_url()?>">Logout</a>
    </div>
  </div>
</div>



<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>