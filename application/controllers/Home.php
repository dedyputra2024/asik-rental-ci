<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    private function render($view, $title, $active)
    {
        $data = [
            'title' => $title,
            'active' => $active,
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('pages/' . $view, $data);
        $this->load->view('layout/footer', $data);
    }

    public function index()
    {
        $this->render('home', 'Home', 'home');
    }

    public function about()
    {
        $this->render('about', 'Tentang', 'about');
    }

    public function vehicle()
    {
        $this->render('vehicle', 'Kendaraan', 'vehicle');
    }

    public function contact()
    {
        $this->render('contact', 'Kontak', 'contact');
    }
}
