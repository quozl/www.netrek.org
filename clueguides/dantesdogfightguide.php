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

// echo getSidebarDownload();
echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<h1>Dante's Dogfight Guide - Basics, Mechanics, Strategy</h1>
<center>Note: This copy has been spellchecked and formatted for www.netrek.org; the author's original is at <a href="http://www.geocities.com/dantes_tb3/">http://www.geocities.com/dantes_tb3/</a></center>
<h2>
<a name="WordFromAuthor"></a><b>Word from the Author</b></h2>
Netrek is a 16-player online game, open source & freeware. For the
unfamiliar, I invite you to visit 
<a href="http://www.netrek.org/">www.netrek.org</a>
to find resources and how to play.
<p>
Netrek is an extremely fun and deep game. It the most difficult game to
master that I am aware of. It is the only action/strategy game that I
know of that people play for years and quite literally thousands of hours.
<p>
At the moment, this site is host to my dogfighting guide. I have written
it since in my opinion good advice on how to actually fly a netrek ship
has been extremely sparse, and most people never really figure it out.
<p>
Dogfighting is very hard to learn. High level dogfighting requires reflexes,
which require repetition and manual dexterity. But it's very, very fun.
<p>
Summary of Qualifications:
<ul>
<li>Space Control/Dogfighting specialist</li>
<li>League Seasons: 1995, 1998, 1999, 2000, 2001, 2002</li>
<li>League Championship Teams: Frickin' Leprechauns, Evil Empire/Zero Wing</li>
<li>Dogfighting Practice Partners: Psychosis/psychos, Stoopit/Lee, pissedoffguest/tseug</li>
<li>Offense rating 2.0 - 3.0 as desired.</li>
</ul>

You can trust my guide. I'll spruce it up a bit over time.
If you see me online & sucking, just remember - anyone can get rusty. 
<p>


<h2>Contents:</h2>
<ol>
<li><b><a href="#Keys">A. Keymaps & Command Structures That Work</a></b>
<ul>
<li><a href="#TP">Tractor & Pressor</a></li>
<li><a href="#Speeds">Speeds</a></li>
<li><a href="#Weapons">Weapons</a></li>
</ul>
</li>
<li><b><a href="#Start">B. Putting Things Together</a></b>
<ul>
<li><a href="#DFmovement">A Dogfighting System</a></li>
<li><a href="#TP2">How to use Tractor/Pressor</a></li>
<li><a href="#Torps">How to use torps</a></li>
<li><a href="#Phasers">How to use phasers</a></li>
<li><a href="#Sequence">A dogfighting sequence</a><br></li>
</ul>
</li>
<li><b><a href="#NoDD">C. Avoid the DD if New</a></b></li>
<li><b><a href="#Basics2">D. Further Basics</a></b>
<ul>
<li><a href="#Philosophy">Netrek Philosophy</a>
<li><a href="#Dynamics">Further Netrek Dynamics</a>
</ul>
</li>
<li><b><a href="#Tips">E. Assorted Dogfighting Tips</a></b>
<ul>
<li><a href="#Clouds">Torp Sprays Are Your Friend</a></li>
<li><a href="#Lagged">Using Phasers While Lagged</a></li>
<li><a href="#Flyby">The Flyby Attack & Avoiding it</a></li>
</ul>
</li>
</ol>
<p>

<h2>
<a name="Keys"></a><b>A. Keymaps that work</b></h2>
When attempting to improve your dogfighting, keymap is an excellent
place to start. A good keymap places every last dogfighting command in
a place where it's accessible by one hand, and where it can't conflict
with any other command. If you've not carefully organized your keymap
before, please review these notes and consider how they can help.
<p>
It takes about one to two weeks to adjust to a new keymap for most
folks, but longer for someone who's built up accurate, strong reflexes.
<p>
Commands Necessary:</p>

Primary Importance
<ul>
<li>Base Speed key</li>
<li>Maxwarp key</li>
<li>Torps</li>
<li>Phasers</li>
<li>Tractor</li>
<li>Pressor</li>
</ul>

Secondary Importance<br>
<ul>
<li>Det own torps</li>
<li>Det enemy torps</li>
<li>Shields</li>
<li>Repair</li>
</ul>

<p>
<h2>
<a name="TP"></a>I. Tractor & Pressor:</h2>
This tool is often neglected by inexperienced players. Do NOT forgo
this weapon.  After all, if you can be where someone expects, or 1/2 cm
from where they expect, where would you rather be?
<p>

Here are some possible uses:<p>

