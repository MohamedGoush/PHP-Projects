<form action="index.php" method="post">
    UserName:<input type="text" name="name">
</form>

<?php
$username = $_POST['name'];
echo "{$username}";
?>