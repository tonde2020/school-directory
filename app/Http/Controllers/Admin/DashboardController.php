<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // بناء الكونستركتور لتعريف الميدل وير auth:admin
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // دالة عرض لوحة التحكم
    public function index()
    {
        return view('admin.dashboard');
    }
}
