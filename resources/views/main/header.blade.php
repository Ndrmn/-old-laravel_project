@section('header')
<div class="wrapper">
			<!-- header -->
			<header class="header block">
				<a class="header__logo" href="">
					<div class="header__icon">
						<img class="img" src="../img/logo.svg" alt="">	
					</div>
					<span class="header__logoText">Lasles<b>VPN</b></span>
				</a>
				<div class="header__menuButton">
					<div class="burger burger__close"></div>
				</div>
				<nav class="header__nav hidden">
					<ul class="header__menu">
						<li><a href="../" class="header__button">Home</a></li>
						<div class="header__line"></div>
						<li><a href="" class="header__button">Features</a></li>
						<div class="header__line"></div>
						<li><a href="" class="header__button">Pricing</a></li>
						<div class="header__line"></div>
						<li><a href="/blog" class="header__button">Blog</a></li>
						<div class="header__line"></div>
						<li><a href="/addpost" class="header__button">Add post</a></li>
					</ul>
				</nav>
				<div class="header__sign hidden">
					<button class="header__signIn">Sign In</button>
					<button class="header__signUp">Sign Up</button>
				</div>
			</header>
</div>