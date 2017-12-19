<form class="layui-form layui-form-pane" method="post" action="" id="addBus" lay-filter="chooseup">
    {{ csrf_field() }}
    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">客户姓名</label>
        <div class="layui-input-block">
            <input type="text" name="choose[client_name]" value="{{isset($edit->client_name) ? $edit->client_name :old('choose')['client_name']}}" required  lay-verify="required" placeholder="填写客户姓名" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">客户电话</label>
        <div class="layui-input-block">
            <input type="text" name="choose[client_phone]" value="{{isset($edit->client_phone) ? $edit->client_phone :old('choose')['client_phone']}}" required  lay-verify="required" placeholder="填写客户电话" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">预约服务</label>

        <div class="layui-input-block">
            <input type="checkbox" lay-skin="primary" name="choose[services][0]" title="工商服务" value="工商服务" @if(isset($edit->services) && in_array('工商服务',$edit->services)) checked @endif>
            <input type="checkbox" lay-skin="primary" name="choose[services][1]" title="财务服务" value="财务服务" @if(isset($edit->services) && in_array('财务服务',$edit->services)) checked @endif>
            <input type="checkbox" lay-skin="primary" name="choose[services][2]" title="科技服务" value="科技服务" @if(isset($edit->services) && in_array('科技服务',$edit->services)) checked @endif>
        </div>

    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">选择城市</label>
        <div class="layui-input-block">
            <select name="choose[region]" lay-search>
                <option value="{{isset($edit->region) ? $edit->region :old('choose')['region']}}">{{isset($edit->region) ? $edit->region :old('choose')['region']}}</option>
                <option value="海南省">海南省</option>
                <option value="上海">上海</option>
                <option value="北京">北京</option>
            </select>
        </div>
    </div>
    {{--<input name="choose[request_type]" type="hidden" value="官网">--}}

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>