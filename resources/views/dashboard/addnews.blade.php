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
  @if($errors->any())
  @foreach($errors->all() as $error)
  {{$error}}
  @endforeach
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
</body>

</html>