<?php

namespace Controllers;
use Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $this->view('layouts/html_header');
        $this->view('nav');
        $this->view('admin_home');
        $this->view('layouts/html_footer');
    }
}