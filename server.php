<?php 
$stringJsonValue = file_get_contents("dischi.json");
// var_dump($stringJsonValue);
$dischi_array = json_decode($stringJsonValue, true);
// var_dump($dischi_array);

// preparazione risposta
$response = [
    "results" => $dischi_array
];
header('Content-Type: application/json');
echo json_encode($response);
?>