<?php 
 include_once("common.php");
$emailnew=base64_decode($_GET['email']);

$fetchMessages = mysqli_query($conn,"SELECT * FROM messages WHERE m_from='$emailnew'");
while($msg = mysqli_fetch_assoc($fetchMessages)){
    $message = $msg['message'];
    echo "$message - ".$msg['m_from'];
}
?>