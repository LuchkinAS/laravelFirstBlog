@extends('layouts.app')

@section('content')
<div class="container">
{{--    <form method="post" action="{{ route('blog.admin.categories.update'), ['category' => $item->id] }}">--}}
    <form method="post" action="{{ route('blog.admin.categories.update', $foundCategory->id) }}">
        @method('PATCH')
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('blog.admin.category.edit_main_column')
            </div>
            <div class="col-md-3">
                @include('blog.admin.category.edit_add_column')
            </div>
        </div>

    </form>
</div>
@endsection
