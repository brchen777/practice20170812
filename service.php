<?php

$funName = $_POST['funName'];
global $cnt;

if (function_exists($funName)) {
    $funName();
}

// ajax function
function getClickCnt() {

    $cnt = ($_POST['cnt']) ?: 0;
    echo json_encode(array('cnt' => $cnt+1));
}