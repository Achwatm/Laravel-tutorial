@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
          <img src="https://scontent-waw1-1.cdninstagram.com/vp/70dc83234e2cd9eb53daa4a28d9d50fc/5E038B38/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com" class="rounded-circle w-100" alt="">
      </div>
      <div class="col-9 pt-5 ">
          <div><h1>{{$user->username}}</h1></div>
          <div class="d-flex ">
              <div class="pr-3"><strong>153</strong> posts</div>
              <div class="pr-3"><strong>23k</strong> followers</div>
              <div class="pr-3"><strong>212</strong> followers</div>
          </div>
          <div class="font-weight-bold pt-4">{{$user->profile->title}}</div>
          <div>{{$user->profile->description}}</div>
          <div><a href="#">{{$user->profile->url}}</a></div>
      </div>
  </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://scontent-waw1-1.cdninstagram.com/vp/0848559d10c353b54b050d5f360c6a27/5E0DA85D/t51.2885-15/e35/c0.40.822.822a/s150x150/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=103 150w,https://scontent-waw1-1.cdninstagram.com/vp/f2d7fe0df71eeaaf7ce6dafa80579b85/5E1BF817/t51.2885-15/e35/c0.40.822.822a/s240x240/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=103 240w,https://scontent-waw1-1.cdninstagram.com/vp/28ccdd43f0bbdd22fa7f72a3b81696b4/5E02B1AD/t51.2885-15/e35/c0.40.822.822a/s320x320/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=103 320w,https://scontent-waw1-1.cdninstagram.com/vp/dfc225ed4df080edee142e3fbf8ce782/5E1C40F7/t51.2885-15/e35/c0.40.822.822a/s480x480/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=103 480w,https://scontent-waw1-1.cdninstagram.com/vp/70961db954756acd7c31e09528297426/5E36CC57/t51.2885-15/sh0.08/e35/c0.40.822.822a/s640x640/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=103 640w" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-waw1-1.cdninstagram.com/vp/c9c789cdddd93408b7c9d92ae9599a25/5E3B5C23/t51.2885-15/e35/c0.24.797.797a/s150x150/70204809_844989819235846_5742669589238905135_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 150w,https://scontent-waw1-1.cdninstagram.com/vp/38880a913f82331a5eaabd45fcfaf44d/5E06A769/t51.2885-15/e35/c0.24.797.797a/s240x240/70204809_844989819235846_5742669589238905135_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 240w,https://scontent-waw1-1.cdninstagram.com/vp/c3ea7e2c928d6a0175db8a869143195f/5E0D19D3/t51.2885-15/e35/c0.24.797.797a/s320x320/70204809_844989819235846_5742669589238905135_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 320w,https://scontent-waw1-1.cdninstagram.com/vp/2e3e06e9989954b54a66d974eadcc7b4/5DFA5589/t51.2885-15/e35/c0.24.797.797a/s480x480/70204809_844989819235846_5742669589238905135_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 480w,https://scontent-waw1-1.cdninstagram.com/vp/3f67a6622e112db6d499dec6872968ad/5DF9B129/t51.2885-15/sh0.08/e35/c0.24.797.797a/s640x640/70204809_844989819235846_5742669589238905135_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 640w" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-waw1-1.cdninstagram.com/vp/9761d6462576465eb88b7fd2d1ef250a/5E17A943/t51.2885-15/e35/c2.0.746.746a/s150x150/69724111_393974761285474_327130327101059383_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 150w,https://scontent-waw1-1.cdninstagram.com/vp/c670089c3317a693bbc82a8fd924a0d6/5E0ECAF6/t51.2885-15/e35/c2.0.746.746a/s240x240/69724111_393974761285474_327130327101059383_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 240w,https://scontent-waw1-1.cdninstagram.com/vp/73d2076c2d2e2f5afeeb912f2ca4e67f/5E3C634E/t51.2885-15/e35/c2.0.746.746a/s320x320/69724111_393974761285474_327130327101059383_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 320w,https://scontent-waw1-1.cdninstagram.com/vp/858421b56a4313c3ab7cfa4827eff9ac/5DFBB912/t51.2885-15/e35/c2.0.746.746a/s480x480/69724111_393974761285474_327130327101059383_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 480w,https://scontent-waw1-1.cdninstagram.com/vp/494b72fad592f844a8cfb6cd7d7e02ac/5E0C4BE2/t51.2885-15/sh0.08/e35/c2.0.746.746a/s640x640/69724111_393974761285474_327130327101059383_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=110 640w" class="w-100">
        </div>
    </div>
</div>
@endsection
