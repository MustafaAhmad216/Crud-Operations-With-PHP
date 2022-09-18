<?php 

//1-
$array = array("PHP", "Open Source", "ITI", "Day2", "Arrays");

//2-
echo ("First Method to Print an array: ");
foreach ($array as $arr) {
  echo $arr .", ";
}

echo "<br><br>";

echo"Second Method to Print an array: ";
for($i=0;$i< count($array); $i++ ){
    echo $array[$i]." ";
   }

echo "<br><br>";

//3-
$Info=["Name"=>"Mustafa Ahmad Saied","Email"=>"mustafa195153@fci.bu.edu.eg","Age"=>21,"Collage"=>"Computer and artificial Intelligence, Banha university"];

//4-
echo "<table>";
foreach($Info as $key=>$value) {
    echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<br><br>";


//5-
echo ("<b>-First way is to Sort Array descending Order According to value :</b> <br>");
arsort($Info);
foreach ($Info as $key=>$value){
    echo $key.' :     '. $value."<br>";
}


echo "<br><br>";


echo"<b>-Second way is to Sort Array Ascending Order According to value :</b> <br>";
asort($Info);
foreach ($Info as $key=>$value){
    echo $key." : ". $value."<br>";
}

echo "<br><br>";

//6-

echo('The array_keys() returns an array containing <b>ONLY THE KEYS: </b> <br>');
print_r(array_keys($Info));

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
echo "Done!";

//7- DONE

?>

<style>

table{
    border-collapse: collapse;
}
td{
border-radius: 1px;
border: solid black;
}
</style>


