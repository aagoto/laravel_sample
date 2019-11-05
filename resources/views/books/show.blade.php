@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{(__('Detail').'「'.$book->title.'」') }}</div>
                        <div class="card-body text-center">
                          <p>{{ $book->title }}</p>
                          <p>{{ $book->auther }}</p>
                          <p>{{ $book->category_name }}</p>
                          <p>{{ $book->impressions }}</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
