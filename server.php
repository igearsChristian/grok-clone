<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedModel = $_POST['selectedModel'] ?? '';
    $userInput = $_POST['userInput'] ?? '';

    // Echo back the received data
    // echo json_encode([
    //     'selectedModel' => $selectedModel,
    //     'userInput' => $userInput
    // ]);

    echo $selectedModel;


    $apiUrl = 'http://localhost:11434/api/chat';
    $data = [
        'model' => $selectedModel,
        'messages' => [
            [
                'role' => 'user',
                'content' => $userInput,
            ],
        ],
        'stream' => False
    ];

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    // Parse the JSON response
    $responseData = json_decode($response, true);
    
    if ($responseData && isset($responseData['message']['content'])) {
        // Convert newlines to <br> tags for HTML display
        $formattedContent = nl2br(htmlspecialchars($responseData['message']['content']));
        echo '<div class="response-content">' . $formattedContent . '</div>';
    } else {
        echo '<div class="error-message">Sorry, there was an error processing your request.</div>';
    }
}

?>
