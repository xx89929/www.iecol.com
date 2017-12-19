@extends('home.layout.base')
@section('content')

<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>About Page</h3>
      <p>- We always follow the customer is god's idea, integrity always comes first. -</p>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here --> 
<!-- About us ==================================================
================================================== -->
<div class="container">
  <div class="one_third">
    <section class="aboutoneleft">
      <h3>Our Phylosophy</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <p class="quote">Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p>
    </section>
  </div>
  <!-- end one-third column ends here -->
  <div class="one_third">
    <section class="aboutonecenter">
      <h3>Our Motivation</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <p class="quote">Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem.</p>
    </section>
  </div>
  <!-- end one-third column ends here -->
  <div class="one_third lastcolumn">
    <section class="aboutoneright">
      <h3>Our Latest Work</h3>
      <img src="{{url('home/images/flexslider/1.jpg')}}" alt=""/>
      <p class="quote">Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem. </p>
    </section>
  </div>
  <!-- end one-third column ends here --> 
</div>
<!-- container ends here --> 
<!--Testimonials ==================================================
================================================== -->
<div class="testimonials">
  <div class="container">
    <header>
      <h3>Testimonials</h3>
      <p class="testimonials">&quot; Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem. Etiam eget mi enim, non ultricies nisi voluptatem, illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem. &quot;</p>
      <img class="testimonialsimage" src="{{url('home/images/testimonials.jpg')}}" alt=""/> </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- testimonials ends here --> 
<!--Team ==================================================
================================================== -->
<div class="container">
  <div class="blankSeparator"></div>
  <div class="container">
    <h3>Our Team</h3>
    <div class="team">
      <div class="one_third"> <img class="shadow" src="{{url('home/images/portfolio/a.jpg')}}" alt=""/>
        <section class="teaminfo">
          <h4>John Smith</h4>
          <ul>
            <li>
              <p><a href="#"><strong>Business card</strong></a><br />
                Website: <a href="#">www.xxxxx.com</a><br />
                Email: <a href="contact.html">xxx@xxxxx.com</a></p>
            </li>
          </ul>
        </section>
      </div>
      <!-- end one-third column ends here -->
      <div class="one_third"> <img class="shadow" src="{{url('home/images/portfolio/b.jpg')}}" alt=""/>
        <section class="teaminfo">
          <h4>Johna Doe</h4>
          <ul>
            <li>
              <p><a href="#"><strong>Business card</strong></a><br />
                Website: <a href="#">www.xxxxx.com</a><br />
                Email: <a href="contact.html">xxx@xxxxx.com</a></p>
            </li>
          </ul>
        </section>
      </div>
      <!-- end one-third column ends here -->
      <div class="one_third lastcolumn"> <img class="shadow" src="{{url('home/images/portfolio/c.jpg')}}" alt=""/>
        <section class="teaminfo">
          <h4>Carle Smith</h4>
          <ul>
            <li>
              <p><a href="#"><strong>Business card</strong></a><br />
                Website: <a href="#">www.xxxxx.com</a><br />
                Email: <a href="contact.html">xxx@xxxxx.com</a></p>
            </li>
          </ul>
        </section>
      </div>
      <!-- end one-third column ends here --> 
    </div>
  </div>
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
<!-- socialsblock ends here --> 
@endsection