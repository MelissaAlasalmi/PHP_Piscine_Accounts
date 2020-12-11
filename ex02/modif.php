<?PHP
if ($_POST["submit"] === "OK" && $_POST["login"] && $_POST["oldpw"] && $_POST["newpw"])
{
    $dir = "../private";
    $file = "../private/passwd";
    if (file_exists($dir) === FALSE)
        mkdir($dir);
    $login = $_POST["login"];
    $old_passwd = hash("whirlpool", $_POST["oldpw"]);
    $new_passwd = hash("whirlpool", $_POST["newpw"]);
    $filestr = file_get_contents($file);
    $array = unserialize($filestr);
    $passwd_change = FALSE;
    $index = 0;
    foreach ($array as $key => $val)
    {
        if ($val["login"] === $login)
        {
            if ($val["passwd"] === $old_passwd)
            {
                $array[$index]["passwd"] = $new_passwd;
                $passwd_change = TRUE;
                $serialized_data = serialize($array);
                file_put_contents($file, $serialized_data);
                $index++;
                exit("OK\n");
            }
            else
                exit("ERROR\n");
        } 
    }
    if ($passwd_change === FALSE)
        exit("ERROR\n");
}
else
    exit("ERROR\n");
?>