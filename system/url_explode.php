<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of url_explode
 *
 * @author Miguel
 */
class url_explode {
    public function explorer() {
        $url=$this->get_url();
        if ($url === '/' or $url=='/index.php') {
            $url='index/inicio';
            $separa=explode('/', $url);
        } else{
            $url=substr($url, 1)."/";
            $separa=explode('/', $url);
        }
        return $separa;
    }
    public function get_url() {
        $url=$_SERVER['REQUEST_URI'];
        return $url;
    }
}
