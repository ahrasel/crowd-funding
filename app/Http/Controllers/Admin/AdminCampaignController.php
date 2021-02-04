<?php

namespace App\Http\Controllers\Admin;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::latest()->get();
        return view('admin.campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ContactQuery $contactQuery)
    {
        return view('admin.contact-queries/show', compact('contactQuery'));
    }

    public function edit(ContactQuery $contactQuery)
    {

    }

    public function update(Request $request, ContactQuery $contactQuery)
    {
        $user = auth()->user();
        // dd($contactQuery);

        // save contact query
        $replay = new ContactQuery();
        $replay->parent_id = $contactQuery->id;
        $replay->first_name = $user->first_name;
        $replay->last_name = $user->last_name;
        $replay->email = $user->email;
        $replay->subject = $contactQuery->subject;
        $replay->message = $request->replay_message;
        $replay->save();

        //return back to contact page
        return back();
    }

    public function destroy($campaignId)
    {
        $campaign = Campaign::findOrFail($campaignId);
        $campaign->delete();
        return redirect()->route('admin-campaigns.index');
    }
}
