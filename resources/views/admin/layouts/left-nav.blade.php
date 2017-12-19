<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree"  lay-filter="tree_nav">
            <li class="layui-nav-item">
                <a class="" href="javascript:;">产品管理</a>
                <dl class="layui-nav-child">
                    <dd class="{{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('admin_product') ? 'layui-this' : ''}}">
                        <a href="{{route('admin_product')}}">产品列表</a>
                    </dd>

                    <dd class="{{Request::getSchemeAndHttpHost().Request::getPathinfo() == route('pro_class') ? 'layui-this' : ''}}">
                        <a href="{{route('pro_class')}}">产品分类</a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">解决方案</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;">列表一</a></dd>
                    <dd><a href="javascript:;">列表二</a></dd>
                    <dd><a href="">超链接</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">云市场</a></li>
            <li class="layui-nav-item"><a href="">发布商品</a></li>
        </ul>
    </div>
</div>