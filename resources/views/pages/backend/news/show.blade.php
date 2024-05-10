@extends('layout.backend.main')
@section('title', 'News Detail')

@section('content')
    @include('pages.backend.partials.notif')

    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-2">News Detail</h1>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-1">
                            <h1><b>{{ $news->name }}</b></h1>
                        </div>

                        <div class="col-md-12 mt-2">
                            {!! $news->description !!}
                        </div>

                        <div class="col-md-12">
                            <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning mr-1 mb-1">
                                Edit</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="{{ route('news.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

@endsection
