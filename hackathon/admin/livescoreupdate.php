<?php 

$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

$sql = "SELECT * FROM recent";

$result = mysqli_query($conn, $sql);
$data= mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="fullcontent">
		
         <div id="live">

         	<?php foreach($data as $key) { ?>

            		 <h3>Live Matches</h3>

                     <div class="livematches">          		 
            		
                     <a href="updateindlive.php?id=<?php echo $key['id'] ?>"><?php echo $key['namea'] ?> vs <?php echo $key['nameb'] ?></a>
                     
                     <br>

                     Score: <?php echo $key['namea'] ?> : <?php echo $key['scorea'] ?> (<?php echo $key['overa'] ?>) VS <?php echo $key['namea'] ?> : <?php echo $key['scorea'] ?> (<?php echo $key['overa'] ?>)
                     
                     </div>

            <?php } ?>         

           </div>

	</div>

</body>
</html>