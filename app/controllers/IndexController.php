<?php

class IndexController extends ControllerBase
{
    public function onConstruct()
    {
        
    }
    public function indexAction()
    {
        $this->view->title = "Ana Sayfa | Page";
        /*
        try {
            $this->assets->addCss("css/bootstrap.min.css");
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }*/

    }

    public function show404Action()
    {
        $this->view->title = "404 | Page";
        $this->response->setStatusCode(404, 'Not Found');
        $this->view->pick('error/404');
        //   $router->notFound(array(
    }

    public function show503Action()
    {
        //$this->response->setStatusCode(503, 'Not Found');
        //$this->view->pick('error/503');
        // return $this->response->redirect("error/503");
    }
}
