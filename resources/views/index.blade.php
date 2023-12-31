@extends('layouts.main-content')

@section('page-title',"Home")

@section('main-section')
    <div class="hot_news">
      <img src="/frontend/src/images/kakashi.jpg" alt="" />
      <div class="hot_news_disc">
        <div class="title">Kakashi Hatake Became The 6th Hokage</div>
        <div class="body">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam tempore
          blanditiis, ex, sit natus atque dolorum aperiam minima iusto,
          accusamus labore rerum? Magni
        </div>
      </div>
    </div>
    <div class="general_news">
      <h2>General News</h2>
      <div class="news_wrapper">
        <div class="artical_container">
          
          @foreach($news as $news) 
          
          <article>
            <div class="artical-image">
            <img src="{{ asset('storage/uploads/images/'. $news->news_image) }}" alt="">
            </div>
            <div class="news-title">
              {{ $news->news_title }}
            </div>
            <div class="news-body hidden">
            {{ $news->news_description }}
            </div>
            <a>Read More >></a>
            <div class="date">{{ $news->news_date }}</div>
          </article>
          
          @endforeach

        </div>
        <aside class="featured_news">
          <div class="featured_news-container">
            <div class="slider" id="slider-container">
              <img src="./frontend/src/images/hinata.jpg" alt="Hinata" />
              <img src="./frontend/src/images/pain.jpg" alt="Hinata" />
              <img src="./frontend/src/images/kakashi.jpg" alt="Hinata" />
            </div>
            <div class="dots" id="dots-container"></div>
          </div>
        </aside>
      </div>
    </div>

    <div class="wanted_person">
      <h2>Wanted Persons</h2>
      <div class="wrapper">
        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <img src="/frontend/src/wanted/4.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/3.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/2.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/1.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/10.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/9.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/8.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/7.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/6.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/5.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/4.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/3.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/2.jpg" />
            </div>

            <div class="slide">
              <img src="/frontend/src/wanted/1.jpg" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="our-leaders">
      <h2>Our Leaders</h2>
      <div class="leader-container">
        <div class="bio-card">
          <div class="img-block tsuchikage">
            <span></span>
            <img src="/frontend/src/leaders/1.jpg" alt="Tsunade" />
          </div>
          <div class="details">
            <div class="name">Name: Tsunade</div>
            <div class="address">Address: Kohoha</div>
            <div class="email">Email: thusande@gmail.com</div>
            <div class="number">Number: 9818451235</div>
          </div>
        </div>

        <div class="bio-card">
          <div class="img-block raikage">
            <span></span>
            <img src="/frontend/src/leaders/2.jpg" alt="Tsunade" />
          </div>
          <div class="details">
            <div class="name">Name: Tsunade</div>
            <div class="address">Address: Kohoha</div>
            <div class="email">Email: thusande@gmail.com</div>
            <div class="number">Number: 9818451235</div>
          </div>
        </div>

        <div class="bio-card">
          <div class="img-block mizukage">
            <span></span>
            <img src="/frontend/src/leaders/3.png" alt="Tsunade" />
          </div>
          <div class="details">
            <div class="name">Name: Tsunade</div>
            <div class="address">Address: Kohoha</div>
            <div class="email">Email: thusande@gmail.com</div>
            <div class="number">Number: 9818451235</div>
          </div>
        </div>

        <div class="bio-card">
          <div class="img-block kazekage">
            <span></span>
            <img src="/frontend/src/leaders/4.jpg" alt="Tsunade" />
          </div>
          <div class="details">
            <div class="name">Name: Tsunade</div>
            <div class="address">Address: Kohoha</div>
            <div class="email">Email: thusande@gmail.com</div>
            <div class="number">Number: 9818451235</div>
          </div>
        </div>

        <div class="bio-card">
          <div class="img-block hokage">
            <span></span>
            <img src="/frontend/src/leaders/5.jpg" alt="Tsunade" />
          </div>
          <div class="details">
            <div class="name">Name: Tsunade</div>
            <div class="address">Address: Kohoha</div>
            <div class="email">Email: thusande@gmail.com</div>
            <div class="number">Number: 9818451235</div>
          </div>
        </div>
      </div>
    </div>
@endsection