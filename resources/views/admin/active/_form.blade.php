<form class="layui-form layui-form-pane" method="post" action="" id="addBus" enctype="multipart/form-data"  lay-filter="active">
    {{ csrf_field() }}
    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">活动标题</label>
        <div class="layui-input-block">
            <input type="text" name="active[act_title]" value="{{isset($edit->act_title) ? $edit->act_title :old('active')['act_title']}}" required  lay-verify="required" placeholder="活动标题" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">活动内容</label>
        <div class="layui-input-block">
        <textarea name="active[act_content]" class="layui-textarea" id="ItemContent" style="display: none">
            {{isset($edit->act_content) ? $edit->act_content :old('active')['act_content']}}
        </textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button id="submit_form" class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>