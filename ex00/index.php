<?PHP
session_start();

if ($_GET["submit"] && $_GET["submit"] === "OK")
{
    if ($_GET["login"] && $_GET["passwd"])
	{
		$_SESSION["login"] = $_GET["login"];
		$_SESSION["password"] = $_GET["passwd"];
	}
}
?>

<html><body>
    <form action="" method="get">
        Username: <input type="text" name="login" value="<?= $_SESSION["login"]; ?>" />
        <br />
        Password: <input type="password" name="password" value="<?= $_SESSION["password"]; ?>" />
        <input type="submit" name="Submit" value="OK" />
    </form>
</body></html>