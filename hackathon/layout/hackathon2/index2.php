<?php



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


</style>


</head>

<body>

    <div id="fullcontent">
    	
          <div id="heading">
          	CricBlog Home
          </div>

          <hr>

          <div id="a">
          	
            <div id="article">

            	<div class="ats" style="margin-top: 1vw;">

            		  <h1 style="background-color: rgba(0,0,0,0.2); border-radius: 50px; text-align: center;">CSK catches CORONA</h1>
            		
                     

            	</div>


            	<div class="ats">

            		<h1 style="background-color: rgba(0,0,0,0.2); border-radius: 50px; text-align: center;">Banton Hits Hard</h1>
            		
            	</div>
            	
            </div>

            <div style="width: 0.25vw; background-color: #000;"></div>

            <div id="recent">

            	<div id="live">

            		 <h3>Live Matches</h3>

                     <div class="livematches">          		 
            		
                     Team1 vs Team2
                     <br>

                     Score: Team1: 180 ( 50 ) vs Team2 (150) ( 42.5 )
                     
                     </div>

                     <div class="livematches">          		 
            		
                     Team3 vs Team4
                     <br>

                     Score: Team3: 180 ( 50 ) vs Team4 (150) ( 42.5 )
                     
                     </div>

                     <div class="livematches">          		 
            		
                     Team5 vs Team6
                     <br>

                     Score: Team5: 180 ( 50 ) vs Team6: (150) ( 42.5 )
                     
                     </div>

            	</div>


            	<div id="previous">
            		
                      <h3>Previous Matches</h3>

                      <div class="livematches">          		 
            		
                     Team1 vs Team2
                     <br>

                     Score: Team1: 180 ( 50 ) vs Team2 (150) ( 42.5 )
                     
                     </div>

                     <div class="livematches">          		 
            		
                     Team3 vs Team4
                     <br>

                     Score: Team3: 180 ( 50 ) vs Team4 (150) ( 42.5 )
                     
                     </div>

                     <div class="livematches">          		 
            		
                     Team5 vs Team6
                     <br>

                     Score: Team5: 180 ( 50 ) vs Team6: (150) ( 42.5 )
                     
                     </div>

            	</div>
            	
            </div>

          </div>

    </div>

</body>
</html>