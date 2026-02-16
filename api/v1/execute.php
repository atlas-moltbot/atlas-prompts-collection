<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Simulação de API KEY para o Postman
$authorized_key = "ATLAS_HUB_SECRET_2026";
$request_key = $_SERVER['HTTP_X_API_KEY'] ?? '';

if ($request_key !== $authorized_key) {
    http_response_code(401);
    echo json_encode(["error" => "Unauthorized access. Invalid API Key."]);
    exit;
}

$id = $_GET['id'] ?? null;
$variables = json_decode(file_get_contents('php://input'), true) ?? [];

if (!$id) {
    echo json_encode(["error" => "Prompt ID is required."]);
    exit;
}

$file = __DIR__ . "/../../data/prompts/" . $id . ".json";

if (!file_exists($file)) {
    echo json_encode(["error" => "Prompt not found."]);
    exit;
}

$promptData = json_decode(file_get_contents($file), true);
$finalPrompt = $promptData['prompt'];

// Substituição dinâmica de variáveis (ex: {{subject}})
foreach ($variables as $key => $value) {
    $finalPrompt = str_replace("{{" . $key . "}}", $value, $finalPrompt);
}

echo json_encode([
    "status" => "success",
    "prompt_id" => $id,
    "final_prompt" => $finalPrompt,
    "parameters" => $promptData['parameters'],
    "executed_at" => date('Y-m-d H:i:s')
]);
?>
