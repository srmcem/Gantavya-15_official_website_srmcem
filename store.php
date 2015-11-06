<!doctype html>
<html>
<head><title>Gantavya'15 | SRMCEM</title>
<style type="text/css">
	@font-face{src:url(stratum-2-web.woff);font-family:stratum}
@font-face{src:url(stratum-2-web-bold.woff);font-family:stratum-bold}
</style>
</head>
<body style="background-color:#ee7230;color:#ffffbf">
<?php

$name = @$_POST['name'];
$email = @$_POST['email'];
$event = @$_POST['event'];
$org = @$_POST['univ'];
$loc = @$_POST['location'];



echo '<center><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="margin-left:auto;margin-right:auto;width:190px;font-family:stratum-bold;">Thanks .! For Registration.<br><br>
<a href="http://www.amarpandey.ml/project/gantavya"  style="text-align:center;font-family:stratum-bold;color:#ffffbf">Back to Homepage</a></div></center>' ;


$filename = "submit.txt";




$f_data= '
Name of Participant : '.$name.'

Email of Participant :  '.$email.'

Event name : '.$event.' 

University/Organisation : '.$org.'

Location : '.$loc.'

==============================================================================
';



$file = fopen($filename, "a");
fwrite($file,$f_data);
fclose($file);



?>
</body>
</html>