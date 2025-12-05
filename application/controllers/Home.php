<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = '';
        $this->load->view ('home');
	}

	// login
	public function login()
	{
		$data['title'] = '';
        $this->load->view ('login');
	}

	// sign up
	public function signUp()
	{
		$data['title'] = '';
        $this->load->view ('signUp');
	}

	// about
	public function about()
	{
		$data['title'] = '';
        $this->load->view ('about');
	}
	// services
	public function services()
	{
		$data['title'] = '';
        $this->load->view ('services');
	}
	// servicesDetails
	public function servicesDetails()
	{
		$data['title'] = '';
        $this->load->view ('servicesDetails');
	}
	// myBooking
	public function myBooking()
	{
		$data['title'] = '';
        $this->load->view ('myBooking');
	}
	// checkout
	public function checkout()
	{
		$data['title'] = '';
        $this->load->view ('checkout');
	}
	// cart
	public function cart()
	{
		$data['title'] = '';
        $this->load->view ('cart');
	}
	// dashboard
	public function dashboard()
	{
		$data['title'] = '';
        $this->load->view ('dashboard');
	}
	// notifications
	public function notifications()
	{
		$data['title'] = '';
        $this->load->view ('notifications');
	}
	// bookingHistory
	public function bookingHistory()
	{
		$data['title'] = '';
        $this->load->view ('bookingHistory');
	}
	// transactionsHistory
	public function transactionsHistory()
	{
		$data['title'] = '';
        $this->load->view ('transactionsHistory');
	}
	// settings
	public function settings()
	{
		$data['title'] = '';
        $this->load->view ('settings');
	}
	// myProfileInfo
	public function myProfileInfo()
	{
		$data['title'] = '';
        $this->load->view ('myProfileInfo');
	}
		// logout
	public function logout()
	{
		$data['title'] = '';
        $this->load->view ('logout');
	}
}
