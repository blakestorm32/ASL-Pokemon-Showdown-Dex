<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title>Pok&eacute;dex - Pok&eacute;mon Showdown</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css" />
	<link rel="stylesheet" href="/theme/panels.css?a38f69c2" />
	<link rel="stylesheet" href="/theme/main.css?c41294a4" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?c2de7be5" />
	<link rel="stylesheet" href="/theme/pokedex.css?81b7ab79" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first" href="//pokemonshowdown.com/"><img src="/images/pokemonshowdownbeta.png" srcset="/images/pokemonshowdownbeta.png 1x, /images/pokemonshowdownbeta@2x.png 2x" alt="Pok&eacute;mon Showdown" width="146" height="44" /> Home</a></li>
				<li><a class="button cur" href="/">Pok&eacute;dex</a></li>
				<li><a class="button" href="//asl-pokemon-showdown-client-production.up.railway.app/">Replay</a></li>
				<li><a class="button purplebutton" href="//smogon.com/dex/" target="_blank">Strategy</a></li>
				<li><a class="button nav-last purplebutton" href="//smogon.com/forums/" target="_blank">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="pfx-panel"><div class="pfx-body">
<?php if ($_SERVER['REQUEST_URI'][0] === '/' && !ctype_alnum($_SERVER['REQUEST_URI'][1])) { ?>
		<form class="pokedex">
			<h1>
				<a href="/">Pok&eacute;dex</a>
			</h1>
			<ul class="tabbar centered" style="margin-bottom: 18px"><li><button class="button nav-first cur" value="">Search</button></li><li><button class="button" value="pokemon/">Pokémon</button></li><li><button class="button nav-last" value="moves/">Moves</button></li></ul>
			<div class="searchboxwrapper">
				<input class="textbox searchbox" type="search" name="q" value="<?php echo @$_REQUEST['q'] ?>" autocomplete="off" autofocus placeholder="Search Pok&eacute;mon, moves, abilities, items, types, or more" />
			</div>
			<noscript><p>
				<strong>Requires JavaScript!</strong>
			</p></noscript>
			<p class="buttonbar">
				<button type="submit" class="button"><strong>Pok&eacute;dex Search</strong></button> <button onclick="alert(['That\'s pretty cool.','Your mom\'s feeling lucky.','I see.','If you feel lucky for more than four hours, perhaps you should see a doctor.'][Math.floor(Math.random()*4)]); return false" class="button">I'm Feeling Lucky</button>
			</p>
		</form>
		<div class="results">
		</div>
<?php } else { ?>
		<noscript><p>
			<strong>Requires JavaScript!</strong>
		</p></noscript>
		<p>
			Loading...
		</p>
<?php } ?>
	</div></div>
	<script src="/js/lib/jquery-1.12.4.min.js"></script>
	<script src="/js/lib/lodash.min.js"></script>
	<script src="/js/lib/backbone-min.js"></script>
	<script src="/js/panels.js?07fae340"></script>
	<script src="/client/play.pokemonshowdown.com/js/client.js?0.23809137824327298"></script>
	<script src="/client/play.pokemonshowdown.com/config/config.js?0.08714094108505344"></script>
	<script src="/client/play.pokemonshowdown.com/js/battledata.js?0.7387920131954815"></script>
	<script src="/client/play.pokemonshowdown.com/data/search-index.js?0.0751530790344761"></script>
	<script src="/client/play.pokemonshowdown.com/data/pokedex.js?0.9869472173532468"></script>
	<script src="/client/play.pokemonshowdown.com/data/teambuilder-tables.js?0.9900099127054602"></script>
	<script src="/client/play.pokemonshowdown.com/data/learnsets.js?0.07419145999289212"></script>
	<script src="/client/play.pokemonshowdown.com/data/moves.js?0.2594151114572909"></script>
	<script src="/client/play.pokemonshowdown.com/data/abilities.js?0.0774547174861171"></script>
	<script src="/client/play.pokemonshowdown.com/data/items.js?0.5147319820103222"></script>
	<script src="/client/play.pokemonshowdown.com/data/formats-data.js?0.29877482188319027"></script>
	<script src="/client/play.pokemonshowdown.com/data/typechart.js?0.28965932392477245"></script>
	<script src="/client/play.pokemonshowdown.com/data/aliases.js?0.6941833160497088"></script>
	<script src="/client/play.pokemonshowdown.com/js/battle-dex-search.js?0.9071790071584305"></script>
	<script src="/client/play.pokemonshowdown.com/js/search.js?0.7538698434158029"></script>
	<script src="/js/pokedex.js?609a7d13"></script>
	<script src="/js/pokedex-pokemon.js?d53c5ed4"></script>
	<script src="/js/pokedex-moves.js?54ae38ce"></script>
	<script src="/js/pokedex-search.js?76bb0fe1"></script>
	<script src="/js/router.js?4c529713"></script>

</body></html>
