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


<h1>Outline of clues for beginners</h1>
<p>
Every once in a while I try to write down the half-dozen things I would
want to be sure to tell a novice netrek player. Today I started to
jot down an outline of the main things to learn, and I was surprised
how many there are. So here's the outline, roughly in the order
I think people should learn the stuff in. Hope it helps somebody.
<br />
-- Red Shirt
</p>

<p>
<ol>
<li>
<b>1) How to start up the game</b>
	<ol>
	<li>
	A) Find someone at your site who plays, ask for help.
	</li>

	<li>
	B) Find a netrek client binary
	</li>

	<li>
	C) Select a bronco-style server
		i) Run the client with the -m flag
		ii) Learn first on a nearly-empty server.
			a) Fight practice robots.
		iii) Play where you don't get much lag.
	</li>

	<li>
	D) Peruse the "motd", the information shown by the server.
	</li>

	<li>
	E) Join the team with the second-largest number of players.
		i) Wait 10 seconds or so while the numbers fluctuate.
	</li>

	<li>
	F) Make sure UDP is on (+ menu)
		i) If you get motionless torps cluttering your screen, try `='.
	</li>

	<li>
	G) Consider using an improved keymap even before learning the default one.
		i) `h' brings up a window showing most commands with the default keymap
	ii) Edit your .xtrekrc file to add a keymap line, e.g.
			a) keymap: a%q2s]w[f^t_r$e; dgDviWwnrZeyf
	</li>
	</ol>
</li>

<li>
<b>2) Basic flying controls:</b>
	<ol>
	<li>
	A) Setting course. Your ship turns towards the direction indicated.
	</li>

	<li>
	B) Setting speed.
	</li>

	<li>
	C) Locking onto planets
	</li>

	<li>
	D) Slow down when you need to turn, otherwise consider going at max warp.
		i) Each increase in speed halves your turning rate
	</li>
	</ol>
</li>

<li>
<b>3) Identifying friends and foes</b>
	<ol>
	<li>
	A) Know your race, and the enemy race.
		i) Declare peace with the two other races using the war window (`w')
	</li>

	<li>
	B) Galactic map
		i) See where you are.
		ii) See where the enemy ships are.
		iii) See where your teammates are.
		iv) See the cloakers, try to figure out who they are.
			a) Alert status indicates presence of nearby enemy ships.
	</li>

	<li>
	C) Tactical map
	i) Learn what the various ships look like.
	</li>

	<li>
	D) Player list
		i) Bring it up if it isn't already (L command)
		ii) See who's who.
		iii) See who has kills.
	</li>
	</ol>
</li>

<li>
<b>4) Dodging torpedos.</b>
	<ol>
	<li>
	A) Friendly torpedos pass through you, but enemy torpedos hurt.
	</li>

	<li>
	B) Dodge by turning.
	</li>

	<li>
	C) Dodge by accelerating or decelerating.
	</li>

	<li>
	D) Seldom move straight at an enemy ship--makes it too hard to dodge.
	</li>
	</ol>
</li>

<li>
<b>5) Phasering</b>
	<ol>
	<li>
	A) Hit nearby enemies with your phasers.
	</li>

	<li>
	B) Learn how close you need to be to do non-negligible (20+) damage.
	</li>

	<li>
	C) Ships have different strength phasers.
		i) E.g. at a given distance a CA's phaser does 15 more than a DD's.
	</li>
	</ol>
</li>

<li>
<b>6) Firing torpedos</b>
	<ol>
	<li>
	A) Learn the "physics".
		i) Understand why chasing an enemy ship is so dangerous.
	</li>

	<li>
	B) Preferred targets are enemies who are flying towards you.
	</li>

	<li>
	C) Learn to lead torps so as to hit enemies who don't change course.
	</li>

	<li>
	D) Note the 8-torp limit and learn the abort-own-torpedos command.
	</li>

	<li>
	E) Good players will usually dodge your torpedos, so phasers are better.
	</li>
	</ol>
</li>

<li>
<b>7) Refueling and repairing.</b>
	<ol>
	<li>
	A) Read your fuel and damage gauges.
	</li>

	<li>
	B) Show resources on maps.
	</li>

	<li>
	C) Identify fuel and repair planets.
	</li>

	<li>
	D) Identify peaceful planets that you can use, and won't shoot at you.
	</li>

	<li>
	E) Lock onto the planet you want to use and go there (maximum speed).
	</li>

	<li>
	F) Enter repair mode once you're in orbit around the planet.
	</li>

	<li>
	G) Be prepared to raise shields and dodge if an enemy comes close.
	</li>

	<li>
	H) You can repair and refuel out in empty space, but it's slow.
	</li>
	</ol>
</li>

<li>
<b>8) Using the message system.</b>
	<ol>
	<li>
	A) Show the message window with `?', splitting into four classes if desired.
	</li>

	<li>
	B) Learn how to send messages.
		i) With your mouse in the bottom of the two narrow windows below the
		galactic map, type `t' (for team messages) and the message.
		ii) You can also use `A' for messages to ALL, ship-number for messages
		to individuals, or F, R, K, or O to send to a team.
	</li>

	<li>
	C) Read and acknowledge team and personal messages.
	</li>

	<li>
	D) Try to notice messages as they come in.
	</li>

	<li>
	E) Be polite and friendly, but recognize that in a competitive game
	players probably won't take time to chat.
	</li>
	</ol>
