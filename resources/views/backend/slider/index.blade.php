@extends('backend.layouts.app')

@section('page_title', 'Sliders')

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
	    Sliders
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
	    <a href="{{ route('slider.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Slider</a>
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
          @foreach ($sliders as $slider)
          <tr>
            <td>{{ $no }}</td>
            <td>{{ $slider->title }}</td>
            <td>
            	<a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i> Edit</a>
            	<a href="#" onclick="myDelete({{ $slider->id }});" type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
            	<form id="formDelete{{ $slider->id }}" action="{{ route('slider.destroy', $slider->id) }}" method="post">
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
        {{ $sliders->links() }}
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