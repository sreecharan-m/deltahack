<?php

$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

?>


<!DOCTYPE html>
<html>
<head>
	<title>CricBlog</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>


<style type="text/css">
  
   #fullcontent {

   	 width: 100vw;
   	 height: 100vh;
   }

   body {

   	 margin: 0px;
   	 padding: 0px;
   }

   #heading {

   	 width: 100%;
   	 text-align: center;
   	 font: 40px Open Sans;
   	 margin-top: 4vh;
   }

   hr {

   	border: 0;
   	clear: both;
   	display: block;
   	width: 100%;
   	height: 3px;
    background-color: #000;
    margin-top: 4vh;
    margin-right: 0px;
   }

   #a {

   	 width: 100%;
   	 display: flex;
   	 flex-direction: row;
   }

   #article { 

       width: 75%;
       display: flex;
       flex-direction: column;
       margin-left: 3vw;
       line-height: 70px;
       font: 18px Open Sans;
       letter-spacing: 1.5px;
       margin-right: 3vw;
       margin-top: 7vh;
   }

   #recent {

   	 width: 20%;
   	 display: flex;
   	 flex-direction: column;
   	 margin-right: 1vw;
   	 margin-left: 1vw;
   	 margin-top: 5vw;
   }

   .ats {

   	 margin-top: 5vh;
   }

   #live {

   	 display: flex;
   	 flex-direction: column;
   	 font-weight: 900;
   	 font: 20px Open Sans;
   	 align-items: center;
   }

   .livematches {

   	 margin-bottom: 6vh;
   }

   #previous {

   	 display: flex;
   	 flex-direction: column;
   	 font-weight: 900;
   	 font: 20px Open Sans;
   	 align-items: center;
   }

   #heading {

     display: flex;
     flex-direction: row;
   }


</style>


</head>

<body>

    <div id="fullcontent">
    	
          <div id="heading">


          	
              <?php

                 $sql = "SELECT * FROM header";
                 $result = mysqli_query($conn, $sql); //result set of rows
                 $data= mysqli_fetch_all($result, MYSQLI_ASSOC);

                 $links = $data[0]['hl'];

                 $p = explode(',', $links);

              ?>

          </div>


    </div>


<script type="text/javascript">
  
 
  var h = document.getElementById('heading');

  var hw = '<?php echo $data[0]['hw']; ?>';
  var hh = '<?php echo $data[0]['hh']; ?>';
  var hhh = '<?php echo $data[0]['hhh']; ?>';

  var hpt = '<?php echo $data[0]['hpt']; ?>';
  var hpl = '<?php echo $data[0]['hpl']; ?>';

  var hp = '<?php echo $data[0]['hp']; ?>';

  h.style.width = hw + 'px';
  h.style.height = hh + 'px';
  h.style.padding = hp + 'px';

  const newDiv = document.createElement("div"); 

  const newContent = document.createTextNode(hhh); 

  newDiv.appendChild(newContent);

  h.appendChild(newDiv);

  var pa = '<?php echo json_encode($p); ?>';

</script>    

</body>
</html>