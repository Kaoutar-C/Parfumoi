<?php

require_once __DIR__ . '/../config/data.php';

$operators = $pdo->query("SELECT id, password FROM operator")->fetchAll();

foreach ($operators as $operator) {

    if (password_get_info($operator['password'])['algo'] === 0) {

        $hash = password_hash(
            $operator['password'],
            PASSWORD_DEFAULT
        );

        $sql = "UPDATE operator
                SET password = ?
                WHERE id = ?";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $hash,
            $operator['id']
        ]);
    }
}

echo "Tous les mots de passe ont été hachés.";
