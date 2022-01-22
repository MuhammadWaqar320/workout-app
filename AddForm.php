
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
            
             <div style="background-color:coral;width:300px;height:360px;margin-top:80px;margin-left: 41%;border-radius:8px;border:1px solid white">
              <div>
                <h2 style="background-color:black;height:68px;border-radius:8px;color:white;padding-top:15px;padding-left: 25px;;">Add WorkOut</h2>
              </div>
             <form method="post" action="AddForm.php" enctype="multipart/form-data" style="padding-left: 20px;">
                  <h4 style="margin-top: 30px;">WorkOut Name</h4>
                  <input type="text" name="name" class="pro" value="">
                  <h4 style="margin-top: 10px;">WorkOut Image</h4>
                  <input type="file" name="imag" class="" value="">

                  
                  <br><br>
                <input type="submit" name="add" value="Add" class="send">
             </form>     
             </div> 
             <?php
    $con=mysqli_connect('localhost','root','','workout');
    if(isset($_POST['add'])){
        include('dbcon.php');
        $image = $_FILES['imag']['name'];
        $name=$_POST['name'];
        $image = $_FILES['imag']['name'];
        $qry="INSERT INTO exercise(exercise_name,image) VALUES('$name','$image')";
        $run=mysqli_query($con,$qry);
        if($run==true){
        }
    }
?>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>