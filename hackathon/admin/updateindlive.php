<?php

$id = $_GET['id'];

if(isset($_POST['submit']))

{

	$c = $_POST['scorea'];
	$d = $_POST['scoreb'];

	$e = $_POST['overa'];
	$f = $_POST['overb'];

	$sql = "UPDATE recent SET scorea='$c', scoreb='$d', overa='$e', overb='$f'";

	if(mysqli_query($conn,$sql))
    {

    	echo "<script>alert('successfully updated')</script>";
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
		
		<form method="POST" action="updateindlive.php">
			
            <table>
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
              <button style="text-align: center; margin-top: 20px; padding: 5px; font-size: 20px; cursor: pointer;" name="submit">Update Match</button>
              </div>

		</form>

	</div>

</body>
</html>