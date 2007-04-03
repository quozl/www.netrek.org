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


<h1>How the Game Works</h1>
<p>
The netrek universe is a strange one, and works in ways which are in
some cases counter-intuitive.  This section describes some of those workings.
</p>

<p>
The way ships move in netrek is not very "realistic".  They steer more
like cars or boats, always moving the same way they face.  When you click (or
hit k) to indicate desired direction, your ship begins to turn to face that
way.  A ship's turning speed depends on its type (smaller ships turn faster)
and its current speed.  Each extra warp speed you travel halves your turning
rate.  So slow down when you need to turn!  Acceleration and deceleration
rates are also ship-dependent.
</p>

<p>
Ships can pass through each other without harm.  Also ships can pass
over planets, but will suffer some damage from "planetary fire" from hostile
planets.  Torpedos and other weapons are not affected by planets (or vice
versa).  Ships bounce off the walls at the edge of the galaxy without harm.
</p>

<p>
Torpedos move through the "ether" at a constant speed, more like they
would in water than space.  Torpedo speed is warp 12 for cruiser and
battleship torpedos, warp 14 for destroyer and starbase torpedos, and warp 16
for scout and assault ship torpedos.   Torpedos wobble randomly a bit as they
go, and peter out after traveling a somewhat random distance.  Torpedos pass
right through ships on the same team, but explode on impact with hostile ships.
By "on impact" I just mean when they get close enough--about shield radius, the
same distance for all ship-types and the same whether shields are up or down.
Torpedos also explode upon hitting the galaxy wall, and upon being detonated
by a nearby enemy (but not when aborted by the ship that fired them).  The
normal case is when a torpedo hits a hostile ship, and depending on the firing
ship's type it will do 40 (CA, BB), 30 (DD, AS, SB), or 25 (SC) points of
damage.  But if there are other ships nearby when the torpedo explodes, they'll
take damage as well, except that the firing ship is immune to its own torpedos.
If a torpedo is detonated by a hostile ship, its explosion will not hurt
teammates of the detonating ship, but can hurt nearby teammates of the firing
ship.  If a torpedo explodes by hitting the wall, it can hurt enemies but not
friends.  When a ship takes damage from a torpedo explosion at all, the damage
depends on the ship's distance from the explosion.  At maximum detonation
range torpedos do about 1/8 of their nominal damage.
</p>

<p>
When your ship is destroyed, you get to re-enter with a new ship (of
your choice) near your homeworld.  If you had torpedos in the air you have
to wait for them to explode or expire.	Ships explode when they die, damaging
all other ships within a certain radius (the damage drops off with distance).
SB explosions do 200, SC explosions do 75, all others do 100.
</p>

<p>
When you kill an enemy ship you are awarded 1 kill, plus 0.1 per
kill that ship had, plus 0.1 per army that ship carried.  Ships can carry
two armies per kill (or 3 per kill for assault ships), up to their maximum
capacity (2 for SC, 5 for DD, 10 for CA, 6 for BB, 20 for AS).  When you 
die you lose your kills.  You also get 0.25 kills for taking a planet, and
0.02 kills per army bombed.
</p>

<p>
Cloaked ships don't appear on the tactical display, but normally show
up as ?? on the galactic map. Under certain circumstances a cloaked ship won't
register on enemy maps at all, namely when it is out of yellow-alert range (1/7
galaxy width) from any enemy, not orbiting a hostile or 3rd-race planet, and in
t-mode.  Actually change that 1/7 to a 1/3, and those are the conditions under
which an uncloaked ship won't register on enemy maps either.  When the ?? is
shown, its position is randomly offset from the actually position of the ship.
</p>

<p>
You cannot fire weapons or use tractor/pressor beams while cloaked,
but you can do many other things, including bombing, beaming armies, toggling
shields, detonating torpedos, and repairing.  Cloaking costs a fair amount of
fuel per second though.  Uncloaking takes 0.7 seconds, and you can't
fire weapons until you come completely uncloaked.  But you can tractor or
pressor as soon as you start to uncloak.
</p>

<p>
While enemy cloakers look the same as cloakers on your team, your
alert status (Red, Yellow, or Green) can sometimes provide a clue as to who a
cloaker might be.  Your alert status is determined by the distance to the
nearest enemy ship.
</p>

