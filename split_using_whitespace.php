<!-- ------------------------------- -->
<!-- Split A Word Using WhiteSpace   -->
<!-- ------------------------------- -->

<form action="index.php" method="post">
    UserName:<input type="text" name="name">
</form>

<?php
$success ="Success";
$failed = "Failed";
$username = $_POST['name'];
$split=explode(" ",$username);
print_r($split);
?>