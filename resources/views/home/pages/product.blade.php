@extends('home.layout.base')
@section('content')
<!-- header ends here --> 
<!--Breadcrumbs ==================================================
================================================== -->
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>Portfolio Page</h3>
      <p>- We always follow the customer is god's idea, integrity always comes first. -</p>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here --> 
<!-- Portfolio ==================================================
================================================== -->
<div class="container-fluid" style="background-color: #f7f7f7;">
  <div class="container">
    <div class="product_box">
      @foreach ($product_list as $vo)
        <div class="product_box_item">
          <a href="{{route('project',['id' => $vo->id])}}">
            <div class="product_box_item_img">
              <img src="{{url($vo->pic_path)}}" alt="{{$vo->product_en_name}}" />
            </div>
            <div class="product_box_item_tit">
              <div class="en"><span>{{$vo->product_en_name}}</span></div>
              <div class="ch"><span>{{$vo->product_ch_name}}</span></div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    @if(isset($classify_key))
      <div class="pro_pages">{{ $product_list->appends(['class_key' => $classify_key])->links() }}</div>
    @elseif(isset($worlds_key))
      <div class="pro_pages">{{ $product_list->appends(['worlds_key' => $worlds_key])->links() }}</div>
    @else
      <div class="pro_pages">{{ $product_list->links() }}</div>
    @endif
  </div>
</div>

<script>
  $('.product_box_item').hover(function () {
      $(this).find('.product_box_item_tit').addClass('product_box_item_tit_active');
  },function () {
      $(this).find('.product_box_item_tit').removeClass('product_box_item_tit_active');
  })
</script>

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