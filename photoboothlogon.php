<?PHP
//session_destroy();
$page_title = 'photoDisplay PhotoBOOTH LOGON';
include ('header.html');
//------------------------------------------------------------------
?>


<div id="enter">



<br />
<br />
<br />
<br />
<br />
<br />


<?php

session_start();
require_once ('includes/config.inc.php');


if (isset($_SESSION['email']))
	{ 
			if (isset($_SESSION['password']))  
					{
					$urla="photobooth.php";
					header("Location: $urla");  
					}
	 }
	 else
	 {
	

if (isset($_POST['submitted'])) 
{
	require_once ('hide/mysql_connect.php'); 

		if (!empty($_POST['email']))   //if email is not empty
			  {
				 $e = escape_data($_POST['email']);
			  } 
		else 
			 {
				 echo '<p><span style="color : red;">You forgot to enter your email address!</span></p>';
				 $e = FALSE;
			 }


		if (!empty($_POST['passtext']))        //if password is not empty
			 {
			 	 $p = escape_data($_POST['passtext']);
			 } 
		else 
			 {
				 $p = FALSE;
				 echo '<p><span style="color : red;">You forgot to enter your password!</span></p>';
			  }


		if ($e && $p) { // If email and password have been entered in login box

				// Query the database - prepare db data to be set as SESSION variables
				$query = "SELECT user_id, first_name FROM users WHERE (user_email='$e' AND user_password='$p')";
				$result = mysql_query ($query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysql_error());
				//--------------------------------------------------------------------------------------------------

							if (@mysql_num_rows($result) == 1) { // A match was made.

									// Register the values (& redirect)
									$row = mysql_fetch_array ($result, MYSQL_NUM);
									mysql_free_result($result);
									mysql_close(); // Close the database connection.
									$_SESSION['email'] = $row[1];     //SET SESSION VARIABLE
									$_SESSION['password'] = $row[0];           //SET SESSION VARIABLE
									//----------------------------------------------------------------
									// Start defining the URL.
									$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
									
											
											if ((substr($url, -1) == '/') OR (substr($url, -1) == '\\') )     // Check for a trailing slash
												{
													$url = substr ($url, 0, -1); // Chop off the slash.
												}
									
									$url .= '/photobooth.php';       // Add the page.

									ob_end_clean(); // Delete the buffer.
									header("Location: $url");
									exit(); // Quit the script.
				} 
				else 
				{ 
					echo '<p>email or password incorrect, did you receive a password email?</p>';
				}

		} 
			else 
		{ // If everything wasn't OK.
				echo '<p>ERROR - please check your password email and re-enter email address and password</p>';
		}

	mysql_close(); // Close the database connection.

}
}
?>
<br />
<h3>Login</h3>
<p></p>

	<form action="../../../Desktop/photoboothlogon.php" method="post" id="form">

		<div class="logintext">
		<label for="loginform">email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br />
		<input type="text" name="email" class="loginfield" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /><br />
		<p></p>
		<label for="loginform">password</label><br />
		<input type="password" name="passtext" class="loginfield" /></div>

		<div>
		<input type="submit" class="button" value="SUBMIT" /></div>
		<input type="hidden" name="submitted" value="TRUE" />
		<p></p>
	</form>



</div> <!-- enter -->







<br />
<br />
<br />
<br />


















<?PHP
//-------------------------------------------------------------------------------------------------
include ('footer.html');
?>
