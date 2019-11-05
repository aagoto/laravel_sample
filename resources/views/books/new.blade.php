@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Book Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('books.create') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="auther" class="col-md-4 col-form-label text-md-right">{{ __('Auther') }}</label>

                            <div class="col-md-6">
                                <input id="auther" type="text" class="form-control{{ $errors->has('auther') ? ' is-invalid' : '' }}" name="auther" value="{{ old('auther') }}" required autofocus>

                                @if ($errors->has('auther'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('auther') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_name" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <input id="category_name" type="text" class="form-control{{ $errors->has('category_name') ? ' is-invalid' : '' }}" name="category_name" value="{{ old('category_name') }}" required autofocus>

                                @if ($errors->has('category_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="impressions" class="col-md-4 col-form-label text-md-right">{{ __('Impressions') }}</label>

                            <div class="col-md-6">
                                <input id="impressions" type="text" class="form-control{{ $errors->has('impressions') ? ' is-invalid' : '' }}" name="impressions" value="{{ old('impressions') }}" required autofocus>

                                @if ($errors->has('impressions'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('impressions') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
