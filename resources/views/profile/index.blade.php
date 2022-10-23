@extends('layouts.front')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <h2>プロフィール</h2>

        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts mx-auto mt-3">
                @foreach($profData as $data)
                    <dl>
                        <dt>氏名</dt>
                        <dd>{{ $data->name }}</dd>
                        <dt>性別</dt>
                        <dd>{{ $data->gender }}</dd>
                        <dt>趣味</dt>
                        <dd>{{ $data->hobby }}</dd>
                        <dt>自己紹介</dt>
                        <dd>{{ $data->introduction}}</dd>
                    </dl>
                @endforeach
            </div>
        </div>
    </div>
@endsection

