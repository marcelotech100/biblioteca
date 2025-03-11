<?php

namespace Controllers;
use Controllers\BaseController;

class Employee extends BaseController
{
    public function index()
    {
        $this->view('layouts/html_header');
        $this->view('nav');
        $this->view('employee_home');
        $this->view('layouts/html_footer');
    }
}