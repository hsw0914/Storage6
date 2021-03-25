<?php include('../layout/header.php');

?>
<form action="/controller/join.php" method="post">
    <h2>Join</h2>
    <p>email : <input type="email" name="email" id="email" required></p>
    <p>pw : <input type="password" name="password" id="password" required></p>
    <p>pw chk : <input type="password" name="password_confirm" id="password_confirm" required></p>
    <p>name : <input type="text" name="name" id="name"></p>
    <input type="submit" value="ok">
</form>
<?php include('../layout/footer.php'); ?>