<?php

namespace Controllers;
use Controllers\BaseController;

class Student extends BaseController
{
    public function student_register()
    {
        $this->view('layouts/html_header');
        $this->view('nav');
        $this->view('student_register_frm');
        $this->view('layouts/html_footer');
    }
}