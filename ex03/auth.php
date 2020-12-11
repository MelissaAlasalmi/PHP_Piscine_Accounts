<?PHP
function auth($login, $passwd)
{
    $dir = "../private";
    $file = "../private/passwd";
    $filestr = file_get_contents($file);
    $array = unserialize($filestr);
    foreach ($array as $key => $val)
    {
        if ($val["login"] === $login)
        {
            if ($val["passwd"] === $passwd)
                return (TRUE);
            else
                return (FALSE);
        }
    }
} 
?>