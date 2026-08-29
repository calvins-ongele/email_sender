<?php

class AccountNumber extends Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function index() {
        $this->view->title = "Enter Account Number | ";

        $this->view->render("index/account-number");
    }



}