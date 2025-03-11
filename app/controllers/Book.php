<?php

namespace Controllers;
use Controllers\BaseController;

class Book extends BaseController
{
    public function book_register()
    {
        $this->view('layouts/html_header');
        $this->view('nav');
        $this->view('book_register_frm');
        $this->view('layouts/html_footer');
    }
}