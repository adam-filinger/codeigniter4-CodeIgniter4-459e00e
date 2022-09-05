<?php

namespace App\Controllers;

use Config\UserAgents;

class Users extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        
    }

    public function user($page = 'center_div'){

        if(!is_file(APPPATH . 'Views/' . $page . '.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view($page)
            . view('templates/footer');

    }
}
