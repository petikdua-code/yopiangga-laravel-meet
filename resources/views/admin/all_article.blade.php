
@extends('layout/main')

@section('title', 'WebDev - Article')

@section('page-content')

<?php $page = "all_article" ?>

<div class="card-columns">
  @foreach ($articles as $article)
  <div class="card">
      <img src="/assets/images/placeholder.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text">{{$article->description}}</p>
        <p class="card-text"><small class="text-muted">{{date('l, d F Y', strtotime($article->created_at))}}</small></p>
        @if ($article->author == "Yopiangga")
        <div class="card-deck">
          <a href="{{'/edit-article/'.$article->id}}" class="btn btn-warning mx-auto">Edit</a>
          <a href="#" class="btn btn-primary mx-auto">Preview Article</a>
          <a href="#" class="btn btn-danger mx-auto">Delete</a>
        </div>
        @endif
      </div>
  </div>
  @endforeach
    
</div>
    
@endsection