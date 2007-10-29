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
 echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<center><h1>Dante's Dogfight Guide - Basics, Mechanics, Strategy</h1></center>
<center>Note: This copy has been edited for formatting for www.netrek.org; the author's original is at <a href="http://www.geocities.com/dantes_tb3/">http://www.geocities.com/dantes_tb3/</a></center>

<P>
<hr width=68%>
<P><FONT FACE="Arial, helvetica">
<CENTER> 
<h2>Preface</h2>

<br><br>
Welcome!<P>
In case someone stumbles in here: <BR>
Netrek is a 16-player online game, open source & freeware. I invite you to visit <A HREF="http://www.netrek.org">www.netrek.org</A> to find resources and how to play. <P

This is an extremely fun and deep game. It the most difficult game to master that I am aware of. It is the only action/strategy game that I know of that some people have played for ten years or more.<P>

Revised October 2007<BR>
Improved introduction<BR>
Introducing Graphics & Diagrams<BR>
Greatly Improved Discussion on Torping and Dodging <BR>
Rewrites Throughout <BR>
<P>
On the To-Do Agenda<BR>
Positioning & Clue Guide
</center>
<P>
<BR>
If you see me online & sucking, and find yourself saying "why the hell should I listen to this guy?" just remember - anyone can get rusty. And were you EVER a 2.0+ offense top tier df? I was, and if you weren't - I can still tool your ass. ;)   (Hmm... tongue in cheek's a little tough to convey on a page - 'know?) <BR>
</center>
<P>
Good Luck,<br>
Dantes (tb3)<br>
<br>PS: 
There is also a <A HREF="http://cha.rlie.nl/dfmanual/">DF Manual for Total Beginners by Charlie/Zex</A>.

<br><br>
<hr width=68%>

<br><br>
<center><h2>Dante's DF Guide</h2></center><BR>

<BR>
<BR>
<FONT FACE="Arial, Helvetica">
<BR>


<A NAME="top"></A><P>Dogfighting Basics: Guide by Dantes (tb3)</P>

This guide is a mix of practical information on layout and tactics with theory. <BR>


<P> Organized By:
<UL>
<LI><A HREF="dfbasics.php#intro">I. Intro: Biomechanics and its Relation to Netrek</A>
<LI><A HREF="dfbasics.php#damage">II. Theory: Doing Damage That Can't Be Avoided</A>
<LI><A HREF="dfbasics.php#setup">III. Controls: How to Prepare Your Setup for Dogfighting (Keymap)</A>
<LI><A HREF="dfbasics.php#use">IV. Comments for Beginners on Movement & Weapons </A>
<LI><A HREF="dfbasics.php#misc">V. Tactical Dogfighting Tips <A>
<LI><A HREF="dfbasics.php#strat">VI. Dodging & a System for Developing Movement </A>

</UL>


<br><br><br><P>
<A NAME="intro"></A>
<B><FONT SIZE=+1>
I. Intro: Advice About Biomechanics and Implementing its Lessons in Netrek</B></FONT>
<P>

Are you an analytical type? Then you'll want maybe to read this article. 
<A HREF="http://www.nytimes.com/2007/03/04/sports/playmagazine/04play-talent.html">How to Grow a Super Athlete:</A>
<P>
If not, here's the basic advice: if you want to get good at a physical activity:
<UL>
<LI>	Hours matter a ton, but it's not just practice:
<LI>	Train with correct form. Practice the right kind of movements, and then repeat. Incessantly.</UL>
<P>
So what does this mean? Here's my advice. <UL>
<LI>	Get used to moving the mouse to several different points with precision and within a second and a half.
<LI>	While being used to hitting other keys and mouse buttons with speed and accuracy. Meaning:
<UL>
<LI>	You move the mouse to direct your ship, 
<LI>	you move it to fire, 
<LI>	you move it to pressor off of another ship, 
<LI>	you move it to fire again, you move it to turn. </UL>
</UL>
<P> All of the above saying: a netrek dogfight at its highest levels is a very click and button-intensive thing. And you don't ever get to learn how to do this unless you practice doing the same mouse and key-work. 
<P>Good dogfighting is very useful to your team. And very fun. 