</li>

<li>
<b>9) Understanding planet ownership and armies.</b>
	<ol>
	<li>
	A) See which planets are owned by your team, which are owned by theirs.
	</li>

	<li>
	B) Info planets to see if they're agricultural, or to get exact army counts.
	</li>

	<li>
	C) Notice the planet destroyed and planet taken over messages.
		i) Learn the names of the planets.
	</li>

	<li>
	D) Watch your team lose planets. Wish you could help them gain planets.
	</li>

	<li>
	E) Touch planets marked ? so you and your teammates will get info on them.
	</li>
	</ol>
</li>

<li>
<b>10) Bombing</b>
	<ol>
	<li>
	A) Learn what planets are good to bomb.
		i) Only bomb enemy planets (not third-race planets)
		ii) Only bomb when it's t-mode (4 on 4 or whatever)
		iii) Can only bomb planets with 5 or more armies
		iv) Best to bomb undefended planets
	</li>

	<li>
	B) Lock onto a planet to bomb and get there as fast as possible.
	</li>

	<li>
	C) Enemy planets damage you when you're within a certain range.
		i) Keep your shields up when close, unless actually bombing.
		ii) It's okay strategically to let the planet kill you.
			a) Better that than to nurse a crippled ship.
	</li>

	<li>
	D) Once in orbit, hit `b' to commence bombing.
	</li>

	<li>
	E) Watch the bombardier's messages to know when you're done (4 or fewer).
		i) When done, raise your shields and get out of there.
			a) Ideally you've picked out your next target, and can
			immediately lock onto it and hit max-warp.
	</li>

	<li>
	F) Cloak when trying to orbit an enemy planet, so you can't be tractored off
	</li>

	<li>
	G) Assault ships are the best at bombing
		i) AS bombs 0 or 2-4 armies per half second instead of 0 or 1-3.
	</li>

	<li>
	H) Scouts are good too, especially for running around deep in enemy space
	</li>

	<li>
	I) Even if all the enemy planets are "flat" (4 or fewer armies on each),
	it's useful to wait back near them so that when they "pop" to 5 or more
	you can race to bomb the armies before enemies beam them up.
	</li>
	</ol>
</li>

<li>
<b>11) Taking planets</b>
	<ol>
	<li>
	A) Learn each ship's carrying capacity.
		i) Most ships can carry two armies for each kill they currently have
		ii) Assault ships can carry three armies per kill
		iii) Maximum load of 2 for SC, 5 for DD, 6 for BB, 10 for CA, 20 for AS
		iv) It's often unwise to carry more than 6 armies.
	</li>

	<li>
	B) Learn beam up and beam down commands for picking up armies.
	</li>

	<li>
	C) When you beam up armies, send one distress call to inform your team.
	</li>

	<li>
	D) When you're carrying, the enemies will be out to get you. Avoid them.
	</li>

	<li>
	E) Lock onto an undefended enemy planet, cloak, orbit it, bomb it if it
	has 5 or more, and then beam down all your armies.
	</li>

	<li>
	F) Don't dilly-dally. The team wins which takes planets fastest.
	</li>

	<li>
	G) Some planets are better to take than others.
		i) Fuel planets are obviously good.
		ii) Agricultural worlds produce armies faster.
			A) Get info on each planet so you know which are "Agri".
			B) They produce armies very fast when they're at less than 4,
			so don't expect to take one over in two trips.
		iii) There are other strategic considerations, but don't fret over them
			A) This is a common source of pointless arguments
	</li>
	</ol>
</li>

<li>
<b>12) Using tractors and pressors</b>
	<ol>
	<li>
	A) Tractor to pull a ship towards you and you towards it.
	</li>

	<li>
	B) Pressor to do the opposite (push it away).
	</li>

	<li>
	C) In combat, you can use tractors and pressors to help you dodge torpedos.
	i) Sometimes you can use them to screw up your opponent's dodging too.
	</li>

	<li>
	D) Tractors and pressors pull a ship out of orbit.
		i) Instantly stops them from bombing, beaming, fueling.
	</li>

	<li>
	E) Don't leave tractors on too long or you'll run out of fuel.
	</li>

	<li>
	F) Each ship-type has a different tractor-beam range and strength.
	</li>
	</ol>
</li>

<li>
<b>13) Mechanics of cloaking</b>
	<ol>
	<li>
	A) Cloakers don't appear on the tactical map, so watch the galactic
	</li>

	<li>
	B) Enemy cloakers within yellow- or red-alert show as ?? on the galactic map
		i) Also they're shown if they orbit a planet they don't own
		ii) When it's not t-mode they're always shown
	</li>

	<li>
	C) Friendly cloakers show as ?? on the galactic map always
	</li>

	<li>
	D) The position of the ?? is slightly randomized
	</li>

	<li>
	E) You can't fire weapons when cloaked
		i) You must come fully uncloaked before firing
	</li>

	<li>
	F) You can't use tractors or phasers when cloaked
		ii) But you can use them the instant you start to uncloak	
	</li>

	<li>
	G) You can bomb, beam, raise shields, detonate torps, and many other useful
	useful things while cloaked.
	</li>

	<li>
	H) A cloaker can't be tractored, but if a ship is tractored and then
	cloaks, the tractor beam stays on it.
	</li>

	<li>
	I) A phaser hit will reveal the location of a cloaker on the tactical map.
	</li>
	</ol>
</li>

<li>
<b>14) Attacking enemy army-carriers (aka ogging)</b>
	<ol>
	<li>
	A) Know which enemies can carry by examining the player list.
	</li>

	<li>
	B) Track potential carriers on the galactic to see if they pick up armies.
	</li>

	<li>
	C) Predict what planet they'll go to. Try to intercept them.
		i) Appear in front of them so they have the most trouble dodging.
	</li>

	<li>
	D) Cloaking on the approach sometimes helps
		i) To achieve surprise against unwary opponents
		ii) To help avoid getting killed as you approach
	</li>

	<li>
	E) Close in and fire quickly. Use tractors, phasers, torpedos, and your
	own ship's explosion to kill the target. Mutual destruction is good.
	</li>

	<li>
	F) As always, try to dodge or det torpedos: live long enough to kill.
		i) Don't fly exactly straight at the target, or he'll kill you easily
	</li>

	<li>
	G) You can defend a fuel planet against a cloaked enemy by orbiting
	it and firing.
	</li>

	<li>
	H) Enemies are most vulnerable when in orbit
		i) They can't dodge well
		ii) You know more or less where they are
		iii) So fire at the planet while they're trying to bomb or beam down
		iv) You can also sometimes nail ships while they're beaming armies up
	</li>
	</ol>
</li>

<li>
<b>15) Defending armies against bombers</b>
	<ol>
	<li>
	A) Occasionally good for a team to have one player guarding a stockpile.
	</li>

	<li>
	B) If you can use the armies, that's better than guarding them.
	</li>

	<li>
	C) In general, it's cowardly and foolish to stay in your own space.
	</li>

	<li>
	D) Chasing ships (including bombers) is dumb.
	</li>

	<li>
	E) Waiting to pick up armies is reasonable, unless teammates are doing that.
	</li>
	</ol>
</li>

<li>
<b>16) Detonating enemy torpedos</b>
	<ol>
	<li>
	A) Learn the detonation range (somewhat server-dependent).
		i) The farther away you det a torpedo, the less it hurts you.
	</li>

	<li>
	B) Usually wise to detonate any torpedos that would otherwise hit you.
	</li>

	<li>
	C) Important to detonate if very near to other ships.
		i) Torpedos you detonate won't hurt your teammates at all.
		ii) Torpedos that hit you and explode will.
	</li>

	<li>
	D) Especially useful when orbiting.
	</li>
	</ol>
</li>

<li>
<b>17) Clearing planets for army-carriers on your team.</b>
	<ol>
	<li>
	A) Attack enemies in the vicinity of the target planet
		i) Kill them or drive them off
		ii) Sometimes enough just to distract them by your presence.
		iii) Try to detonate torpedos that would hit the carrier.
	</li>

	<li>
	B) Attack ahead of your carrier.
	</li>

	<li>
	C) Once your carrier is in orbit about the target planet, avoid making
	violent torpedo and ship explosions in that area.
	</li>

	<li>
	D) Communication is useful, so the carrier knows when you are
	going to crash the planet, and you know when he's ready for it.
		i) But don't hold everything up by talking too much
		ii) Good players often see what play to make just by looking.
	</li>
	</ol>
</li>

<li>
<b>18) Helping army-carriers in other ways</b>
	<ol>
	<li>
	A) Intercepting oggers. Get between your friend and the attacker,
	and shoot the attacker as he tries to get by you.
		i) Ideally you want to cripple but not kill the ogger. If you
		kill him he just comes back with a fresh ship.
		ii) On the other hand if you kill him, you can go pick up armies
		and present him with a second target to worry about.
		iii) If your friend needs your help he'll fly towards you.
	</li>

	<li>
	B) When your army-carrier is approaching to attack the enemy home world,
	don't kill enemy ships except those near the home world.
	</li>

	<li>
	C) Decoys and double-attacks. Attack or pretend to attack a planet other
	than the planet your friend is planning to take, and hope to draw the
	enemies towards you. Stay cloaked so they don't know who you are.
	</li>
	</ol>
</li>

<li>
<b>19) Helping to take break "last planet stands"</b>
	<ol>
	<li>
	A) Teamwork becomes essential. Use the message window.
	</li>

	<li>
	B) You want one or two carriers, and the rest of the team should help
	by doing a well-timed run at the planet (clearing, decoying, etc).
	</li>

	<li>
	C) Synchronization is important, so set up roughly in a circle around
	the target and charge when the carrier calls `go'.
	</li>

	<li>
	D) Avoid engaging the enemy anywhere but right within shooting range
	of the target planet. You must get there to be of any help.
		i) Exception: if no one on your team has kills, get one.
		ii) Another exception: if your carrier is retreating to refuel
	 	and/or pick up armies, he'll probably appreciate some cover.
	</li>
	</ol>
