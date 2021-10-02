<?php
/*
Guntur Pongky Prayusti
193040090
https://github.com/GunturPongkyP/prakweb2021_phpmvc_193040090
pertemuan 4 - 1 Oktober 2021
Mempelajari mengenaii MVC dengan PHP
*/
?>
<?php
class App{

    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if( isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
?>