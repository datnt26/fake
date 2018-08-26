<?php
App::uses('AppController', 'Controller');

class VideosController extends AppController {

	public function index() {
		$data = $this->Video->find('all');
		$this->set("data" , $data);
		
	}

	public function view($id) {
		$video = $this->Video->find("first" ,  array("conditions" => array("Video.id" => $id)));
		$this->set("video" , $video);
	}
}
