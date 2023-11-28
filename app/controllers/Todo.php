<?php

class Todo extends Controller
{
    function index()
    {
        $data['css'] = 'todo.css';
        $data['title'] = 'ToDo di TicketID';
        $this->view('templates/header', $data);
        $this->view('todo/index', $data);
        $this->view('templates/footer', $data);
    }
}
