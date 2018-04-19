<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procare extends CI_Controller {

	public function homepage()
	{
    $toView['page_content'] = date("H:i:s");
    $toView['title'] = "Procare Accounting Solutions";
   $data['contents']  = 'homepage';
     $data['page'] = 1;
     $this->load->view('template', $data);
	}


public function about()
  {
   /*Define single page content as usual*/
   $toView['page_content'] = date("H:i:s");
   $toView['title'] = "About Procare Accounting Solutions";
  $data['contents']  = 'about';
    $data['page'] = 2;
    $this->load->view('template', $data);
   }

   public function contactus()
{
 /*Define single page content as usual*/
 $toView['page_content'] = date("H:i:s");
 $toView['title'] = "contact Procare Accounting Solutions";
$data['contents']  = 'contactus';
  $data['page'] = 3;
  $this->load->view('template', $data);
 }
 public function services()
{
/*Define single page content as usual*/
$toView['page_content'] = date("H:i:s");
$toView['title'] = "services of Procare Accounting Solutions";
$data['contents']  = 'services';
$data['page'] = 4;
$this->load->view('template', $data);
}
public function gst()
{
/*Define single page content as usual*/
$toView['page_content'] = date("H:i:s");
$toView['title'] = "GST of Procare Accounting Solutions";
$data['contents']  = 'gst';
$data['page'] = 5;
$this->load->view('template', $data);
}
      }