<p>
Phasers are your ship's primary weapons.  You can fire once per
second (faster if a starbase).  The point-blank phaser damage depends on
ship class:  100 for cruisers, 105 for battleships, 85 for destroyers,
80 for assault ships, 75 for scouts, and 120 for starbases.  But the
damage drops off linearly with distance.  E.g. at that the same range
that a cruiser phaser does 25 points, a destroyer phaser would only do 10
points.  When a phaser hits a cloaked ship, the end of the phaser line
segment shows the exact position of the ship (this is called "phaser lock").
</p>

<p>
When your ship has kills, you can beam up armies from a planet your
team owns, if it has five or more armies.  Planets produce armies (called
popping) over time, randomly, usually 1-3 at a time. Each planet gets a chance
to pop every forty seconds or so, on average.  Normal planets pop 10% of the
time when they get a chance, and pop 1-3 armies when they do, and get a 5%
chance at a bonus army when they're below 4 to start with.  Agricultural worlds
have an additional 20% chance to pop 1 army, and also always pop one army
when they start below 4.  You can info a planet to see if it is agricultural.
Planets also sometimes lose armies due to plagues.
</p>

<p>
To bomb an enemy planet, orbit it and press 'b' (once is enough).  You
can only bomb a planet that has five or more armies.  Once you start bombing,
the server gives your ship a chance to bomb every 0.5 seconds.  Then you
bomb 0 (50%), 1 (30%), 2 (10%), or 3 (10%) armies off.  Assault ships bomb
more at a time; they do 0 (50%), 2 (30%), 3 (10%), or 4 (10%). Beaming, by
the way, goes at the rate of 1 army every 0.8 seconds.
</p>

<p>
Bombing and beaming require your shields to be down (they lower
automatically when you start).  You can fire weapons (if uncloaked), and det
torps without interrupting bombing or beaming.  You cannot beam and bomb at
the same time.  Raising shields stops the bombing or beaming process, as does
entering repair mode.  If you time it just right, you can raise shields just
after beaming down an army, hit beam-down again before 0.8 seconds have
elapsed, and not miss a beat.
</p>

<p>
Whenever you are near (almost overlapping) a hostile planet, it shoots
at you invisibly.  The rate of damage is steady, but is higher for each ten
armies the planet has.
</p>

<p>
When you tractor a ship it pulls the ship towards you and you towards
it, but without changing either ship's warp speed.  The amount it moves depends
on ship-type (mass and tractor strength), but not on distance.  BB & SB have
especially long-range tractor beams.  Tractor beams cost 200 fuel per second.
Tractor beams can pull a ship out of orbit, instantly stopping it from bombing,
beaming, or fueling on it; that's why planet-takers usually cloak when beaming
down.  Tractor beams won't grab cloaked ships, but will stay on ships that
enter cloak.  (Note that if you have the visible tractor option on, it will
appear as if your tractor beam is gone when your victim cloaks, but it isn't
-- look for the T flag.)  Pressor beams work the same way, only they push.
Docking to a starbase interrupts tractor/pressor beams.
</p>

<p>
Your ship's engines heat up when you move and especially when you
tractor or pressor.  (The heating rate is one unit per warp speed per second,
plus 5 unit per second that tractor/pressor beams are on.  But your engines
also cool constantly at 6 unit per second, 7 for a DD and 8 for a scout.)
When the temperature is over 100, you have a 1 in 40 chance each tick (tenth
of a second) of getting an engine burnout ("E-temping"), which leaves you at
warp 1 for 10-25 seconds, and without tractors or pressors.  (You can still
steer and orbit though; and whether you can enter repair mode is unclear.)
Similarly, your weapons heat up when you use them, and when your weapon
temperature is over 100 they have a chance of burning out ("W-temp"), leaving
you without weapons for 10-25 seconds.  Detonating enemy torps also heats up
weapons, and you can't det while W-temped.  Weapon temperature is an especially
important concern for starbases, although theirs can go up to 130 (150 on some
servers).
</p>

<p>
Your ship constantly regenerates fuel, repairs its shields (and hull
if shields are down), and cools its weapons and engines, whenever those
operations are needed.  These all happen at constant rates which depend on
ship-type.  E.g. if you're going warp 3 in a cruiser, your fuel tank will be
filling up slowly because the movement isn't costing as much as your ship's
natural regeneration rate.
</p>