<br<br><br><P>
<A NAME="damage"></A><B><FONT SIZE=+1>II. Doing Damage & The Core of Dogfighting</FONT></B><BR>
<P><B>A. Unpreventable Damage</B><P>
The core principle is obvious. Do damage, and avoid damage yourself. Knowing when NOT to avoid damage is part of being clueful, but that's another discussion. 
<P>
Here we're talking about: <UL>
<LI>	Using weapons in a way that the enemy cannot avoid them, 
<LI>	Doing your best to avoid the stuff that you can 
<LI>	And doing so without giving up ground (that might be occupied by an enemy for, say, dropping armies)
</UL>

There are four ways to do damage that enemies cannot avoid, only three of which you can do consistently. These four are:
<OL>
<LI>The Phaser. The phaser can NOT be dodged by enemies, and its damage cannot be reduced. They do plenty of damage at medium range.
<LI>The Torp Cloud. Torpedo clouds when well formed are hard to dodge. A core of my routine, for better or worse, has always been about really good torp clouds. 
<LI>Buttorping. Tricking the enemy into flying directly at your torps at a speed high enough that they cannot dodge. 
<LI>The Team Det. I LOVE doing this, but it's not practical in most fights. Most enemies know better than to fire torpedoes over their teammates.
</OL>

For visual details on these methods, I highly recommend visiting Charlie's excellent introductory dogfighting web page, located <A HREF="http://www.rlie.nl/dfmanual/"> here.</A> The team det is the fourth method on his list. Plasma is never an assured way of doing damage.
<P>
<A HREF="dfbasics.html#top">To the Top </A>

<br><br><br><P>
<A NAME="setup"></A><B><FONT SIZE=+1>Keymap / Setting Up Your System </FONT></B><BR>

