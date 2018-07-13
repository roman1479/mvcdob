<?php
class Controller{
    public $model;
    public $view;
    function __construct(){
        $this->view = new View();
    }
    function action_index(){}
    function action_send(){}
    function action_ajax(){}
    function action_new(){}
    function action_resh(){}
    function action_otkl(){}
    function action_search(){}
}