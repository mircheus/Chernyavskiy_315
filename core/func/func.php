<?php

/* ****************************************************************************************************************************************************
Чернявский Мирослав <mircheus@gmail.com> 
  26/05/2016 04:00:00  
func.php - содержит функции для работы с базой данных.
Расположен в Chernyavskiy_M_A_315/core/func
*****************************************************************************************************************************************************/



require_once '/core/config/db.php';  // Работает
// Функция выбора данных

function get_request(){
	$url = $_GET["url"];
	return $url;
}

function get_id_category(){
	$category_url = $_GET["category"];
	// Выполняем SQL-запрос
	$query = "SELECT name FROM category WHERE  url = '$category_url'";
		$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

	// Выводим результаты в html
		echo "<table class=\"link3\">\n";
		echo "\t<tr>\n";
	while ($rows = mysql_fetch_array($result, MYSQL_ASSOC)) {
	       echo "\t\t<td>".$rows['name']."</td>\n";
	    
	}
	echo "\t</tr>\n";
	echo "</table>\n";
	// Освобождаем память от результата
	mysql_free_result($result);

}

function view_link_category(){
	/*
	* В эту функцию, мы не передаем значение
	* эта функция, только выводит список категорий в
	* виде ссылок <a href="$url_category">$name_category</a>
	* 1. Написать запрос на выборку name, url
	* 2. Вывести значения в шаблон на главную index.php
	*/
	$query = "SELECT name, url FROM category;";
	//$query->execute(array('url' => $category_url));
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

	// Выводим результаты в html
		echo "<table class=\"link\">\n";
		echo "\t<tr>\n";
	while ($rows = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    echo "\t\t<td><a href=?category=".$rows["url"].">".$rows['name']."</a></td>\n";
	    
	}
	echo "\t</tr>\n";
	echo "</table>\n";
	// Освобождаем память от результата
	mysql_free_result($result);

}
// Функция вывода товаров к выбранной категории
function view_product(){
	$url_category = $_GET["category"];
	// Выполняем SQL-запрос
	
	$query = "SELECT  `category`.`name` ,  `product`.`name`,  `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'bees'";

	if ($url_category == 'bees'){
		$query = "SELECT  `category`.`name` ,  `product`.`name`,  `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'bees'";
	} elseif ($url_category == 'horses'){
		$query = "SELECT  `category`.`name` ,  `product`.`name`,  `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'horses'";
	} elseif ($url_category == 'rabbits'){
		$query = "SELECT  `category`.`name` ,  `product`.`name`,  `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'rabbits'";
	} elseif ($url_category == 'birds'){
		$query = "SELECT  `category`.`name` ,  `product`.`name`,  `product`.`price` FROM  `category` LEFT JOIN  `product` ON  `category`.`id` =  `product`.`id_category` WHERE `category`.`url` =  'birds'";
	}
	
	
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	echo "<table class=\"link2\">\n";
		echo "\t<tr>\n";
	
	while ($rows = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    echo "\t\t<tr><td>".$rows['name']."</td><td>".$rows['price']."</td></tr>\n";
	}
	echo "\t</tr>\n";
	echo "</table>\n";
	
	// Освобождаем память от результата
	mysql_free_result($result);
}


//функция вывода информации о компании
function info_view(){
	// Выполняем SQL-запрос
	$query = 'SELECT name, adress FROM info';
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

	// Выводим результаты в html
		echo "<table>\n";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	    echo "\t<tr>\n";
	    foreach ($line as $col_value) {
	        echo "\t\t<td>$col_value</td>\n";
	    }
	    echo "\t</tr>\n";
	}
	echo "</table>\n";
	// Освобождаем память от результата
	mysql_free_result($result);
	
}
?>