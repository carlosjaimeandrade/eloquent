<?php

namespace Src\help;

class Loader
{

    public function msgFlash($msg){
        $_SESSION['msg'] = $msg;
    }

    public function get_id($param)
    {
        $url_id = $_GET['url'];
        $url_id = explode("/", $url_id);
        $num = 1 + $param;
        if (isset($url_id[$num])) {
            $url_id = $url_id[$num];
            return $url_id;
        }else{
            return null;
        }
    }

    public function loadModel($modelName)
    {
        require_once(MODEL_PATH . "/{$modelName}.php");
    }

    public function loadView($viewName, $params = array())
    {

        if (count($params) > 0) {
            foreach ($params as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        require_once(VIEW_PATH . "/{$viewName}.php");
    }

    public function loadTemplateView($viewName, $params = array())
    {
        if (count($params) > 0) {
            foreach ($params as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        require_once(TEMPLATE_PATH . "/header.php");
        require_once(VIEW_PATH . "/{$viewName}.php");
        require_once(TEMPLATE_PATH . "/footer.php");
    }

 
}
