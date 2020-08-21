<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>DayCal · Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .container{
      	transform: translateY(250px);
      }
      a{
      	text-decoration: none;
      	color: #de6b54;
      }
      a:hover{
      	text-decoration: none;
      	color: #d4563d;
      	font-weight: bold;
      }
    </style>
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">
   <div class="container" >
   	<h3><?php
$date1 = $_GET['date1'];
$date2 = $_GET['date2'];
$diff = strtotime("$date2") - strtotime($date1);
$result = round($diff / (60 * 60 * 24));
if($result<0){
	$result = -1*$result;
}
else{
	$result = $result;
}
echo "Number of days between ".$date1." and ".$date2." is  ";
?>
</script> 
</h3> <br>
<h1><b>
	<?php 
echo $result."  Days";
?>	
</b>
</h1>
<h3><a href="../">Try Other Dates</a></h3>
   </div>
</body>
</html>