<P>
An almost sinfully bad part of netrek has to do with the default keymap that comes on clients these days. It's just... bad.
<P>
Fortunately, everyone these days has a text editor (Notepad or Wordpad for the Windows folks) and a manual on how to configure your client that comes with the download. Basically open up the netrekrc file (.xtrekrc for Unix variants, do your edits and save without renaming the file. Here is what you should consider. 

<P>
Keys Important to Dogfighting:</P>
Primary Level Of importance / Prioritize: 
<UL>
<LI>	Maxwarp --- (normally mapped to %, automatically brings you to full speed)
<LI>	Low Warp  --- (a number key for slowdown)
<LI>	Phaser --- Weapon
<LI>	Torpedoes --- Weapon
<LI>	Tractor Beam --- (pull ships together)
<LI>	Pressor Beam --- (push ships apart)
</UL> 
Secondary / Useful in Combat: 
<UL>
<LI>	Det Own Torps
<LI>	Det Enemy Torps
<LI>	Shields
<LI>	Repair
</UL>

Here are thoughts on how you might arrange those commands, and why. 


<P>
<OL>
<LI><B>Speed Controls: </B><BR><P>

You can go at whatever speed you want by using two keys - a low speed, and the maxwarp key. That low speed should be warp 3 or less. The turning radius of a CA at warp 4 is too large for it to be the slowest that you go. You NEED to be able to turn on a dime when the situation warrants. 

<P>
Experienced Players use:<P>
I use the 3 key (warp 3) and the e key (custom mapped to maxwarp) for motion. Accelerate with maxwarp, hit 3 to slow back down. I tend to hover at 3, and am often between 3 and 5. When chasing I tend to hover between 6 and 9 - Get up to 9, slow down key (until w6), maxwarp again... Warp 6 is a much easier dodge than 9. Some players use warp 2, and pog claims to use warp 0 as his lowt warp speed. Tap back and forth, indeed. 


<P>
<LI><B>Tractor & Pressor</B><BR>
<P>

Tractor and Pressor can:<OL>
<LI>	Increase your dodging ability, 
<LI>	Pull and push enemies into torpedoes, 
<LI>	Throw off enemies' aim (wiggling the distance between your ship and theirs makes things less predictable)
<LI>	Increase your potential maximum speed
</OL>
<P>
Enough said? There's <B>NO SUCH THING </B>as a top flight dogfighter in netrek who does not use t/p (tractor/pressor - it has its own catchphrase acronym) extensively. 
<P>
Experience Players use: <BR>
Me: I have prioritized them sufficiently to make them the only task of my pointing finger. Pressor on on r, Tractor on on t, Remove pressor/tractor on g.<BR>
Dan/Tuber: Put them (what was it, Dan? d and f?) on TWO fingers, for quickly flipping back and forth. <BR>
Erik/el0g: Apparently put tractor and pressor on his MOUSE, for crying out loud! (Ah, we all miss Erik). It might have had something to do with his quality as a base, btw<BR>
 <P>
I prefer absolute on (specially mapped key) over toggles, but that's just a matter of preference. You don't twitch yourself into turning it off then, and they work for hockey. It doesn't affect your overall potential.<P>
 
Recap: <B><I>I insist.</B></I> In building your keymap, t/p must be prioritized. 



<P>
<LI><B>Weapons</B><BR>
Make sure you can easily access torpedoes and phasers without interfering with any of the other critical commands. In other words, do NOT use the same finger for speeds and phaser, because there will be times when you want to phaser while accelerating or decelerating and if you have set up a conflict, you can't.
<P>
I set up that exact key conflict by accident, and it hurt. I still got extremely good, but it held me back from being where I could have been. 
<P>
<LI><B> A Proposed Keymap</B></P>
Try plugging this line into your netrekrc file, replacing the one that is already there. This is only a set of ideas, which could use some tweaking, so PLEASE fix this up if you find any part of it uncomfortable or unintuitive. 
<P>
Keymap: r^t_g$alqR dfDw%hedpvr
<P>
What does this keymap do?
<UL>
<LI>Puts tractor, pressor, and remove t/p on r, t and g. 
<LI>Puts lock on, repair, and det enemy torps on a, q and space bar.
<LI>Puts det own torps, maxwarp, and starbase docking permissions on f, w, and h. 
<LI>Puts phaser and change ship type on d and v.
<LI>Weakness: I am putting maxwarp on a weak finger. This might not be the way to go. 
</UL>
<P>
Other possibilities:<BR>
Place phaser on mouse<BR>
Place maxwarp/minwarp or tractor/pressor to a and s, move lock on to w

<P>
<LI><B>Another Legitimate Perspective (Helpful!)</B>
<P>
A couple years before I put up this guide, Niclas (Big Swede!, River Runs Red) posted some keymap advice on rgn. Some of his ideas are different, and I like them quite a lot. I've put it up <A HREF="./dantes_tb3/keymap2.php">here.</A> Highly recommended. 
<P>
If any of this keymap advice is confusing, I suggest visiting an empty server and pulling up the help menu, which will have every key listed. It SHOULD be h on a default client setup, but it's also available through the options menu screens (shift o).
</OL>
<P>
<A HREF="dfbasics.html#top">To the Top </A>


<br><br><br><p>
<A NAME="use"></A><B><FONT SIZE=+1>IV. Comments for Beginners on Movement & Weapons</FONT></B><BR>

<P>
<B>Maneuvering and Positioning Tactics</B><BR>
Ultimately, Netrek is a game about taking planets, where enemies are the obstacles. Dogfighting is about the removal or outmaneuvering of those obstacles. Means to an end.<P>
 
As such, consider this - a pick & roll is an effective basketball maneuver for helping another player to approach the basket. It works in Netrek as well. You don't always need to blow someone up to be tactically very effective.
 <P>
Next, realize the value of being where someone else wants to be. Try getting in the way of where enemies will have to fly in order to make plays. Get in the middle, and then you can engage in delaying tactics, including buttorping.
 <P>
I must repeat - <B>positioning and situation have a high impact</B> on the best choice of dogfighting maneuvers. As you become more experienced, your objectives will have an ever greater impact upon your methods. 
<P>



<B> How to use Tractor/Pressor</B>

<P>
Tractor and Pressor are easy to slip into a routine. If you hit the tractor or pressor key, it affects the ship that is closest to your cursor. This means that while you have to pay some attention to where your cursor is, you don't need precision.
<P>
Tractor is useful when you want to pull the ships together. You might want to pull the enemy into stray torps, or pull them in for an agressive (and more damaging) phaser shot, or to pull yourself out of the line of stray torps.
<P>
Pressor is extremely effective for dodge. You push the other ship away. Like when they are charging at you. Or when you need just a slight fraction of a centimeter more space to dodge their torps. You can also push someone into or away from torps with it. 
<P>
Used together, they can be extremely effective. And yo-yoing your opponent is a very good way to throw them off. It's absolutely great when you can do this without getting thrown off, yourself.
<P>
<B>How to use Torps</B>
<P>
I've already discussed torps in part. The cloud is the solution 60-80% of the time --- try to hit a few torps but not all of them. Wiggle the mouse a little bit. Make sure there's a line in your netrekrc file that says continuousMouse: on. See below --- a cloud is hard to dodge. 
<P>
<IMG SRC="./dantes_tb3/Torpspray.jpg">
<BR>
<P>But you can also do a lot of good with half size clouds. Think of it this way: You can have some fun sending a few torps to where someone is heading, THEN send a few to where you think they'll dodge to. And you You have more fun when you see people doing familiar patterns, especially high warp speed patterns.
<P>
<IMG SRC="./dantes_tb3/hockeystream.jpg">
<BR>

It's all about leading torps and dispersing them in a useful manner. I've made a franchise out of sending torp streams like the above against enemies moving at high speed. It's about dragging the mouse down their flight path. 

<P>
<B>How to use Phasers</B>
<P>
Phasers are an aggressive weapon that is impossible to dodge.Phasers are an aggressive weapon. The closer you are to an enemy, the more damage they do. Phaser a lot, and you will find yourself doing more damage quicker, and learning how to fight up close. These are good. You should get accustomed to the 1 second (except for bases) recharge rate for phasers. Fire a phaser then do something else. Then fire again. 
<P>
<P>
I cannot walk away unscathed from a fight against someone who phasers me. Newbies who try to torp me often miss, because I can dodge. I can't dodge phasers.
<P>
Remember: 20 point phaser range is about what people have theorized is the best MINIMUM damage. I suggest doing a lot of fighting at the 30-40 point phaser range, myself. 
<P>
When I wrote the first version of this guide, I used a 17" Trinitron for a monitor. 20 pt range was about 1 physical inch at 1024 x 768
<P>




<B>Expanded comments on the DD & weapons training:</B>
<P>
The ramifications of the above?<P>
 
The BB and CA are the two strongest ships for dogfighting. BBs used to win almost all of the dogfighting contests of yesteryear, and would be best for sure if it didn't turn and accelerate like a pregnant yak. Thus we have the CA. And my strong recommendation to most players to NOT play the DD as their ship of choice.<P>
 
The tale of the tape is simple enough. The DD is inferior in the department of the phaser (15 points less damage per shot than the CA at equal range), torps (30 points as opposed to 40), tractor strength, and pressor strength. This means it can't be aggressive as other ships in doing useful things for your team. 
<UL>
 
<LI>	The torp cloud and phaser are critical weapons when attempting to grab territory. The cloud forces enemies to spend time dodging, and the phaser lets you do damage to someone consistently while you spend time dodging, yourself. 
<LI>	Lower tractor & pressor means the DD can't pull ships back and forth like a rag doll, save teammates, or dodge without running away.
 </UL><P>
What the DD is good at is buttorping, at which it is frankly above average. You fly up, play rope a dope, and Spathi away while your warp 14 torps arrive faster than people expect. It's just darn seductive for a new player, and darn poor for their development as a player. 
 <UL>
<LI>	You can't always buttorp in a face to face confrontation
<LI>	Experienced players will be able to dodge you often enough - you need other tactics accessible
<LI>	You can't limit your own clicking speed and accuracy by always trying to make it easy
</UL> <P>
Where I think it has a specific use is as a specialty ship. I've seen the DD used effectively in trying to take enemy planets, especially core planets (close to, but not at LPS). Mainly the tactic is to fake to one planet, and then use the DD's fuel efficiency, cloaking efficiency, acceleration and speed to move to another. It seems to me that this is a legitimate tactic when done well.

<P>
<A HREF="dfbasics.html#top">To the Top </A>

<br><br><br><p>
<A NAME="strat"></A><B><FONT SIZE=+1>V.	Assorted Dogfighting Tips</FONT></B><BR>
<P>
<B>Analysis of torp spray uses</B>
<P> 
Let me preface this by saying I've gotten my rear kicked many times by top players fighting me with nothing but phasers. It's because they dodge my torps and have slightly more reliable phasers. As a general tactic, though - they still spray too. Really. You want a nice clump that will be a reasonable balance between being spread out to make dodging tougher and tight enough that the ship can't weave through it. 
 <P>
But it's so tactical too. The spray is your cover when trying to clear ground for a carrier. It'll be your lead-n for most fights. The spray makes enemies turn to avoid you, and during the time that they are occupied, you can pounce & then dodge away as they retaliate. And you can spray an area of space where someone is cloaked to try to tag them and figure out where they are (a common base tactic). 
 <P>
There's nothing like sending something so damaging that is virtually impossible to dodge

<P>


<B>Using Phasers While Lagged</B>
<P>
Lots of folks used to play this game with 250 ms lag. I did it for a good while, with some success. So here's the deal.
<P>
You can shoot people when they face toward you or away from you. When they are flying perpendicular/side to side they are a pain in the ass to hit. 
<P>
It's simple. There's a delay between when you click and when the phaser comes out. They're still in the same line as the phaser if they're flying at you, no matter when the thing actually comes out.
<P>
Remember, without them, you lose half of your offense. Remember, lines cannot be dodged. 
<P>
<B>Phasering to Find Cloaked Enemies</B>
<P>
Cloaking is not an extremely effective tactic, but it is effective against newer players often.
<P>
Experience will teach you something about where someone will be. A player with a lot of experience can tag someone who's cloaked out of nowhere seemingly. Some of that's a matter of instinctively estimating the speed of someone and where they're going. But there's another part of this.
<P>
An enemy that is moving from left to right is not going to be easy to attack if you are not on the same plane as them. As in, two inches south of them. 
<P>
When you move to where you reduce the angle - where they are flying at your phasers - you have a much higher chance of hitting. THIS is how people phaser oggers.
<P>
<B>Buttorping - Basics</B>
<P>
Buttorping is an essential activity at times when you are holding enemy territory and you don't want to get blown up. Part of the trick to buttorping well is being able to send accurate torps at enemies' faces, while NOT getting pushed very much.
 <P>
A turn ninety degrees can encourage an enemy to turn as well. Since the other person had to react to do this, they are following you. Boom, a buttorping opportunity.  Buttorp well, and it will not always be a tactical disadvantage.<P>
<IMG SRC="./dantes_tb3/90bt.gif">
<P>
If R8 heads in the direction of the arrow, F0 will be behind him quickly if he turns late (and is foolish) Note that this is NOT an advanced tactic. This is NOT something you should rely on -- but good buttorping does often operate on this principle. 
 <P>
As commented in my suggestion not to fly the DD, buttorping can be death of your tactical advance, and your evolution of skill if you rely upon it to get the job done. You need plenty of practiced motion devoted towards flying towards people or halfway towards them if you want to escort on short notice, defend your base, and so on.
 <P> 
Oh, my though. You want the buttorping advantage at times - you really do. 
  <P>
<I>The Buttphaser</I><BR>
The buttphaser is a high quality tactic that you do find top dogfighters using. You're pointed mostly away from the enemy, but you turn so you stay close enough to do decent damage with the phaser. Just dodge constantly, and keep making 20-25 point jabs. 

<P>


<B>The Flyby Attack & Avoiding it</B>
<P>
One of the tips of an otherwise ok dogfighting guide from yesteryear was to pull up next to someone at warp 8 or warp 9, unload a volley of torps, and tractor. This is an outdated tactic. Why?
<P>
First, since that was written the typical number of updates per second has increased from 5 to 10 per second. This means it's possible to see what people are doing and react faster than the days of yore. Dodging is much easier. Second, folks who have played this game a lot have good senses of where torps will end up, and how to avoid these things quickly. Third, it's easy and doesn't develop your skills and instincts if you rely upon it. 
<P>
So don't incorporate this into your main strategy. It can be effective at times, but it's such a common tactic and is far less effective on clue than you'd think.
<P>
How to avoid the flyby & a broader dogfighting tip:

<UL>

<LI>The flyby sets torps going towards you at a diagonal, outward and forward from the enemy. Vector going north, you go south. Go either inward or backward. Any time you go against one of the vectors it's pretty easy to dodge torps.
<P><IMG SRC="./dantes_tb3/Flyby1.jpg">
<LI>Torps are fired towards the space F0 will occupy. If he tries to outrun them in the same direction, he's toast.
<P><IMG SRC="./dantes_tb3/Flyby2.jpg">
<LI>
But no worries. He's quick on the uptake, and does a turn away / probably using pressor to get a hair more leverage. Vector pointing west, you turn east
<P><IMG SRC="./dantes_tb3/Flyby3.jpg"
<LI>On the other hand, maybe he's aggressive - he has another dodge. He can move underneath the torps and closer to his enemy. Dodge through where the torps will arrive - before they get there. It's a more nerve wracking but surprisingly easy dodge to perform. And oh look, the rom is nearby and just waiting to get shot at at close range. 
<P>
</UL>
You see variations on this flyby at higher and lower warps all the time, and in a broader sense this is all about a person trying to lead you with torps, and you trying to dodge. The flyby itself is a ham handed version of that. Just pay attention to the direction of the torps, choose your dodge angle, and shoot them. 
<P>
<B>Dealing With The Ogg</B>
<P>

An attack based on cloaking, approaching an enemy, uncloaking and firing at them is known in netrek parlance as an ogg. 
<P>

The ogg is extremely helpful in attacking starbases, who otherwise have extremely strong pressor beams to keep themselves safe. A good ogg on a starbase is a coordinated attack, where SEVERAL people uncloak at one time and fire. It is about overloading the base. 
<P>

When synchronized, the ogg means that several people get to pop off shots at a starbase while it worries about dodging one set of torps and blowing one person up. The starbase who only has to blow up one enemy at a time is much safer. The ogg is much different in one on one.
<P>

It is most effective when an enemy is not aware. Most people pay enough attention to the galactic that it is a little hard to pull off unless the person is engaged otherwise. But that is not to call it effective in general or even in that situation. Only sometimes. The biggest benefit of cloaking is getting around enemies other than your target. 
<P>

So let's say an enemy tries to ogg you. There is a delay built into the game in between them uncloaking and them firing. That's your window. Punish someone who tries this BS with you.
<P>

First, positioning. You can't always fly at an enemy who's ogging you. You can't do well flying at high warp parallel to them. Instead, the most reliable defense is to move 90 degrees or 180 degrees away from them. 90 degrees does the job and doesn't take you out of the action entirely. 180 does the job when you do it as a bob and weave low warp defense - in other words, spongy but not REALLY going anywhere.
<P>

Someone flying straight at you is phaser bait. So phaser.<BR>
When they unloak, IMMEDIATELY hit pressor, turn and accelerate. Hit slowdown & turn again if they send torps to where you are dodging to. But pressor IS YOUR FRIEND here. It slows them down to a crawl, making them easy fodder for YOUR torps, and gets you out of the way of theirs.

<P>


<A HREF="dfbasics.html#top">To the Top </A>

<br><br><br><p>
<A NAME="system"></A><B><FONT SIZE=+1>VI. Dodging & A System for Developing Movement</FONT></B><BR>
<P>
It's not a good idea to leave yourself vulnerable to attack. Dodging is kind of more difficult to discuss, since it involves a lot of quick reactions. But we've covered a lot of the essentials above in understanding the benefits of tractor/pressor and turn-on-a-dime warp speeds.
<P>

<B><I> A Weave & Spin Dogfighting System</I></B>
<P>

In figuring out how to dogfight, I came to the idea of being able to fight & dodge without really giving up ground or making myself particularly vulnerable. I'm sure other fighters have different ideas, but this is intellectually exactly the system I settled on while trying to get better. It works. <P>
The core: <P>
Habit 1 = weave. Your objective is to be able to advance without being easy buttorp meat
<UL>
<LI>	Maintain an orientation approaching the enemy on a right or left diagonal. Weave back & forth while approaching.  Flying straight at a guy tends to earn you torps in your face.
<IMG SRC="./dantes_tb3/Weave.jpg">
 
<LI>	Nonetheless, someone will try to shoot at you while you approach. So let's talk about dodging. 
 </UL>
<P>
Habit 2 = Spin/rotate. Your objective is to be able to dodge effectively without losing excessive ground. 
<UL>
<LI>	If someone fires in front of you (they can't hit you otherwise since you are weaving), you turn. However, you make this turn a near full 360 degree rotation, because you want to still stay near where you are - and to keep on your enemy
<P>
<IMG SRC="./dantes_tb3/Spindodge.jpg">
 
<LI>	You do this by clicking behind your ship, then clicking again where you want your ship to end up. Since you are flying in a circle, you end up exactly where you started, but timing a brief period of away to when enemy torps are nearly upon you. It's a good, quick dodge.

<LI>	You can only get away with this at low warp speeds. At warp 4 or 5 you're less likely to get out of the way in time, and more likely to be predictable in where you end up.
</UL>
<P>
I want to reiterate. This is an approach based on aggression. You are always prepared to bear down on your opponent, and you're always ready to dodge. So what's the concept?
<P>Objective = start using moves like this on a regular basis, and I do believe you will start developing the kind of precision hand/eye coordination that will help you succeed in netrek dogfighting. 
<P>So let's return to biometrics and why I think little techniques and ideas like this can work. The concepts involve:
<OL>
<LI>  Practice using technique that you can use at all levels
<LI>  Practice with consistency in your choice of techniques
<LI>   Practice an awful lot
</OL>
<P>
Since I'm laying out above what amounts to an absolute clickfest though one that doesn't inherently make you lunchmeat, and since this really and truly is how I visualized things when I started getting good, I'm pretty sure that you can get mileage from it. 
 <P>
Netrek clue is about choosing the right tactic for the right occasion. Dogfighting is about being able to get the job done. 

Good luck!
<P>

<A HREF="dfbasics.html#top">To the Top </A>
</TD>
</TR>
</TABLE>
</BODY>
</HTML>





<?
echo "</div>\n";
echo getFooter();
?>
