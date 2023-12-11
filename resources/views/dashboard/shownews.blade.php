@extends('dashboard.layouts.dashboard_content')
 
@section('dashboard-section')
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
            <a class="edit-btn" href="{{ route('addnews.edit', compact('news')) }}">
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

    @endsection
