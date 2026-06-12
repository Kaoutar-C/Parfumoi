<?php

function is_logged(): bool
{
    return isset($_SESSION['user_id']);
}

function set_logged($operator){
    $_SESSION['user_id'] = $operator['id'];
    $_SESSION['user_email'] = $operator['email'];
}

function operator_find($pdo, $id)
{
    $sql = 'SELECT * FROM operator WHERE id = :id';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id,
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function operator_find_by_email(PDO $pdo, string $email): array|false
{
    $sql = '
        SELECT *
        FROM operator
        WHERE email = :email
        LIMIT 1
    ';

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'email' => $email,
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function operator_all($pdo)
{
    $sql = 'SELECT id, email FROM operator';

    $stmt = $pdo->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function operator_update_password($pdo, $id, $hashed_password)
{
    $sql = '
        UPDATE operator
        SET password = :password
        WHERE id = :id
    ';

    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
        'id' => $id,
        'password' => $hashed_password,
    ]);
}