@extends('layout.layout')

@section('mainpage')
    <div class="row">
        <div class="col-8">
            @include('reuseableComponents.successMessage')
            <hr>
            <div class="mt-3">
                @include('reuseableComponents.tweetCard')
            </div class="mt-3">
        </div>
        <div class="col-4">
            @include('reuseableComponents.searchComp')
            @include('reuseableComponents.followComp')
        </div>
    </div>
@endsection
