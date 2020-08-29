<?php 

$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

session_start();

if(isset($_SESSION['logged_in']))

{
     
   

}

else {

	header('location: index.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Cric blog Admin</title>

<style type="text/css">
	
  #fullcontent {

	width: 90vw;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}

button {

	 outline: none;
	 border:none;
	 background-color: #000;
	 color: #00ffff;
	 font: 25px Open Sans;
	 margin: 50px;
	 cursor: pointer;
	 padding: 10px;
}

#links {

	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 margin-top: 10vh;
}

a {

	text-decoration: none;
	color: #00ffff;
}

</style>

</head>
<body>

     <div id="fullcontent">

        	<div id="links">
        		
               <button><a href="articlesadd.php" target="_blank">Add Main Article</a></button>
               <button><a href="articlesupdate.php" target="_blank">Update Main Article</a></button>
               <button><a href="articlesremove.php" target="_blank">Remove Main Article</a></button>

               <button><a href="livescoreadd.php" target="_blank">Add Live score</a></button>
               <button><a href="livescoreupdate.php" target="_blank">Update Live score</a></button>
               <button><a href="livescoreremove.php" target="_blank">Remove Live score</a></button>

               <button><a href="recentadd.php" target="_blank">Add recent match</a></button>
               <button><a href="recentupdate.php" target="_blank">Update recent match</a></button>
               <button><a href="recentremove.php" target="_blank">remove recent match</a></button>

        	</div>
        	
             

        </div>

</body>
</html>