<?php
function getScripture(){
    global $db;
    $query = 'SELECT * FROM scriptures';
    $statement = $db->prepare($query);
    $statement->execute();
    $scripture = $statement->fetchAll();
    $statement->closeCursor();
    return $scripture;
}
?>