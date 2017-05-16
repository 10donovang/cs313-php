<?php
function getScriptures(){
    global $db;
    $query = 'SELECT * FROM scriptures';
    $statement = $db->prepare($query);
    $statement->execute();
    $scripture = $statement->fetchAll();
    $statement->closeCursor();
    return $scripture;
}

function getScripture($id){
    global $db;
    $query = 'SELECT * FROM scriptures WHERE scripture_id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $scripture = $statement->fetchAll();
    $statement->closeCursor();
    return $scripture;
}
?>