<?php

namespace App\Http\Controllers;


use App\Models\Department;
use App\Models\Event;
use App\Models\News;
use App\Models\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $departments = count(Department::all());
        $services = count(Service::all());
        $events = count(Event::all());
        $news = count(News::all());
        return view('admin/home', compact('departments', 'services', 'events', 'news'));
    }

}
