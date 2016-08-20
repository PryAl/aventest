<?php

$userid = $_POST['id'];
$db = Db::getConnection();
// Текст запроса к БД
$sql = 'DELETE FROM phone WHERE id = :id';
// Получение и возврат результатов. Используется подготовленный запрос
$result = $db->prepare($sql);
$result->bindParam(':id', $userid, PDO::PARAM_INT);
return $result->execute();



