<?PHP
include "auth.php";
session_start();

if ($_POST["login"] && $_POST["passwd"])
{
    $login = $_POST["login"];
    $passwd = hash("whirlpool", $_POST["passwd"]);
    $_SESSION["login"] = $login;
    $_SESSION["passwd"] = $passwd;
    if (auth($login, $passwd === TRUE))
    {
        $_SESSION["loggued_on_user"] = $login;
        exit("OK\n");
    }
    else
    {
        $_SESSION["loggued_on_user"] = "";
        exit("ERROR\n");
    }
}
?>