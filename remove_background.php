<?php
$apiKey = 'nkzZD7qsAsky2yUT1xWoax3h';
$inputFile = 'uploads/' . $_GET['file'];
$outputFile = 'results/' . $_GET['file'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.remove.bg/v1.0/removebg');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'image_file' => curl_file_create($inputFile),
    'size' => 'auto'
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'X-Api-Key: ' . $apiKey,
]);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    $error_msg = 'Error: ' . curl_error($ch);
    echo $error_msg;

    // Log the error for debugging
    file_put_contents('error_log.txt', $error_msg . PHP_EOL, FILE_APPEND);
} else {
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($http_status == 200) {
        if (file_put_contents($outputFile, $response)) {
            header("Location: download.php?file=" . $_GET['file']);
        } else {
            echo "Error processing image.";
        }
    } else {
        echo "API request failed with status code " . $http_status;
        
        // Log the response for debugging
        file_put_contents('error_log.txt', 'HTTP Status: ' . $http_status . ' Response: ' . $response . PHP_EOL, FILE_APPEND);
    }
}

curl_close($ch);

