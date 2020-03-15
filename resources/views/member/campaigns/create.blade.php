@extends('member.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Create New Campaign</div>

                <div class="card-body">
                    <form action="{{ route('campaigns.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        aria-describedby="title" placeholder="title" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="campaign_category_id">Campaign Category</label>
                                    <select class="form-control" name="campaign_category_id" id="campaign_category_id"
                                        required>

                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="target_amount">Target Amount</label>
                                    <input type="number" class="form-control" name="target_amount" id="target_amount"
                                        aria-describedby="target_amount" placeholder="target_amount" required>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="5"
                                        required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="documents">Documents</label>
                                    <input type="file" class="form-control-file" name="documents[]" id="documents"
                                        placeholder="documents" aria-describedby="docs" multiple>
                                </div>
                            </div>

                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
