<?php


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

	$a = $_POST['namea'];
	$b = $_POST['nameb'];
	$c = $_POST['scorea'];
	$d = $_POST['scoreb'];

	$e = $_POST['overa'];
	$f = $_POST['overb'];

	//$i = mysql_real_escape_string($conn, $_POST['content']);
 
    $sql  = "INSERT INTO recent (namea, nameb, scorea, scoreb, overa, overb) VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";

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
	<title>Cricblog admin</title>

<style type="text/css">
	
  #fullcontent {

  	 width: 100vw;
  	 height: 100vh;
  	 display: flex;
  	 flex-direction: column;
  	 justify-content: center;
  	 align-items: center;
  }

  .t-elements {

     	padding: 10px;
     	margin-top: 2vh;
     	margin-bottom: 1vh;
     	font:18px Open Sans;
        text-align: center;

    }

   .tde {

     	padding: 10px;
     	font:28px Open Sans;
        text-align: center;
        height: 50px;
        font-size: 20px;
     } 

</style>

</head>
<body>

	<h1 style="width: 100vw; text-align: center;">Add Match</h1>

	<div id="fullcontent">
		
		<form method="POST" action="livescoreadd.php">
			
            <table>
                  
                <tr class="t-elements">
                    <td class="tde"><input type="text" name="namea" placeholder="Name of team A" style="text-align: center; border-radius: 10px;"></td>
                </tr>

                <tr class="t-elements">
                    <td class="tde"><input type="text" name="nameb" placeholder="Name of team B" style="text-align: center; border-radius: 10px;"></td>
                </tr>

                <tr class="t-elements">
                    <td class="tde"><input type="number" name="scorea" placeholder="Score of A" style="text-align: center; border-radius: 10px;"></td>
                </tr>

                <tr class="t-elements">
                    <td class="tde"><input type="number" name="scoreb" placeholder="Score of B" style="text-align: center; border-radius: 10px;"></td>
                </tr>

                <tr class="t-elements">
                    <td class="tde"><input type="number" name="overa" placeholder="overs of A" style="text-align: center; border-radius: 10px;"></td>
                </tr>

                <tr class="t-elements">
                    <td class="tde"><input type="number" name="overb" placeholder="overs of B" style="text-align: center; border-radius: 10px;"></td>
                </tr>

            </table>    

            <div style="display: flex; justify-content: center;">
              <button style="text-align: center; margin-top: 20px; padding: 5px; font-size: 20px; cursor: pointer;" name="submit">Add Match</button>
              </div>

		</form>

	</div>

</body>
</html>