@extends('admin.layouts.admin')
@section('layout')
<div class="layui-layout layui-layout-admin">
    @include('admin.layouts.top')
    @include('admin.layouts.left-nav')
    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;margin-top:50px;">
            @yield('content')
        </div>
    </div>
    @include('admin.layouts.foot')
</div>
@endsection