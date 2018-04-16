<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procare extends CI_Controller {

	public function homepage()
	{
    $toView['page_content'] = date("H:i:s");
    $toView['title'] = "";
   $data['contents']  = 'homepage';
     $data['page'] = 1;
     $this->load->view('template', $data);
	}


public function about()
  {
   /*Define single page content as usual*/
   $toView['page_content'] = date("H:i:s");
   $toView['title'] = "";
  $data['contents']  = 'about';
    $data['page'] = 2;
    $this->load->view('template', $data);
   }

   public function contactus()
{
 /*Define single page content as usual*/
 $toView['page_content'] = date("H:i:s");
 $toView['title'] = "";
$data['contents']  = 'contactus';
  $data['page'] = 3;
  $this->load->view('template', $data);
 }
 public function services()
{
/*Define single page content as usual*/
$toView['page_content'] = date("H:i:s");
$toView['title'] = "";
$data['contents']  = 'services';
$data['page'] = 4;
$this->load->view('template', $data);
}

      }
