<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('asset/backend/dist/img/logo.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
    {{--<form action="#" method="get" class="sidebar-form">--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
    {{--<span class="input-group-btn">--}}
    {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
    {{--</button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</form>--}}
    <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
        {{--<li class="header">HEADER</li>--}}
        <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ route('exercise.index') }}"><i class="fa fa-align-left"></i> <span>Exercise </span></a></li>
            <li><a href="{{ route('exercise.package.index') }}"><i class="fa fa-align-justify"></i> <span>Exercise package</span></a></li>
            <li><a href="{{ route('test.index') }}"><i class="fa fa-align-justify"></i> <span>File upload</span></a></li>
            <li>
                {{--<a href="{{ route('myShop.index') }}"><i class="fa fa-shopping-bag"></i> <span>My shop</span></a>--}}
            {{--</li>--}}
            {{--<li><a href="{{ route('order.index') }}"><i class="fa fa-shopping-cart"></i> <span>My Orders</span></a></li>--}}
            {{--@if(Auth::user()->type=='admin')--}}
                {{--<li><a href="{{ route('category.index') }}"><i class="fa fa-list-alt"></i> <span>Categories</span></a></li>--}}
                {{--<li><a href="{{ route('product.index') }}"><i class="fa fa-product-hunt"></i> <span>Products</span></a></li>--}}
                {{--<li><a href="{{ route('shop.index') }}"><i class="fa fa-home"></i> <span>Shops</span></a></li>--}}
                {{--<li><a href="{{ route('article.index') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>--}}
                {{--<li><a href="{{ route('announcement.index') }}"><i class="fa fa-bullhorn"></i> <span>Announcements</span></a></li>--}}
            {{--@endif--}}
            {{--<li><a href="{{ route('board.index') }}"><i class="fa fa-building-o"></i> <span>Board</span></a></li>--}}
            {{--<li><a href="{{ route('subject.index') }}"><i class="fa fa-book"></i> <span>Subject</span></a></li>--}}
            {{--<li><a href="{{ route('question-set.index') }}"><i class="fa fa-sticky-note-o"></i> <span>Question set</span></a></li>--}}
            {{--<li><a href="{{ route('question.index') }}"><i class="fa fa-file-pdf-o"></i> <span>Question</span></a></li>--}}
            {{--<li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>--}}

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
