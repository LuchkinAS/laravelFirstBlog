@extends('layouts.app')

@section('content')
    <div class="container">
        @if($post->exists)
            <form method="post" action="{{ route('blog.admin.posts.update', $post->id) }}">
                @method('PATCH')
                @else
                    <form method="post" action="{{ route('blog.admin.posts.store') }}">
                        @endif
                        @csrf
                        <div class="row justify-content-center">
                            @if($errors->any())
                                <div class="col-md-11">
                                    <div class="alert alert-danger" role="alert">
                                        {{$errors->first()}}
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-8">
                                @include('blog.admin.post.edit_main_column')
                            </div>
                            <div class="col-md-3">
                                @include('blog.admin.post.edit_add_column')
                            </div>
                        </div>
                    </form>
    </div>
@endsection
