<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../set_my_root.php';
require '../nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<center><h1>Netrek Newbie Manual: Appendices</h1></center>

<p>
Earlier versions of the <a href="../beginner/newbie.php">Netrek Newbie Manual</a> 
were much longer than the
present version. People have shorter attention spans, and for most
folks, it's more fun to actually start playing than to read endless
manuals. 

<p>
This set of appendices contains some of the material that was
cut, the idea being that you can read the basic manual and play
some, and then read some or all of this if and when you want to. 


<h2>Contents:</h2>
<ol>
<li><a href="#basicglossary">Newbie Glossary: 11 Key Terms</a></li>

<li><a href="#pattern">Pattern of a Typical Game</a>

<li><a href="#ogging">Ogging 101</a></li>

<li><a href="#planetdefense">Planet Defense, brief intro</a>

<li><a href="#escort">A few quick notes on flying Escort</a>

<li><a href="#meatballs">Plasma Torpedos, Now That's A Spicy Meatball!</a></li>

<li><a href="#network">Network Stuff: Lag, Loss, Ghostbusts, and Updates</a></li>


</OL>

<hr width="75%">

<p>
<h2><a name="basicglossary"></a><b>Newbie Glossary: 11 Key Terms</b></h2>
<br><p>
Netrek has evolved a large range of terms. There's a full glossary
in the clueguides section, but here are just a few key terms newbies
should know.

<br><p>
<ul>
<li><b>+ or ++</b>: Carrying armies, e.g. "R9++" means that R9 has armies.
<li><b>AGRI</b>: An agricultural planet. These grow armies fast, and are very important. Most clients show them with the planet name all in capitals.
<li><b>Rock</b>: The least useful planets. Not AGRI, no fuel, no repair.
<li><b>Pop</b>: When a planet grows more armies, it has "popped". 
<li><b>Pops</b>: Armies. As in "I'm in ur core, bombing ur pops".
<li><b>Synch</b>: Synchronize. When attacking a starbase, "sync on d" means to time your approach so that you reach the target at about the same time as your teammate in ship d. A bunch of synch'd ships is a "wave".
<li><b>Tournament Mode, T-Mode, or just T</b>: When there are at least 4 players on each of two adjacent teams, the server goes into T Mode. Without T, you usually dogfight and wait for more players; you can't bomb planets, and if you take any, robots start hunting you. Stats are only recorded during T-mode, so playing out of T doesn't affect your rank. 
<li><b>Det</b>: To detonate torpedos. 
<li><b>Kill Flat, KF</b>: A team is kill-flat when they have no ship with a kill, other than perhaps their starbase. This means that they can't carry armies and take planets until one of them gets a kill. 
<li><b>DI</b>: "Destruction Inflicted". A statistic used for the rank system. 
<li><b>Scum</b>: To somehow take advantage of a situation, usually in an annoying way. For example, "Kill Scum" kill crippled enemy ships in order to get the rating points even if it's bad for their team to kill that particular ship. "Pizza Scum" leave their ships sitting while they go eat pizza.
</ul>

<p>
<h2><a name="pattern"></a><b>Pattern of a Typical Game</b></h2>
<br><p>

<p><center>Standard Netrek games follow certain patterns.</center>

<p><center><h4>1. Opening, the game starts</h4></center><br>

<p>The teams have all their planets and usually about 30 armies per planet.
So, the object in this stage is to bomb out as many of the enemy's armies
as possible, while preventing them from bombing out your own. Until the armies
are gone, capturing planets usually is a waste of time, 
because the enemy will have plenty of armies to take
them back with. 

<p><center><h4>2. Normal Play</h4></center><br>

<p>Most of the armies are bombed away, so the players concentrate
on capturing the enemy planets. Players get kills, try to carry and
take, bomb, try to stop incoming carriers, etc. 

<p>
This phase is a bit like arm wrestling; 
evenly matched teams can push back and forth gaining only a little 
ground, for a long time, until something starts to give. In pickup
games, the tide often turns based on good players joining or leaving
the game. Eventually, one side will be substantially pushed back.

<p>Often, there's a desperate wait for armies: The teams have 
used up most of their armies trying to take planets, 
so they are waiting for more to grow on their own planets so 
they can take the enemy planets. Meanwhile, they are trying to make
sure they bomb the enemy's new armies before they get picked up. 
When they do get picked, the other team tries to destroy the carrier 
before a planet can be taken. 

<p><center><h4>3. Endgame, the Last Planet Defense</h4></center><br>

<p>By now, One of the teams has lost a bunch of planets. It only has
a few of the ones near its homeworld. They don't have many armies to recapture
their worlds because they don't have many worlds to grow them. But their
worlds are well defended because when ships are killed, 
they come in real close to the remaining planets.

