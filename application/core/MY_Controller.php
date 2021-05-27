<?php
/**
 * Class MY_Controller

 * @property Orientation_model om

 */
class MY_Controller extends CI_Controller
{
	/**
	 *
	 * @var array
	 *
	 */
	protected $data;
	function __construct()
	{
		parent::__construct();
		$this->load->model('Orientation_model', 'om');
	}

	protected function render($titre,$view=null){

		$this->load->view('template/header', array('titre'=>$titre, 'data'=>$this->data));
		$this->load->view($this->zone.'/'.$view, $this->data);
		$this->load->view('template/footer',array());
	}
}
