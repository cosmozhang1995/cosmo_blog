<div class="header">
	<div class="top-nav-bar">
		<li class="top-nav-item">
			<a class="button" href="{:U('/')}">
				<img src="__IMG_RES__/logo_64.png"/>
			</a>
		</li>
		<li class="top-nav-item top-nav-item-devider">
			<!-- <i class="fa fa-ellipsis-v"></i> -->
			<div></div>
		</li>
		<li class="top-nav-item">
			<a class="button" href="{:U('/articles/')}">
				<i class="fa fa-fw fa-book"></i>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="{:U('/galleries/')}">
				<i class="fa fa-fw fa-camera"></i>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="{:U('/newbies/')}">
				<i class="fa fa-fw fa-paper-plane"></i>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="{:U('/resume/')}">
				<i class="fa fa-fw fa-user"></i>
			</a>
		</li>
	</div>
	<li class="top-nav-item top-user-admin">
		<?php if (isAuth()): ?>
			<a class="button top-user-admin-icon" href="javascript(0);">
				<i class="fa fa-fw fa-settings"></i>
			</a>
		<?php else: ?>
			<a class="button top-user-admin-icon" href="{:U('/login')}">
				<i class="fa fa-fw fa-sign-in"></i>
			</a>
		<?php endif; ?>
		<div class="menu top-user-menu">

		</div>
	</li>
</div>
<div class="main-title-bar">
	{$page_info['title']|default=首页}
</div>