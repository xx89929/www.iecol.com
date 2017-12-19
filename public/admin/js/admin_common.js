layui.use(['element','laydate','layer','jquery','layedit','form','table','laytpl'], function(){
    var element = layui.element
        ,laydate = layui.laydate
        ,$ = layui.jquery
        ,layedit = layui.layedit
        ,form = layui.form
        ,table = layui.table
        ,laytpl = layui.laytpl

    element.on('nav(tree_nav)',function(data){
        console.log('nav',data);
    })

    laydate.render({
        elem: '#begin_times' //指定元素
    });

    laydate.render({
        elem: '#end_times' //指定元素
    });

    //layer触发事件
    var layer_elem = {
        /**
         * 弹出添加业务窗口
         */
        open_AddBusForm:function(url){
            layer.open({
                title:'添加',
                type: 2,
                content: url,
                closeBtn:1,
                fixed:true,
                area:['920px','780px']
            });

        },

        ajax_add_close : function(index,url,param){
            $.ajax({
                url:url,
                data:param,
                type:"Post",
                dataType:"json",
                success:function(data){
                    console.log("success",data);
                    layer.msg(data.msg, {
                        icon: 1,
                        time: 1000 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        parent.layer.close(index);
                        top.location.reload();
                    })
                },
                error:function(data){
                    console.log("error",data);
                    layer.msg(data.msg, {
                        icon: 2,
                        time: 1000 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        parent.layer.close(index);
                        top.location.reload();
                    })
                }
            });

        },

        ajax_del : function(url,param){
            layer.confirm('确定要删除吗?', {icon: 3, title:'提示'}, function(index){
                $.ajax({
                    url:url,
                    type:"Get",
                    dataType:"json",
                    data:param,
                    success:function(data){
                        layer.msg(data.msg, {

                            icon: 1,
                            time: 1000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            window.location.reload();
                        })
                    },
                    error:function(data){
                        layer.msg(data.msg, {
                            icon: 2,
                            time: 1000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            window.location.reload();
                        })
                    }
                });

                layer.close(index);
            });

        },
    };

    //富文本 触发事件
    var layedit_elem = {
        /**
         * 富文本编辑器DEMO
         */
        content: function(){
            alert(layedit.getContent(ide_index)); //获取编辑器内容
        }
        ,text: function(){
            alert(layedit.getText(ide_index)); //获取编辑器纯文本内容
        }
        ,selection: function(){
            alert(layedit.getSelection(ide_index));
        }
    };

    /**
     * 构建富文本编辑器
     */

    layedit.set({
        uploadImage: {
            url: 'http://'+window.location.host+'/admin/product/put_files'
            ,type: 'post' //默认post
        }
    });

    var ide_index = layedit.build('ItemContent');



    /**
     * 触发添加窗口事件
     */
    $("#add_btn").on('click',function(){
        var url = $(this).attr('url');
        layer_elem.open_AddBusForm(url);
    });


    /**
     * 批量删除事件
     */
    $('#del_btn').on('click',function(){
        var list=[];
        var href = $(this).attr('url');
        var checkname = $('.layui-table').attr('id');
        var checkStatus = table.checkStatus(checkname);
        for(var i=0;i<checkStatus.data.length;i++){
            list.push(checkStatus.data[i]['id']);
        }
        var url = href+"/"+list;

        layer_elem.ajax_del(url);
    });

    /**
     * 监听提交
     */
    form.on('submit(formDemo)', function(data){
        var index = parent.layer.getFrameIndex(window.name);
        var url = window.location.href;
        var content = layedit.getContent(ide_index);
        $itemcontent = $('#ItemContent').attr('name');
        $(data.field).attr($itemcontent,content);
        layer_elem.ajax_add_close(index,url,data.field);
        return false;
    });


    table.render({
        elem: '#business_list' //指定原始表格元素选择器（推荐id选择器）
        ,id: 'business_list'
        ,even: true //开启隔行背景
        ,url: $('#business_list').attr('url')
        ,height: 470 //容器高度
        ,cols: [[
            {checkbox: true}
            ,{field: 'id', title: 'ID', width: 80}
            ,{field: 'bus_name', title: '业务名称', width: 400}
            ,{field: 'bus_content', title: '业务内容', width: 585}
            ,{field: 'created_at', title: '添加时间', width: 200}
            ,{field: 'updated_at', title: '更新时间', width: 200}
            ,{fixed: 'right', width:150, align:'center', toolbar: '#table_edit'}
        ]] //设置表头
        ,page: true
        ,limit: 10 //默认采用60
    });


    /**
     * test测试工具
     */
    $('#test').click(function () {
        layedit_elem.content();
    })

    /**
     * 监听table工具类
     */
    table.on('tool(item_list)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
        var data = obj.data; //获得当前行数据
        var layEvent = obj.event; //获得 lay-event 对应的值
        var tr = obj.tr; //获得当前行 tr 的DOM对象
        var href =  $(this).attr('url');
        var id =  $(this).attr('this-id');
        // console.log('id',id);
        var url = href+"/"+id;
        if(layEvent === 'del'){ //删除
            layer_elem.ajax_del(url);
        } else if(layEvent === 'edit'){ //编辑
            layer_elem.open_AddBusForm(url);
        }
    });

    $('dd.layui-this').parents('li').addClass('layui-nav-itemed');
});

