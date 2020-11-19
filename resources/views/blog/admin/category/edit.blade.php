@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('blog.admin.categories.update'), $item->id }}">
        @method('PATCH')
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include()
            </div>
            <div class="col-md-3">
                @include()
            </div>
        </div>

    </form>
</div>
@endsection
