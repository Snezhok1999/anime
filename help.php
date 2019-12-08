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
				<li class="el-menu"><a href="top.php"  class='a-m'>Топ-100</a></li>
				<li class="el-menu"><a href="#"  class='a-m'>Помощь</a></li>
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
			<h1 class='h1' style="margin-left: 250px;">Помощь</h1>
			<div class='description help'>
				<h2 style='text-align: center;'>Правила сайта</h2>
				<p>Незнание правил не освобождает вас от ответственности за их нарушение, убедительно рекомендуем с ними ознакомиться.
				На всем сайте категорически запрещены:
				</p>
				<p>1. Расизм, разжигание межнациональной розни, пропаганда фашизма/нацизма<br>
				2. Пропаганда наркотиков и реклама ресурсов, содержащих их рекламу и информацию
				</p>
				<p>По всем техническим проблемам обращайтесь на почту сайта по адресу olya.snezhok@mail.ru</p>
			</div>
		</main>
		<footer>
			<span>&copy;2019 Snezhkova O.D. По всем вопросам пишите по адресу olya.snezhok@mail.ru</span>
		</footer>
	</body>
	</html>
