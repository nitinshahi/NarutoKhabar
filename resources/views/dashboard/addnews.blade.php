<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add New Image</title>
  <link rel="stylesheet" href="../backend/asstes/style.css" />
  <script src="../backend/asstes/script-js.js"></script>
</head>

<body>
  
  
  <h2>Add News</h2>
  @if(Session::has('flash_back'))
    <p>{{ Session::get('flash_back') }}</p>
  @endif

  @if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>
  @endif

  <div class="page-container">
    <form action="{{route('addnews.insert')}}" method="post" class="form" enctype="multipart/form-data">
      @csrf
      @method('post')
      <div class="avatar">
        <input type="file" id="avatarImageUpload" name="avatarImageUpload" accept="image/*" style="display: none" />

        <img class="upload-img" src="../backend/source/upload-img.png" id="avatarImage" />
        <label for="avatarImageUpload">Choose Avatar</label>
      </div>
      <div class="general-info">

        <div class="name-container">
          <label for="name">News Title:</label>
          <input type="text" class="name" id="name" name="newsTitle" />
        </div>
        <div class="news-title-container">
          <label for="news-title">Enter Dated</label>
          <input type="date" class="news-title" id="news-title" name="newsDate" />
        </div>
      </div>
      <div class="news-discription-container">
        <label for="news-discription">Enter News Description:</label>
        <textarea name="newsDiscription" id="news-discription"></textarea>
      </div>

      <div class="button-wrap">
        <button type="submit" class="button">Submit</button>
        <button type="button" class="discard-btn">Discard</button>
      </div>
    </form>
  </div>

  @foreach ($news as $news)
    <li>{{$news->news_title}} <img src="{{ asset('storage/frontend/src/images/'. $news->news_image) }}" alt=""></li>

  @endforeach

</body>

</html>