 <?php
$input = array("Peppermint Patty", "Reese", "Butter Finger", "Baby Ruth", "Hershey Bar");
$rand_keys = array_rand($input, 2);
					  
echo $input[$rand_keys[1]] . "\n";

print "<p>Is your next piece of candy!</p>";

?>