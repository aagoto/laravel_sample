@extends('layouts.app')

@section('content')
<div class="container">
<h2>{{ __('Book List') }}</h2>
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$book->title}}</h3>
                        <a href="{{ route('books.show',$book->id) }}" class="btn btn-primary">{{__('Go Detail') }}</a>
                        <a href="{{ route('books.edit',$book->id) }}" class="btn btn-warning">{{__('Go Edit') }}</a>
                        <form action="{{ route('books.destroy',$book->id) }}" method="post" class="d-inline">
                        @csrf
                        <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>{{__('Go Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
