<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class UserController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Render view management users
     * 
     * @return void
     */
    public function index() {
        return view('users.index');
    } 
}
