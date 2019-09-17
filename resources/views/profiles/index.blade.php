@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
          <img src="https://scontent-waw1-1.cdninstagram.com/vp/70dc83234e2cd9eb53daa4a28d9d50fc/5E038B38/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com" class="rounded-circle w-100" alt="">
      </div>
      <div class="col-9 pt-5 ">
          <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add new post</a>
          </div>
              <div class="d-flex ">
              <div class="pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
              <div class="pr-3"><strong>23k</strong> followers</div>
              <div class="pr-3"><strong>212</strong> followers</div>
          </div>
          <div class="font-weight-bold pt-4">{{$user->profile->title}}</div>
          <div>{{$user->profile->description}}</div>
          <div><a href="#">{{$user->profile->url}}</a></div>
      </div>
  </div>
    <div class="row pt-5">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>

            @endforeach
    </div>
</div>
@endsection
