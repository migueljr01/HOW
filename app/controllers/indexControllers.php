<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexControllers
 *
 * @author Miguel
 */
class indexControllers extends controller{
    public function inicio(){
        $this->view('inicio');
    }
    public function c(){
        $this->view('inicio2');
    }
    public function memoria(){
        $this->view('memoria');
    }
    public function quiz(){
        $this->view('quiz');
    }    
    public function quiz2(){
        $this->view('quiz2');
    }    
    public function hiscores(){
        $this->view('hiscore');
    }    
}
