<?php


class Contacts {
    public static function getContactsList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query('SELECT * FROM phone ORDER BY id ASC');
        // Получение и возврат результатов
        $contactsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $contactsList[$i]['id'] = $row['id'];
            $contactsList[$i]['contactName'] = $row['contactName'];
            $contactsList[$i]['contactNumber'] = $row['contactNumber'];
            $contactsList[$i]['discription'] = $row['discription'];
            $i++;
        }
        return $contactsList;
    }
}
