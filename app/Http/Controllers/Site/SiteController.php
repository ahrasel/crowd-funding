<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ContactQuery;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home.home');
    }

    public function aboutUs()
    {
        return view('site.about-us');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function storeContactInfo(Request $request)
    {
        // save contact query
        $contactQuery = new ContactQuery();
        $contactQuery->first_name = $request->first_name;
        $contactQuery->last_name = $request->last_name;
        $contactQuery->email = $request->email;
        $contactQuery->subject = $request->subject;
        $contactQuery->message = $request->message;
        $contactQuery->save();

        // set success message for user confirmation
        $request->session()->flash('status', 'Message Send Successfully!!');

        //return back to contact page
        return back();
    }

    public function profile()
    {
        $user = auth()->user();
        return view('site.profile', compact('user'));
    }
}
