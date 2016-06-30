<nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php">
				<span class="glyphicon glyphicon-fire"></span> 
				Blue Beard Pictures
			</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="<?= (($currentTab == 'home') ? active : ''); ?>">
					<a href="home.php">Home</a>
				</li>
				<li class="<?= (($currentTab == 'support') ? active : ''); ?>">
					<a href="support.php">Support</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lists <span class="caret"></span></a>
					<ul class="dropdown-menu" aria-labelledby="about-us">
						<li><a href="init_users.php">Users</a></li>
						<li><a href="init_companies.php">Companies</a></li>
						<li><a href="init_industries.php">Industries</a></li>
					</ul>
				</li>
				<li class="<?= (($currentTab == 'contact') ? active : ''); ?>">
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php echo "tab: " . $currentTab; ?>