<?php

class HomerController extends BaseController
{
    
    public function index(){
        return $this->view('listashop.Admin_Home',[]);
    }

}