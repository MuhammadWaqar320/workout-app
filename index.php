<html>
    <head>
        <title>
        7 Minute Challenge
        </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/fontawesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <style type="text/css">
            a{
                   color: black;
                     }
            a:hover{
                text-decoration: none;
            }
            .anchset a{
                font-weight: bold;
                font-size: 20px;
                color:orangered;
            }
            #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:orange;
  color: black;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#myBtn:hover {
  background-color: #555;
  color: white;
}
.footerDiv {
	background-image: url("Image/Fbg.jpg");
	margin-bottom: 15px;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}



.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
.fa-skype {
  background: #00aff0;
  color: white;
}




        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm  HomeNav" style="background-color: orange">
			<a href="" class="navbar-brand">
        <h1 style="color: black;font-family:Brush Script MT;font-weight: bold;">21 Minute Challenge </h1>
      
			</a>
        </nav>
        <div style="background-color:rgb(243, 209, 147);">
            <img class="img-fluid" src="Image/s2.gif" alt="" width="1600px">
        </div>
       
        <!-- workout -->
        <div class="container" style="padding-top: 40px;padding-bottom: 35px;">
             <!-- Instruction -->
             <div class="anchset">
                <h3 style="font-family: initial;font-weight: bold;">Instruction</h3>
                <p style="padding-bottom:50px;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="">Click Me</a> Vitae quod accusantium nemo! In ducimus sunt quo, porro ea a quia sed magni, eos reiciendis facilis natus voluptas error voluptate mollitia.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio accusantium aliquam sit repellendus iste dolorem exercitationem, commodi beatae dolorum, veniam tempore alias quos, ipsum minus vero reprehenderit odit error facilis!  
                </p>
             </div>
             <?php
                        $con=mysqli_connect('localhost','root','','workout');
                        $qry="SELECT * FROM exercise";
                        $run=mysqli_query($con,$qry);
                         if(mysqli_num_rows($run)<1){
                             echo "<tr><td colspan='5' style='border:1px solid black;padding:10px;text-align:center;'>No Workout Found<td></tr>";
                         }
                         else{
                             while($data=mysqli_fetch_assoc($run)){
                                ?>
                             

                                <div style="text-align: center;padding-bottom: 30px;">
            <button style="margin-top: 5px;border-radius: 8px;background-color:rgb(240, 204, 138);padding-left:15px;padding-right: 15px;padding-top:5px;padding-bottom:5px ;"><a href="Ready1.html" class="setcss">
                              <h4 style="text-align:center"> <?php echo $data['exercise_name']; ?> </h4></a></button>
          </div>
                                <?php
                             }
                         }

        

                  ?>  
        </div>
        <!-- footer -->


   
        <div class="footerDiv">
          <div class="footer-wrapper">
            <div class="container-fluid">
              <p
                style="font-size: 30px;color:red;text-align: center;font-weight: bold;font-family: initial; font-size: 45px;">
                 Share with friends</p>
                <div style="padding-bottom:100px;text-align: center;">
                  <a href="#" class="fa fa-facebook" style="width: 70px;height:70px;"></a>
                  <a href="#" class="fa fa-twitter" style="width: 70px;height:70px;"></a>
                  <a href="#" class="fa fa-youtube" style="width: 70px;height:70px;"></a>
                  <a href="#" class="fa fa-skype" style="width: 70px;height:70px;"></a>
                  <a href="#" class="fa fa-instagram" style="width: 70px;height:70px;"></a>
                </div>
             
            </div>
          </div>
      
        </div>
        
      <!-- link -->
      
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<!-- <div style="background-color:black;color:white;padding:30px">Scroll Down</div>
<div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll to top" button that becomes visible 
  <strong>when the user starts to scroll the page</strong>.</div> -->

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
