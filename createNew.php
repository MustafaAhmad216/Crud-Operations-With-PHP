<form method="post" action="createNew.php">
		Name:<br>
		<input type="text" name="name">
		<br>
		Email:<br>
		<input type="email" name="email">
        <br>
		Password:<br>
		<input type="password" name="password">
		<br>
		image:<br>
		<input type="text" name="image">
		<br><br><br>
		<input type="submit" name="save" value="submit">
</form>	


<?php 
if(isset($_POST['save']))
{

    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $image= $_POST['image'];

    $db = "mysql:host=localhost;dbname=company";
    $connection = new PDO ($db, 'root', 'Sasa2162001');
    //var_dump($connection);


    $query = "INSERT INTO `users` (`name`, `email`, `password`, `image`) VALUES ('$name', '$email', '$password', '$image')";

    $sql = $connection->prepare($query);
    $result = $sql -> execute();
    //var_dump($result);
    $users = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<script> alert('user has been successfully inserted'); 
window.location.replace("database.php");
</script>


<?php  } ?>
