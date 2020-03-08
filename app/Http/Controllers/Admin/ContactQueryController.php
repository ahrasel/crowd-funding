<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactQuery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactQueries = ContactQuery::whereNull('parent_id')->get();
        return view('admin.contact-queries/index', compact('contactQueries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactQuery  $contactQuery
     * @return \Illuminate\Http\Response
     */
    public function show(ContactQuery $contactQuery)
    {
        return view('admin.contact-queries/show', compact('contactQuery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactQuery  $contactQuery
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactQuery $contactQuery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactQuery  $contactQuery
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactQuery  $contactQuery
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactQuery $contactQuery)
    {
        $contactQuery->delete();
        return back();
    }
}
