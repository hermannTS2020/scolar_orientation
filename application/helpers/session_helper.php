<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$ctrl=&get_instance();
$ctrl->load->library('session');

if(!function_exists('set_flash_data'))
{
	function set_flash_data($data)
	{

		$ctrl=&get_instance();
		$ctrl->session->set_flashdata('flash', $data);
		//$_SESSION['flash'] = $data;
	}
}

if(!function_exists('get_flash_data'))
{
	function get_flash_data()
	{
		$ctrl=&get_instance();
		//var_dump($_SESSION);die;
		// $ctrl=&get_instance();
		//if(session_data_isset('flash')) {
		return $ctrl->session->flashdata('flash');
		//unset_session_data('flash');
		//$_SESSION['flash'] = null;
		//return $val;
		//}
	}
}
if(!function_exists('session_data'))
{
	function session_data($data = '')
	{
		$session = session();
		//$ctrl=&get_instance();
		if(!$data)
		{
//            return $_SESSION;
			//return $ctrl->session->userdata();
			return $session->set();
		}
		elseif(is_string($data) OR (is_int($data) And $data>=0))
		{
//            return isset($_SESSION[$data])? $_SESSION[$data] : NULL;
			//echo "is string";
			//var_dump("cookie: ", $_COOKIE); die;
			// return $ctrl->session->userdata($data)?$ctrl->session->userdata($data):NULL;
			return $session->set($data)?$session->set($data):NULL;
		}
		elseif(is_array($data))
		{
			$result = array();
			foreach($data as $value)
			{
				//$result[$value] = $ctrl->session->userdata($data)?$ctrl->session->userdata($data):NULL;
				$result[$value] = $session->set($data)?$session->set($data):NULL;

			}
			return $result;
		}
		return NULL;
	}
}
