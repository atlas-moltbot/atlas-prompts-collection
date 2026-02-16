<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$type = $_GET['type'] ?? 'prompts';
$id = $_GET['id'] ?? null;

$baseDir = __DIR__ . "/../../data/" . $type . "/";

if ($id) {
    $file = $baseDir . $id . ".json";
    if (file_exists($file)) {
        echo file_get_contents($file);
    } else {
        echo json_encode(["error" => "Item not found"]);
    }
} else {
    // List all
    $files = glob($baseDir . "*.json");
    $result = [];
    foreach ($files as $f) {
        $result[] = json_decode(file_get_contents($f), true);
    }
    echo json_encode($result);
}
?>
