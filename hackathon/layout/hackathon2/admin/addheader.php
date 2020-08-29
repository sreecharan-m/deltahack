<?php

$status = '';
$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

session_start();

if(isset($_SESSION['logged_in']))

{
     


}

else {

	header('location: index.php');
}

if(isset($_POST['submit']))
{

	 $hw = $_POST['hw'];
	 $hh = $_POST['hh'];
	 $hhh = $_POST['hhh'];

	 $hl = $_POST['hl'];

	 $hpt = $_POST['hpt'];

	 $hpl = $_POST['hpl'];

	 $hp = $_POST['hp'];

	 $sql = "INSERT INTO header(hw, hh, hhh, hl, hpt, hpl, hp) VALUES ('$hw', '$hh', '$hhh', '$hl', '$hpt', '$hpl', '$hp')";

	 if(mysqli_query($conn,$sql))
    {

    	echo "<script>alert('successfully added')</script>";
    }

    else {

    	 echo mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	

	#fullcontent {

		 width: 100vw;
		 display: flex;
		 justify-content: center;
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
  
     <div id="fullcontent" >
     	
           <form method="POST" action="addheader.php">
           	 
             
             <div class="entries">
               
               <div class="id">
                  Header Width
               </div>

               <div class="value">
                   
                  <input type="number" name="hw" id="username">

               </div>

             </div>


             <div class="entries">
               
               <div class="id">
                  Header Height
               </div>

               <div class="value">
                   
                  <input type="number" name="hh" id="password">

               </div>

             </div>

             <div class="entries">
               
               <div class="id">
                  Header Heading
               </div>

               <div class="value">
                   
                  <input type="text" name="hhh" id="password">

               </div>

             </div>


             <div class="entries">
               
               <div class="id">
                  Comma separated header links
               </div>

               <div class="value">
                   
                  <input type="text" name="hl" id="password">

               </div>

             </div>

             <div class="entries">
               
               <div class="id">
                  Header padding
               </div>

               <div class="value">
                   
                  <input type="number" name="hp" id="password">

               </div>

             </div>


             <div class="entries">
               
               <div class="id">
                  Header position from top(in % view port height)
               </div>

               <div class="value">
                   
                  <input type="number" name="hpt" id="password">

               </div>

             </div>


             <div class="entries">
               
               <div class="id">
                  Header position from left (in % of view port width)
               </div>

               <div class="value">
                   
                  <input type="number" name="hpl" id="password">

               </div>

             </div>


             <div id="submit">
               <button id="signup" name="submit">Add</button>
             </div>

               <div class="entries">
               
               <div class="id" style="text-align: center; font-size: 18px; color: #ff0000;">
                  <?php echo "$status"; ?>
               </div>

               </div>


           </form>

     </div>

</body>

</html>