<!-- <?php
   include_once("dbcon.php");
   session_start();
  //  if($_SESSION['uid'])
  //  {

  //  }
  //  else{
  //      header('location: ../Login.php');
  //  }
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Registration.css">
  <link rel="stylesheet" type="text/css" href="cssExternal.csss">
	<link rel="stylesheet" type="text/css" href="dashstyle.css">
 	<!-- Fav icon -->
   <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .pro
  {
    border:1px solid black;
    width:260px;
    padding-left:10px;
    border-radius:5px;
    height:35px;
  }
  .send
  {
    width:130px;
    border:1px solid black;
    border-radius:5px;
    height:40px;
    margin-left:70px;
    background-color:black;
    color:white;
  }
  .send:hover
  {
    background-color:yellow;
    color:black;
  }
  </style>
</head>

<body class="Regis" style="background-color:pink;">


         
              
<!-- <?php
        include('dbcon.php');
        $pid=$_GET['pid'];
        $sql="SELECT * FROM product WHERE pro_id='$pid'";
        $run=mysqli_query($con,$sql);
        $data=mysqli_fetch_assoc($run);
?> -->
            
             <div style="background-color:coral;width:300px;height:360px;margin-top:80px;margin-left: 41%;border-radius:8px;border:1px solid white">
              <div>
                <h2 style="background-color:black;height:68px;border-radius:8px;color:white;padding-top:15px;padding-left: 25px;;">Change Password</h2>
              </div>
             <form method="post" action="updatedata.php" enctype="multipart/form-data" style="padding-left: 20px;">
                  <h4 style="margin-top: 30px;">Username</h4>
                  <input type="text" name="pname" class="pro" value="">
                  <h4 style="margin-top: 10px;">Password</h4>
                  <input type="password" name="pprice" class="pro">
                  <br><br>
                <input type="submit" name="change" value="Change" class="send">
             </form>     
             </div> 
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>