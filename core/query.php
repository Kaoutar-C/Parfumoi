<?php
// core/sql.php

/*
    Helpers SQL minimaux.

    But :
    - éviter de réécrire les INSERT et UPDATE à la main ;
    - garder les valeurs protégées par prepare() / execute() ;
    - ne pas cacher complètement le SQL aux étudiants.

    Important :
    - les noms de table et de colonnes viennent du code du projet ;
    - les valeurs viennent souvent des formulaires.
*/

function db_insert(PDO $pdo, string $table, array $data): int
{
    $columns = array_keys($data);

    $column_sql = implode(', ', $columns);

    $placeholders = [];

    foreach ($columns as $column) {
        $placeholders[] = '?';
    }

    $placeholder_sql = implode(', ', $placeholders);

    $sql = 'INSERT INTO ' . $table . ' (' . $column_sql . ') VALUES (' . $placeholder_sql . ')';

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array_values($data));

    return (int) $pdo->lastInsertId();
}

function db_update(PDO $pdo, string $table, array $data, string $id_column, int|string $id): int
{
    $columns = array_keys($data);

    $sets = [];

    foreach ($columns as $column) {
        $sets[] = $column . ' = ?';
    }

    $set_sql = implode(', ', $sets);

    $sql = 'UPDATE ' . $table . ' SET ' . $set_sql . ' WHERE ' . $id_column . ' = ?';

    $values = array_values($data);
    $values[] = $id;

    $stmt = $pdo->prepare($sql);
    $stmt->execute($values);

    return $stmt->rowCount();
}