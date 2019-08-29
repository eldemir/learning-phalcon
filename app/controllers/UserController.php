<?php

class UserController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {
        $this->view->setVars(['single' => User::findFirstById(1), 'all' => User::find()]);
    }

    public function createAction()
    {
        // git test
        $user = new User();
        $user->email = "emre.eldemir@gmail.com";
        $user->password = "123";
        $user->created_at = date("Y-m-d H:i:s");
        $result = $user->save();
        if (!$result) {
            print_r($user->getMessages());
        }
    }

    public function updateAction()
    {
        $user = User::findFirstById(1);
        if (!$user) {
            echo "users does not exits";
            die();
        }
        $user->email = "emre@eldemir2.net";
        $user->updated_at = date("Y-m-d H:i:s");

        $result = $user->update();
        if (!$result) {
            print_r($user->getMessages());
        }
    }

    public function deleteAction()
    {
        $user = User::findFirstById(1);
        if (!$user) {
            echo "user does not exist";
            die;
        }
        $result = $user->delete();
        if (!$result) {
            print_r($user->getMessages());
        }
    }
}
