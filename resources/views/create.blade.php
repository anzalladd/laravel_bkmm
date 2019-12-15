@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>Post Berita</h1>
          <form class="mt-3" method="post" action="{{ action('BeritaController@store') }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input name="title" class="form-control" name="title">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea type="password" class="form-control" id="exampleInputPassword1" rows="20" name="description">
              </textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