Tractor:
<ul>
<li>Tractor an enemy who's trying to escape you. Fire phasers at them
    while you keep them close</li>
<li>Tractor another ship to pull you sideways out of the path of enemy
    torps</li>
<li>Tractor an enemy ship to pull them into your torps, or to keep them
    from moving far enough to dodge your torps</li>
</ul>
<br>
Pressor:
<ul>
<li>Slow an enemy who's flying straight at you, keeping them and their
    phasers away from you</li>
<li>Slow an enemy who's flying straight at you at a low warp speed to
    reduce them to a crawl, making them easy pickings for your torps</li>
<li>Slow yourself when you are flying straight at an enemy, buying a
    small amount of extra time in which to slow down & dodge if you
    expect torps.</li>
<li>Pressor another ship to help you dodge enemy torps.</li>
</ul>

<p>
<i>Considerations in Mapping Tractor & Pressor.</i><br>
Essential considerations: Make tractor & pressor easily & quickly
accessed.</p>
<p>
My method:<br>
Dedicate the forefinger (pointing finger) to no combat task other than
tractor & pressor.</p>
<p>

My map:<br>
Pressor on r<br>
Tractor on t<br>
Remove pressor/tractor on g*
<p>
*There are two keys each for tractor & pressor, toggles & absolutes. The
absolutes must be turned off by an extra key. The three key setup is
considered superior for hockey & basing.
<p>
**Dan (tuber) disagrees with me on the appropriateness of using one
finger to control every tractor/pressor command. Fast as I can move from
r to t, he believes that tractor & pressor should be different fingers,
so you don't even have the lag of moving one key to the right.<br>
-- That's right, at least one other strong dogfighter (and Dan has a
greater legend than moi) gives tractor & pressor an even MORE prominent
place in his keymap.

<p>I think you can toss t/p in if you make it easy to reach. 
</p>

<p>
<h2>
<a name="Speeds"></a>II. Speeds:</h2>
The only netrek game where you might need to consider an extra speed
key is hockey.<br>
With bronco you can accomplish whatever speed you want by combining a
low warp speed with the maxwarp command.<br>
Choice of low warp key is a matter of preference. I've had a few
discussions with other dogfighters, so I have a sense of whats common:

<p>
Most common: Warp 3<br>
Next most common: Warp 2<br>

Least common: Warp 0
<p>
My choice is warp 3. Warp 3 is an excellent speed for a CA, since at
this speed it can turn sharply while not being a rock. It is an excellent
speed for weaving between torps.<br>
Another logical choice is warp 2. Warp 2 is perhaps the best choice for
a BB, since the BB's strong tractors & pressors can make up for the lack
of the extra warp speed. Both the CA & the BB can turn even just that
much faster at this speed, but the benefits are more pronounced for the
larger ship. One possible way to run this setup would be to maintain a
frequent tapping back & forth between warp 2 & the maxwarp key, aimed at
keeping within a band of warp 2-4. This would be difficult, however.<br>
A very difficult choice would be warp 0. I've only known one person
who's claimed to do this, and who knows? He mighta been shitting. But
the basic idea is to keep a back & forth tapping of the warp keys, such
that the ship is in a band between warp 1 and warp 4. I wouldn't advise
this for the sane or even the crazies who are slightly faint of heart.
<p>
Do NOT use a base speed key of warp 4. At this speed the CA has a 180
turn radius of about a centimeter or so. It's not at this speed to change
direction fast enough to avoid many sets of torps. It's fine if you want
to be a runnerscum, but runners can't really fight when it's time to do
a goal line stand.
<p>

My keymap:<br>
I use the 3 key unchanged, and the e key as maxwarp. It is sensible to
assign a single finger to movement, since you never ever have a need to
hit both maxwarp & your minwarp at the same time.<br>
Changing my keymap would be rather difficult, since I have 6 years of
playing behind this version. I might have considered placing the commands
on say w and s or q and a were I to try this again.<br>

Use of speed keys:
Again, don't 100% ignore tapping back & forth to keep you within a
band. It's very helpful when chasing down an enemy; a pattern that
brings you to warp 6 or 7 is one that already anticipates needing to
dodge buttorps. A slowdown, turn, pressor, turn back, tractor, speedup
is a helpful pattern.


<p>
<h2>
<a name="Weapons"></a>III. Weapons:</h2>
It's possible to do damage with both torps and phasers at the same time. It's worthwhile to work towards melding the two. The practice comes in moving the mouse accurately from firing where the enemy will go (torps) to on top of the enemy (phaser)<br>
<br>

