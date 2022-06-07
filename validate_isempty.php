<!-- ------------------------------- -->
<!-- Check Input Box is Empty or Not -->
<!-- ------------------------------- -->

<form action="index.php" method="post">
    UserName:<input type="text" name="name">
</form>

<?php
$username = $_POST['name'];
if(empty($username)){
    echo "please Enter A UserName";
}
else{
    echo "The User Name is: {$username}";
}
?>