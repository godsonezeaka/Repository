<?php
include "sessionStart.php";

?>
<head>
    <title>GlamLooks</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
	
	<script language="JavaScript1.2">

	var howOften = 5; //number often in seconds to rotate
	var current = 0; //start the counter at 0
	var ns6 = document.getElementById&&!document.all; //detect netscape 6

	// place your images, text, etc in the array elements here
	var items = new Array();
		items[0]="<img src='rotateImages/rotate_image_1.jpg' width='1000' height='500'  alt='rotate1'>"; //a linked image
		items[1]="<img src='rotateImages/rotate_image_2.jpg' width='1000' height='500' alt='rotate2'>"; //a linked image
		items[2]="<img src='rotateImages/rotate_image_3.jpg' width='1000' height='500' alt='rotate3'>"; //a linked image

	function rotater() {
		document.getElementById("placeholder").innerHTML = items[current];
		current = (current==items.length-1) ? 0 : current + 1;
		setTimeout("rotater()",howOften*1000);
	}

	function rotater() {
		if(document.layers) {
			document.placeholderlayer.document.write(items[current]);
			document.placeholderlayer.document.close();
		}
		if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
			if(document.all)
				placeholderdiv.innerHTML=items[current];

		current = (current==items.length-1) ? 0 : current + 1; //increment or reset
		setTimeout("rotater()",howOften*1000);
	}
	window.onload=rotater;
	//-->
</script>
</head>
