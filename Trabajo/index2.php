<?php

$font1		=	$_POST['fonts1'];

if($font1=="pag1"){
	include 'elimelec.php';
} else if($font1=="pag2"){
	include 'ganapo.php';
} else if($font1=="pag3"){
	include 'eli.php';
}
else if($font1=="pag4"){
	include 'mele.php';
}
?>