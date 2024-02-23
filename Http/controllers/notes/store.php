<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$erros = [];

if (! Validator::string($_POST["body"], 10, 255)) {
    $erros["body"] = "Campo obrigatório, preencha acima de 10 caracteres";
}

if (empty($erros)) {
    $db->query("INSERT INTO notes(body, user_id) VALUES (:body, :user_id)", [
        "body" => $_POST["body"],
        "user_id" => 1
    ]);

    redirect("/notes");
}

view("notes/create.view.php", [
    "heading" => "Criar Anotação",
    "erros" => $erros
]);