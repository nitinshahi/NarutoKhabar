<div id="hamburger">&#9776;</div>

    <div id="sidebar">
      <p> <a href="./maindash.html">Naruto Khabar</a></p>
      <div class="child-element" onclick="toggleNestedChildren(this)">
        News
        <div class="nested-child"><a href="./addnews.html">Add News</a></div>
        <div class="nested-child">Edit News</div>
        <div class="nested-child">All News</div>
      </div>
      <div class="child-element" onclick="toggleNestedChildren(this)">
        Child Element 2
        <div class="nested-child">Nested Child 1</div>
        <div class="nested-child">Nested Child 2</div>
      </div>
      <div class="child-element">Child Element 3</div>
      <div class="logout-button">
        <button><a href="{{ route('logout') }}">
          &#x2699; Logout</button>
        </a>
      </div>
    </div>

    <div id="content">this is dashbord</div>