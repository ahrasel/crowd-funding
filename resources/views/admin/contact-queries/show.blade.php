@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Campaign Details</h4>
                </div>
                
                <div class="card-body">
                    <p class="m-0 p-0">Title: <strong> {{ $adminCampaign->title }}</strong></p>
                    <p class="m-0 p-0">Category: <strong> {{ $adminCampaign->category->name }} </strong></p>
                    <p class="m-0 p-0">Target Amount: <strong> {{ $adminCampaign->target_amount }} </strong></p>
                    <p class="m-0 p-0">Created By:  <strong> {{ $adminCampaign->user->first_name }} {{ $adminCampaign->user->last_name }} </strong></p>
                    <p class="m-0 p-0">Mobile Number:  <strong> {{ $adminCampaign->user->phone ?? $adminCampaign->user->mobile }} </strong></p>
                    <p class="m-0 p-0">Email:  <strong> {{ $adminCampaign->user->email }} </strong></p>
                    <hr>
                    <h4 class="mt-4">Details</h4>
                    <hr>
                    <p>{{ $adminCampaign->description }}</p>
                </div>

                <div class="card-footer text-right d-flex">
                    <form action="{{ route('admin-campaigns.update', ['admin_campaign' => $adminCampaign->id]) }}" method="post" class='mr-2'>
                        @csrf
                        @method('PATCH')
                        <button type="submit" name="IS_DECLINED_BUTTON" value="DECLINED_VALUE" class="btn btn-danger">Decline</button>
                    </form>
                    <form action="{{ route('admin-campaigns.update', ['admin_campaign'=> $adminCampaign->id]) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" name="IS_APPROVED_BUTTON" value="APPROVE_VALUE" class="btn btn-primary">Approved</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
