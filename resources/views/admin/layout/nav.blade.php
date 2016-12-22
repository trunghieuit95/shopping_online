<ul class="box-left">
	<a class="home-page">
		<!-- <img src="1" alt="icon"> -->
        <h3>hieunt</h3>
	</a>
	<li class="li-rd-page" >
        <a href="{{ url('/admin') }}"><i class="fa fa-home" ></i><span>Trang chủ</span></a>
    </li>
    <li class="li-rd-page" >
        <a href="{{ route('cate.index') }}"><i class="fa fa-navicon" ></i><span>Danh mục</span></a>
    </li>
    <li class="li-rd-page" >
        <a href="{{ route('product.index') }}"><i class="fa fa-navicon" ></i><span>Sản phẩm</span></a>
    </li>
	<li class="next-nav__item--flex-spacer"></li>
		<a class="home-page" href="#">
        <h4><i class="fa fa-power-off"></i> Đăng xuất</h4>
		</a>
</ul>