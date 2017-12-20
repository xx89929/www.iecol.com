@extends('home.layout.base')
@section('content')
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>Active</h3>
      <p>- We always follow the customer is god's idea, integrity always comes first. -</p>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here -->
<!-- Features ==================================================
================================================== -->
<div id="resume">
  <div class="container ">
    <div class="resume">
      <div class="act_left_side">
        <div class="act_top">
          <div class="act_tit">
            <span>{{$act_info->act_title}}</span>
          </div>
          <div class="update_times">
            <span>更新时间：{{$act_info->updated_at}}</span>
          </div>
        </div>
        <div class="act_bottom">
          <div class="act_content">
            {!! $act_info->act_content !!}}
          </div>
        </div>
      </div>


      <div class="act_right_side">
        <div class="act_ul">
          <ul>
            @foreach($active_list as $list)
              <li>
                <a href="{{route('active',['act_id' => $list->id])}}">{{$list->act_title}}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>
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