<?php include("variables.php") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="Books" />
<meta name="Description" content="Test for Book pages" />
<title>Book Menu</title>
<link rel="stylesheet" href="css/global.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<style type="text/css">
h2 {
	color: #333;
	padding: 20px 20px 0px 20px;
	font-size: 18px; 
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;	
}
</style>
</head>
<body>
    <div id="header">
        <h1 id="logo">grace2read.com<br />
        <span class="subtitle">Open book. Open mind. Open world.</span></h1>

        <br class="clear" />
    </div>    
        
    
	<div id="wrapper">
    
    <h2>All Books Currently in the Collection</h2>
		<ul>
            
		<?php
        if ($texts = opendir('texts/')) {	
            while (false !== ($current_book = readdir($texts))) {		
                if ($current_book != "." && $current_book != "..") {			
                    if (preg_match('#(php|sgml)#', $current_book)) {
                        return false;
                    }
                    else {
						require('data/'.$current_book.'.php'); // Get book-specific information including copyright and audio data
                        ?>
                        
                        <li><a href="index.php?book=<?php echo $current_book ?>&amp;chapter=1"><?php echo $bookName." - ".$bookAuthor; ?></a></li>
						
						<?php
                    }			
                }		
            }				
            closedir($texts);
        }
        ?>
         </ul>  
    </div>
</body>
</html>