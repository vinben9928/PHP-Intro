<?php
    $data = [];

    $data["id"] = 123;
    $data["info"] = "This is information.";

    var_dump($data);

    foreach($data as $key => $val) {
        echo "[" . $key . "] " . $val . "<br/>";
    }
?>