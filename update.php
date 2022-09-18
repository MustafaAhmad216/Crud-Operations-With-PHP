<?php
    $id = $_REQUEST['id'];

    
    $namei = $_REQUEST['name'];
    $emaili = $_REQUEST['email'];
    $passwordi = $_REQUEST['password'];
    $imagei = $_REQUEST['image'];
    

    $db = "mysql:host=localhost;dbname=company";
    $connection = new PDO ($db, 'root', 'Sasa2162001');
    $query = "SELECT * from users where id = $id";
    $sql = $connection->prepare($query);
    $result = $sql->execute();
    $user = $sql->fetch(PDO::FETCH_ASSOC);



?>

<form method="post" action="update.php">
		Name:<br>
		<input type="text" name="name" value=" <?php print_r($namei); ?> ">
		<br>
		Email:<br>
		<input type="email" name="email" value="<?php print_r($emaili); ?> ">
        <br>
		Password:<br>
		<input type="password" name="password" value=" <?php print_r($passwordi);  ?>">
		<br>
		image:<br>
		<input type="text" name="image" value="<?php print_r($imagei); ?> ">
		<br><br><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">

		<input type="submit" name="save" value="submit">
</form>	


<?php 
if(isset($_POST['save']))
{

    $id = $_REQUEST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_POST['image'];

    $db = "mysql:host=localhost;dbname=company";
    $connection = new PDO ($db, 'root', 'Sasa2162001');

    $query = "UPDATE users SET name= '$name', email= '$email', password= '$password', image= '$image' WHERE users.id = $id ";

    $sql = $connection->prepare($query);
    $result = $sql -> execute();
    $users = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<script> alert('user has been successfully updated'); 
window.location.replace("database.php");
</script>


<?php  } ?>
