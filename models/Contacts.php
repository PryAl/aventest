<?php


class Contacts {
    
    public static function getContactsList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Запрос к БД
        $result = $db->query('SELECT * FROM phone ORDER BY addDate DESC');
        // Получение и возврат результатов
        $contactsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $contactsList[$i]['id'] = $row['id'];
            $contactsList[$i]['contactName'] = $row['contactName'];
            $contactsList[$i]['contactNumber'] = $row['contactNumber'];
            $contactsList[$i]['description'] = $row['description'];
            $i++;
        }
        return $contactsList;
    }
    
    public static function add($name,$phonenum,$descript) {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO phone (contactName, contactNumber, description) '
                . 'VALUES (:name, :phonemun, :description)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':phonemun', $phonenum, PDO::PARAM_STR);
        $result->bindParam(':description', $descript, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function checkName($name) {
        if(strlen($name) <= 50 && strlen($name) >= 3) {
            return true;
        }
        return false;
    }
    
    public static function checkDescript($descript) {
        if(strlen($descript) <= 255 && strlen($descript) >= 10) {
            return true;
        }
        return false;
    }
    
    public static function checkPhonenum($phonenum) {
        if(strlen($phonenum) <= 50 && ctype_digit($phonenum)) {
            return true;
        }
        return false;
    }
    
    public static function checkNameExist($name) {
        $db = Db::getConnection();
        
        $sql = 'SELECT COUNT(*) FROM phone WHERE contactName = :name';
        
        $result = $db->prepare($sql);
        $result->bindParam(':name',$name,PDO::PARAM_STR);
        $result->execute();
        
        if ($result->fetchColumn()) {
            return true;
        } else {
            return false;
        }
    }
    public static function getContactById($id) {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM phone WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }
}

