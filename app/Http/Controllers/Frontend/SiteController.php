<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Archive;
use App\Models\Slider;
use App\Models\Notice;
use App\Models\GlancePage;
use App\Models\Admission;
use App\Models\EventPage;
use App\Models\Academic;
use App\Models\Administration;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Visitor;


class SiteController extends Controller
{
    //index
    public function index()
    {
        $visitor = new Visitor;
        $visitor->date = date('d-m-Y');
        $visitor->month = date('M');
        $visitor->year = date('Y');
        $visitor->save();
        $posts = Post::orderBy('id', 'desc')->paginate(7);
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('Frontend.home.welcome', compact('posts', 'sliders'));
    }
    //view_post
    public function  view_post($id)
    {
        $post = Post::find($id);
        $next = Post::inRandomOrder()->first();
        $prev = Post::inRandomOrder()->first();
        return view('Frontend.post.view_post', compact('post', 'next', 'prev'));
    }
    //archive
    public function archive($archive)
    {
        $archives = Post::where('archive', $archive)->get();
        return view('Frontend.post.archive', compact('archives'));
    }
    //notice
    public function notice()
    {
        $notices = Notice::orderBy('id', 'desc')->get();
        return view('Frontend.notice.view_notice', compact('notices'));
    }
    //view_notice
    public function view_notice($id)
    {
        $notice = Notice::find($id);
        $next = Notice::inRandomOrder()->first();
        $prev = Notice::inRandomOrder()->first();
        return view('Frontend.notice.single_view_notice', compact('notice', 'next', 'prev'));
    }
    //glance-page
    public function glance_page($id)
    {
        $page = GlancePage::find($id);
        return view('Frontend.glance.view_glance_page', compact('page'));
    }
    //admission_page
    public function admission_page($id)
    {
        $page = Admission::find($id);
        return view('Frontend.admission.view_admission_page', compact('page'));
    }
    //event_page
    public function event_page($id)
    {
        $page = EventPage::find($id);
        return view('Frontend.event.view_event_page', compact('page'));
    }
    //academic_page
    public function academic_page($id)
    {
        $page = Academic::find($id);
        return view('Frontend.academic.view_academic_page', compact('page'));
    }
    //administration_page
    public function administration_page($id)
    {
        $page = Administration::find($id);
        return view('Frontend.administration.view_administration_page', compact('page'));
    }
    //calendar
    public function calendar()
    {
        return view('Frontend.calendar.calendar');
    }
    //library
    public function library()
    {
        return view('Frontend.library.library');
    }
    //contact_us
    public function contact_us()
    {
        $page = Contact::find(1);
        return view('Frontend.contact.contact', compact('page'));
    }

    //gallery
    public function gallery()
    {
        $galleries = Gallery::all();
        return view('Frontend.gallery.view_gallery', compact('galleries'));
    }
    //
    public function map_direction()
    {
        return view('Frontend.glance.map');
    }
}