Phasers cannot be dodged.<br>
Torps can be dodged & detted.<br>
<br>
High level dogfighting involves heavy use of phasers, and torp sprays that are geared towards going for one or two hits. Sprays are hard to det, so dodging is the avoidance of choice. <p>

To make good torp sprays, you need to have one of a couple possible assists.<br>
Some people work with key repeats (holding down the key) to produce clumps of torps. Many old time dogfighters put torps on keyboards.<br>
Then came out the version of COW that most Windows clients are based on, which includes continuousmouse. It's a nice thing that helps to send<br>
and extra torp or two out on occasion when you're jigging the mouse back & forth (more than that, but this is simplifying)<br>

<br>
Whatever it is, you want to have a fast enough finger to get good sprays and some sort of very minor, non-borg software assistance (that you might already have).<br>
<br>
My Keymap:<br>
I placed phaser on d and torps on mouse. Placing phaser on d was a very large mistake.<br>
<br>
My phaser conflicts with my movement commands; the transition is not as fast as it should be. It's hard for me to phaser and dodge seamlessly. I phaser less frequently than many peers. But I've gotten by by working on having good torps.<br>


<p>
<h2>
<a name="Start"></a><b>B. Putting Things Together</b></h2>

<h2>
<a name="DFmovement"></a>I. A Dogfighting System</h2>
<p>
Here is some rough philosophy on approaching an enemy without tending to fall into the patterns of buttorping or the yo-yo movement (buttorp, then turn around to mutual or such)
</P>
<p>
Slow Movement<br>
The best general slow movement is to zig-zag towards an opponent. You fly in a straight line without flying straight at the opponent. This is preferable.
<p>
Fast Movement<br>
If you're forced by circumstance to fly at high warp at an enemy, which you will frequently be, it's usually still more profitable to fly, say, 15 degrees off than right where you'll have torps streamed directly at you. The sensible person would on occasion slow down by an extra warp, turn, and speed back up to avoid the likely buttorps. The person doing an escort would want to accompany such a rush with an excellent, tight cloud that makes the enemy want to retreat. 
<p>
<I>Dogfighting System: Weave & Spin</I><br>

<p>
The point of this system is to fight & dodge without really giving up ground or making one.s self particularly vulnerable. I.m sure other fighters have different ideas, but this is intellectually exactly the system I settled on while trying to get better. It works. 
<p>
The core: 
<ul>
<li>	Maintain an orientation approaching the enemy on a right or left diagonal. 
<li>	When needing to avoid enemy torps, spin your ship. Fly in a tight circle for about 300 degrees, to end on the original or the opposite diagonal approach.
<li>	Repeat as necessary.
</ul>
<p>
The approach.<br>
As described above, do something like a zig zag. Maintain a very aggressive approach on the enemy, but keep an area, say 30 or 45 degrees of a circle (enemy centered) where you try to keep your nose from pointing more than on occasion. 

<p>
I want to reiterate. This is an approach based on aggression. You are always ready to bear down on your opponent. There is no drift in this system if you do it right. 
<p>
Avoiding enemy fire.<br>
Go ahead and put netrek physics to work for you. If someone fires in front of you (they can.t hit you otherwise), you turn. However, in this case the turn is a full rotation; flying in a circle. 
<p>
You do this by clicking behind your ship, then clicking again where you want your ship to end up. Since you are flying in a circle, you end up exactly where you started, but timing a brief period of away to when enemy torps are nearly upon you. It.s a good, quick dodge.
<p>
Speeds<br>
A low warp speed (warp 3) allows the ship to turn fast enough so the spins are tight. Warp 4 makes you too predictable and slow for this kind of work. Warp 2 leaves too little lateral motion for my liking unless supplemented by tractor or pressor. 
<p>
Again, note how large the angle is; you have a brief period in which you're flying away from the enemy, but when you complete the spin you're right back at him. 
<p>
In general<br>

You probably want to spin away from the enemy instead of within that cone of facing him. There are plenty of exceptions according to circumstance.
<p>
As a matter of course, such spins tend to devolve into tighter arcs of movement according to necessity, but the strategy is remarkably resilient overall.
<p>
Final note<br>
You.re reading the first draft of my attempt to write down the flying system that I used during my ramp-up in skill. I.d appreciate any constructive requests for clarification, or comments for improving and fine turning this.


