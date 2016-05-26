<?php 
/* **************************************************************************************************************************************************** 
  Чернявский Мирослав <mircheus@gmail.com> 
  26/05/2016 04:00:00  
index.php. - точка входа, распределяет все запросы к нужным   компонентам и   организует работу приложения в 
целом.  
  Расположен в корневом каталоге Chernyavskiy_M_A_31/  
*************************************************************************************************************************************************** */ 
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Доброкорм</title>
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	 <h1>Доброкорм</h1>
	<style>
		body {
			background: #006400;
		}
	</style>
</head>
<body>
<table class ="body_shape">
<td class = "col1">
	
</td>
<td class = "col2">
<?php 
require_once 'core/func/func.php';
?>
<table class = "Menu">
	<td><a href='index.php'>Главная</a></td>
 	<td><a href='products.php'>Прайс-лист</a></td>
	<td><a href='info.php'>О нас</a></td>
</table>
	<p class="about">
 		Хорошая ферма - сытая ферма!
 		<img src="static/images/cow.jpg" align=center>	
  	</p>
</td>
<td class = "col3">
	
</td>
</table>
</body>
</html>