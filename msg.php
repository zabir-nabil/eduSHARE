<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
<?php

$reciver = "Server";

//$msg = $_GET['msg'];


//echo "Your message has been sent.";

phpAlert("Message is sent to server.");


?>