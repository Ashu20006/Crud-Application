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
<style>
.a{
    float:right;
}
</style>
<body>

    <div class="container">
    <div class="row">
      
           <div class="col-sm-6">
           <h1>VIEW USER</h1>
        </div>
        
        <div class="col-sm-4">
        <a href="<?php echo base_url('index.php/crud/user/create/'); ?>" class="btn btn-primary a"><i class="fa-solid fa-plus"></i> CREATE</a>
</div>

    </div>
    </div>
<div class="container ">
  
  <HR></HR>
  <div class="row">
    <div class="col-sm-12">
     <?php  $success=$this->session->userdata('success');
     if($success !=""){
     ?>
     <div class="alert alert-success"><?php echo $success;?></div>
    <?php }?>

    <?php
    $failure=$this->session->userdata('failure');
    if($failure !=""){
    ?>
    <div class="alert alert-success"><?php echo $failure ?></div>
    <?php }?>

    </div>
  </div>
  <table class="table table-striped">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>created_at</td>
    </tr>
    <?php if(!empty($users)) {
        foreach($users as $user){
    ?>
    <tr>
    <td><?php echo $user['user_id'];  ?></td>
    <td><?php echo $user['name'];?> </td>
    <td><?php echo $user['email'];?> </td>
    <td><a href="<?php echo base_url().'index.php/crud/user/edit/' .$user['user_id']?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i>Edit</a></td>
    <td><a href="<?php  echo base_url().'index.php/crud/user/delete/'.$user['user_id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a></td>
    <td><?php echo $user['created_at'];?> </td>
    </tr> 
    <?php
        }}else{?> 
    <tr>
        <td colspan="5">Records not found</td>
    </tr>
    <?php }?>
  </table>
</div>
</body>
</html>