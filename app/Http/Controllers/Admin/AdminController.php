<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminController extends BaseController
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
     * Render admin view.
     *
     * @return void
     */
    public function index()
    {
        return view('admins.index');
    }
}
