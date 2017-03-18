<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('email');
		$this->load->helper(array('url'));
		$this->load->helper('string');
		$this->load->model('App_model');
	}
	
	public function index()
	{
		$this->load->view('app/index');
	}
	
	public function feedback($lang)
	{
		$branchCode = $this->config->item('branchCode');
		$data['location'] = $this->App_model->location($branchCode);
		$data['language'] = $lang;
		$this->load->view('app/feedback_page',$data);
	}	
	public function datasubmit()
	{

		if($this->input->post('fofs')==''){$q1='none';}else{$q1=$this->input->post('fofs');}
		if($this->input->post('qofp')==''){$q2='none';}else{$q2=$this->input->post('qofp');}
		if($this->input->post('vform')==''){$q3='none';}else{$q3=$this->input->post('vform');}
		if($this->input->post('gcofpwer')==''){$q4='none';}else{$q4=$this->input->post('gcofpwer');}
		if($this->input->post('sofsisg')==''){$q5='none';}else{$q5=$this->input->post('sofsisg');}
		
		$newId=$this->App_model->getNewId();
		
		$postdata = array(
					'id'									=> $newId,
					'branchCode'							=> $this->input->post('branchCode'),
					'name'									=> $this->input->post('name'),
					'email'									=> $this->input->post('email'),
					'contactNo'								=> $this->input->post('phone'),
					'friendlinessofStaff'					=> $q1,
					'qualityofProducts'						=> $q2,
					'valueforMoney'							=> $q3,
					'goodchoiceofproductswithineachrage'	=> $q4,
					'speedofService'						=> $q5,
					'message'								=> $this->input->post('msg'),
					'time'									=> date("Y-m-d H:i:s"),
					'status'								=> 'active'
								);
		
		
		$this->App_model->insert($postdata);
		$data['language'] = $this->input->post('language');
		$this->load->view('app/thank',$data);
	}	
	
	public function exit()
	{
		$this->load->view('app/exit');
	}
	
}
