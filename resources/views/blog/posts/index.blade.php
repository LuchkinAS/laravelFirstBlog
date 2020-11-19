@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <td scope="col">#</td>
                <td scope="col">Title</td>
                <td scope="col">Created date</td>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{$item->title}}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
