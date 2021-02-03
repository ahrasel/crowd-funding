<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Helpers\FileUploader;
use App\Models\CampaignCategory;
use Illuminate\Http\FileHelpers;
use App\Http\Controllers\Controller;

class CampaignCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CampaignCategory::OrderBy('created_at', 'desc')->get();
        return view('admin.campaign-categories/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.campaign-categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:campaign_categories',
        ]);

        $campaignCategory = new CampaignCategory();
        $campaignCategory->name = $request->name;
        $campaignCategory->description = $request->description;
        $campaignCategory->image = FileUploader::uploadSingleFile($request->file('image'));
        $campaignCategory->save();

        return redirect()->route('campaign-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CampaignCategory $campaignCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CampaignCategory $campaignCategory)
    {
        return view('admin.campaign-categories/edit', compact('campaignCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampaignCategory $campaignCategory)
    {
        if ($request->status === "CHANGE_STATUS") {
            $campaignCategory->is_active = !$campaignCategory->is_active;
            $campaignCategory->update();
        } else {
            $campaignCategory->name = $request->name;
            $campaignCategory->description = $request->description;
            // TODO:: handle image upload.
            $campaignCategory->update();
        }
        return redirect()->route('campaign-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampaignCategory $campaignCategory)
    {
        $campaignCategory->delete();
        return redirect()->route('campaign-categories.index');
    }
}
