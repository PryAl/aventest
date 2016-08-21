<?php

class ContactsController {

    public function actionAdd() {
        // Переменные для формы
        $name = false;
        $descript = false;
        $phonenum = false;
        $result = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $name = $_POST['name'];
            $descript = $_POST['descript'];
            $phonenum = $_POST['phonenum'];

            // Флаг ошибок
            $errors = false;
            // Флаг успешной отправки
            $success = false;

            if (!Contacts::checkName($name)) {
                $errors[] = "Имя введено неверно!";
            }
            if (!Contacts::checkDescript($descript)) {
                $errors[] = "Описание введено неверно!";
            }
            if (!Contacts::checkPhonenum($phonenum)) {
                $errors[] = "Номер введен неверно!";
            }
            if (Contacts::checkNameExist($name)) {
                $errors[] = "Такой контакт уже существует!";
            }
            if ($errors == false) {
                $result = Contacts::add($name, $phonenum, $descript);
                $success[] = "Контакт успешно сохранен!";
                header("Location: ../");
            }
        }

        require_once (ROOT . '/views/contactadd/add.php');

        return true;
    }
    public function actionDelete() {
        $delId = $_POST['id'];
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'DELETE FROM phone WHERE id = :id';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $delId, PDO::PARAM_INT);
        return $result->execute();
    }

    public function actionEdit() {
        $editId=$_GET['id'];
        $contact=  Contacts::getContactById($editId);
        $nameEdit = $contact['contactName'];
        $phonenumEdit = $contact['contactNumber'];
        $descriptEdit = $contact['description'];
        $result = false;
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $name = $_POST['name'];
            $descript = $_POST['descript'];
            $phonenum = $_POST['phonenum'];

            // Флаг ошибок
            $errors = false;
            // Флаг успешной отправки
            $success = false;

            if (!Contacts::checkName($name)) {
                $errors[] = "Имя введено неверно!";
            }
            if (!Contacts::checkDescript($descript)) {
                $errors[] = "Описание введено неверно!";
            }
            if (!Contacts::checkPhonenum($phonenum)) {
                $errors[] = "Номер введен неверно!";
            }
            if (Contacts::checkNameExist($name)) {
                $errors[] = "Такой контакт уже существует!";
            }
            if ($errors == false) {
                echo 'SUCCESS';
            }
        }
        
        require_once (ROOT . '/views/contactedit/edit.php');

        return true;
    }

}
