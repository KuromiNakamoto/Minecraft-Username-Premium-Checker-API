<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json; charset=utf-8');

if (isset($_GET['username']) && !empty($_GET['username'])) {
    $username = trim(htmlspecialchars(addslashes($_GET['username'])));
    
    $ch = curl_init();
    
    curl_setopt_array($ch, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => "https://api.mojang.com/users/profiles/minecraft/".$username,
        CURLOPT_SSL_VERIFYPEER => false
    ));
    
    $response = curl_exec($ch);
    
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    $result = json_decode($response, true);
    
    curl_close($ch);
    
    if ($http_code == 204) {
        echo json_encode(array("message" => "This username is not premium !", "status" => 404), JSON_PRETTY_PRINT);
    } else if ($http_code == 200) {
        echo json_encode(array("username" => $result['name'],"message" => "This username is premium !", "status" => 200, "uuid" => $result['id']), JSON_PRETTY_PRINT);
    }
} else {
    echo json_encode(array("message" => "MISSING_INFORMATION", "status" => 0), JSON_PRETTY_PRINT);
}
