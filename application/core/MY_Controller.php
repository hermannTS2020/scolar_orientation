<?php
/**
 * Class MY_Controller

 * @property Orientation_model om
 * @property Settings_model sm
 * @property Users_model us

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
		$this->load->model('Settings_model', 'sm');
		$this->load->model('Users_model', 'us');
	}

	protected function render($titre,$view=null,$type=null, $leftMenu=true){
		if($type ==null){
			$this->load->view('template/header', array('titre'=>$titre, 'data'=>$this->data));
			$this->load->view($this->zone.'/'.$view, $this->data);
			$this->load->view('template/footer',array());
		}else{
			$this->load->view('template_admin/header_admin', array('titre'=>$titre, 'data'=>$this->data));
			if($leftMenu){
				$this->load->view('template_admin/left-menu', $this->data);
			}
			$this->load->view($this->zone.'/'.$view, $this->data);
			$this->load->view('template_admin/footer_admin',array());
		}

	}
}
