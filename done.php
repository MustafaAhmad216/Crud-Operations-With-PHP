<?php

// First of all we have to check if the form is submitted via the POST
	// method.
	 
	if(isset($_POST['submit'])){

		$Info_Array = array(
			
			"firstName" => $_POST['firstName'],
			"lastName" => $_POST['lastName'],
			"UserName" => $_POST['UserName'],
            "country" => $_POST['country'],
			"gender" => $_POST['gender'],
			"Department" => $_POST['Department'],
		);

		if(filesize("messages.json") == 0){
			$first_record = array($Info_Array);
			$data_to_save = $first_record; 
		}else{

			$old_records = json_decode(file_get_contents("messages.json"));


			array_push( $old_records , $Info_Array);

			$data_to_save = $old_records;
		}

		if(!file_put_contents("messages.json", json_encode($data_to_save, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)){
			$error = "Error storing data, please try again";
		}else{
			$success =  "Your data is stored successfully";
		}
	}


    
//8-

var_dump($_REQUEST);

if ($_POST["gender"] == "male") {
    echo("Thanks Mr ". $_POST["firstName"]. ' ' .$_POST["lastName"]. ' !');
}
else{
    echo("Thanks Miss ". $_POST["firstName"]. ' ' .$_POST["lastName"]. ' !' ); 

}
echo("<br><br><b>Please, Review Your Information: </b><br><br>");


/*echo("Name:". $_POST["firstName"]. ' ' .$_POST["lastName"]. 
    "<br>Address: ". $_POST["address"].
    "<br>Your Skills: ");

    /*for($i=0; $i < 11; $i++) { 
    echo($_POST["Skill"][$i]);
    }*/
/*    echo($_POST["Skill"]);

    echo("<br>Department: " .$_POST["Department"]);*/



?>
<table>
				<tr>
					<td>
						<?php echo ("Name ") ?>
					</td>
					<td>
						<?php echo ($_POST["firstName"]. ' ' .$_POST["lastName"]) ?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo ("Address ") ?>
					</td>
					<td>
						<?php echo ($_POST["address"]) ?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo ("Your Skills ") ?>
					</td>
					<td>
						<?php echo ($_POST["Skill"]) ?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo ("Department ") ?>
					</td>
					<td>
						<?php echo ($_POST["Department"]) ?>
					</td>
				</tr>

</table>
<?php echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; ?>



<style>

table{
    border-collapse: collapse;

}
td , th{
border-radius: 12px;
border: solid black;
}
</style>

