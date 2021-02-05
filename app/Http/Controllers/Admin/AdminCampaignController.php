<?php

namespace App\Http\Controllers\Admin;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::where('is_authenticated', 0)->latest()->get();
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

    public function show(Campaign $adminCampaign)
    {
        return view('admin.contact-queries/show', compact('adminCampaign'));
    }

    public function edit(Campaign $adminCampaign)
    {
    }

    public function update(Request $request, Campaign $adminCampaign)
    {
        if ($request->IS_DECLINED_BUTTON) {
            $adminCampaign->delete();
        }
        if ($request->IS_APPROVED_BUTTON) {
            $adminCampaign->is_authenticated = 1;
            $adminCampaign->update();
        }
        return redirect()->route('admin-campaigns.index');
    }

    public function destroy(Campaign $adminCampaign)
    {
        $adminCampaign->delete();
        return back();
    }
}
