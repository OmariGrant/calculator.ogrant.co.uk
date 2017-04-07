<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('template/body');
		$this->load->view('footer');
	}
	public function basic()
	{
		$URI = $this->uri->segment(1); //get first part of url after main site
		
		//set the values from the form
		$val1 = $this->input->post('val1'); 
		$val2 = $this->input->post('val2');
		
		// Check if this is a results page
		if(isset($val1)){ 
		$result = true;
		} else { 
		$result = false;
		}
		
		//change depending on calculation
		if($URI === 'add'){
			$symbol = '+';
			$total = $val1 + $val2;
			$field1 = "1st Number to ".$URI.":";
			$field2 = "2nd Number to ".$URI.":";
		} 
		elseif($URI === 'subtract'){
			$symbol = '-';
			$total = $val1 - $val2;
			$field1 = "1st Number to ".$URI.":";
			$field2 = "2nd Number to ".$URI.":";
		} 
		elseif($URI === 'multiply'){
			$symbol = 'x';
			$total = $val1 * $val2;
			$field1 = "1st Number to ".$URI.":";
			$field2 = "2nd Number to ".$URI.":";
		}
		elseif($URI === 'divide'){
			$symbol = '÷';
			$field1 = "1st Number to ".$URI.":";
			$field2 = "2nd Number to ".$URI.":";
			
			//Avoid divide by zero error
			if($result===true){
			$total = $val1 / $val2;
			} else { $total = 0; }
		}
		elseif($URI === 'percent'){
			$symbol = '% of';
			$field1 = "Enter '%' Percentage here:";
			$field2 = "Number to find % of:";
			
			//Avoid divide by zero error
			if($result===true){
			$total1 = $val1 /100;
			$total = $total1 * $val2;
			} else { $total = 0; }

		}

		//set data to pass to view
		$data = array (
		'val1' => $val1,
		'val2' => $val2,
		'label1' => $field1,
		'label2' => $field2,
		'total' => $total,
		'calculation' => $URI,
		'result' => $result,
		'symbol' => $symbol);
		
		$this->load->view('header');
		$this->load->view('basic_sum', $data);
		$this->load->view('footer');
	}
}
