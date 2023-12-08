<?php

class Cms extends Controller
{
    function index()
    {
        $data['css'] = 'cms.css';
        $data['datas'] = $this->model('cms_model')->getData();
        $this->view('cms/index', $data);
    }

    function hapus($id)
    {
        if ($this->model('cms_model')->hapus($id) > 0) {
            header('Location: ' . BASEURL . '/cms');
        }
    }
}