<p>
<h2>
<a name="TP2"></a>II. How to use Tractor/Pressor</h2>
A note: When you hit the tractor or pressor key, you end up affecting the ship that is closest to your cursor. It doesn't matter where your cursor is - behind you or what - it'll work. So realize that t/p is comparatively easier to slip into a routine than weapons, which work best with precision mouse positioning.<br>
<br>
Style Comments:<br>
t/p becomes instinctive. I'm most comfortable fighting at a particular range, so if people move away I tend to tractor, and if they move towards I pressor. I've found this a sound tactic that puts me at little risk. Try it to become more familiar with the commands.<br>

<br>
Work on building a tendency to pressor when an enemy is starting to shoot at you.<br>
Then a tendency to tractor just as you're about to shoot.<br>
<br>
Start learning to have fun with people, yo-yo'ing them, throwing them off, pressoring 3rd ships to get an extra lateral motion, and you'll have pretty much arrived.<p>

<p>
<h2>
<a name="Torps"></a>III. How to use torps</h2>
60-80% of the time: Spray, cloud, whatever. The best way to use torps is often to wiggle the mouse a little while shooting. Or, to send a cloud to one location and then another couple to where the enemy will dodge to. 
<p>
The objective; Send torps in such a way that the enemy CAN NOT dodge. 
<p>
Learn to lead an enemy so your torps will hit if they fly straight is good.
<p>

Learn to send something of a nice cloud so if they dodge somewhat they might still get hit is better.
<p>
Learn to send beautiful clouds, or to guess when someone's going to turn right or left, and thus to split your spray, and you've arrived.


<p>
<h2>
<a name="Phasers"></a>IV. How to use phasers</h2>
As often as you can, as long as you are within about 20 pt phaser range. You can have your client report to you the phaser damage that you do. This is good; it helps you know how well you're doing, and to know whether you're being wasteful.
<p>
20 pt range is about 1 inch on a 17" Trinitron at 1024 x 768.
<p>
Phasers are an aggressive weapon. The closer you are to an enemy, the more damage they do.
<p>
You're starting, when you manage to get an average of let's say two phasers into a combat.
<p>
You are doing better when you improve your accuracy, and start doing something closer to half of your damage with phasers.
<p>
When you realize that you can defeat an enemy by only phasering constantly (every 1 second) and dodging their torps you will have arrived.


<p>
<h2>
<a name="Sequence"></a>V. A Dogfighting Sequence:</h2>
Meeting an enemy at the front.<br>
Spray torps<br>
Tractor briefly<br>
Phaser<br>
Pressor quickly, while turning<br>
Tractor again, if they start moving away<br>

Turn<br>
Phaser<br>
Pressor<br>
Turn<br>
Torp<br>
Tractor<br>


<p>
<h2>
<a name="NoDD"></a>C. Why I dislike the DD as a ship for new players:</h2>
Because it teaches people bad habits by its weaknesses. 
<p>

The ship is deficient in a couple of the most important tools of dogfighting, phaser and tractor/pressor. The player who flies this thing does not learn how to use these tools properly. 
<p>
The DD's best offense is torps. For most players, its best offensive tactic is to sucker enemy ships into flying at them, and buttorping. But can you learn to do any of the techniques I've described above with a ship that has these characteristics? Not as easily as the ship they're designed for. Practice for good habits, instead. 
<p>
The ability to execute a hairpin turn at warp 4 is meaningless when you are getting down & dirty.
<p>
If you don't have access to the best techniques, you'll never arrive. And having tried all of it, frankly, getting down & dirty is so much more FUN.<br> Please, take some time to learn how to mix it up, <I>then</I> twink around to your heart's content. 
<p>


<p>
<h2>
<a name="Basics2"></a><b>D. Further Basics & Philosophy</b></h2>

<h2>
<a name="Philosophy"></a>I. Netrek DF Philosophy</h2>
Netrek has been quite accurately described as a game of taking planets. With obstacles. 
<p>
Dogfighting is about the removal or outmaneuvering of those obstacles. A pick & roll is an effective basketball maneuver. It works in Netrek too. 
<p>
Positioning has a high impact on dogfighting maneuvers. As you become more experienced, your objectives will have an ever greater impact upon your methods. 
<p>
There's a big difference between trying to maintain a strategic position, trying to acquire a strategic position, escorting a carrier against enemies in position, and retreating. 
<p>
Part of being a complete player in trek is being able to adapt your fighting style to any circumstance. Too many people don't know how to transition to the aggressive. My problem? Transitioning to the passive - at times. 


<p>
<h2>
<a name="Dynamics"></a>II. Further Netrek dynamics:</h2>

