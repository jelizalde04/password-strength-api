<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $password = $data['password'];

    if (checkPasswordStrength($password)) {
        echo json_encode(["strong" => true]);
    } else {
        echo json_encode(["strong" => false]);
    }
}

function checkPasswordStrength($password) {
    return preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!$%^&*()_+]).{8,}$/', $password);
}
?>
