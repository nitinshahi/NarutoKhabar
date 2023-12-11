@extends('dashboard.layouts.dashboard_content')
 
@section('dashboard-section')
    <h2>Edit News</h2>
    <div class="page-container">
      <form
        action="{{ Route('addnews.update',compact('news'))}}"
        class="form"
        onsubmit="return validateForm()"
        method="post"
        enctype="multipart/form-data"
      >
      @csrf
      @method('put')
        <div class="avatar">
          <input
            type="file"
            id="avatarImageUpload"
            name="avatarImageUpload"
            accept="image/*"
            style="display: none"
          />

          <img
            class="upload-img"
            src="{{ asset('storage/uploads/images/'. $news->news_image) }}"
            id="avatarImage"
            alt="Upload Image"
          />
          <label for="avatarImageUpload">Choose Avatar</label>
        </div>
      <div class="general-info">

        <div class="name-container">
          <label for="name">News Title:</label>
          <input type="text" class="name" id="name" name="newsTitle" value="{{$news->news_title}}" />
        </div>
        <div class="news-title-container">
          <label for="news-title">Enter Dated</label>
          <input type="date" class="news-title" id="news-title" name="newsDate" value="{{ $news->news_date }}"/>
        </div>
      </div>
      <div class="news-discription-container">
        <label for="news-discription">Enter News Description:</label>
        <textarea name="newsDiscription" id="news-discription">{{ $news->news_description }}</textarea>
      </div>

      <div class="button-wrap">
        <button type="submit" class="button">Submit</button>
        <button type="button" class="discard-btn">Discard</button>
      </div>

      </form>
    </div>
@endsection
