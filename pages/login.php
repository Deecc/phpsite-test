<?php

require '../lib/config.php';

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($email) || empty($password))
{
    echo "Email e senha devem ser preenchidos para efetuar o log in.";
    exit;
}

$passwordHash = makeHash($password);
$PDO = dbConnection();

$sql = "SELECT id, username FROM users WHERE email = :email AND password = :password";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}

$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['username'];

header('Location: ../index.php');