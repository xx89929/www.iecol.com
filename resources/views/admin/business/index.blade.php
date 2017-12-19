@extends('admin.layouts.layout')
@section('content')
    @include('admin.layouts.admin_message')
    <form class="layui-form">
        <div class="layui-form-item layui-col-lg8 layui-col-lg-offset2">
            <div class="layui-input-inline">
                <input type="text" name="begin_time" class="layui-input" id="begin_times" placeholder="开始时间">
            </div>
            <div class="layui-input-inline">
                <input type="text" name="end_time" class="layui-input" id="end_times" placeholder="结束时间">
            </div>

            <div class="layui-input-inline">
                <button class="layui-btn">
                    <i class="layui-icon" id="BusAddBtn">&#xe615;</i> 添加
                </button>
            </div>
        </div>
    </form>

    <div class="layui-row">
        <button class="layui-btn layui-btn-danger" id="del_btn" url="{{route('bus_del')}}"><i class="layui-icon">&#xe640;</i>批量删除</button>
        <button class="layui-btn layui-btn-normal" id="add_btn" url="{{route('bus_create')}}"><i class="layui-icon">&#xe654;</i>添加</button>
    </div>

    <div class="layui-row">
        <table class="layui-table" id="business_list" url="{{route("get_business")}}" lay-filter="item_list">
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th lay-data="{checkbox:true}"></th>--}}
                {{--<th lay-data="{field:'id', width:80, sort: true}">ID</th>--}}
                {{--<th lay-data="{field:'bus_name', width:200}">业务名称</th>--}}
                {{--<th lay-data="{field:'bus_content', width:300}">业务内容</th>--}}
                {{--<th lay-data="{field:'created_at', width:200,templet:'#create_timestamp_to_date'}">添加时间</th>--}}
                {{--<th lay-data="{field:'updated_at', width:200,templet:'#update_timestamp_to_date'}">更新时间</th>--}}
                {{--<th lay-data="{width:200,toolbar: '#table_edit'}">操作</th>--}}

            {{--</tr>--}}
            {{--</thead>--}}
        </table>


    </div>

    <script type="text/html" id="table_edit">
        <a class="layui-btn layui-btn-mini"  lay-event="edit" url="{{route('bus_update')}}" this-id="@{{d.id}}"><i class="layui-icon">&#xe642;</i></a>
        <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del" url="{{route('bus_del')}}" this-id="@{{d.id}}"><i class="layui-icon">&#xe640;</i></a>
    </script>

    <script type="text/html" id="create_timestamp_to_date">
        <div>@{{d.created_at}}</div>
    </script>
    <script type="text/html" id="update_timestamp_to_date">
        <div>@{{d.updated_at}}</div>
    </script>
@endsection