<p>In a pickup game, this stage can last for hours if the 
winning team isn't aggressive or
well-enough organized to take those last few worlds. Eventually, either
the defending team manages to push back (and the game goes back to stage 2), 
or the team on the offensive takes all but one or two planets, starting
the twenty minute surrender timer. 

<p>At this point, the defending team is desperate to properly use the few
armies they get in order to get back to three or four worlds. If they can
get to three, the timer freezes, and four will reset it, a significant setback
for their opponents. Armies grow slowly enough that they'll only get a 
few chances at this. Meanwhile, the team on the offensive is trying to make
sure that this doesn't happen, and additionally is trying to take those 
last one or two worlds for complete victory before the timer runs out. 

<p>
As in arm wrestling, sometimes a team will pull back from the brink; it is
not at all unknown for teams to go from Last Planet Standing (one world
left) back to a balanced situation (stage 2) and then on to winning. 

<p>
Once a team wins, there's an announcement, a victory parade, and then the 
galaxy resets to a new configuration to set up for the next game.




<p>
<h2><a name="ogging"></a><b>Ogging 101</b></h2>
<br><p>
Ogging is the art of killing a carrier, or potential carrier, by a suicide
run. The basic idea is to cloak before you get on his tactical, run up
to him until youre about half an inch away, then tractor-phaser-torp-torp-torp
until he dies. Ogging is a simple tactic and any dummy can do it. On the
other hand, ogging well is an art, involving exactly when to uncloak, how
fast to go, etc. 


<p>Two good oggers working together should be able to kill
the target every time, unless the target is a Starbase. When ogging with someone else, it is important that you do not
both come from the same direction. If you do, your target can turn and
shoot at both of you at once. When I do it, I watch what direction my teammate
is coming in and decide which direction the target must run in to reach
his teammates, and attack him from that direction.

<p>Ogging a starbase: Enemy starbases can be very inconvenient. Killing
one requires a coordinated effort. Typically wave after wave of ships gang
up on the starbase and do suicide runs into it, firing everything they
have and then hopefully exploding right over it. However, it's harder than
it sounds. 

<p>Keys to a good ogg are:

<p>&nbsp;&middot;all oggers uncloak at once. If you do not, the base can
pick you off easily one at a time. Thus, if you know youre going to have
a head start on the other oggers using a heavy ship (BB/AS) is a good idea.
Conversely, dont take one if it will make your team wait for you.

<p>&nbsp;&middot;oggers come from different directions, for much the same
reason that ogging a normal ship from the same direction is inefficient.

<p>&nbsp;&middot;the ogg does not take place with a lot of the bases teammates
defending. One defender ~ two oggers, so minimize the defenders. Its not
enough to call an ogg when the base is alone, you also have to watch the
galactic to make sure that the enemy is not heading towards the base, otherwise
by the time your ogg gets there he could have several defenders.

<p>&nbsp;&middot;dont maxwarp directly at the base once you are on his
tactical! It is trivial for a good base to tell you are heading in a straight
line and pick you off with torps or phasers! If you head in at about warp
7 (in a CA) you will be able to dodge torps much more easily. It can also
be a good idea to fly at a point an inch or so to the side of the base
until you get close to him, to throw him off more.

<p>&nbsp;&middot;having an uncloaked CA/BB/AS lobbing torps (plinking)
at the base while the others are ogging can help a lot against a relatively
undefended base. With more defenders, it becomes much less effective. CRITICAL
to this is that you should NOT plink from the side of the base that the
oggers are coming in from. If you do, he can pressor off you to move away
from the oggers (and towards his team) much faster! Get behind the base,
and force him into your oggers! If, when you do this, the base tractors
you, you have two options. You can reverse direction, tractor him, fire,
and try to do as much damage as you can, finishing by exploding on him.
Or, you can slam on the maxwarp while firing torps at him. The latter is
more effective before an ogg, because the base will be forced to use more
wtemp phasering you and likely wtemp completely during the ogg. The former
option is only recommended if you are low on fuel or if youre youre really
close to the base when he starts firing.

<p>&nbsp;&middot;if the base has ships docked on it and does not pressor
them off, fire at them. Each docked ship that you blow up does an additional
100 points of damage to the base as well as preventing them from firing
at the other oggers.


<p>
<h2><a name="planetdefense"></a><b>A Brief Intro to Defending Planets</b></h2>
<br><p>

