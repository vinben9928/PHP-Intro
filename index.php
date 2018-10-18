<?php
    $data = [123, 456, "Hej", false, true, 123.2];

    foreach($data as $key => $val) {
        echo "[" . $key . "] " . $val . "<br/>";
    }
?>