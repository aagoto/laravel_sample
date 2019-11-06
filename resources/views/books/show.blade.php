@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{(__('Detail').'「'.$book->title.'」') }}</div>
                        <div class="card-body text-center">
                          <p>{{ "【タイトル】".$book->title }}</p>
                          <p>{{ "【著者】".$book->auther }}</p>
                          <p>{{ "【カテゴリー】".$book->category_name }}</p>
                          <p>{{ "【感想】".$book->impressions }}</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
