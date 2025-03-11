<?php

namespace Controllers;

use Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        $this->view('layouts/html_header');
        $this->view('nav');
        $this->view('home');
        $this->view('layouts/html_footer');
    }

    public function login_home()
    {
        $this->view('layouts/html_header');
        $this->view('nav');
        $this->view('login_home_page');
        $this->view('layouts/html_footer');
    }
}
