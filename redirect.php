<?php
$email = $_POST['email'];
$pass = $_POST['password'];
//DATABASE
//DATABASE insecure connection
$cn = new mysqli("127.0.0.1","root","","edushare");
if($cn)
{
	//echo 'Database connected successfully!';
}
else
{
    phpAlert('Error happened in connecting');
}
//echo '<br><br>---------------------------';
if($cn->select_db("users"))
{
	//echo "Selected DB<br/>";
}
else
{
	echo("Couldn't select db.<br/>");
}
//echo "<br/>";
$user_get = mysqli_query($cn, "SELECT * FROM users WHERE mail='$email' AND pass='$pass' ");
$user = mysqli_fetch_array($user_get);
//TEST
//echo $user['name']; // This will echo the Username
//echo $user['ssc_cg']; // This will echo their first name (I used this for a dashboard)
$name = $user['full_name'];
$prof = $user['prof'];
$univ = $user['univ'];
$bio = $user['bio'];

$myfile = fopen("current_user.txt", "w") or die("Unable to open file current_user!");


fwrite($myfile, "$name\r\n");

fwrite($myfile, "$email\r\n");

fwrite($myfile, "$pass\r\n");

fwrite($myfile, "$prof\r\n");

fwrite($myfile, "$univ\r\n");

fwrite($myfile, "$bio\r\n");

fclose($myfile);

$cn->close();

$url = 'user_profile.php';

    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();

?>