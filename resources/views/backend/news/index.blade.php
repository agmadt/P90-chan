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
	    News
	    <small>List</small>
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
	    <a href="{{ route('news.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add News</a>
	  </div>
	</div>
  <div class="col-xs-12">
    <div class="box">
      <div class="box-body table-responsive">
        <table class="table table-hover">
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Action</th>
          </tr>
          @php $no = 1; @endphp
          @foreach ($news as $singleNews)
          <tr>
            <td>{{ $no }}</td>
            <td>{{ $singleNews->title }}</td>
            <td>
            	<a href="{{ route('news.show', $singleNews->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-search-plus"></i> View</a>
            	<a href="{{ route('news.edit', $singleNews->id) }}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</a>
            	<a href="#" onclick="myDelete({{$singleNews->id}});" type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
            	<form id="formDelete{{$singleNews->id}}" action="{{ route('news.destroy', $singleNews->id) }}" method="post">
        		    @csrf
        		    <input type="hidden" name="_method" value="delete">
          		</form>
            </td>
          </tr>
          @php $no++; @endphp
          @endforeach
        </table>
      </div>
      <div class="box-footer clearfix">
        {{ $news->links() }}
      </div>
    </div>
  </div>
</div>
@stop


@section('script')
<script>
	function myDelete(id) {
	    var r = confirm('Do you really want to delete?');
	    if (r == true) {
	        document.getElementById('formDelete'+id).submit();
	    }
	}
</script>
@stop