<form action="index.php" method="post"> <!--   Change index.php to your file name -->
    UserName:<input type="text" name="name">
</form>

<?php
$username = $_POST['name'];
echo "{$username}";
?>
