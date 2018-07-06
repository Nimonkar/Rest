
<?php 
for ($i=6; $i >=1 ; $i--) { 

	for ($j=6; $j >=$i ; $j--) { 

		echo "&nbsp;&nbsp;";
		# code...
	}
	
	for ($k=1; $k <($i*2) ; $k++) { 
		echo"*";

		# code...
	}

	echo"<br>";
}

 ?>

































<?php  
for ($i = 6; $i >= 1; $i--) {
 //Loop added for spacing
 for ($j = 6; $j >= $i; $j--) {
 echo "&nbsp;&nbsp;";
 }
 
 //Loop added for printing star
 for ($k = 1; $k < ($i * 2); $k++) {
 echo "*";
 }
 echo "</br>";
}

?>