<?php

include('lib/Inpage.php');

$action = isset($_POST['action']) ? $_POST['action'] : '';
$text = isset($_POST['text']) ? $_POST['text'] : '';

if ($text && $action) {
    $inpage = new Inpage();

    $output = '';
    if ($action == 'unicode') {
        $output = ($inpage->inpageToUnicode($text));
    } else {
        $output = $inpage->unicodeToInpage($text);
    }

    header('Content-Type: text/html; charset=ISO-8859-15');
    echo json_encode(['text' => $output]);
}