@extends('home.layout.base')
@section('content')
<!-- header ends here --> 
<!--Breadcrumbs ==================================================
================================================== -->
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>Contact Page</h3>
      <p>- We always follow the customer is god's idea, integrity always comes first. -</p>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here --> 
<!-- Contact Content Part - GoogleMap ==================================================
================================================== -->
<!--<section class="map"> -->
  <!--&lt;!&ndash; google map &ndash;&gt;-->
  <!--<div class="map-holder">-->
    <!--<div class="map-container">-->
      <!--<iframe class="map" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Munich,+Germany&amp;aq=0&amp;oq=M%C3%BCnchen&amp;sll=37.0625,-95.677068&amp;sspn=53.212719,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Munich,+Upper+Bavaria,+Bavaria,+Germany&amp;t=m&amp;ll=48.23565,11.596069&amp;spn=0.347588,2.635345&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe>-->
      <!--&lt;!&ndash; end google map &ndash;&gt; -->
    <!--</div>-->
    <!--&lt;!&ndash;map-container ends here&ndash;&gt; -->
  <!--</div>-->
  <!--&lt;!&ndash;map-holder ends here&ndash;&gt; -->
<!--</section>-->

<!-- Contact Content Part - Contact Form ==================================================
================================================== -->
<div class="container contact"> 
  <!-- Contact Sidebar ==================================================
================================================== -->
  <div class="one_third">
    <h3>Our Info</h3>
    <section class="first shadow">
      <ul>
        <li>Address：RM 1814, 18/F WEALTH COMMERCIAL CENTRE, 48 KWONG WA STREET, MONGKOK, HONG KONG</li>
        <li>Phone: 0090 212 970 13 24 </li>
        <li>Fax: (00852) 2139 3217</li>
        <li>Website: <a href="#" title="">http://iecol.com</a></li>
        <li>Email: <a href="#" title="">Gena@iecol.com </a></li>
      </ul>
    </section>
  </div>
  <!-- one_third ends here -->
  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h3>Contact us</h3>
      <div class="sepContainer"></div>
      <form action="process.php" method="post" id="contact_form">
        <div class="name">
          <label for="name">Your Name:</label>
          <p> Please enter your full name</p>
          <input id=name name=email type=text placeholder="e.g. Mr. John Smith" required />
        </div>
        <div class="email">
          <label for="email">Your Email:</label>
          <p> Please enter your email address</p>
          <input id=email name=email type=email placeholder="example@domain.com" required />
        </div>
        <div class="message">
          <label for="message">Your Message:</label>
          <p> Please enter your question</p>
          <textarea id=message name=message rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
          <input type="submit" value="Submit" />
        </div>
      </form>
    </div>
    <!-- end contactForm --> 
  </div>
</div>
<div class="blankSeparator"></div>

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
<!-- Footer ==================================================
================================================== -->
@endsection