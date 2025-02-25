<?php

namespace App\Http\Controllers;

use App\Models\AyatOfTheDay;
use App\Models\Book;
use App\Models\Department;
use App\Models\Event;
use App\Models\HadithOfTheDay;
use App\Models\News;
use App\Models\PictureGallery;
use App\Models\SayingOfTheDay;
use App\Models\Services\Service;
use App\Models\Teacher;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function settings()
    {
        $ayats = count(AyatOfTheDay::all());
        $hadits = count(HadithOfTheDay::all());
        $sayings = count(SayingOfTheDay::all());
        $picture_galary = count(PictureGallery::all());
        return view('admin/settings', compact('ayats', 'hadits', 'sayings', 'picture_galary'));
    }
    public function showBooksPage()
    {
        $books = Book::all();
        // dd($books);
        return view('frontend.books', ['books' => $books]);
    }
    
    public function showTeachersPage()
    {
        $teachers = Teacher::all();
        // dd($teachers);
        return view('frontend.teachers', ['teachers' => $teachers]);
    }

    public function showServicesPage()
    {
        $services = Service::all();
        // dd($services);
        return view('frontend.services', ['services' => $services]);
    }
}
