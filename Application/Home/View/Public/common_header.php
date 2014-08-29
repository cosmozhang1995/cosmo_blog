<div class="header">
	<div class="top-nav-bar">
		<li class="top-nav-item top-nav-item-em">
			<a class="button" href="{:U('/')}">
				<span class="top-nav-content-chinese">喵</span>
				<span class="top-nav-content-english">Me</span>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="{:U('/articles/')}">
				<span class="top-nav-content-chinese">文章</span>
				<span class="top-nav-content-english">Articles</span>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="{:U('/galleries/')}">
				<span class="top-nav-content-chinese">相册</span>
				<span class="top-nav-content-english">Galary</span>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="#">
				<span class="top-nav-content-chinese">玩意</span>
				<span class="top-nav-content-english">Newbies</span>
			</a>
		</li>
		<li class="top-nav-item">
			<a class="button" href="{:U('/resume/')}">
				<span class="top-nav-content-chinese">关于</span>
				<span class="top-nav-content-english">About</span>
			</a>
		</li>
	</div>
	<div class="top-user-admin">
		<?php if (isAuth()): ?>
			<a href="{:U('/settings')}"><?php $user = getUser(); if ($user) echo $user['alias']; ?></a>&nbsp;
			<a href="{:U('/logout')}"><i class="fa fa-fw fa-sign-out"></i></a>
		<?php else: ?>
			<a href="{:U('/login')}">登录</a>
		<?php endif; ?>
	</div>
</div>