<!-- ------------------------------- -->
<!-- Check Input Box is Empty or Not -->
<!-- ------------------------------- -->

<form action="index.php" method="post">
    UserName:<input type="text" name="name">
</form>

<?php
$success ="Success";
$failed = "Failed";
$username = $_POST['name'];
$tresult=empty($username)? "Please Enter a name" : "UserName is {$username}";
echo $tresult;
?>