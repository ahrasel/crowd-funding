<?php

namespace App\Http\Controllers;

use App\Models\CampaignCategory;
use Illuminate\Http\Request;

class CampaignCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CampaignCategory::get();
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
        // TODO:: add validation
        $campaignCategory = new CampaignCategory();
        $campaignCategory->name = $request->name;
        $campaignCategory->description = $request->description;
        // TODO:: handle image upload
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
        return view('admin.campaign-categories/edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampaignCategory $campaignCategory)
    {
        //
    }
}
