<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All News</title>
    <link rel="stylesheet" href="../backend/asstes/style.css" />
  </head>
  <body>
    <h2>All News</h2>

    <div class="all-news-container">
      <div class="add-on-section">
        <p>News Details</p>
        <a class="add-news" href="./addnews.html"
          ><span
            ><img src="../backend/source/svg/plus-solid.svg" alt=""
          /></span>
          Add News
        </a>
      </div>
      <table class="news-table">
        <tr>
          <th>ID</th>
          <th>News Title</th>
          <th>Published Date</th>
          <th>Remark</th>
          <th></th>
        </tr>

        @foreach($news as $news)
          <tr>
            <td>#</td>
            <td>{{ $news->news_title }}</td>
            <td>{{ $news->news_date }}</td>
            <td>
            <a class="delete-btn" href="#">
              delete
              <span>
                <img src="../backend/source/svg/trash-solid.svg" alt="" />
              </span>
            </a>
          </td>
          <td>
            <a class="edit-btn" href="./editnews.html">
              edit
              <span>
                <img
                  src="../backend/source/svg/pen-to-square-solid.svg"
                  alt=""
                />
              </span>
            </a>
          </td>
          </tr>
        @endforeach
        
      </table>
    </div>
  </body>
</html>
