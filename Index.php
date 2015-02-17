<!-- PHP code will be placed here for intitial setups like titles etc -->


<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Chorus in the Forest Homepage</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <script src="js/jquery-2.1.3.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    
    <!-- Need to revisit to add in php that determines the associated styles needed and sources them out -->
    <link rel="stylesheet" href="css/Reset.css" type="text/css">
    <link rel="stylesheet" href="css/CITF-Main.css" type="text/css">
 </head>
 <body>
	 <div id="container">
		<head> 
            <div id="headMain">
                <?php
                    include_once('HeaderMain.php');
                    include_once('NavigationMain.php');
                ?>
             </div>
         </head>
         <main>
            <?php
                include_once('mainContent.php');
            ?>
        </main>
        <footer>
            <?php
                include_once('FooterMain.php');
            ?>
        </footer>	 
	 </div> <!-- closing div for container -->
	 
<!--   JS Scripts can go here -->
   <script src="js/stickyHeader.js" type="text/javascript"></script> 	
   <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js" type="text/javascript"></script>
</body>
</html>
