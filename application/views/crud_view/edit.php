<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="<?php echo base_url('assets/');?>" >
    <link href="css/Bootstrap.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</head>
<body>
<!-- form -->
<div class="container ">
  <h1>Update USER</h1>
  <HR></HR>
<form action="<?php echo base_url().'index.php/crud/user/edit/'.$user['user_id'] ?>" method="post">
<!-- <?php echo form_open('admin/action'); ?> -->
<div class="mb-3"></div>
<div class="row">
<div class="col-sm-6">
<label for="">Name</label>
    <input type="text"value="<?php echo set_value('user',$user['name']); ?>" class="form-control" id="Username" placeholder="Enter your name" name="user">
    <?php echo form_error('user',"<div class='text-danger'>","</div>"); ?> 
</div>
<div class="col-sm-6 mt-3">
</div>
</div>
  <div class="mb-3"></div>
  <div class="row">
  <div class="col-sm-6 bg">
<label for="">Email</label> 
    <input type="email"value="<?php echo set_value('mail',$user['email']); ?>" class="form-control " id="Email" placeholder="Enter your Email" name="mail">
    <?php echo form_error('mail',"<div class='text-danger'>","</div>"); ?>
  </div>
  <div class="col-sm-6 mt-3">
</div>
</div>
<div class="mb-3"></div>
  <button class="btn btn-primary">Update</button>
  <button type="reset" class="btn btn-primary ms-5">Cancel</button>

</div>
<!-- form -->
</body>
</html>
