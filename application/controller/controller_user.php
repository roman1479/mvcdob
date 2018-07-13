<?php
class Controller_Contact extends Controller
{

    function __construct()
    {
        $this->model = new Model_Contact();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('user_view.php', 'templateuser_view.php', $data);
    }
}



