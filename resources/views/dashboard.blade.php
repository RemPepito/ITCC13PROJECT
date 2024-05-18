@extends('layout.layout')

@section('mainpage')
    <div class="row justify-content-center">
        <div class="col-8">
            @include('reuseableComponents.successMessage')
            @include('reuseableComponents.errorMessage')
            @include('reuseableComponents.submitTweet')
            <hr>
            @if (count($tweets) > 0)
                @foreach ($tweets as $tweet)
                    <div class="mt-3">
                        @include('reuseableComponents.tweetCard')
                    </div class="mt-3">
                @endforeach
            @else
                No Results Found
            @endif
            <div>
                {{ $tweets->withQueryString()->links() }}
            </div>
        </div>
        <div class="col-4">
            @include('reuseableComponents.searchComp')
            {{--            @include('reuseableComponents.followComp') --}}
        </div>
    </div>
@endsection
