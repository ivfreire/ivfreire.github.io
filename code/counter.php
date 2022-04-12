<?php
    if (isset($_GET["id"])) {
        $id = intval($_GET["id"]) % 256;

        $handle = fopen("../data/views.dat", "rb");
        fseek($handle, $id * 4);
        $data = fread($handle, 4);
        fclose($handle);

        $count = intval(unpack("L", $data)[1]);
        $count += 1;
        $data = pack("L", $count);

        $handle = fopen("../data/views.dat", "cb");
        fseek($handle, $id * 4);
        fwrite($handle, $data, 4);
        fclose($handle);

        echo $count;
    } else echo "Error! :/";

    /*
    $ip = $_SERVER['REMOTE_ADDR'];
    $data = file_get_contents("http://ip-api.com/json/".$ip);
    $data = json_decode($data, true);

    $line = $ip;
    if ($data["status"] == "success") $line .= "\t".$data['country']."\t".$data['city'];

    $handle = fopen("data/log.txt", "a");
	fwrite($handle, $line."\n");
	fclose($handle);
    */
?>