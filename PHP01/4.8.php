<?php
  echo "<table border= '1'width='400' height='300' callspacing='0'>"
for($i=0;$i<10;$i++){
	echo "<tr>";
	for($j=0;$j<10;$j++){
		$random= mt_rand(0,255);
		$random1= mt_rand(0,255);
		$random2= mt_rand(0,255);
		echo "<td style='background-color: rgb($random,$random1,random2)'></td>";
	}
  echo "</tr>";
}
echo "</table>";
?>