<?php

use Core\Notes;

$currentId = intval($_SESSION["user"]["id"]);
$notes = new Notes();

$note = $notes->showNote($_GET["id"]);
autorize($note["user_id"] == $currentId);

// renderiza a view
view("notes/show.view.php", [
    "heading" => "Minha Anotação",
    "note" => $note
]);
