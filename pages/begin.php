<?php

$users=
[
	'Kezeslabas'=>"users/pics/kezeslabas.png"
];

$posts = file("content/posts.cnt");

$p_count=count($posts);

?>

<!DOCTYPE html>
<html lang="hu">
	<head>
		<meta charset="UTF-8">
		<title>Space Engineers InGame Scripts by Kezeslabas</title>
		<link href="res/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<header>
			<div class="headerImage" style="background-image:url(media/pics/background.png)">
			</div>
			<nav>
				<ul class="centerBox">
					<?php printMenu(); ?>
				</ul>
			</nav>
		</header>
		
		<div id="page">
			<div class="centerBox">
				<main id="content">
				
					<!-- MAIN CONTENT -->