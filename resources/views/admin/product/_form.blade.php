<form class="layui-form layui-form-pane" method="post" action="" id="addBus" enctype="multipart/form-data"  lay-filter="product">
    {{ csrf_field() }}
    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">英文名称</label>
        <div class="layui-input-block">
            <input type="text" name="product[product_en_name]" value="{{isset($edit->product_en_name) ? $edit->product_en_name :old('product')['product_en_name']}}" required  lay-verify="required" placeholder="产品英文名称" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">中文名称</label>
        <div class="layui-input-block">
            <input type="text" name="product[product_ch_name]" value="{{isset($edit->product_ch_name) ? $edit->product_ch_name :old('product')['product_ch_name']}}" placeholder="产品中文名称" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">选择框</label>
        <div class="layui-input-block">
            <select name="product[product_classify]" lay-verify="required">
                <option value="0" {{isset($edit->product_classify) && $edit->product_classify == 0 ? 'selected' :old('product')['product_classify']}}>Led Spot Lamp & Down Lamp  (led射灯筒灯)</option>
                <option value="1" {{isset($edit->product_classify) && $edit->product_classify == 1 ? 'selected' :old('product')['product_classify']}}>Led Bulb\Led Candle bulb (LED球泡/蜡烛灯)</option>
                <option value="2" {{isset($edit->product_classify) && $edit->product_classify == 2 ? 'selected' :old('product')['product_classify']}}>T5, T8  & fixture（T5,T8与支架）</option>
                <option value="3" {{isset($edit->product_classify) && $edit->product_classify == 3 ? 'selected' :old('product')['product_classify']}}>Led Flat Pannel（LED平板灯）</option>
                <option value="4" {{isset($edit->product_classify) && $edit->product_classify == 4 ? 'selected' :old('product')['product_classify']}}>Led Wall Washing Lamp（LED洗墙灯）</option>
            </select>
        </div>
    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">产品参数</label>
        <div class="layui-input-block">
        <textarea name="product[product_param]" class="layui-textarea" id="ItemContent" style="display: none">
            {{isset($edit->product_param) ? $edit->product_param :old('product')['product_name']}}
        </textarea>
        </div>
    </div>

    {{--<div class="layui-form-item layui-col-lg12">--}}
        {{--<label class="layui-form-label layui-col-lg4">上传图片</label>--}}
        {{--<input id="product_file" type="file" name="product_file">--}}
    {{--</div>--}}
    <input id="hi_file" name="product[product_file]"  type="hidden" value="{{isset($edit->pic_path) ? url($edit->pic_path) :old('product')['pic_path']}}">

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">上传图片</label>
        <button type="button" class="layui-btn" id="product_file" lay-url="{{route('put_files')}}">
            <i class="layui-icon">&#xe67c;</i>本地上传
        </button>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">预览</label>
        <img id="pre_images" style="width: 100px ;height: 100px;" src="{{isset($edit->pic_path) ? url($edit->pic_path) :old('product')['pic_path']}}">
    </div>

    <script>
        layui.use(['upload','jquery'], function(){
            var upload = layui.upload
                ,$ =  layui.jquery

            //执行实例
            var uploadInst = upload.render({
                elem: '#product_file' //绑定元素
                ,url: $('#product_file').attr('lay-url') //上传接口
                ,field:'product_file'
                ,accept: 'images'
                ,size: 1024
                ,done: function(res){
                    if(res.code == 0){
                       $('#hi_file').val(res.data);
                       $('#pre_images').attr('src',"{!!url('"+res.data+"')!!}");
                    }
                }
                ,error: function(index, upload){
                    //请求异常回调
//                    console.log('error:file_index',index);
//                    console.log('error:file_upload',upload);
                }
            });
        });
    </script>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button id="submit_form" class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            <button id="test" class="layui-btn layui-btn-primary">TEST</button>
        </div>
    </div>
</form>