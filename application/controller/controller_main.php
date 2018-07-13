<?php
class Controller_Main extends Controller
{
	function __construct(){
		$this->model = new Model_Main();
		$this->view = new View();
	}
	function action_index(){
		$data = $this->model->send_main();		
		$this->view->generate('main_view.php', 'templatesite_view.php', $data);
	}
	function action_new(){
		$data = $this->model->send_new();		
		$this->view->generate('main_view.php', 'templatesite_view.php', $data);
	}
	function action_resh(){
		$data = $this->model->send_resh();		
		$this->view->generate('main_view.php', 'templatesite_view.php', $data);
	}
	function action_otkl(){
		$data = $this->model->send_otkl();		
		$this->view->generate('main_view.php', 'templatesite_view.php', $data);
	}
	function action_search(){
		$data = $this->model->send_search();		
		$this->view->generate('main_view.php', 'templatesite_view.php', $data);
	}
}