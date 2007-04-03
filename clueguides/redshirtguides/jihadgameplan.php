<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../../set_my_root.php';
require '../../nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>


<h1>Buddhist Jihad game plan, first draft</h1>
<p>
<h2>ATTENDANCE</h2>
	Please respond to scheduling mail promptly.<br />
	Please show up a few minutes early to warm up and get assignments.<br />
	Everybody who shows up will get to play at least half the game.<br />
		We'll make substitutions mid-way through the game.<br />
		Everybody gets equal playing time regardless of ability.<br />
	Try the observer port if you get a wait queue on the regular one.<br />

<p>
<h2>COMMUNICATION</h2>
	Use messages mainly to inform us of your ship's status.<br />
	Always distress once after beaming up armies.<br />
	Keep the team board free of clutter so we can see the distresses.<br />
	Don't criticize or argue.<br />
	Don't discuss what happened on the last play; concentrate on the next.<br />
	Don't flood the team board with repetitive messages.<br />
	Don't tell others what to do.<br />
	Use my RCDs and macros or something similar.<br />
<pre>
dist.e.taking: %T%c->%O ESCORT! %a armies to %L @ %n.  Currently at %B in a %S
mac.k.T:  I'm going back to pick up armies.
mac.K.T:  Picking up armies from %L.
dist.help:%T%c->%O %?%S=SB%{HELP SB @ %B %d%% dam  %w%% wtemp  %a armies  %s%% shd  %f%% fuel%!HELP @ %B! %a armies  %f%% fuel       %d%% dam %} %?%E=1%{ *ETEMP*%!%?%e>80%{%e%% etemp%}%}%?%W=1%{ *WTEMP*%}
dist.carrying:%T%c->%O CARRYING %a armies @ %B.  %f%% fuel      %d%% dmg   %e%% etemp% in a %S
dist.j.escorting: %T%c->%O ESCORTING %g.  At %B with %f%% fuel.
dist.O.base_ogg: %T%c->%O *** OGG BASE *** OGG BASE *** OGG BASE *** SYNC ON:  %g
mac.C.T:  Crushing their base right now
</pre>

<p>
<h2>CARRYING</h2>
	Beam up armies any time you can; they'll just get bombed otherwise.<br />
	It's no big deal if you get dooshed with armies.<br />
	Everybody should be a part-time planet-taker.<br />
	Don't save armies for anyone else if you can carry them yourself.<br />
	Don't try to give the armies to a better player or other silliness.<br />
	Having multiple carriers is very good, if they're spread out.<br />
		Try for separate planets.<br />
		Run when chased, drawing the oggers away so others can take.<br />
	Your weapons work just as well when you carry, use them.<br />
	Take what's open; don't obsess over "the planet we need".<br />
</p>

<p>
<h2>GENERAL</h2>
	Hurry to the front with each new ship, barring emergencies near home.<br />
	Slow down and conserve fuel once you're in good position.<br />
	Ideal position is the middle of their front.<br />
	Phaser more, torp less; these guys can dodge.<br />
	Make it hard for them to kill you (even when you're escorting!)<br />
	Do the nearby stuff.  Don't fret about stuff you can't get to.<br />
	Try to be aware of the carriers on both teams, but especially ours.<br />
	Also be aware of armies and of ships with kills.<br />
	Don't try to ogg to much, you'll just get runner-scummed.<br />
	When they send a wave, shoot the escorts or whomever you can hit.<br />
	Phaser & det consistently enough that we can rely on you to do so.<br />
	If a teammate flies towards you, he probably wants your help.<br />
	Make our ships efficient and theirs inefficient.<br />
	Trick them; be creative.<br />
	Stay spread out to catch their carriers and to cover pops.<br />
	Bomb whenever you're the nearest ship.<br />
	Play your favorite ship-type, but if you ask me, scouts suck.<br />
	If you're too lagged to fight, try cloak-decoying, or just bombing.<br />
</p>

<p>
<h2>ANTI-BOMBING</h2>
	Don't waste time chasing their bombers (except towards their space).<br />
	We often want to have one ship with kills waiting for pops.<br />
		E.g. wait near our agris & get position on their bomber.<br />
	Often good to protect a planet against bombing for a few seconds,<br />
		if you know a teammate is coming to pick up there.<br />
</p>

<p>
<h2>SERVER PECULIARITIES</h2>
	We'll pick a race depending on the agri and fuel lay-out.<br />
	When both captains have sent 'start', there's a poof (all destruct).<br />
	60 seconds later, there's another poof and the game starts for real.<br />
	Planets start at 17 armies each.<br />
	Game lasts 90 minutes, with possible 30 minute sudden-death overtime.<br />
		There's a poof to start overtime.<br />
		Victory condition is 11 planets with them have at most 8.<br />
	Captains have commands for pausing and for freeing ghostbusted slots.<br />
	Otherwise like wormhole.  No transwarp, no suped DD/AS/BB, no robots.<br />
</p>

<p>
<h2>OPENINGS</h2>
	I'll try to give each of you an assignment for the first ship.<br />
		Depending on where enemies are you may have to wing it.<br />
	Shoot them as they go by, but don't turn around to chase their bombers.<br />
	I tend to emphasize bombing their front & saving some of our front.<br />
		That way we can get off to a fast start.<br />
</p>

<p>
<h2>OUR BASE</h2>
	Please volunteer to starbase if you'd like to.<br />
	Our base will primarily be for space control.<br />
		Ideal position is the middle of our front.<br />
		Base should kill or maim any enemy who dares approach.<br />
		Base should usually tractor teammates who fly towards it.<br />
		Base should often pressor teammates who fly away from it.<br />
	Det & fire for a w-temped base.  Dock or stop for fuel.<br />
	Don't retreat with the base, much better to mutual or attack planets.<br />
</p>

<p>
<h2>THEIR BASE</h2>
	Only our field-captain (probably me, Neeraj, or Al) calls base ogs.<br />
	Feel free to plink (fire torps at) their base at any time.<br />
	Normally I'll warn you a couple minutes before I call a base og.<br />
		Don't tipping them off by attacking early.<br />
	I'll usually call the og to be synched with a fresh ship.<br />
	If you're taking planets or something, you needn't join the og.<br />
		We're probably better off having them chase you while we og.<br />
	We'll usually only do one wave; if the base retreats under cover, fine.<br />
	Use your judgement after the second wave; if you can get through, cool.<br />
</p>

<p>
<h2>WHEN WE'RE BEHIND</h2>
	Tractor & phaser to mutual with enemies in our space.<br />
	Stick with the game plan.<br />
	Don't get upset.  Do your best.<br />
</p>

<p>
<h2>WHEN WE'RE AHEAD</h2>
	Avoid mutualing.  Dying is often better, so they'll be low on fuel.<br />
	We want them to chase our carriers all over creation.<br />
	It's unreasonable to expect to stop them from retaking in their space.<br />
	Win the war of attrition, i.e. deliver more armies than they can.<br />
</p>

<p>
<h2>THE BUDDHIST JIHAD ATTITUDE</h2>
	Stay relaxed and alert.<br />
	Don't worry about the outcome; just do your best at each moment.<br />
	We don't have to stop them; they have to stop us.<br />
</p>


<?
echo "</div>\n";
echo getFooter();
?>
