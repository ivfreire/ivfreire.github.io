<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $data = file_get_contents("http://ip-api.com/json/".$ip);
    $data = json_decode($data, true);

    $line = $ip;
    if ($data["status"] == "success") $line .= "\t".$data['country']."\t".$data['city'];

    $handle = fopen("data/log.txt", "a");
	fwrite($handle, $line."\n");
	fclose($handle);
?>