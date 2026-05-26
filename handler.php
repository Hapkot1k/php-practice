<?php

header('Content-Type: application/json; charset=utf-8');

if (isset($_GET['text'])) {
    $inputText = $_GET['text'];
    
    $response = [
        'text' => $inputText,
        'length' => strlen($inputText)
    ];
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
} else {
    http_response_code(400);
    echo json_encode([
        'error' => 'Параметр "text" не передан',
        'text' => null,
        'length' => null
    ], JSON_UNESCAPED_UNICODE);
}
?>
