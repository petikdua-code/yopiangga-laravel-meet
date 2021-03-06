
@extends('layout/main')

@section('title', 'WebDev - Create Article')

@section('page-content')

<?php $page = "create_article" ?>

@if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
@endif

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
                        <h6 class="card-title">Create Article</h6>
                        <form class="forms-sample" action="{{'/create-article'}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autocomplete="off" placeholder="Title Article" value="{{old('title')}}">
                                @error('title')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="3" type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" autocomplete="off" placeholder="Short Article Description">{{old('description')}}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="@error('content') is-invalid @enderror texteditor" name="content">{{old('content')}}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
      </div>
    </div>
</div>
    
@endsection