Sometimes you will notice several ships, some of them cloaked, heading
towards a planet of yours. If you have time, check the player list. If
players with kills are coming in, they can be carrying armies and so may
be trying to take a planet. Be especially wary of cloakers, the classic
planet taking tactic. At this point you need to destroy the enemy ship(s)
at all costs. Go especially for cloakers and anyone trying to orbit the
planet. Call for help! Kill the carrier! Exploding on him works, but remember
that a ship dropping armies is very vulnerable. His shields are down and
he is following a precise little circle. A cloaked orbiting ship is easy
to hit, so kill it! Also, if he is foolish enough not to cloakor out of
fuel! -- tractor him out of orbit so he cannot drop.

<p>&nbsp;Sometimes it is useful to just orbit a planet to protect it. This
not only acts as a deterrent, but while you are orbiting you will have
so little else to do that you can watch for incoming takers and warn your
time in time. When takers approach (watch the galactic!) stop orbiting
the planet, and start flying. You cannot dodge while orbiting and so you
will be easy to kill if you do not start moving. 
Plus you have some acceleration
time, and you need to be fully up to speed by the time you engage.
Sometimes you will notice several ships, some of them cloaked, heading
towards a planet of yours. If you have time, check the player list. If
players with kills are coming in, they can be carrying armies and so may
be trying to take a planet. Be especially wary of cloakers, the classic
planet taking tactic. At this point you need to destroy the enemy ship(s)
at all costs. Go especially for cloakers and anyone trying to orbit the
planet. Call for help! Kill the carrier! Exploding on him works, but remember
that a ship dropping armies is very vulnerable. His shields are down and
he is following a precise little circle. A cloaked orbiting ship is easy
to hit, so kill it! Also, if he is foolish enough not to cloakor out of
fuel! -- tractor him out of orbit so he cannot drop.

<p>&nbsp;Sometimes it is useful to just orbit a planet to protect it. This
not only acts as a deterrent, but while you are orbiting you will have
so little else to do that you can watch for incoming takers and warn your
time in time. When takers approach (watch the galactic!) stop orbiting
the planet, and start flying. You cannot dodge while orbiting and so you
will be easy to kill if you do not start moving. 
Plus you have some acceleration
time, and you need to be fully up to speed by the time you engage.

<p>If you are the only one in the area in and you must defend a planet,
your job st to delay the enemy until help arrives 
(you did call for help when you saw that
enemy formation approaching on the galactic map, didnt you?) Critical
to this is <b>getting between the enemy and the planet</b>. 
Then they have to go through you, not you through them, and you have room to
retreat/buttorp. If you can do this, you have a very good chance of at
least delaying the take until help arrives. Failing that, you
basically have to ogg the carrier, if you can figure out which ship it
is. It will obviously be someone with kills. Also, some people will be
known carriers. You can tell when someone beams up armies, if the
armies icon suddenly disappears from the planet they are orbiting
(from one of their planets, obviously; if it disappears from one of
your planets you just got bombed!) Often you will see messages of the
form 6++ @ CAPor just 6++. This means that player number six just
picked up armies at Cappella.  If you see someone pickup, dont
hesitate to tell your team with a similar message. (Hint: use macros
for this! See section 5.2.) Lock onto the enemy carrier, maxwarp,
cloak, get inside the enemy formation, uncloak just before reaching
him, tractor him (this helps hold him and pull him into your
torpedoes) and fire everything you have, exploding in a burst of glory
right over him, and killing him. If there is just a single unescorted
taker going for a planet you can ogg him as described above, but you
might try coming in uncloaked. Sometimes this will scare him enough to
make him turn around, as he doesnt want to get killed while
carrying. This doesnt work on anyone who can kill you easily,
obviously.


<p>
<h2><a name="escort"></a><b>A Few Notes on Flying Escort</b></h2>
<br><p>

A single carrier (of armies) can get killed quite
easily, especially if the opposing team considers that he must be killed
in order to save a planet. So unless the planet in question is totally
open, takers (carriers) need escort to protect them from enemy ships 
while they beam down armies. You will therefore sometimes see
requests for escort (in the team message window.) If you are in the vicinity
and free, help that player make it to their chosen destination. 

<p>To do this,
it is best to arrive ahead of the carrier, and clear out enemy ships. The
idea is to protect the taker; if you kill and damage the ships in
the vicinity it makes it easier for the taker to take. Often, however you
will not be able to kill all the ships nearby. In this case, when your
carrier arrives, you must protect him from enemy fire. The taker is very
vulnerable while dropping armies as his shields will be down. Position
yourself between the taker and the enemy if at all possible, and distract
the enemy ships by engaging them. You can also detonate enemy torps that
would hit your carrier, by pressing the d key. (The torpedoes in question
must be quite close to you for this to work. Experiment to get a feel
for the maximum range; the farther away they are when they blow, 
the less damage they do.)

