<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title>Pok&eacute;dex - Pok&eacute;mon Showdown</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//aslpokemonbattling.up.railway.app/style/font-awesome.css" />
	<link rel="stylesheet" href="/theme/panels.css?a38f69c2" />
	<link rel="stylesheet" href="/theme/main.css?c41294a4" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="//aslpokemonbattling.up.railway.app/style/utilichart.css?0.04540526840371162" />
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
				<li><a class="button greenbutton nav-first nav-last" href="http://aslpokemonbattling.up.railway.app/">Play</a></li>
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

	<script src="//aslpokemonbattling.up.railway.app/config/config.js?0.351586180981061"></script>
	<script src="//aslpokemonbattling.up.railway.app/js/battledata.js?0.321468790034247"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/search-index.js?0.7141785317183555"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/pokedex.js?0.5700566123430848"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/teambuilder-tables.js?0.6435491459068114"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/learnsets.js?0.8910814306244303"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/moves.js?0.9841787495266325"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/abilities.js?0.6566203497177443"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/items.js?0.8712615430735073"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/formats-data.js?0.13252047775015807"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/typechart.js?0.390187813443887"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/aliases.js?0.7748635431395421"></script>
	<script src="//aslpokemonbattling.up.railway.app/js/battle-dex-search.js?0.13000792496005298"></script>
	<script src="//aslpokemonbattling.up.railway.app/js/search.js?0.2997560108378452"></script>
	<script src="/js/pokedex.js?609a7d13"></script>
	<script src="/js/pokedex-pokemon.js?d53c5ed4"></script>
	<script src="/js/pokedex-moves.js?54ae38ce"></script>
	<script src="/js/pokedex-search.js?76bb0fe1"></script>
	<script src="/js/router.js?4c529713"></script>

</body></html>
