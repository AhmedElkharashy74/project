<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['data'])) {
        $jsondata = urldecode($_GET['data']);
        echo $jsondata;
    }
}