<p>
SC, DD, and CA torps & phasers all cost 7 times their point-blank
damage rate, in fuel. E.g. a CA phaser costs 700 fuel.  AS, BB, and SB
weapons cost somewhat more. Detonating enemy torpedos costs 100 each
time you hit the key.
</p>

<p>
To get plasma torpedos, get two kills and refit to a DD, CA, or BB.
Plasma torpedos fire out the front of your ship (except for starbase plasmas),
track a little bit, and damage everyone nearby (even the firer) when they
explode.  They can be exploded by an enemy phaser (or on impact with a
hostile ship or the wall).
</p>

<p>
To refit, you must be orbiting your homeworld or docked to your
starbase, and have 75% shields, at least 75% fuel, at most 75% hull damage,
and no armies.  Refitting freezes your ship for 5 seconds.  It's sometimes
useful to refit to the same ship-type as you had before, e.g. to get plasma,
or to bring your hull damage and engine temperature quickly to zero.
</p>

<p>
When your shields are up, damage you take knocks them down before
hurting your hull.  For some strange reason, the dashboard shows your
shield integrity but your hull damage, so when you're getting hit the one
decreases then the other increases.  Hull damage reduces your maximum
warp speed.  Shields repair all the time, and hull damage repairs at half
that rate but only when shields are down.  You can enter repair mode to
increase your repair rate (2x), especially when orbiting a friendly repair
world (4x) or docked to a starbase (5x).
</p>

<p>
Rank and ratings do not affect the game at all, except that you need
Commander rank or better to pilot a starbase on most servers.
</p>

<p>
Starbases can carry up to 25 armies regardless of their number kills.
Also they come with short-range plasma they can fire in any direction.
Starbases have 500 shields, 600 hull, and lots of fuel.  But they only go
warp 2, and cannot orbit foreign planets.  A team can only have one starbase,
and when it dies they must wait 30 minutes before getting another.  A team
needs to own at least 5 planets to bring in a starbase.
</p>

<p>
Some people have better net connections to the server than others, and
this gives them a pronounced advantage in dogfighting (especially dodging and
detting torpedos).  Playing over a modem, you'll probably have comparatively
bad lag, in the 100s of milliseconds. So you might have to lead your phasers a
bit, because the ship your client displays will have moved by the time the
server gets your phaser packet.  "Packet loss" is an even more serious problem;
your commands might fail to go through, and you might lose updates from the
server.  If you see motionless torpedos or other strange effects, you might
want to request a full update with the = command.  If you lose your net
connection entirely, the server keeps your ship around for a while in case
you come back, then destroys it (if no-one has destroyed your derelict ship),
saying you were killed by "the Ghostbuster".
</p>

<p>
For course changes and firing of phasers and torpedos, the client
(running on your computer) computes the direction from your ship (or where the
client thinks your ship is, in lag conditions) to the location indicated by
your mouse cursor, which may be on the tactical or the galactic map.  It then
sends this direction as a number 0-255, and the server decides what happens
from there.  For tractor and pressor beam engagement, the client finds the
uncloaked ship nearest your cursor (in absolute distance, not direction), and
tells the server you want to tractor (or pressor) that ship.
</p>

<p>
'w' brings up the war settings window.  You can specify Hostile or
Peace with each of the other three races, and then push Reprogram.  You need
to be at peace with a race to use the resources (e.g. fuel) of its planets,
and also to avoid taking planetary fire damage while near them.  You can
even declare peace with your team's enemies and orbit their fuel worlds, but
this will have two effects:  (1) you won't be able to bomb or beam down on
their planets, and (2) if one of them is at peace with your team, your
phasers and torpedos won't hit him.  If you reprogram a setting from Peace to
Hostile, it will freeze your systems for 10 seconds.  (There is also the War
setting, which is what Hostile becomes after you hit an enemy, and disables
resetting back to Peace until next time you die.)
</p>

<p>
Bonus trick for reading all of this:  if you hold down the max-warp
key while out of fuel, you'll fly pretty fast (e.g. between 8 and 9 for a
scout) and cool your engines!  (Discovered by Erik Lauer)  Along similar
lines, it's hard to tractor someone off a planet if he holds down the
orbit key.
</p>


<?
echo "</div>\n";
echo getFooter();
?>
