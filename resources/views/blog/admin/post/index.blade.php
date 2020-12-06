@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{ route('blog.admin.posts.create') }}">Добавить пост</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <th>#</th>
                            <th>Автор</th>
                            <th>Категория</th>
                            <th>Заголовок</th>
                            <th>Дата создания</th>
                            <th>Действия</th>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                @php
                                    /** var /App/Models/BlogPost $post */
                                @endphp
                                <tr @if(!$post->is_published)  style="background-color: #ccc;" @endif>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->category->title}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at ? \Carbon\Carbon::parse($post->creared_at)->format('d.M H:i') : ''}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('blog.admin.posts.edit', [$post->id])}}">Редактировать</a>
                                        <a class="btn btn-danger btn-sm" href="{{route('blog.admin.posts.destroy', [$post->id])}}">Удалить</a>
                                    </td>
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
                        {{ $posts->links("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
