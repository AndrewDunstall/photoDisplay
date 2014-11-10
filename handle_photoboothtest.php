<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>You have selected</title>
</head>


<body>



<?php

if (isset($_POST['images'])) {
	$images = implode (', ', $_POST['images']);
} else {
	$images = NULL;
	echo '<p><font color="red">You forgot to select any images.</font></p>';
}


if ($images) {

	echo "<br />$images<br />";
		
} else { // One form element was not filled out properly.
	echo '<p><font color="red">Please select images.</font></p>';
}
?>



</body>
</html>
