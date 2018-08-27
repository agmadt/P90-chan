@extends('backend.layouts.app')

@section('page_title', __(isset($retrieveData->id) ? 'Edit' : 'Add').' News')

@section('css')
<style>
  input[type=file] {
      padding: 20px;
      background: #fff;
      border-radius: 4px;
      border: 1px solid #f1f1f1;
      outline: 0;
      cursor: pointer;
      line-height: 16px;
      color: #aaa;
      font-weight: 500;
      font-size: 12px;
      transition: all .3s ease-in-out;
      margin: 10px auto 0;
  }
  .menu-nav{
    margin-bottom: 10px;
  }
</style>
@stop

@section('page_header')
	<section class="content-header">
	  <h1>
	    {{__((isset($retrieveData->id) ? 'Edit' : 'Add').' News') }}
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Dashboard</li>
	  </ol>
	</section>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="menu-nav">
      <a href="{{ route('news.index') }}" class="btn btn-warning"><i class="fa fa-list"></i> Return to list</a>
    </div>
  </div>
  @if (count($errors) > 0)
  <div class="col-md-12">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-ban"></i> Alert!</h4>    
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
  </div>
  @endif
  <form class="form" role="form" action="@if(isset($retrieveData->id)){{ route('news.update' ,$retrieveData->id) }}@else{{ route('news.store') }}@endif" method="POST" enctype="multipart/form-data">

    @if(isset($retrieveData->id))
        {{ method_field("PUT") }}
    @endif
    {{ csrf_field() }}
  
    <div class="col-md-8">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="box-body" style="">
              <div class="form-group {{-- {{ $errors->has('title') ? 'has-error' : '' }} --}} ">
                <input type="text" class="form-control" name="title" placeholder="Enter Title" value="@if(isset($retrieveData->title)){{ $retrieveData->title }}@else{{ old('title') }}@endif">
                {{-- @if ($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    </span>
                @endif --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Content</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body pad">
                <textarea id="editor1" name="content" rows="10" cols="80">@if(isset($retrieveData->content)){!! $retrieveData->content !!}@else{{ old('content') }}@endif</textarea>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-md-4">
      <div class="box box-warning box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Image</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">
          <div class="form-group">
            @if(isset($retrieveData->image))
                <img src="{{ Storage::url($retrieveData->image) }}" style="width:100%" />
            @endif
            <input type="file" id="exampleInputFile" name="image">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-info">@if(isset($retrieveData->id)){{ 'UPDATE' }}@else{{ 'CREATE' }}@endif</button>
    </div>
  </form>
</div>
@stop


@section('script')
<script>
  $(function () {
    var options = {
        height: 300,
        pasteFromWord_inlineImages: false,
        // filebrowserImageBrowseUrl: '#editor1',
        // filebrowserBrowseUrl: '#editor1'
      };
    CKEDITOR.replace('editor1', options);
  });
</script>
@stop