Torpedoes fly at<br>
Warp 12 (CA, BB, SB),
Warp 14 (DD, SC), or
Warp 16 (AS)
<p>
Torps do damage of:<br>
40 Points (CA, BB)
30 Points (SB, DD, AS)
25 Points (SC)
<p>
A 40 point torpedo that is detted by an enemy ship can do far less
damage. At the edge of a det radius, 40 points can become 10. Torpedoes
can be dodged by people with good net  connections.
<p>
Two 40 pt torps + Four 30 pt phasers = 200 points of damage. It's easier
to tag a good player with a couple torps than a lot, and they can't
dodge phasers. Fit in a dodge with this gameplan and you are doing well.
<p> 
A lot of people play the game of buttorping. If you can trick an enemy
into flying straight at your ship, your torpedoes will reach their ship
that much faster. (W12 + W4 = W16). Essential at times, dumb at others.
<p>
As a general policy buttorping is a lazy and stupid way to fight. Makes
the game boring, too. The buttorper tries to lead the opponent into
following them, upon which out come the torps. It is not always
strategically sound to give up territory this way, and as a tactic it
requires little df skill, meaning very little is learned.
<p>
As good policy, you will occupy a space where an enemy will want to be;
with them forced to attack you head on, then you have the buttorping
advantage in the context of excellent strategy.


<p>
<h2>
<a name="Tips"></a><b>E. Assorted Dogfighting Tips</b></h2>

<h2>
<a name="Clouds"></a>I. Torp Sprays Are Your Friend</h2>
Let me preface this by saying I've had trouble with top players fighting
me with nothing but phasers. My torps are sometimes lax & some folks
have more reliable phasers.  As a general tactic, though - they use
clouds/sprays. Really. This is important enough to bear repeating.
<p>
The first thing that someone should notice is that all of the best
players will send at least their initial torps out in clouds.
<p>
You want a nice clump that will be a reasonable balance between being
spread out to make dodging tougher and tight enough that the ship can't
weave through it.
<p>
The spray is your cover when trying to clear ground for a carrier. It'll
be your lead-n for most fights.
<p>
The spray makes enemies turn to avoid you, and during the time that they
are occupied, you can pounce & then dodge away as they retaliate.
<p>
One of the best skills to have is finding holes in other folks'
sprays. But perhaps an equally good skill is the ability to send out
awesome sprays.
<p>
There's nothing like sending something that almost literally can not be dodged. 


<p>
<h2>
<a name="Lagged"></a>II. Using Phasers While Lagged</h2>
Lots of folks play this game with 250 ms lag. I did it for a good while,
with some success. So here's the deal.
<p>
You can shoot people when they face toward you or away from you. When they
are flying perpendicular/side to side they are a pain in the ass to hit.
<p>
It's simple. There's a delay between when you click and when the phaser
comes out. They're still in the same line as the phaser if they're flying
at you, no matter when the thing actually comes out.
<p>
Remember, without them, you lose half of your offense.<br>
Remember, lines cannot be dodged. 


<p>
<h2>
<a name="Flyby"></a>III. The Flyby Attack & Avoiding it</h2>
One of the tips of an otherwise ok dogfighting guide from yesteryear
was to pull up next to someone at warp 8 or warp 9, unload a volley of
torps, and tractor. This is an outdated tactic. Ah, heck - outdated is
too kind. It's a stupid tactic that's mostly used by people who don't
know how to play. Why?
<p>
First, since that was written the typical number of updates per second
has increased from 5 to 10 per second. This means it's possible to see
what people are doing and react faster than the days of yore. Dodging
is much easier.
<p>
Second, folks who have played this game much have good senses of where
torps will end up, and how to avoid these things quickly.
<p>
Thus, don't incorporate this into your main strategy. It's mildly
effective against folks who can't play. It's far less effective on clue
than you'd think.
<p> 
What we can use it for, though, is a little training on understanding
torp movement & dodging. Thus:

<p>

How to avoid the flyby & a broader dogfighting tip:
<p>
The flyby sets torps going towards you at a diagonal, outward and forward
from the enemy. Your dodge? Go either inward or backward. You go against
one of the vectors, and it's pretty easy to dodge the torps.
<p>
A variation on the above is actually written in the original guide. 
<p>
You see variations on this flyby at higher and lower warps all the
time. Everyone will at one point or another launch torps in this pattern
at you. Just remember and fly counter to a vector and you'll do well
enough.
<p>
That's it. They try the flyby, and they are suddenly going at high warp
with you unhurt and able to shoot them. And at high warp speed, they're
easy pickings or at minimum heading toward a less relevant place with
less fuel.


<?
echo "</div>\n";
echo getFooter();
?>
