@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary" href="{{ url('home/create') }}">Add Post</a>
            <table class="table mt-4 table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $key => $value)
                        <tr>
                            <th scope="row">{{ $value->id }}</th>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->author }}</td>
                            <td>{{ $value->description }}</td>
                        </tr>   
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
