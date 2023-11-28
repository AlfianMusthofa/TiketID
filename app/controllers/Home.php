<?php

class Home extends Controller
{
    function index()
    {
        $data['judul'] = 'Home';
        $data['css'] = 'index.css';
        $data['hotels'] = $this->model('home_model')->getAllData();
        $this->view('home/index', $data);
    }

    function detail($id)
    {
        $data['css'] = 'hotelPage.css';
        $data['detail'] = $this->model('home_model')->detail($id);
        $this->view('home/hotelPage', $data);
    }
}
