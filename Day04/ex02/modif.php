<?php
//Check data from post method
    if (!file_exists("../private") || !file_exists("../private/passwd") || $_POST["login"] === "" || $_POST["oldpw"] === "" || $_POST["newpw"] === "" || $_POST["submit"] !== "OK")
    {
    	echo "ERROR\n";
    	return ;
    }

    //Check if this login exists
    $account = unserialize(file_get_contents("../private/passwd"));
    $login = $_POST["login"];
    $oldpw = hash(whirlpool, $_POST["oldpw"]);
    $newpw = hash(whirlpool, $_POST["newpw"]);
    foreach ($account as &$user)
    {
        if ($user["login"] === $login && $user["passwd"] === $oldpw && $oldpw !== $newpw)
        {
            $user["passwd"] = $newpw;
            file_put_contents("../private/passwd", serialize($account));
            echo "OK\n";
            return ;
        }
    }
    echo "ERROR\n";
    return ;
?>