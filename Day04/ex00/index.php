<?PHP

session_start();

if($GET[submit] == OK)
{
    if (!($_GET["login"]))
    $_SESSION["login"] = $_GET["login"];
    if (!($_GET["passwd"]))
    $_SESSION["passwd"] = $_GET["passwd"];
}
?>

<html>
    <body><center>
        <form action="index.php" method="get">
           Username: <input type="text" name="login" value="<?php echo $_GET["login"];?>" placeholder="login ..."/>
           Password: <input type="password" name="passwd" value="<?php echo $_GET["passwd"];?>" placeholder="password"/>
                <br>
            <input type="submit" name="submit" value="OK"/>
        </form>
    </center></body>
</html>