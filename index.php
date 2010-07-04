<?php include('variables.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="Books" />
<meta name="Description" content="Test for Book pages" />
<title>The Railway Children</title>
<link rel="stylesheet" href="css/global.css" type="text/css" media="screen" />
<link rel="stylesheet" href="skin/jplayer.blue.monday.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>
</head>
<body>
<div id="header">
        <h1 id="logo">grace2read.com<br />
        <span class="subtitle"><?php echo $bookName; ?></span></h1>

		<?php include("player.php"); ?>

        <br class="clear" />
    </div>
    
	<div id="wrapper">
    <?php include("texts/$current_book/$current_book$current_chapter.php"); ?>
    </div>
</body>
</html>