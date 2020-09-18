<?php include "layouts/header.php"; ?>
<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  .container {
    margin-top: 5%;
    width: 50%;
    background-color: #26262b9e;
    padding-top:2%;
    padding-bottom:2%;
  }
  .btn-primary {
    background-color: #673AB7;
}
  </style>

<div class="container">

  <center><h2>Registration form</h2></center></br>
  <form class="form-horizontal" method="post" action="add_user.php">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name That is to be displayed" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
	  
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number">Phone:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="number" placeholder="Enter number" name="number" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Referal Name:</label>
	   
      <div class="col-sm-5">
        <textarea class="form-control" id="address" placeholder="Enter referal code" name="address" required></textarea>
      </div>
    </div>
    <div align="center"><label class="control-label"> Note - If your Referal code is not correct than your account will be deleated </label></div>

    
    <div class="form-group">        
      <div align="center">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
