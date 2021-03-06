@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{ route('blog.admin.categories.create') }}">Добавить категорию</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <th>#</th>
                            <th>Title</th>
                            <th>Parent</th>
                            <th>Description</th>
                            </thead>
                            <tbody>
                            @foreach($paginator as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <a href="{{ route('blog.admin.categories.edit', ['category' => $item->id]) }}"> {{ $item->title }} </a>
                                    </td>
                                    <td>{{$item->parent_id}}</td>
                                    <td>{{$item->description}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{ $paginator->links("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
