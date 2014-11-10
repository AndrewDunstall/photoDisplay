<?PHP

$dir = "thumbnails";

$results=glob("$dir/*.jpg");

sort($results);

/*
echo $results[0];
echo '<br />';
echo $results[1];
echo '<br />';
echo $results[2];
echo '<br />';
echo $results[3];
echo '<br />';
echo $results[4];
echo '<br />';
echo $results[5];
echo '<br />';
echo $results[6];
echo '<br />';
echo $results[7];
echo '<br />';
echo $results[8];
echo '<br />';
echo $results[9];
echo '<br />';
echo $results[10];
echo '<br />';
echo $results[11];
echo '<br />';
echo '<br />';
echo '<br />';
*/

$count = count(glob("$dir/*.*"));

echo "the number of files is: $count";
echo "<br />";

foreach($results as $name){
	
	$name=ltrim($name, "thumbnails/");
	echo "$name<br />";
	}





/*

function browsepdf(){
   $pdffile=glob("printable/*.pdf");
   rsort($pdffile);
   foreach($pdffile as $filename){
       $filename=ltrim($filename, "printable/");
       $filename=rtrim($filename, ".pdf");
       $file=$filename;
       $datetime=strtotime($filename);
       $newdate=strtotime("+3 days",$datetime);
       $filenamedate=date("F d", $datetime);
       $filenamedate.=" - ".date("F d, Y", $newdate);
       echo "<option value='$file'>$filenamedate</option>";
   }
}

*/






?>
