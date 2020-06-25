<?php
class controller{
    public $nivel;
    protected function view($view){
        return require_once('app/views/'.$view.'.phtml');
    }
    public function cabecalho($nivel,$info){
        return require_once('views/cabecalho.phtml');
    }
    public function rodape(){
        return require_once('views/rodape.phtml');
    }
    public function sessao(){
        if(!isset($_SESSION['is_successful_login']) || $_SESSION['is_successful_login'] == false){ 
            $nivel=1;
            $_SESSION['nivel_analista']=$nivel;

        }
        return;
    }
    public function manutencao(){
        return require_once('app/views/manutencao.phtml');
    }
    public function status($info){
        if ($info==1){$ret="<img src=\"/img/com.gif\" >";}
        if ($info==0){$ret="<img src=\"/img/sem.gif\" >";}
        return $ret;        
    }
}
