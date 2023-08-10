<?php
 include 'config.php';
$email = $_POST["email"];
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256", $token);

$expiry= date("y-m-d H:i:s", time() + 60 * 30);

$Query = "UPDATE `register` SET reset_token = ?, reset_token_expires_at = ? WHERE db_email = ?";

$stmt = $conn->prepare($Query);

$stmt->bind_param("sss", $token_hash, $expiry,$email);

$stmt->execute();

