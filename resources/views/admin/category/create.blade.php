@extends('layouts.backend.app')

@section('title', 'Create Category')

@push('css')

@endpush

@section('content')
<div class="container-fluid">
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add New Category
                                
                            </h2>
                        </div>
                        <div class="body">
                           <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="Name" class="form-control" name="name">
                                        <label class="form-label">Category name</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                <input type="file" name="image">
                                </div>
   
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                                <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.category.index') }}">BACK</a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
@endsection

@push('script')

@endpush