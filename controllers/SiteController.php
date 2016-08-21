<?php
include_once ROOT . '/models/Contacts.php';
class SiteController {
    public function actionIndex() {
        $contacts = array();
        $contacts = Contacts::getContactsList();

        require_once (ROOT.'/views/site/index.php');
        return true;
    }
}
