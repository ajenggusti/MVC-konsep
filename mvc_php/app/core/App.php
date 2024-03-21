<?php
class App{
    protected $controller = 'Home',
                $method = 'index',
                $params = [];
    public function __construct()
    {
        $url = $this->parseUrl();

        // controller==========================================
        if(isset($url[0])){
            if(file_exists('../app/controllers/'.$url[0].'.php')){
                $this->controller = $url[0];
                unset($url[0]);
                // var_dump($url);
            }
        }
        require_once '../app/controllers/'.$this->controller.'.php';
        // jadi class, supaya bisa manggil methodnya
        $this->controller = new $this->controller;
        // var_dump($this->controller) ;

        // method==============================================
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);                
            }
        }

        // params===============================================
        if(!empty($url)){
            $this->params = array_values($url);
            // var_dump($this->params);
        }

        // menjalankan controller, method, dan params============
        call_user_func_array([$this->controller,$this->method],$this->params);

    }
    public function parseUrl(){
        if (isset($_GET['url'])){
            $url = $_GET['url'];
            // dibawah ini perintah untuk menghilangkan slash
            $url= rtrim($url,'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}