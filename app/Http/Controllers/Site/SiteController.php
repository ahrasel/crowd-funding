<?php

namespace App\Http\Controllers\Site;

use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\User;
use App\Models\ContactQuery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function home()
    {
        $campaigns = Campaign::where('is_authenticated', 1)->latest()->get();
        $campaignCategories = CampaignCategory::latest()->get();

        return view('site.home.home', compact('campaigns', 'campaignCategories'));
    }

    public function howItWork()
    {
        return view('site.how-it-work');
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
        return view('site.profile.profile', compact('user'));
    }

    public function updateProfile(Request $request, User $user)
    {
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->nid = $request->nid;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->address = $request->address;
        // TODO:: handle image upload
        $user->update();

        return back();
    }

    public function updatePassword(Request $request, User $user)
    {
        // TODO:: Add validation Message
        // TODO:: add confirmation message
        if (Hash::check($request->current_password, $user->password)) {
            if ($request->new_password === $request->confirm_password) {
                $user->password = Hash::make($request->new_password);
                $user->update();
            }
        }

        return back();
    }
}
