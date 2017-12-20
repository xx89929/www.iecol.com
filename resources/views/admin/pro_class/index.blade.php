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
        <button class="layui-btn layui-btn-danger" id="del_btn" url="{{route('product_classify_del')}}"><i class="layui-icon">&#xe640;</i>批量删除</button>
        <button class="layui-btn layui-btn-normal" id="add_btn" url="{{route('product_classify_create')}}"><i class="layui-icon">&#xe654;</i>添加</button>
    </div>

    <div class="layui-row">
        <table class="layui-table" id="product_classify_list" url="{{route("get_product_class")}}" lay-filter="item_list">
            <script>
                layui.use(['table','jquery'], function(){
                    var table = layui.table
                        ,$ = layui.jquery
                    table.render({
                        elem: '#product_classify_list' //指定原始表格元素选择器（推荐id选择器）
                        ,id: 'product_classify_list'
                        ,even: true //开启隔行背景
                        ,url: $('#product_classify_list').attr('url')
                        ,height: 470 //容器高度
                        ,request: {}
                        ,cols: [[
                            {checkbox: true}
                            ,{field: 'id', title: 'ID', width: 50}
                            ,{field: 'pro_class_name', title: '产品分类名称', width: 500}
                            ,{field: 'is_display', title: '是否显示', width: 100}
                            ,{fixed: 'right', width:150, align:'center', toolbar: '#table_edit'}
                        ]] //设置表头
                        ,done: function(res, curr, count){
                            //如果是异步请求数据方式，res即为你接口返回的信息。
                            //如果是直接赋值的方式，res即为：{data: [], count: 99} data为当前页数据、count为数据总长度
//                            console.log('done',res);
//
//                            //得到当前页码
//                            console.log('done',curr);
//
//                            //得到数据总量
//                            console.log('done',count);
                        }
                        ,page: true
                        ,limit: 10 //默认采用60


                    });
                });

            </script>
        </table>
    </div>

    <script type="text/html" id="table_edit">
        <a class="layui-btn layui-btn-mini"  lay-event="edit" url="{{route('product_classify_update')}}" this-id="@{{d.id}}"><i class="layui-icon">&#xe642;</i></a>
        <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del" url="{{route('product_classify_del')}}" this-id="@{{d.id}}"><i class="layui-icon">&#xe640;</i></a>
    </script>
@endsection
