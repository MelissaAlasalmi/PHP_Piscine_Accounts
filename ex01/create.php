<?PHP
if ($_POST["submit"] === "OK" && $_POST["login"] && $_POST["passwd"])
{
    $dir = "../private";
    $file = "../private/passwd";
    if (file_exists($dir) === FALSE)
        mkdir($dir);
    $login = $_POST["login"];
    $passwd = hash("whirlpool", $_POST["passwd"]);
    $filestr = file_get_contents($file);
    $array = unserialize($filestr);
    foreach ($array as $key => $val)
    {
        if ($val["login"] === $login)
            exit("ERROR\n");
    }
    $data["login"] = $login;
    $data["passwd"] = $passwd;
    $array[] = $data;
    $serialized_data = serialize($array);
    file_put_contents($file, $serialized_data);
    echo "OK\n";
}
else
    exit("ERROR\n");
?>