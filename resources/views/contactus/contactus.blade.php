@extends('layouts.main-content')
    
@section('page-title',"Contact Us")

@section('main-section')
@if($errors->any())
  @foreach($errors->all() as $error)
  {{$error}}
  @endforeach
@endif

<div class="contact-us">
      <div class="our-details">
        <h2>GET IN TOUCH WITH US</h2>
        <div class="phone-number">9818981677</div>
        <p>
          Email: <a href="mailto:pdi.sakar@gmail.com">pdi.sakar@gmail.com</a>
        </p>
        <address>Balaju, Kathmandu, Nepal</address>
      </div>
      <form method="POST" action="{{ route('contactus.insert') }}" class="contact-form">

        @csrf

        <div class="personal-details">
          <div class="name">
            <input type="text" name="name" placeholder="Enter Your Name" />
            <img src="/frontend/src/svg/user-solid.svg" alt="">
          </div>
          <div class="email">
            <input type="email" name="email"  placeholder="Enter Your Email" />
            <img src="/frontend/src/svg/envelope-regular.svg" alt="">
          </div>
          <div class="tel">
            <input type="tel" name="phone" placeholder="Enter Your Number" />
            <img src="/frontend/src/svg/phone-solid.svg" alt="">
          </div>
        </div>
        <div class="personal-message">
          <textarea
            name="your_message"
            id="your_message"
            placeholder="Place Your Message Here"
          ></textarea>
        </div>
      </form>

      <div class="button-wrap">
        <button class="button">Submit</button>
      </div>
    </div>
@endsection
