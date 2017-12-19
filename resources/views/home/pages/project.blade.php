@extends('home.layout.base')
@section('content')
<!-- header ends here -->
<!--Breadcrumbs ==================================================
================================================== -->
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>Product Info</h3>
      <p>- We always follow the customer is god's idea, integrity always comes first. -</p>
    </header>
  </div>
  <!-- container ends here -->
</div>
<!-- breadcrumbs ends here -->
<!-- Blog Single ==================================================
================================================== -->
<div class="container-fluid" style="background-color:#f7f7f7">
  <div class="container">
    <div class="prj_box">
      <div class="prj_top_box">
        <div class="prj_image">
          <img src="{{url($vo->pic_path)}}" alt="{{$vo->product_ch_name}}">
        </div>
        <div class="prj_des">
          <div class="prj_tit">
            <span>{{$vo->product_en_name}}</span>
            <i>{{$vo->product_ch_name}}</i>
          </div>
          <div class="prj_classify">
            <span>Type：{{$vo->pclass->p_class_name}}</span>
          </div>
          <div class="prj_contact_button">
            <button>联系我们</button>
          </div>
        </div>
      </div>

      <div class="prj_bottom_box">
        <div class="prj_param_tag">
          <span>Product Param</span>
        </div>
        <div class="prj_param_box">
          <div class="prj_param">
            {!! $vo->product_param !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- container ends here -->

<!-- Socialize ==================================================
================================================== -->
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
