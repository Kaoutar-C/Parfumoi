<?php

function checkin_login($pdo)
{
    if (is_post()) {
        $email    = $_POST['email'] ?? '';
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

    return render(__DIR__ . '/../views/connection.php', []);
}

function checkin_logout()
{
    session_destroy();
    redirect('/home');
}

function checkin_sign($pdo)
{
    if (is_post()) {
        operator_create($pdo, $_POST);

        $operator = operator_find_by_email($pdo, $_POST['email'] ?? '');
        set_logged($operator);
        redirect('/home');
    }

    return render(__DIR__ . '/../views/inscription.php', []);
}