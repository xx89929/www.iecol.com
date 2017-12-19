<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <!-- 百度JS接口说明 -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>{{$web_title}}</title>
    <!-- Bootstrap -->
    <link href="{{url('admin/css/admin_style.css') }}" rel="stylesheet">
    <link href="{{url('admin/layui/css/layui.css') }}" rel="stylesheet">
    <link rel="Shortcut Icon" href="{{url('home/images/my_icon/web_logo_fuild.png')}}" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{url('admin/layui/layui.js') }}"></script>
    {{--<script src="{{url('admin/vue/vue.js') }}"></script>--}}
    <script src="{{url('admin/js/admin_common.js') }}"></script>
</head>
<body class="layui-layout-body">
    @yield('layout')

    {{--<script src="{{url('admin/vue/vue.js') }}"></script>--}}
    {{--<script src="{{url('admin/vue/vue-resource.js') }}"></script>--}}
    {{--<script src="{{url('admin/js/vue_common.js') }}"></script>--}}
</body>
</html>