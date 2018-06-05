@extends('backend.layouts.app')

@section('page_title', 'News')

@section('css')
<style>
	.menu-nav{
	  margin-bottom: 10px;
	}
</style>
@stop

@section('page_header')
	<section class="content-header">
	  <h1>
	    Viewing News
	    <small>Full Content</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Dashboard</li>
	  </ol>
	</section>
@stop

@section('content')
@php
@endphp
<div class="row">
  <div class="col-md-12">
    <div class="menu-nav">
      <a href="{{ route('news.index') }}" class="btn btn-warning"><i class="fa fa-list"></i> Return to list</a>
    </div>
  </div>
  <div class="col-md-12">  
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>
      </div>
      <div class="box-body">
        <p>{{ $news->title }}</p>
      </div>
    </div>
  </div>
  <div class="col-md-12">  
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Content</h3>
      </div>
      <div class="box-body">
        <p>{!! $news->content !!}</p>
      </div>
    </div>
  </div>
  <div class="col-md-12">  
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Image</h3>
      </div>
      <div class="box-body">
        <p>
          <img src="{{ Storage::url($news->image) }}" style="width: 100%;">
        </p>
      </div>
    </div>
  </div>

</div>
@stop


@section('script')
@stop