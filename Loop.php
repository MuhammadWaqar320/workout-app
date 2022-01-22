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
                              
                             
                              <h4 style="text-align:center"> <?php echo $data['exercise_name']; ?> </h4>

                                <div style="text-align: center;padding-bottom: 30px;">
            <img src="Image/<?php echo $data['image'];?>" alt="" width="400px" height="200px;" style="border:1px solid rgb(211, 205, 205);border-radius: 8px;"><br>
            <button style="margin-top: 5px;border-radius: 8px;background-color:rgb(240, 204, 138);padding-left:15px;padding-right: 15px;padding-top:5px;padding-bottom:5px ;"><a href="Ready1.html" class="setcss"> Start Now</a></button>
          </div>
                                <?php
                             }
                         }

        

                  ?>  