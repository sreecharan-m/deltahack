<?php

$status= '';

$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

if(isset($_POST['submit']))
{

   $usr = $_POST['username'];
   $ps = $_POST['password'];

   $sql = "SELECT * FROM users WHERE username='$usr' AND password='$ps'";

   $result = mysqli_query($conn, $sql); //result set of rows
   $data= mysqli_fetch_all($result, MYSQLI_ASSOC);

   if(count($data) == 1)
   {
   	  header('location: changecontent.php');

   	  session_start();
   	  $_SESSION['logged_in'] =1;
   }

   else {

   	 $status = 'error login';
   }

}


?>



<!DOCTYPE html>

<html>

<head>
   <title>Class away from class</title>

    <style type="text/css">
      
    body {

      background-color: #000;
    }

    img {
      max-width: 50vh;
    }

    #fullcontent {

      display: flex;
      flex-direction: row;
      align-items: center;
      height: 80vh;
    }

    #right {

      margin: 0vh 0vw 0vh 5vw;
      display: flex;
      flex-direction: column;
      justify-content: center;
      color: #fff;


    }

    .entries {

      margin-top: 2vh;
        padding: 5px;
    }

    .id {

      text-align: left;
      margin-top: 1.5vh;
      font-weight: 900;
      font-size: 25px;

    }

    .value {
      margin-top: 1vh;
    }

    input {

      width: 350px;
      height: 20px;
      font-size: 18px;
      padding: 5px;
      text-align: center;
      border: 2px solid #00ffff;
      border-radius: 5px;
    }

    form {

      margin-top: 0px;
    }

    #submit {
      text-align: center;
      margin-top: 8vh;
    }

    #signup {

      padding: 9px 20px 9px 20px;
      font-size: 20px;
        border-radius: 6px;
        color: #00ff7f;
        background-color: #000;
        border: 1.4px solid #fff;
        cursor: pointer;
    }
    
    a{
      text-decoration: none;
    }



    </style>

</head>

<body>
      
        <h1 style="color: #fff; margin-left: 45vw; margin-top: 4vh;">CricBlog - Admin</h1>
        <div id="fullcontent">
         

           <div id="right" style="margin-left: 40vw;">
            
             <div id="formdiv">
             
             <form method="POST" action="index.php">
             



             <div class="entries">
               
               <div class="id">
                  Username
               </div>

               <div class="value">
                   
                  <input type="text" name="username" id="username">

               </div>

             </div>


             <div class="entries">
               
               <div class="id">
                  Password
               </div>

               <div class="value">
                   
                  <input type="password" name="password" id="password">

               </div>

             </div>


             <div id="submit">
               <button id="signup" name="submit">Login</button>
             </div>

                <div class="entries">
               
               <div class="id" style="text-align: center; font-size: 18px; color: #ff0000;">
                  <?php echo "$status"; ?>
               </div>

                </div>
            
            </form>

            </div>
           
           </div> 

        </div>

</body>

</html>