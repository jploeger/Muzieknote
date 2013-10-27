<?php include "header.php"; ?>

		<nav class="main-nav" role="navigation">
			<a href="/index.php" id="logo-icon"><img src="images/logo-icon@x2.png" alt="Muzieknote logo icon"></a>
			<ul>
				<li><a href="/index.php">Home</a><li>
				<li><a href="/evenementen.php">Evenementen</a><li>
				<li><a href="/aanvragen.php">Nummer aanvragen</a><li>
			</ul>
			<input type="search" placeholder="Zoeken...">
		</nav>

		<header class="site-header">
			<img class="site-header-logo" src="images/muzieknote-logo@x2.png" alt="Muzieknote logo">
			<div id="inloggen">
				<h3>E-mail adres</h3>
				<input type="search" placeholder="email@domein.nl">
				<h3>Wachtwoord</h3>
				<input type="search">
				<a href="index.php"><button class="orange">Inloggen</button></a>
				<a id="pass-forgot" href="wachtwoord.php">Wachtwoord vergeten?</a>
			</div>
		</header>

<?php include "footer.php"; ?>