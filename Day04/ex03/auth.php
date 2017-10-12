<?php
    function auth($login, $passwd)
    {
        $account = unserialize(file_get_contents("../private/passwd"));
        $password = hash(whirlpool, $passwd);
        foreach ($account as &$user)
        {
            if ($user["login"] == $login && $user["passwd"] == $password)
                return TRUE;

        }
        return FALSE;
    }
?>
