<?php
/**
 * Created by PhpStorm.
 * User: Pilipenko Andrey
 * Nickname: VikingBO
 * Github: https://github.com/VikingBO
 * Gitlab: https://gitlab.com/VikingBO
 * BitBucket: https://bitbucket.org/VikingBO/
 * Email: pilipenkoav@rambler.ru
 * Email: reaver-dron@yandex.ru
 * Email: pilipenkoavspb@gmail.com
 * Date: 26.12.2018
 */

class Admin_Controller
{
    private $model;

    public function __construct()
    {
        require_once (PATH . '/application/model/Admin_Model.php');
        $this->model = new Admin_Model();
    }

    public function checkAuth()
    {
        if (empty($_SESSION['auth_token'])) {
            $this->model->getAuth();
        }


    }

    public function getContent(int $itemId = 0)
    {
        $view = (!empty($itemId)) ? $this->model->getSetRecordForm($itemId) : $this->model->getRecordsList() ;

        echo $view;
    }

    public function setRecord()
    {


        return;
    }
}