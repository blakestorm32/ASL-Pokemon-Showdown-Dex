<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title>Pok&eacute;dex - Pok&eacute;mon Showdown</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//aslpokemonbattling.up.railway.app/style/font-awesome.css" />
	<link rel="stylesheet" href="/theme/panels.css?a38f69c2" />
	<link rel="stylesheet" href="/theme/main.css?c41294a4" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="//aslpokemonbattling.up.railway.app/style/utilichart.css?c2de7be5" />
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

	<script src="//aslpokemonbattling.up.railway.app/config/config.js?0.6347035935726917"></script>
	<script src="//aslpokemonbattling.up.railway.app/js/battledata.js?0.360482517067259"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/search-index.js?f50d2d05"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/pokedex.js?0d616961"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/teambuilder-tables.js?633a10ed"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/learnsets.js?feba508f"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/moves.js?c78481bf"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/abilities.js?5a9abe15"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/items.js?74eb1bde"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/formats-data.js?3165c075"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/typechart.js?17da8369"></script>
	<script src="//aslpokemonbattling.up.railway.app/data/aliases.js?f8d133cd"></script>
	<script src="//aslpokemonbattling.up.railway.app/js/battle-dex-search.js?0.5508048809872474"></script>
	<script src="//aslpokemonbattling.up.railway.app/js/search.js?8d4580c8"></script>
	<script src="/js/pokedex.js?609a7d13"></script>
	<script src="/js/pokedex-pokemon.js?d53c5ed4"></script>
	<script src="/js/pokedex-moves.js?54ae38ce"></script>
	<script src="/js/pokedex-search.js?76bb0fe1"></script>
	<script src="/js/router.js?4c529713"></script>

</body></html>
