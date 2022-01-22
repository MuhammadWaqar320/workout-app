
<html>
    <head>
       <title>Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="adminCss.css">
        <!-- Fav icon -->
        <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
       .Hinput
       {
         border:1px solid red;
       }
       .example_b
       {
         background-color:white;
       }
       .example_b:hover
       {
         background-color:peru;
       }
       .one
       {
        background-color:red;
        color:white;
       }
       .one:hover
       {
          background-color:black;
          color:white;
       }
       .time
       {
        height:70px;
        width:882px;
        background:rgb(228, 145, 145);
        margin-left:162px;
        color:black;
        text-align:center;
        border:1px solid white;
        margin-top:40px;
        font-size:45px;
        font-family:bold;
       }
       .time:hover
       {
        background-color:black;
        color:white;
       }
      </style>
    </head>
    <body class="bgimg" onload="Time()" style="background-color:rgb(231, 190, 148);;">
         <div class="main">
         
                <!-----------Navigation Bar------------->
               
                <nav class="navbar navbar-danger " style="background-color:orange">
                    <a href="" class="navbar-brand">
                        <h1 style="color: black;font-family:Brush Script MT;font-weight: bold;">21 Minute Challenge </h1>
                      
                            </a>
                 <form class="form-inline" style="margin-top:15px;" method="post" action="dbSearch.php">
                    <a class="btn btn-outline-light" style="margin-left:680px;background-color:white;font-weight: bold;color: black;border-radius:8px;" href="Logout.php" role="button" >Logout</a>
                    </form>
                  </nav>
                  <div>
                  </div>
                  
           <div class="row rowsty" style="margin-top:0px; height:560px;">
                <div class="col-sm-3 sm4style" style="background-color:rgb(228, 145, 145);;height:1100px;">
            <center> <h1 style="color:black;padding-top:10px;font-family: initial;font-weight: bold;">Admin Panel</h1></center>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:70px;width:250px; padding-left:45px;margin-top:20px;" href="admindash.php" target="_blank" rel="nofollow noopener">Admin DashBoard</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:70px;width:250px; padding-left:45px;" href="profile.php" target="_blank" rel="nofollow noopener">Change Password</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:70px;width:250px; padding-left:65px;" href="Allcutomer.php" target="_blank" rel="nofollow noopener">Add Workout</a>
                  </div>
                  <div class="button_cont"  class="ades">
                       <a class="example_b" style="margin-left:70px;width:250px; padding-left:55px;" href="allord.php" target="_blank" rel="nofollow noopener">Delete Workout</a>
                  </div>
                  <div class="button_cont"  class="ades">
                    <a class="example_b" style="margin-left:70px;width:250px; padding-left:55px;" href="allord.php" target="_blank" rel="nofollow noopener">Update Workout</a>
               </div>
                    
          
                </div>
    
                <div class="col-sm-8 sm4style">
                 
                   <div class="time">
           <div id="txt">
              
           </div>
         </div>
                       <!---------------slider--------------------->
                   <div>
                 <center>      <img src="Image/s2.gif" alt="" width="1170px"></center>
                   </div>
                     </div>
                </div>
           </div>
           <script>
    function Time()
    {
      var today=new Date();
      var h=today.getHours();
      var m=today.getMinutes();
      var s=today.getSeconds();
      h=checkTime(h);
      m=checkTime(m);
      s=checkTime(s);
      document.getElementById('txt').innerHTML=h+":"+m+":"+s;
      setTimeout(function(){Time()});
    }
    
    function checkTime(num)
    {
      if(num<10)
      {
        num="0"+num;
      }
      return num;
    } 
    </script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
    </html>