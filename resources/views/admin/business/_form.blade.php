<form class="layui-form layui-form-pane" method="post" action="" id="addBus">
    {{ csrf_field() }}
    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">业务名称</label>
        <div class="layui-input-block">
            <input type="text" name="business[name]" value="{{isset($edit->bus_name) ? $edit->bus_name :old('business')['name']}}" required  lay-verify="required" placeholder="业务名称" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">业务内容</label>
        <div class="layui-input-block">
        <textarea name="business[content]" class="layui-textarea" id="ItemContent" style="display: none">
            {{isset($edit->bus_content) ? $edit->bus_content :old('business')['content']}}
        </textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>