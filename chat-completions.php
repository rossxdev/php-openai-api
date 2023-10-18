<?php
$env = parse_ini_file('.env');

$data = json_encode([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'system', 'content' => 'You are a helpful assistant.'],
        ['role' => 'user', 'content' => 'your-prompt-here']
    ]
]);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $env["OPEN_AI_ENDPOINT"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $env["OPEN_AI_API_KEY"],
    'Content-Type: application/json'
));

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    $decoded_response = json_decode($response, true);
    echo $decoded_response['choices'][0]['message']['content'];
}

curl_close($ch);

?>
