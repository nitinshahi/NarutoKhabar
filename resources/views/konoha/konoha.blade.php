@extends('layouts.main-content')
    
@section('page-title',"Konoha News")

@section('main-section')

<div class="project-video">
      <section>
        <video id="video-slider" autoplay muted loop>
          <source src="/frontend/src/videos/konoha/1.mp4" type="video/mp4" />
        </video>
        <ul class="navigation">
          <li class="active" onclick="videoURL('./src/videos/konoha/1.mp4')">
            <img src="/frontend/src/thumbnail/konoha/1.jpg" alt="#" />
          </li>
          <li onclick="videoURL('/frontend/src/videos/konoha/2.mp4')">
            <img src="/frontend/src/thumbnail/konoha/2.jpg" alt="#" />
          </li>
          <li onclick="videoURL('/frontend/src/videos/konoha/3.mp4')">
            <img src="/frontend/src/thumbnail/konoha/3.jpg" alt="#" />
          </li>
          <li onclick="videoURL('/frontend/src/videos/konoha/4.mp4')">
            <img src="/frontend/src/thumbnail/konoha/4.jpg" alt="#" />
          </li>
        </ul>
      </section>
    </div>
@endsection