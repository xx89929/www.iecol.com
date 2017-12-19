<div id="header">
    <div class="container">
        <!-- Header | Logo, Menu
            ================================================== -->
        <div class="logo"><a href="index.html"><img src="{{url('home/images/my_icon/web_logo_fuild.png')}}" alt="" /></a></div>
        <div class="mainmenu">
            <div id="mainmenu">
                <ul class="sf-menu">
                    <li><a href="{{route('/')}}" {{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('/').'/' ? 'id=visited' : ''}}>Home</a></li>
                    <li><a href="{{route('about')}}" {{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('about') ? 'id=visited' : ''}}>About</a></li>
                    <li>
                        <a href="{{route('product')}}" {{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('product') ? 'id=visited' : ''}}>Product</a>
                        <ul class="z_menu">
                            @foreach($nav_product_clssifys as $pro_class)
                            <li><a href="{{route('product',['class_key' => $pro_class->id])}}">{{$pro_class->pro_class_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('contact')}}" {{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('contact') ? 'id=visited' : ''}}>Contact</a></li>
                    <li>
                        <div class="search_box clearfix">
                            <form method="get" action="{{route('product_search')}}">
                                <div class="search_p">
                                    <input type="text" name="worlds_key" placeholder="Please enter product of name"/>
                                </div>
                                <input class="search_b" type="submit" value="Search">
                            </form>
                        </div>
                    </li>
                </ul>

            </div>
            <!-- mainmenu ends here -->

            <!-- Responsive Menu -->
            <form id="responsive-menu" action="#" method="post">
                <select>
                    <option value="">Navigation</option>
                    <option value="{{route('/')}}">Home</option>
                    <option value="{{route('about')}}">About</option>
                    <option value="{{route('product')}}">Product</option>
                    <option value="{{route('contact')}}">Contact</option>
                </select>
            </form>
        </div>
        <!-- mainmenu ends here -->
    </div>
    <!-- container ends here -->
</div>
