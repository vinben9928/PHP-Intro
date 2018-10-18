<?php
    $data = [];

    //Three ways to add items.
    //1
    array_push($data, "Hello");
    array_push($data, "World");

    //2
    $data[] = "Next item";

    //3
    $data[1234] = "This is magic!";

    foreach($data as $key => $val) {
        echo "[" . $key . "] " . $val . "<br/>";
    }
?>