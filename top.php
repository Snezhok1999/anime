	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stili.css">
			</head>
	<body>
			<header>
			<h1 class="hello">Привет, <?php echo $username; ?><br><a href='#' class='h2'>Личный кабинет</a></h1>
			<ul class='menu'>
				<li class="el-menu"><a href="log1.php" class='a-m' >Главная</a></li>
				<li class="el-menu"><a href="katalog.php" class='a-m'>Каталог</a></li>
				<li class="el-menu"><a href="#"  class='a-m'>Топ-100</a></li>
				<li class="el-menu"><a href="help.php"  class='a-m'>Помощь</a></li>
				<li class="el-menu"><a href="str.php" class='a-m' >Выход</a></li>
			</ul>
			<div class='search'>
				<form method='post' class='search-1' action='/'>
					<input type='text' placeholder='Поиск аниме' class='field'>
					<input type='submit' class='lupa' value=''>
				</form>
			</div>
		</header>
		<main>
			<h1 class='h1 katalog'>Топ-100 аниме</h1>
				<ul class='list list2'>
					<li class='el-anime2'>
						<a href="log1.php" class='a-m'>
						<figure>
							<p>1 место</p>
						<img src='chk.png' alt='Черный клевер'><br>
						<figcaption>Черный клевер</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="log1.php" class='a-m'>
						<figure>
							<p>2 место</p>
						<img src='ua.jpg' alt='Убийца Акамэ!'><br>
						<figcaption>Убийца Акамэ!</figcaption>
						</figure>
						</a>
					</li>
						<li class='el-anime2'>
						<a href="log1.php" class='a-m'>
						<figure>
							<p>3 место</p>
						<img src='bb.jpg' alt='Бездомный бог'>
						<figcaption>Бездомный бог</figcaption>
						</figure>
					</a>
					</li>
					<li class='el-anime2'>
						<a href="log1.php" class='a-m'>
						<figure>
							<p>4 место</p>
						<img src='n.jpg' alt='Наруто'><br>
						<figcaption>Наруто</figcaption>
						</figure>
						</a>
					</li>
				</ul>
				<ul class='list list2'>
					<li class='el-anime2'>
						<a href="log1.php" class='a-m'>
						<figure>
							<p style="color:pink;">5 место</p>
						<img src='b.jpg' alt='Блич'><br>
						<figcaption>Блич</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="log1.php" class='a-m'>
						<figure>
							<p style="color:pink;">6 место</p>
						<img src='v.jpg' alt='Ванпанчмен'><br>
						<figcaption>Ванпанчмен</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="log1.php" class='a-m'>
						<figure>
							<p style="color:pink;">7 место</p>
						<img src='tg.jpg' alt='Токийский Гуль'><br>
						<figcaption>Токийский Гуль</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="log1.php" class='a-m'>
						<figure>
							<p style="color:pink;">8 место</p>
						<img src='zg.jpg' alt='За гранью'><br>
						<figcaption>За гранью</figcaption>
						</figure>
						</a>
					</li>
				</ul>
		</main>
		<footer>
			<span>&copy;2019 Snezhkova O.D. По всем вопросам пишите по адресу olya.snezhok@mail.ru</span>
		</footer>
	</body>
	</html>
