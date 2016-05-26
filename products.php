<!DOCTYPE html>
<?php
/* ****************************************************************************************************************************************************
Чернявский Мирослав <mircheus@gmail.com> 
  26/05/2016 04:00:00  
products.php - второстепенная страница содержащая информацию о товарах определенных категорий.
Расположен в корневом каталоге Chernyavskiy_M_A_315
*****************************************************************************************************************************************************/

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
<?php 
echo view_link_category(); ?>
 	<p class="about">
 	"Мы предлагаем далеко не самый широкий ассортимент <strike>ковров</strike> кормов для животноводческих ферм."(С) Ген.директор ООО "Доброкорм"
 	</p>
 	<?php 
  // Подключение файла функций
/*echo result();*/
echo 'Товары категории: '.get_request();

echo get_id_category();

?>
 	<p>
 		Список товаров:
 	</p>
<?php 
echo view_product();
?>

</td>
<td class = "col3">
	
</td>
</table>

</body>
</html>