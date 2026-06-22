<?php

require_once __DIR__ . '/../models/operator.php';
function checkin_login($pdo)
{


    if (is_post()) {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $operator = operator_find_by_email($pdo, $email);


        if ($operator && $operator['is_active'] === 1 && password_verify($password, $operator['password'])) {
            set_logged($operator);

            if ($operator['is_admin'] === 1) {
                $_SESSION['is_admin'] = true;
            }
            redirect('/home');


        }
        redirect('/checkin/login');

    }

    return render('app/views/connection.php', []);
}

function checkin_logout()
{
    session_destroy();
    redirect('/home');
}

function checkin_sign($pdo)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare(
            'INSERT INTO operator (firstname, lastname, email, password, created_at, is_active, is_admin)
             VALUES (:firstname, :lastname, :email, :password, NOW(), 1, 0)'
        );
        $stmt->execute([
            ':firstname' => $_POST['firstname'] ?? '',
            ':lastname' => $_POST['lastname'] ?? '',
            ':email' => $email,
            ':password' => $hashed_password,
        ]);
        redirect('/checkin/login');
    }

    return render('app/views/inscription.php', []);
}