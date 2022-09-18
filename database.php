<?php 
$db = "mysql:host=localhost;dbname=company";
$connection = new PDO ($db, 'root', 'Sasa2162001');
//var_dump($connection);

$query = "SELECT * FROM users";
$sql = $connection->prepare($query);
$result = $sql -> execute();
//var_dump($result);
$users = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($users);
echo '</pre>';

//var_dump($sql->errorInfo());

echo('<br> <br>'. '<b>'.'********************************************************************************************************************************************************************************************'.'<b>');
?>

<br><br><br><br><br><br><br>

<link rel="stylesheet" href="style.css">

<form action="createNew.php" method="post">
<button type=submit>Create New Record</button>
</form>
<br><br><br>
<table>
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>image</th>
            <th>created_at</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user):?>
            <tr>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['image']?></td>
                <td><?php echo $user['created_at']?></td>
                <td>
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $user['id']?>">
                        <input type="hidden" name="name" value="<?php echo $user['name']?>">
                        <input type="hidden" name="email" value="<?php echo $user['email']?>">
                        <input type="hidden" name="password" value="<?php echo $user['password']?>">
                        <input type="hidden" name="image" value="<?php echo $user['image']?>">
                        <button type=submit>update</button>
                    </form>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $user['id']?>">
                        <button>delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br><br><br>



<?php echo('<br> <br>'. '<br>' .'<br>' .'********************************************************************************************************************************************************************************************'.'<b>'); ?>




<style>

button{
  width: 150px;
  padding: 8px 0;
  text-align: center;
  margin: 20px 0px 8px 8px;
  border-radius: 7px;
  font-weight: bold;
  border: 3px;
  background: #d7164d;
  cursor: pointer;
  align-items: center;
  display: block;
  justify-content: center;
 /* margin: auto; */
  align-content:center;
  color: white;
  text-decoration-color: black;
  position: relative;
  overflow: hidden;
}

table{
  border-collapse: collapse;
  text-align: center;
  width: 80%;
}
table,tr,td,th{
  border: 2px solid #d7164d;
  padding: 7px;
}
th{
  background: #d7164d;
  color: white;
}
</style>

