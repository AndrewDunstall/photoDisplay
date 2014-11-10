
<?php

/* alpharead version 3: This function returns an array containing the names of the files inside any given folder, 
excluding files that start with a '.', as well as the filenames listed in the '$killit' array. 
This array is sorted using the 'natural alphabetical' sorting manner. 
If no input is given to the function, it lists items in the script's interpreted folder. 
Version 3 fixes a MAJOR bug in version 2 which corrupted certain arrays with greater 
than 5 keys and one of the supposedly removed filenames.
written by Admiral at NuclearPixel.com */

function alpharead3($dir)
{
		if(!$dir)
				{
				$dir = '.';
				}

		foreach(glob("$dir/*") as $item)
		{
		$sort[]= end(explode('/',$item));
		}

		$killit = array('index.html', 'index.php', 'thumbs.db', 'styles.css');
		$killcounter = 0;

		foreach($sort as $sorteditem)
		{
			foreach($killit as $killcheck)
			{

				if(strtolower($sorteditem) == strtolower($killcheck))
					{
					unset($sort[$killcounter]);
					}
			}
			$killcounter++;
		 }

			if($sort)
					{
					natsort($sort);
					}

					foreach($sort as $item)
					{
					$return[]= $item;
					}

					if(!$return)
						{
						return array();
						}
			return $return;
}

//some basic usage

$folder = 'thumbnails'; //put your folder name here

foreach(alpharead3($folder) as $item)
{
//echo '<img src="'.$folder.'/'.$item.'"><br>'.$item."\n";

$item = "$item".' ';   //this put a space inbetween each member of array.

echo $item;


}

?>
