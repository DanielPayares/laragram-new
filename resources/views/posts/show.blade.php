@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center pb-4">
                <div class="pl-4">
                <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-50" style="max-width: 100px;">
                </div>
                <div class="pl-4">
                    <div class="font-weight-bold"> 
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }} |</span>
                        </a> 
                        <a href="#" class="pl-4">Follow</a>
                    </div>
                </div>
            </div>
            <hr>
            <p> 
                <span class="font-weight-bold"> 
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a> 
                </span>{{$post->caption }}</span>
            </p>
        </div>
    </div>
</div>
@endsection
