<?php
$dir = '../private';
$data = '../private/passwd';
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK")
{
    if (!file_exists($dir))
    {
        mkdir($dir);
    }
    if (!file_exists($data))
    {
        file_put_contents($data, null);
    }
    $account = unserialize(file_get_contents($data));
    if ($account)
    {
        $found = 0;
        foreach ($account as $key => $val)
        {
            if ($_POST['login'] === $val['login'])
                $found = 1;
        }
    }
    if ($found)
    {
        echo "ERROR\n";
    }
    else
    {
        $tmp['login'] = $_POST['login'];
        $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
        $account[] = $tmp;
        file_put_contents($data, serialize($account));
        echo "OK\n";
    }
}
else
{
    echo "ERROR\n";
}
?>