</li>

<li>
<b>20) Refitting to another ship-type at your home world</b>
	<ol>
	<li>
	A) You have to mostly repair and refuel before it will let you refit.
	</li>

	<li>
	B) If you have 2+ kills and refit to a BB, CA, or DD, you get plasma.
		i) There's a special command for firing plasma.
		ii) Plasma torps costs a lot of fuel, but are big and track.
		iii) They can be exploded by phasers. Best used against cloakers.
		iv) When they explode, they damage everybody nearby.
	</li>
	</ol>
</li>

<li>
<b>21) Starbases</b>
	<ol>
	<li>
	A) Each team gets one starbase. If it dies, there's 20 or 30 minute wait.
	</li>

	<li>
	B) Starbases are strong, but slow, and they can't bomb or take planets.
		i) Mainly they serve to control a small region of space.
		ii) Also they can hold up to 25 armies.
	</li>

	<li>
	C) Killing one usually requires a simultaneous attack by several ships
	coming in from different angles.
	</li>

	<li>
	D) You can lock on a starbase and dock to refuel, repair, and beam armies.
		i) A tractor beam or two facilitates fast docking.
	</li>
	</ol>
</li>

<li>
<b>22) Other places to get information</b>
	<ol>
	<li>
	A) rec.games.netrek newsgroup
		i) The FAQ answers are posted regularly.
	B) web pages
		i) http://factoryx.factoryx.com
	C) Ask veteran players for help
	</li>
	</ol>
</li>
</ol>
</p>


<?
echo "</div>\n";
echo getFooter();
?>
