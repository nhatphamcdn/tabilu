<?php

namespace App\Http\Controllers\Admin;

class DashboardController extends BaseController
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
     * Render dashboard view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \Auth::user()->isRoot();
        return view('dashboards.index');
    }
}
