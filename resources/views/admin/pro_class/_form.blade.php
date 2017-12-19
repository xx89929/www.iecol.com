<form class="layui-form layui-form-pane" method="post" action="" id="addBus" enctype="multipart/form-data"  lay-filter="product_class">
    {{ csrf_field() }}
    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">分类名称</label>
        <div class="layui-input-block">
            <input type="text" name="product_class[pro_class_name]" value="{{isset($edit->pro_class_name) ? $edit->pro_class_name :old('product_class')['pro_class_name']}}" required  lay-verify="required" placeholder="分类名称" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">是否显示</label>
        <div class="layui-input-block">
            <input type="radio" name="product_class[is_display]" value="1" title="显示" {{isset($edit->is_display) && $edit->is_display == 1 ? 'checked' :old('product_class')['is_display']}}>
            <input type="radio" name="product_class[is_display]" value="0" title="不显示" {{isset($edit->is_display) && $edit->is_display == 0 ? 'checked' :old('product_class')['is_display']}}>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button id="submit_form" class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>