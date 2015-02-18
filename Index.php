<!-- PHP code will be placed here for intitial setups like titles etc -->


<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Chorus in the Forest Homepage</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-2.1.3.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    
    <!-- Need to revisit to add in php that determines the associated styles needed and sources them out -->
    <link rel="stylesheet" href="css/Reset.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/CITF-Main.css" type="text/css">
    <?php
        include_once('css/style.php');
        new Stylesheet('contentMain');
    ?> 
 </head>
 <body>
	 <div id="container">
		<header> 
            <div id="headMain">
                <?php
                    include_once('components/HeaderMain.php');
                ?>
             </div>
             <nav>
               <?php
                    include_once('components/NavigationMain.php');
                ?>
             </nav>
         </header>
         <main>
            <?php
                include_once('components/mainContent.php');
            ?>
        </main>
        <footer>
            <?php
                include_once('components/FooterMain.php');
            ?>
        </footer>	 
	 </div> <!-- closing div for container -->
	 
<!--   JS Scripts can go here -->
   <script src="js/stickyHeader.js" type="text/javascript"></script> 	
   <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js" type="text/javascript"></script>
</body>
</html>
