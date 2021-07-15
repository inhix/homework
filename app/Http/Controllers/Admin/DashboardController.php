<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(Request $request)
    {

        if (Gate::allows('view-admin-dashboard', Auth::user()->getUserResources())) {
            return view('admin.dashboard');

        }

        abort(403, '123');

    }
}
