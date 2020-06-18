@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.faep11-1.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/101012189_621101145165772_7487155284092685876_n.jpg?_nc_ht=instagram.faep11-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=gtOeyCBtLrsAX-v4fhp&oh=d555cccbe24771e615a864ac33224738&oe=5F1305CA" alt="" class="rounded-circle">
        </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username}}</h1>
            <a href="/p/create">Add new post</a>
        </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts()->count() }}</strong> posts</div>
                <div class="pr-4"><strong>20k</strong> followers</div>
                <div class="pr-4"><strong>200</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>        
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4" pb-4>
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach
        
    </div>
</div>
@endsection
