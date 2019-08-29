<?php


class GpsController extends \Phalcon\Mvc\Controller
{
    public function onConstruct()
    {

        // echo "baslanfiv";
        // $this->view->title = "GPS | Page";
        $this->view->title = "GPS | Page";
    }

   
    public function indexAction()
    {
    }



    public function denemeAction()
    {
        $request = new Phalcon\Http\Request();
        $this->view->disable();
        
        if ($request->isPost() == true) {
            if ($request->isAjax() == true) {
                // echo 'Request was made using POST and AJAX';
                $response = new \Phalcon\Http\Response();
                $response->setContent(json_encode(
                    array('emre' => array('bilgi' => 'eldemir'))
                    ))->send();
                exit;
            }
        }

        /*


        $data = "Ja se zovem Nedim Omerbegovic";
        echo json_encode($data);
        */
       // echo "emre";
    }

    public function afterExecuteRoute()
    {
        if (!$this->dispatcher->isFinished()) {
            return;
        }
        $this->buildAsset();
    }

    private function buildAsset()
    {
        // $headerCollection = $this->assets->collection('headerCSS')->setLocal(true)->addCSS('css/bootstrap.min.css');
        //$footerCollection = $this->assets->collection('jsFooter');
        // $footerCollection->setSourcePath(BASE_PATH);
        // $footerCollection->addJs('js/jquery-3.4.1.min.js')->addJs('js/bootstrap.min.js');
        $footerCollection = $this->assets->collection('footer');
        $footerCollection->setLocal(true)->addJs('js/custom/gps.js');
        // $footerExCollection = $this->assets->collection('jsExFooter');
        // $footerCollection->setSourcePath(BASE_PATH);
       // $footerExCollection->addJs('js/gps.js');
    }
}
