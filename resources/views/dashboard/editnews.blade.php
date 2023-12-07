<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Image</title>
    <link rel="stylesheet" href="{{ asset('/backend/asstes/style.css') }}" />
    <script src="{{ asset('/backend/asstes/script-js.js') }}"></script>
  </head>
  <body>
    <h2>Edit News</h2>
    <div class="page-container">
      <form
        action="{{ Route('addnews.update',compact('news'))}}"
        class="form"
        onsubmit="return validateForm()"
        method="post"
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
            src="{{ asset('storage/frontend/src/images/'. $news->news_image) }}"
            id="avatarImage"
            alt="Upload Image"
          />
          <label for="avatarImageUpload">Choose Avatar</label>
        </div>
        <div class="general-info">
          <div class="name-container">
            <label for="name">News Title:</label>
            <input type="text" class="name" id="name" value="{{$news->news_title}}"/>
          </div>
          <div class="news-title-container">
            <label for="news-title">Enter Dated</label>
            <input type="date" class="news-title" id="news-title" value="{{ $news->news_date }}"/>
          </div>
        </div>
        <div class="news-discription-container">
          <label for="news-discription">Enter News Description:</label>
          <textarea name="news-discription" id="news-discription" >{{ $news->news_description }}</textarea>
        </div>

        <div class="button-wrap">
          <button class="button" type="submit">Submit</button>
          <button class="discard-btn" type="button">Discard</button>
        </div>
      </form>
    </div>
  </body>
</html>
