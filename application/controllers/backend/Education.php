<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Education extends CI_Controller
{

 public function index()
 {
  $this->load->view('backend/layout/header');
  $this->load->view('backend/education/index');
  $this->load->view('backend/layout/footer');
 }
}
