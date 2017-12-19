@extends('home.layout.base')
@section('content')
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
      <li> <a href="#"><img src="{{url('home/images/my_icon/index_banner_1.png')}}" alt=""/></a>
        <section class="caption">
          <h2 class="shadow3">We are IECOL</h2>
          <p>committed to research, development, manufacture and sale of energy conservation, environment protection & art Led lamps.</p>
          <a class="button" href="#">Choose us!</a></section>
      </li>
      <li> <a href="#"><img src="{{url('home/images/my_icon/index_banner_2.png')}}" alt="" /></a>
        <section class="caption">
          <h2 class="shadow3">We are IECOL</h2>
          <p>committed to research, development, manufacture and sale of energy conservation, environment protection & art Led lamps.</p>
          <a class="button" href="#">Choose us!</a></section>
      </li>
    </ul>
  </div>
  <!-- flexslider ends here -->
</section>
<!-- slider ends here -->
<!-- info Box ==================================================
================================================== -->
<div class="infobox">
  <div class="container info">
    <header>
      <h1>Important products!</h1>
      <p class="infop">- We always follow the customer is god's idea, integrity always comes first. -</p>
    </header>
    <hr class="separator">
  </div>
  <!-- container ends here -->
</div>
<!-- infobox ends here -->
<!--Latest Photos ==================================================
================================================== -->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
<div class="container latest">
  <div class="one_third">
    <figure class="shadow"><a href="#" class="thumb"><img src="{{url('home/images/my_icon/Led/1.png')}}" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Any More</h3>
        </a>
        <p class="bioquote">This light bulb has a light...testing</p>
      </figcaption>
    </figure>
  </div>
  <!-- one_third ends here -->
  <div class="one_third">
    <figure class="shadow"><a href="#" class="thumb"><img src="{{url('home/images/my_icon/Led/2.png')}}" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Any More</h3>
        </a>
        <p class="bioquote">This light bulb has a light...testing
          This light bulb has a light...testing
          This light bulb has a light...testing</p>
      </figcaption>
    </figure>
  </div>
  <!-- one_third ends here -->
  <div class="one_third lastcolumn">
    <figure class="shadow"><a href="#" class="thumb"><img src="{{url('home/images/my_icon/Led/3.png')}}" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Any More</h3>
        </a>
        <p class="bioquote">This light bulb has a light...testing
          This light bulb has a light...testing
          This light bulb has a light...testing
          This light bulb has a light...testing</p>
      </figcaption>
    </figure>
  </div>
  <!-- one_third ends here -->
</div>
<!-- end container -->
<!--Heading Box ==================================================
================================================== -->
<div class="headingblock">
  <div class="container heading">
    <header>
      <h2>IMPORTANT PRODUCTS!</h2>
      <p>- We always follow the customer is god's idea, integrity always comes first. -</p>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- headingblock ends here -->
<!-- Latest News & Faq ==================================================
================================================== -->
<div class="container latest">
  <div class="two_third">
    <div class="accordion-trigger">
      <h3>What questions do you want to ask?</h3>
    </div>
    <div class="accordion-container">
      <div class="one_third"> <img class="shadow" src="{{url('home/images/my_icon/Led/4.png')}}" alt="" /> </div>
      <!--end one_third-->
      <div class="one_third"> <img class="shadow" src="{{url('home/images/my_icon/Led/5.png')}}" alt="" /> </div>
      <!--end one_third-->
      <div class="one_third lastcolumn"> <img class="shadow" src="{{url('home/images/my_icon/Led/6.png')}}" alt="" /> </div>
      <!--end one_third-->
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>Morning or Night person?</h3>
    </div>
    <div class="accordion-container">
      <div class="one_half">
        <div class="video-holder">
          <div class="video-container">
            <!--<iframe title="YouTube video player" class="youtube-player" src="http://www.youtube.com/embed/W7JXcoTty3Q"></iframe>-->
          </div>
          <!--video-container ends here-->
        </div>
        <!--video-holder ends here-->
      </div>
      <!--end one_half-->
      <div class="one_half lastcolumn">
        <div class="video-holder">
          <div class="video-container">
            <!--<iframe title="YouTube video player" class="youtube-player" src="http://www.youtube.com/embed/W7JXcoTty3Q"></iframe>-->
          </div>
          <!--video-container ends here-->
        </div>
        <!--video-holder ends here-->
      </div>
      <!--end one_half-->
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>If you were a animal, which would you be?</h3>
    </div>
    <div class="accordion-container">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>Your favorite places in the world?</h3>
    </div>
    <div class="accordion-container">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>Your favorite color?</h3>
    </div>
    <div class="accordion-container">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>The 5 things you can't live without?</h3>
    </div>
    <div class="accordion-container">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
      <hr class="separator1">
      <!-- ENDS Accordions -->
    </div>
  </div>
  <!-- two_third ends here -->
  <div class="one_third lastcolumn">
    <h3>New Entries</h3>
    <article>
      <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
      <p class="quote">One morning, when Gregor Samsa woke from troubled dreams.</p>
      <a href="#" title="">&rarr; download</a></article>
    <hr class="separator1">
    <article>
      <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
      <p class="quote">One morning, when Gregor Samsa woke from troubled dreams.</p>
      <a href="#" title="">&rarr; download</a></article>
    <hr class="separator1">
    <article>
      <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
      <p class="quote">One morning, when Gregor Samsa woke from troubled dreams.</p>
      <a href="#" title="">&rarr; download</a></article>
  </div>
  <!-- one_third ends here -->
</div>
<!-- end container -->
<!-- Socialize ==================================================
================================================== -->
<hr class="separator2">
<div class="socialsblock">
  <div class="container socialize">
    <h3>Socialize with us!</h3>
    <section class="socials">
      <ul class="socials">
        <li><a href="#"><img src="{{url('home/images/socials/twitter.png')}}" alt="" /></a></li>
        <li><a href="#"><img src="{{url('home/images/socials/facebook.png')}}" alt="" /></a></li>
        <li><a href="#"><img src="{{url('home/images/socials/dribbble.png')}}" alt="" /></a></li>
        <li><a href="#"><img src="{{url('home/images/socials/google+.png')}}" alt="" /></a></li>
        <li><a href="#"><img src="{{url('home/images/socials/linkedin.png')}}" alt="" /></a></li>
        <li><a href="#"><img src="{{url('home/images/socials/youtube.png')}}" alt="" /></a></li>
      </ul>
    </section>
  </div>
  <!-- container ends here -->
</div>
@endsection