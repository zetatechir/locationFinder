//code by mrsploit
//Jailbreak & Root TM
//zetatech.ir
//t.me/ZetaTech_iR
<?php
$json = (file_get_contents('php://input'));
$dejson = json_decode($json, true);
$location = $dejson['data'];
shell_exec("python3 send.py ".$location);
?>
