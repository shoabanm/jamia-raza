<?php

namespace App\Http\Controllers;

use App\Models\AyatOfTheDay;
use App\Models\Book;
use App\Models\Department;
use App\Models\Event;
use App\Models\Founder;
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

    public function home()
    {
        // grab the latest approved items
        $latestHadith   = HadithOfTheDay::whereApproved(1)->latest('display_date')->first();
        $latestSaying   = SayingOfTheDay::whereApproved(1)->latest('display_date')->first();
        $departments    = Department::take(4)->get();
        $events         = Event::take(5)->get();
        $services       = Service::take(4)->get();
        $news           = News::take(3)->get();
        $founders       = Founder::all();
        $picture_gallery= PictureGallery::take(4)->get();
        // dd($picture_gallery);
        // pass them to the view
        return view('welcome', compact(
            'latestHadith',
            'latestSaying',
            'departments',
            'events',
            'services',
            'news',
            'founders',
            'picture_gallery'
            
        ));
    }

    public function showBooksPage()
    {
        $books = Book::all();
        
        return view('frontend.books', ['books' => $books]);
    }
    
    public function showTeachersPage()
    {
        $teachers = Teacher::all();

        return view('frontend.teachers', ['teachers' => $teachers]);
    }

    public function showServicesPage()
    {
        $services = Service::all();

        // dd($services);
        return view('frontend.services', ['services' => $services]);
    }

    public function showSingleServicesPage($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.single_service', compact('service'));
    }

    public function showSingleAyatPage($id)
    {
        $ayat = AyatOfTheDay::findOrFail($id);
        return view('frontend.single_ayat', compact('ayat'));
    }

    public function showSingleHadithPage($id)
    {
        $hadith = HadithOfTheDay::findOrFail($id);
        return view('frontend.single_hadith', compact('hadith'));
    }

    public function showSingleSayingPage($id)
    {
        $saying = SayingOfTheDay::findOrFail($id);
        return view('frontend.single_saying', compact('saying'));
    }

    public function showSingleDepartmentPage($id)
    {
        $department = Department::findOrFail($id);
        return view('frontend.single_department', compact('department'));
    }

    public function showSinglePictureGalleryPage($id)
    {
        $picture_galary = PictureGallery::findOrFail($id);
        return view('frontend.single_picture_galary', compact('picture_galary'));
    }

    public function showSingleEventPage($id)
    {
        $event = Event::findOrFail($id);
        return view('frontend.single_event', compact('event'));
    }

    public function showSingleNewsPage($id)
    {
        $news = News::findOrFail($id);
        return view('frontend.single_news', compact('news'));
    }

    public function showSingleTeacherPage($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('frontend.single_teacher', compact('teacher'));
    }
    


}
