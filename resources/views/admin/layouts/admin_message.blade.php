@if(session('success'))
    <div id="myAlert" class="layui-bg-red">
        <strong>成功！</strong>{{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div id="myAlert" class="layui-bg-blue">
        <strong>成功！</strong>{{ session('success') }}
    </div>
@endif