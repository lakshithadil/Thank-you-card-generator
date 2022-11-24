<?php
	if(isset($_POST['sub']))
	{
		$font="Anklepants/anklepan.ttf";
		$font1="Arial/Arial.ttf";
		$im=imagecreatefromjpeg("card.jpg");
		// card modal templete
		$name="Dear  ".$_POST['name'].";";
		$nameu=$_POST['name'];
		// get the name from user
		$output=$nameu.'.jpg';
		// file name
		date_default_timezone_set("asia/colombo");
		$date=date('d F, Y');
		$msg ="On  ".$date." @ ".date("h:i:sa");
		// msg 
		$textColor=imagecolorallocate($im,128,128,128); //color is black
		// imagefttext(image, size, angle, x, y, color, fontfile, text)
		// ucwords convert the first letter to uppercase
		imagefttext($im,50,0,360,1170,$textColor,$font,ucwords($name));
		// add the msg bottom of the card
		imagefttext($im,45,0,240,1900,$textColor,$font1,$msg);
		imagejpeg($im,$output);//to save the image
                
		// download the card
		
		if (file_exists($output)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.basename($output).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($output));
                readfile($output);
                exit;
                }
	  
	}

if(isset($_POST['view']))
	{
		$font="Anklepants/anklepan.ttf";
		$font1="Arial/Arial.ttf";
		$im=imagecreatefromjpeg("card.jpg");
		// card modal templete
		$name="Dear  ".$_POST['name'].";";
		// get the name from user
		$nameu=$_POST['name'];
		$output=$nameu.'.jpg';
		// file name
		date_default_timezone_set("asia/colombo");
		$date=date('d F, Y');
		$msg ="On  ".$date." @ ".date("h:i:sa");
		// msg 
		$textColor=imagecolorallocate($im,128,128,128); //color is black
		// imagefttext(image, size, angle, x, y, color, fontfile, text)
		// ucwords convert the first letter to uppercase
		imagefttext($im,50,0,360,1170,$textColor,$font,ucwords($name));
		// add the msg bottom of the card
		imagefttext($im,45,0,240,1900,$textColor,$font1,$msg);
		imagejpeg($im,$output);//to save the image

		header('content-type: image/jpeg');

                imagejpeg($im);
		
	  
	}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>ThankYou-StaySafe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
  body{ 
  padding:0;
  margin:0;
  height:auto;
  background-image: url(bgi.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size:auto 285%;
  }
  .footer{
	margin:0;  
	width:100%;
	height:80px;
    background-color:black;
	opacity:0.6;
  	position:fixed;
	bottom:0px;
	left:0;
    padding:1%;
	text-align:center;
  }
  
  
  
  
  
  </style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card" style="margin-top:15% ">
				<div class="card-header bg-success">
					<h3 class="text-center text-white">THANK YOU...!</h3>	
				</div>
				<div class="card-body">
					<form id="form" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Enter your first Name:</label>
							<input type="text" name="name" autocomplete="off" class="form-control" required >
						</div>
						<div class="form-group">
							<input type="submit" value="View My Thank You Card" name="view" class="btn btn-primary"><br><br>
							<input type="submit" value="Download My Thank You Card" name="sub" class="btn btn-primary">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer"><p style="color:white">"lakigreetings"<br> © 2022 All rights reserved | Concept redesigned by Lakshitha dilshan.</p></div>
</body>
</html>
