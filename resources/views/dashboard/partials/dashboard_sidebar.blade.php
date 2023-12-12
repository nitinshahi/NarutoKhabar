<div id="hamburger">&#9776;</div>
    <div id="sidebar">
      <p><a href="{{ Route('main.index') }}">Naruto Khabar</a></p>
      <div class="child-element" onclick="toggleNestedChildren(this)">
        News
        <div class="nested-child"><a href="{{ Route('addnews.create') }}">Add News</a></div>
        <!-- <div class="nested-child"><a href="./editnews.html">Edit News</a></div> -->
        <div class="nested-child"><a href="{{ Route('addnews.index') }}">All News</a></div>
      </div>
      

      <div class="child-element" onclick="toggleNestedChildren(this)">
        Author
        <div class="nested-child"><a href="{{ Route('addnews.create') }}">Add Autor</a></div>
        <!-- <div class="nested-child"><a href="./editnews.html">Edit News</a></div> -->
        <div class="nested-child"><a href="{{ Route('addnews.create') }}">All Authors</a></div>
      </div>

      <div class="logout-button">
        <button>&#x2699; Logout</button>
      </div>
    </div>

    <div id="content">this is dashbord</div>