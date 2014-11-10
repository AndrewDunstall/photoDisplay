<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title>open window test</title>
		
<SCRIPT LANGUAGE="javascript">
var newwindow;
function poptastic(url)
{
	newwindow=window.open(url,'name','height=600,width=850');
	
	if (window.focus) 
	{
	newwindow.focus()
	}
	
}
</SCRIPT>
	</head>

	<body bgcolor="#ffffff">

		<br />
		


<br />
<br />

<form action="handle_photoboothtest.php" method="post">
<TABLE BORDER="1" PADDING="2">

<TR>


		
<TD>
<a href="javascript:poptastic('xxx/simon/01/photos/cl0906FAmain03.jpg');">
<img src="xxx/simon/01/thumbnails/cl0906FAmain03.jpg"
ALIGN="BOTTOM" BORDER="">
</a>
<INPUT TYPE="CHECKBOX" VALUE="
cl0906FAmain03.jpg
" NAME="images[]"><br />
cl0906FAmain03.jpg
</TD>
		
</TR>	

</TABLE>
</form>
</body>

</html>
