<?PHP
//session_destroy();
$page_title = 'photoDisplay';
include ('header.html');
//-------------------------------------------------------------

/* **********************************************
                        PhotoBOOTH version 1
*********************************************** */

/*
SETUP CONDITIONS
The folder name of the thumbnails is *
we use this so we don't have problems if the filename contains letters contained in the directory names
e.g. if we use clients as our directory name, and the filename starts with cl
the cl will be stripped off the name and the thumbnail won't appear on the page
We sould look for a more elegant way to deal with this 

The current full path to the thumbnails is:
asterix/photographername/shootnumber/thumbnails
The current full path to the large images is:
asterix/photographername/shootnumber/photos
*/
/*
STILL TO DO: 
add code to generate multiple pages
make admin page
generate thumbs with GD (perhaps)
 */

//This is where our thumbnails are - we will get this from the ADMIN web page
$dir = 'xxx/simon/01/thumbnails/';

//This is where our large images are are - we will get this from the ADMIN web page
$photodir = 'xxx/simon/01/photos/';

//glob() looks in the directory and gets the photo names
$results=glob("$dir*.jpg");

//results is an array of filenames returned by the glob() function - now we sort them here
sort($results);

//How many pix are there?
$totalPix = count(glob("$dir*.*"));

//this will be set in the ADMIN webpage
$pixPerRow = 5;   //-------------------------------------------------------------SET THUMBNAILS PER ROW HERE

//this will be set in the ADMIN webpage
$rowsPerPage = 4;

//Total of thumnbails for each page
$thumbsPerPage = ($pixPerRow*$rowsPerPage);

//Total pages of thumbnails to be generated
$totalPages = ($totalPix/$thumbsPerPage);	

//HTML table constructs
$openTableRow = '<TR>';
$closeTableRow = '</TR>';

//HTML table constructs
$startTableData = '<TD>';
$endTableData = '</TD>';

// Setup some counting indexes
$number = $pixPerRow-1;      //--index starts from 0
$i = -1;

//------------------------------------------------------------------
?>

<div id="photobooth">
<form action="handle_photoboothtest.php" method="post">
<TABLE BORDER="1" PADDING="2">

<TR>


<?PHP


foreach($results as $name)
{
		$i++;                                                                                // this is used to track where to put the table starts and ends in
		
		$name = ltrim( $name, $dir );                                   // trim the directory names off the filename
	
	
		
		echo ' <TD>  ';
		echo ' <img src="  ';
		echo $dir.$name; //------------------------------ where do the images come from?
		echo '  "  ';
		echo ' ALIGN="BOTTOM">  ';
		echo ' <INPUT TYPE="CHECKBOX" VALUE="  ';
		echo $name;//----------------------------------- this is the name of the file for the form
		echo ' " NAME="images[]"><br />  ';
		echo $name  ;//-----------------------------------this is the name that appears unber the thumbnail
		echo '   </TD>  ';
			
			
		if ($i == $number) 
			{
			echo '<TR>';
			echo '</TR>';
			$number = $number+$pixPerRow;
			}


}

?>

</TR>
</FORM>
</TABLE>
<br />
<br />
<div align="center"><input type="submit" name="submit" value="Next" /></div>
</div><!-- photobooth -->

<?PHP
//-------------------------------------------------------------------------------------------------
include ('footer.html');
?>
