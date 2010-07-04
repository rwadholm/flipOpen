<select id="pageselect" value="Chapter <?php echo $current_chapter ?>" onchange="location = this.options[this.selectedIndex].value;">

<?php
/* Creates a drop-down menu of chapters in a book from the texts directory */
if ($handle = opendir('texts/'.$bookTitle)) {
	/* Loop over the directory. */
	$i=1;
	while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != "..") {			
			if ($i == $current_chapter) {
				echo "<option value\"index.php?book=$current_book&amp;chapter=$i\" selected=\"selected\">Chapter $current_chapter</option>\n";
			}
			else {
				echo "<option value=\"index.php?book=$current_book&amp;chapter=$i\">Chapter $i</option>\n";
			}
			$i++;
		}				
	}				
	closedir($handle);
}
?>
</select>