<p>The point of the exercise: keep the carrier alive long enough to take the
planet, at all costs. (Obviously don't escort if you are carrying yourself,
if at all possible. Usually it isn't. Sometimes you may have time to beam
down your armies to a safe location first.) Do NOT fire torpedoes over
the planet where enemies can det them; your teammate will take damage when
they blow!




<p>
<h2><a name="meatballs"></a><b>Plasma Torpedos: Now That's A Spicy Meatball!</b></h2>
<br><p>
You may have noticed some players using plasma torpedos. Plasma torpedos 
are usually a bit larger than regular torps, you can only have one in flight
at a time, and, here's the kicker, they home in on targets instead of just
flying straight. They also do a lot of damage, and move a bit faster than
regular torps. 

<p>
On most Bronco servers, you can get plasma torps if you have two
or more kills. The way to get them is to go to your homeworld and refit
to a new ship (even if it's the same kind of ship you already have). 
Starbases automatically have plasma torps, 
SC's (Scouts) and AS's (planetary Assault Ships) can't use them.

<p>
Plasma costs a lot of fuel, and also heats up your weapons a lot; using
plasma well is pretty hard. Plasma torps don't home perfectly; they can
be dodged, although it's much trickier than a normal dodge. 
Plasma has one more downside for ships
using it: it can be stopped by phaser fire. 

<p>
If a plasma torp is coming towards you, you can phaser it to destroy it.
This means the attacking ship has just used a lot of fuel and heated up
their guns with little gain. 

<p>
<h2><a name="network"></a><b>Network Stuff: Lag, Loss, Ghostbusts, and Updates</b></h2>
<br><p>

<b>Lag</b>. The Internet is not perfect, 
and canna break the laws of physics. If you are
sitting in California and playing on a server in Maine, or Australia, your
commands will take a little while to get there and back again. Further, 
depending on what "roads" the commands have to take, they can hit the
equivalent of bad traffic, such that even if you are playing on a server that
is close to you physically, your commands will take just a bit longer to
execute than you might wish. This effect is called "Lag". You can check your
lag on most clients by pressing "," (unless you've remapped
things so that the key does something different) to bring up a 
network info screen.
It's possible to play with pretty bad lag; on a dialup modem line you
can routinely expect over 200 milliseconds (1/5 of a second).
This is a pain but playable; you just have to anticipate well. 
(hint: dodge before youre fired upon, and lead
with your phasers, not just torpedos.) A few people routinely play with
half a second of lag, but that's pretty hard. A good broadband connection,
by contrast, can get you 30ms or even faster. On poor connections,
you may not be able to play at 50 frames per second, and will have to 
set your client to back down to 10 fps. 
<p>
If you are playing over a modem link, shorter packets (bunches of
information from you to the server and back) will give you
faster response time; look for an "MTU" setting in your PPP configs,
and set it to 1006, or even 500. Do remember to switch it back later,
though, because it will make big downloads slower; longer packets
are better for those. You almost certainly will not be able to
play at 50 frame per second; 10 is more realistic.
<p>
<b>Packet Loss</b>. Perhaps worse than lag is packet loss. In this case, 
some of the information gets lost on its way from your client to the server,
or on the way back. The network info screen also shows packet loss. Once
in a while happens to everyone, but regular packet loss sucks. If a packet 
coming from your client gets lost, your command may not get through. 
If a packet coming back from the server gets lost, your client may not know to
change something on the screen. 

<p>If you see a strange leftover 
artifact such as a phaser or couse locked line that just hangs 
around indefinately, you have probably lost an update. You can request
a small update from the server using the "-" key and a full update 
from using the "=" key. (Unless you've remapped
things so that the keys do something different). This should clear things
up. 

<p>If communication gets really bad, or if there's a momentary complete
outage between your client and the server, you may be <b>Ghostbusted</b>,
which means that the server has decided that you are gone, and frees up
your player slot. If this happens, your client will try to recover;
if it can't, then the only thing to do is quit out and start up again.
If you see a player get killed and not come back, but their slot
is still up on the playerlist, they may be in the process of being
ghostbusted. 

<p>The internet moves packets around in two basic ways, UDP and TCP. 
UDP is faster, but gets lost more easily. Netrek uses UDP whenever
possible, but sometimes firewalls won't let UDP through. For some firewalls
(but these days, mostly only heavy-duty corporate firewalls and 
local software like ZoneAlert configured in it's more paranoid forms) 
you might need to set your firewall to pass port 2592 for UDP. 
Your average cable modem or dsl user does not have to do this. There are
configuration files to use TCP only in case UDP just isn't possible.




  </body>
</html>




<?
echo "</div>\n";
echo getFooter();
?>
