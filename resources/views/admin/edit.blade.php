@extends('layouts.admin')

@section('content')
	
	<form>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Title</label>
	    <input type="email" class="form-control" placeholder="Enter title">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Content</label>
	    <input type="email" class="form-control" placeholder="Enter body">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection