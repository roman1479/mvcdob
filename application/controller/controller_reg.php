<?php
class Controller_Reg extends Controller
{
    function __construct()
    {
        $this->model = new Model_Reg();
        $this->view = new View();
    }
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('reg_view.php', 'templatesite_view.php', $data);
    }
    function action_send()
    {
        $data = $this->model->send_data();
        $this->view->generate('reg_view.php', 'templatesite_view.php', $data);
    }
    function action_ajax()
    {
        $data = $this->model->get_ajax();
        
    }
}

