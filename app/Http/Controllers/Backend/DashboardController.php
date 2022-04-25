<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{
    /**
     * index method
     */

    public function index()
    {
        return view('backend.dashboard.index');
    }
}
