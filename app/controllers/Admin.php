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

    public function employee_register()
    {
        $this->view('layouts/html_header');
        $this->view('nav');
        $this->view('employee_register_frm');
        $this->view('layouts/html_footer');
    }

    // página de login secreta para admin
    public function login_page_secure()
    {
        $this->view('layouts/html_header');
        $this->view('nav');
        $this->view('admin_login_page');
        $this->view('layouts/html_footer');
    }
}
