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

<h1>The Advanced Message and Macros Guide</h1>


<br><p>
Communication is a key element of Netrek. 
Typing takes time. Time is critical in dogfighting or teamwork. Most 
of the messages sent in Netrek are standard warnings, distress calls, 
requests, notifications, etc. Also retyping that insulting message 
every time you doosh someone is a drag. Fortunately, Netrek has a system 
with a bunch of messages all set to relay critical information 
for you. This is a guide to that system. It's pretty complex, with a lot 
more abilities than most people will ever need; for most players, 
section 2, on RCDs, is all they really need. 

<p>Note that as of version 1.2, 
MacTrek has only minimal (but evolving) RCD and Macro facilities, 
so most of this manual won't apply to MacTrek users. 
<p>
If you are reading this, you should already be familiar with how
to send basic messages in Netrek. 
If not, read the <a href="./messaging.php">Basic
Messaging Instructions</a>


<br><p>
Contents:

<ol>
<li><a href="#intro">Introduction: Four Fine Flavors</a>
<li><a href="#basicrcd">RCDs, canned messages for those rushed moments</a>
<br>The most important part of this manual.
<li><a href="#macros">User Macros, tell us how you really feel</a>
<li><a href="#writingmacros">Writing User Macros</a>
    <ul>
    <li><a href="#deststable">Table of Destination Codes</a>
    <li><a href="#substable">Table of Substitution Codes</a>
    <li>Macro Expressions
    <li>Macro Notes and Oddities
    <li>More Macro Examples
    </ul>
<li><a href="#customrcds">Customizing RCD's</a>
<li><a href="#customrcms">Customizing RCM's</a>
<li><a href="#credits">Credits</a>
</ol>

</p>
<hr width="75%">

<p>
<a name="intro"></a><center><h2>1. The four kinds of message</h2></center>

<br><p>Like the heading says, there are four kinds of messages in Netrek.
<br><br>Two of these (RCDs and Message Macros) are macros. 
"Macro" is a computer 
term which refers to having the computer do some typing or mousing for you. 
So instead of typing out a long message yourself, you just hit a couple 
of keys and the machine does the rest.

<br><br>The types are:
<ol>
<li>Simple messages. You just type these, as per the <a href="./messaging.php">messaging instructions</a>. 
<li>RCDs<br>These are predefined help and advisory messages, like "Bomb Kli @ 7". There are 25 of these, including 4 general purpose ones.
<br>You can change which keys send which messages using standard <a href="./keymapping.php">keymap configuration.</a>
<br>You can change how these look to you when other people send them to you.
<li>Message Macros
<br>These are messages you set up in your configuration file.
<br>You choose what these messages say.
<br>You choose which keys send the messages.
<li>RCMs<br>
These are messages the server sends to you, like "GOD->ALL Geebzy (F1) [CA] was kill 1.00 for Raboof (R7) [CA] [phaser]"
<br>You can change how these look to you.
</ol>
<br>


<p>
<a name="basicrcd"></a><center><h2>2. RCD's, for when you're in a hurry</h2></center>
<br>
There are a number of macros called "Receiver Controlled Distresses" or RCD's.
Most are assigned to a control key (where you hold down the "control" key and press another key at the same time), but two are assigned to normal keys.
<br><br>
For example, if you place your mouse pointer near the planet Cassiopia
and type control-1, your client should issue something similar to
"F0->FED Help at Cas! (have 3 armies) 60% shld, 13% dam, 63% fuel"
<br><br>
Here's a table of the default distresses. All the examples below 
assume that you are player F0, alias "Twinky", flying a CA carrying 3
armies near Beta Crucis. The closest planet to your mouse pointer is 
Cassiopia, which has 5 armies, the nearest friendly player to the 
mouse pointer is player Fc, and the nearest player of any team to 
the mouse pointer is player 06. 
<br><br>
<a name="rcdtable"></a>
<center>
<table border=0>
<tr><th><font color=#f9dc6a>Key</font>
    <th><font color=#f9dc6a>Distress<br>Name</font>
    <th><font color=#f9dc6a>Purpose</font>
    <th><font color=#f9dc6a>Sample Message</font>
<tr bgcolor="#333333"><td align="center">E
    <td align="center">help
    <td>Call for help
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Help(CA)! 60%shd, 13% dam, 63% fuel, 3 armies!
        &nbsp;&nbsp;&nbsp;&nbsp;
<tr><td align="center">F
    <td align="center">carrying
    <td>Announce you are carrying armies
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
           F0-&gt;FED Carrying 3 armies.
        &nbsp;&nbsp;&nbsp;&nbsp;
</table>
<br><br>
<table border=0 bordercolor=#333333>
<tr><th><font color=#f9dc6a>Control Key</font>
    <th><font color=#f9dc6a>Distress<br>Name</font>
    <th><font color=#f9dc6a>Purpose</font>
    <th><font color=#f9dc6a>Sample Message</font>

<tr bgcolor="#333333"><td align="center">b
    <td align="center">bomb
    <td>Tell your team to bomb someplace<br>
    Put mouse near target planet, hit control-b
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED bomb Cas @ 5
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">c
    <td align="center">space_control
    <td>Tell your team to control a certain area<br>
    Put mouse near a planet, hit control-c
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Help Control at CAS
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr bgcolor="#333333"><td align="center">e
    <td align="center">escorting
    <td>Announce you are escorting a teammate<br>
    Put mouse near teammate you are escorting, hit control-e
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED ESCORTING c (13%D 60%S 62%F)
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">f
    <td align="center">free_beer
    <td>Tells your team about a crippled or unskilled player<br>
        Put mouse near beer, hit control-f
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED 6 is free beer
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr bgcolor="#333333"><td align="center">h
    <td align="center">crippled
    <td>Tells your team about a crippled player
        <br>Put mouse near crip, hit control-h
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED 6 @ Cas crippled
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">l
    <td align="center">controlling
    <td>Tells team you are controlling a certain area
        <br>Put mouse near a planet, hit control-c
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Controlling at Cas
        &nbsp;&nbsp;&nbsp;&nbsp;


<tr bgcolor="#333333"><td align="center">m
    <td align="center">bombing
    <td>Tells team where you are about to bomb
    <br>Put mouse near target planet, hit control-m
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Bombing Cas @ 5
        &nbsp;&nbsp;&nbsp;&nbsp;


<tr><td align="center">n
    <td align="center">no_gas
    <td>Tells your team someone is out of fuel
       <br>Put mouse near fuel-less ship, hit control-n
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED 6 @ Cas has no gas
        &nbsp;&nbsp;&nbsp;&nbsp;


<tr bgcolor="#333333"><td align="center">o
    <td align="center">ogg
    <td>Tell your team to ogg someone
    <br>Put mouse near target ship, hit control-o
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
        F0-&gt;FED Help Ogg 6 at Cas
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">p
    <td align="center">ogging
    <td>Tells team who you are about to ogg
    <br>Put mouse near target ship, hit control-p
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Ogging 6
        &nbsp;&nbsp;&nbsp;&nbsp;


<tr bgcolor="#333333"><td align="center">t
    <td align="center">taking
    <td>Tell your team you are carrying and your intended target
    <br>Put mouse near target planet, hit control-t
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
        F0-&gt;FED (CA)  Carrying 3 to Cas @ 5
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">0
    <td align="center">pop
    <td>Alert teammates to the number of armies on a planet
    <br>Put mouse near relevant planet, hit control-0
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
            FO-&gt;FED Cas @ 5!
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr bgcolor="#333333"><td align="center">1
    <td align="center">save_planet
    <td>Tell your team to save a planet
    <br>Put mouse near relevant planet, hit control-1
    <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Help at Cas! (have 3 armies) 60% shld, 13% dam, 63% fuel
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">2
    <td align="center">base_ogg
    <td>Call a base ogg
    <br>Put mouse near the teammate to synchronize with, hit control-2
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Sync with --] c [--- OGG ogg OGG base!!
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr bgcolor="#333333"><td align="center">3
    <td align="center">help1
    <td>General distress. Same as help2 unless you change it. 
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Help me! 13% dam, 60%shd, 63% fuel 3 armies
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">4
    <td align="center">help2
    <td>General distress. Same as help1 unless you change it. 
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Help me! 13% dam, 60%shd, 63% fuel 3 armies
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr bgcolor="#333333"><td align="center">5
    <td align="center">asw
    <td>Tells team you are doing Anti-Scout (bomber) Warfare
    <br>Put mouse near enemy bomber, hit control-5, it will 
    mention the planet you are closest to
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED Anti-bombing 6 near Bet
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">6
    <td align="center">asbomb
<td>Tells team you intend to bomb a planet, especially if you are using an AS
    <br>Put mouse near target planet, hit control-6
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED DON'T BOMB Cas. Let me bomb it (CA)
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr bgcolor="#333333"><td align="center">7
    <td align="center">doing1
    <td>General Info message. Same as doing2 unless you change it. 
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED (Twinky) has 3 armies at lal. 13% dam, 60% shd, 62% 
           fuel
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">8
    <td align="center">doing2
    <td>General Info message. Same as doing1 unless you change it. 
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED (Twinky) has 3 armies at lal. 13% dam, 60% shd, 62% 
           fuel
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr bgcolor="#333333"><td align="center">9
    <td align="center">pickup
    <td>Tell your team an enemy has beamed up armies
    <br>Put mouse near carrier, hit control-9. 
        Will say what planet they are closest to. 
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED 6++ @ Cas
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr><td align="center">@
    <td align="center">other1
    <td>General info message. Same as doing1 unless changed.
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED (Twinky) has 3 armies at lal. 13% dam, 60% shd, 62% 
           fuel
        &nbsp;&nbsp;&nbsp;&nbsp;

<tr bgcolor="#333333"><td align="center">#
    <td align="center">other2
    <td>General info message. Same as doing1 unless changed.
    <td>&nbsp;&nbsp;&nbsp;&nbsp;
          F0-&gt;FED (Twinky) has 3 armies at lal. 13% dam, 60% shd, 62% 
           fuel
        &nbsp;&nbsp;&nbsp;&nbsp;
</table>
</center>


<br><br><p>
Now, why would these be called "Receiver Configurable Distress" calls?<br>
Because not only can you change what keys send the messages, but you can
in fact change exactly how the message appears to you. So, if instead of 
seeing "6 is free beer" when your teammate sends you a message, you can 
configure things so that you see "6 is crispy and good with ketchup" instead.
More on how to do this later, in the <a href="#customrcds">Customizing RCD messages</a> section. </p>


<p>
<a name="macros"></a><center><h2>3. User Message Macros</h2></center>
<br>
<br><h3>3.1 How to Do It</h3>
Message macros are mostly sent by entering "Macro Mode".<br>
This means that you enter the
macro key (capital X by default) 
and then the key of the macro you want to send.<br>
So if you have macro b set to send your team the message 
<tt>"Please bomb enemy core!"</tt>,<br> then
typing "Xb" (X followed by b) will send that message.
You can set macros for most numbers, letters, and symbols, but not the 
question mark. Lower case and upper case letters will send different
macros; if you want Xb and XB to do the same thing, you have to set them
to. 

<br><br><p>
<h4>3.2 Single Key Message Macros</h4>
If you like, you can assign macros to single keys, for messages
you need to be able to send quickly and easily.<br>The way to do this
is to use the "singleMacro" entry in your config file. <br>The entry
<pre>
     singleMacro: bi
</pre>
Would make Macros b and i into one key macros, meaning that:
<ul>
<li>if you hit "b", you'll send the b macro
<li>the b key will no longer cause your ship to bomb planets, so you'd need to configure the
client to put bombing on some other key. 
</ul>

<br><p>
<h4>3.3 More with Macros</h4>
<ul>
<li>Message macros can be several lines long.
<li>Message macros can be set to automatically go to All players, 
just to certain players (like your Team, or to the Feds, or to player
number 5), or to wait for you to press a third
key or use the mouse to designate who should get the message. 

<li>As with RCDs, they can automatically enter certain values, like
the name of the planet your mouse is over. That way, you can say
something like:
<font color="#2fe3dd">
<pre>
 .            | ( ) _ ( ) |          A-10 Tank Killer reporting
 .            |---`|-|'---|          Superiority over KLI
 .     ____________(.)____________
 .     x * :: " oo '~  oo " :: * x
</pre></font>
<br>
Notice how the planet name gets filled in automatically? Pretty keen.

</ul>

<p>
<a name="writingmacros"></a><center><h2>4. Writing User Message Macros</h2></center>
<br><p>
In your netrekrc file, a simple macro will look like this:
<pre>
mac.b.T: Bomb their core, d00dz!
</pre>
The format is  <font color="yellow">mac.&lt;key&gt;.&lt;dest&gt;: &lt;text&gt;</font>. <br>So for the above example, 
<ul>
<li>"mac." starts the macro definition
<li>"b" is the key to assign it to (so it will get output by "Xb")
<li>"T" means send it to your team
</ul>

<br><p>
Now, a more complicated example might look like:<br>
<pre>
mac.1.A:%     Send                 .--------.     They   
mac.1.A:%     the                  |_I_I_I_I]__   need it  
mac.1.A:%     Short Bus    .::.    | _sped ;;_ )  at %L
mac.1.A:%                  ':::'' ='-(_)----=(_)'
</pre>
<br>
In the above
<ul>
<li>the macro is assigned to macro 1 (so you send it by typing X1)
<li>the macro gets sent to destination A, which means All
<li>the percent signs are used for substitutions. % sends a space,
while %L gets replaced by the name of the planet closest to the 
mouse pointer. 
</ul>

<br><p>
This third example shows how to specify the destination on the
fly:
<pre>
     mac.f:           Help!  Carrying %a!!
</pre>
Notice how there is no destination? 
This macro requires that you give a third keystroke specifying the
recipient.  For example, it could be invoked by:
<pre>
     XfT             &lt;- to your team
     Xf1             &lt;- to player 1
     XfG             &lt;- if you are desperate, send to God
     XfA             &lt;- if you are stupid, send to ALL
</pre>
The %a is replaced with how many armies you are carrying. And multiline
macros can be flaky or not work at all if they require a destination,
so don't try that. 

<br><p>
Now, if you want to send the message to the player closest to the
mouse, you could use:
<pre>
     mac.f.%u:           Help!  Carrying %a!!
</pre>
But you'd want to be <i>very</i> careful about where you had your mouse.


<p>
Here's the reference tables for the possible destinations
and substitutions.<br><br>

<a name="deststable"></a><h3>4.1 Table of Destinations</h3>
Here are the values you can use for the destination of a message macro:
<br><br>
<table border=0>
<tr><th>Dest<th>Sends to
<tr><td align="center">A<td>&nbsp;All players
<tr><td align="center">T<td>&nbsp;Your team
<tr><td align="center">F<td>&nbsp;The Fed team
<tr><td align="center">K<td>&nbsp;The Klingon team
<tr><td align="center">O<td>&nbsp;The Orion team
<tr><td align="center">R<td>&nbsp;The Romulan team
<tr><td align="center">G<td>&nbsp;The Server's admin (God)
<tr><td align="center">&nbsp;0 thru 9,&nbsp;<br>a thru j<td>&nbsp;The player with that number&nbsp;&nbsp;
<tr><td align="center"> %i<td>send message to self
<tr><td align="center"> %I<td>send message to self
<tr><td align="center"> %c<td>send message to self
<tr><td align="center"> %u <td>player nearest to mouse
<tr><td align="center"> %U<td>player nearest to mouse
<tr><td align="center"> %p<td>player nearest to mouse
<tr><td align="center"> %t <td>team of player nearest to mouse
<tr><td align="center"> %z <td>team of player nearest to mouse
<tr><td align="center"> %Z<td>team of player nearest to mouse
<tr><td align="center">%g<td>nearest friendly player to your ship
<tr><td align="center">%h<td>nearest enemy player to your ship
</table>


<a name="substable"></a><h3>4.2 Table of Substitutions</h3>

Here are the codes for things that can be substituted into message macros:
<br><br>
<pre>
    Standard:

    %a   armies carried by sender
    %d   sender damage percentage
    %s   sender shield percentage
    %f   sender fuel percentage
    %w   sender wtemp percentage
    %e   sender etemp percentage
    %t   team id character of target planet
    %T   team id character of sender team
    %c   sender id character
    %n   armies on target planet
    %E   1 if etemped, 0 if not
    %W   1 if wtemped, 0 if not
    %S   sender two character ship type
    %p   id character of target player
    %g   id char of target friendly player
    %h   id char of target enemy player
    %P   id character of player nearest sender
    %G   id char of friendly player nearest sender
    %H   id char of enemy player nearest sender
    %l   three character name of target planet
    %i   sender full player name (16 character max)
    %u   full name of target player (16 character max)
    %z   3 letter team id of target planet
    %b   planet nearest sender
    %o   three letter team name of sender
    %k   number of kills sender has
    %K   number of kills target player has
    %*   if this is encountered, the macro IS NOT PRINTED
    %    this is replaced by a space, mainly useful for starting a message
         must be followed with a blank space, like "% ".

    FULLY CAPITALIZED:

    %L   three character name of target planet
    %I   sender full player name (16 character max)
    %U   full name of target player (16 character max)
    %Z   3 letter team id of target planet
    %B   sender nearest planet
    %O   three letter team name of sender

    Ping stats: (may differ slightly from server '!' ping stats)

    %v   average ping stat round trip time 
    %V   ping stat round trip standard deviation
    %y   percent total packet loss as calculated by server formula

    Miscellanous:

    %m   the last message you sent
    %M   the last message you sent in all caps
</pre>

<a name="macroexpr"></a><h3>4.3 Macro Expressions</h3>

Conditional tests may be done within the macro system, the syntax for
these test is as follows.
<pre>
     %?   introduces a test
     =    equivalence
     &gt;    greater
     &lt;    less
</pre>
     Expressions are evaluated on a character by character basis until the
test is resolved. <br>The text of the test is then replaced in the macro by 1
or 0. <br>Tests are then fed to a syntax called conditional text.
<br>
<br>The best way to demonstrate how this works is by example.
<br>&nbsp;&nbsp;<tt>&quot;1%{included if true%!included if false%}&quot;</tt>
<br>This would print:
<br>&nbsp;&nbsp;<tt>&quot;included if true&quot;</tt>
<br> whereas
<br>&nbsp;&nbsp;<tt> &quot;0%{included if true%!included if false%}&quot;</tt>
<br> would print:
<br>&nbsp;&nbsp;<tt>&quot;included if false&quot;</tt>

<h3>4.4 Macro Notes and Oddities</h3>

Before the system described here, which is called NEWMACRO, 
there was an older system. In some clients, code for the old
system, which had no substitution codes, may still work. 

<p>For example, if this is in your macro file:
<pre>
     mac.E.T         Help!  I'm carrying!!
     macro.E.A       You all suck!
     mac.E           Help!  I'm a twink!!
     mac.E.T         Help!  I'm carrying again!!
     macro.E.A       You all suck even worse NOW!
</pre>
     The surprising results would be that pressing XE would broadcast the
first two messages, and then wait for the destination of the third.  It
would be impossible to ever use the last two.  

<p>
Note that macro syntax is not printf syntax. Not hardly.


<h3><a name="examplemacros"></a><h3>A Few More Example Macros</h3>

Here's a few more for your delectation:
<pre>
     # useful for INL...
     mac.C.%i: CAPTAIN
     mac.N.%i: NEWGALAXY
     mac.S.%i: START
     mac.T.%i: %Z
     # misc
     mac.W.%t: SHUT UP, TWINKS!!
     mac.I.%u: %u: det when you escort!
     mac.O.%u: (%i) ogging
     mac.c.T:   %p++ near %l
     mac.b.T:   %?%n&gt;4%{bomb %l at %n%!bomb%}
     mac.d.T:   %E%{%!%W%{%!I'm fine.  How are you? %}%}%E%{ETEMPED!!!  %}
                %W%{WTEMPED!!!  %}Carrying %?%a&gt;0%{%a armies!%!NO armies.%}
     mac.a.T:   %E%{ETEMPED!!!  %}%W%{WTEMPED!!!  %}Carrying %?%a&gt;0%{%a 
                armies! %!NO armies.%}
     mac.R.A:   I'm a %?%S=SB%{star base!%!twink!%}
     mac.K.A:   KissMy%S
     mac.t:     thanks
     mac.y:     yes
     mac.n:     no
     mac.B:     bye, getting hungry/sleep/horny
     mac.e.T:   need escort going to %l%?%a&gt;0%{, carrying %a armies!%}
     mac.v.%t   %T%c PING stats: Average: %v ms, Stdv: %V ms, Loss: %y%%
     # repeat last message
     mac.m:         %m
</pre>

<p>
<a name="customrcds"></a><center><h2>5. Customizing RCD's</h2></center>
<br><p>
The basic idea with RCDs is that
everyone likes certain standard types of messages, such as distress, pickup,
carrying, etc, to appear in a certain way. Unfortunately this is usually 
not the way everyone else sends them. To make matters worse, everyone sends
their messages in a different way and this hopelessly clutters the message
window. Fortunately, there is help! You can configure the way certain
standard messages and distress calls appear to you. This is an important
point: you do not configure the way the messages are sent with RCD. 
Instead, you are configuring how they appear to you.
You MAY NOT affect how a message appears to anyone else, this is
against the basic concepts of RCD.

<p>
     In order to change *how a message appears to you* a line such as the
following should be in your config file:
<pre>
     dist.taking:   (%i) Carrying %a to %l%?%n&gt;-1%{ @ %n%}
     dist.help:     Help!  I've fallen!  I can't get up!  %a
</pre>

This has the format 
<font color="yellow">dist.&lt;name of distress&gt;: &lt;macro text&gt;</font>.

<p>The names of the distresses and the macros that the system normally 
uses for them are listed below. Arguments for the macro syntax are the same as
above. A few of the substitution codes may not make sense to use
such as %m (last message sent). 

<p>
All these examples assume: you are player F0 (%T%c), alias &quot;Twinky&quot;
(%i), flying a CA (%S), carrying 3 (%a) armies, with the mouse closest to
Cassiopia (%l or %L), which has 5 (%n) armies. The nearest friendly player
to the mouse is player Fc (%T%g) and the nearest player of any team to the
mouse cursor is player 06  (%p). You yourself are near Beta Crucis.
<pre>
Key Distress Name       


E   help
       %T%c-&gt;%O Help(%S)! %s%% shd, %d%% dmg, %f%% fuel,
          %?%S=SB%{ %w%% wtmp,%!%}%E%{ ETEMP!%}%W%{ WTEMP!%} %a armies!
       General distress call. This one also reports if you are wtemped
       or etemped, if you are an SB. Example:
          &quot;F0-&gt;FED Help(CA)! 60%shd, 13% dam, 63% fuel, 3 armies!

F   carrying
        %T%c-&gt;%O %?%S=SB%{Your Starbase is c%!C%}arrying 
           %? %a&gt;0%{%a%!NO%} arm%?%a=1%{y%!ies%}.
        Tells your team the number of armies you are carrying. Example:
           &quot;F0-&gt;FED Carrying 3 armies.&quot;

b   bomb                
       %T%c-&gt;%O %?%n&gt;4%{bomb %l @ %n%!bomb%}
       Tell your team to bomb a planet. Example:
          &quot;F0-&gt;FED bomb Cas @ 5&quot;

c   space_control
       %T%c-&gt;%O Help Control at %L
       Request space control at specified location. Example:
          &quot;F0-&gt;FED Help Control at CAS&quot;
e   escorting
       %T%c-&gt;%O ESCORTING %g (%d%%D %s%%S %f%%F)
       Tells your team who you are escorting. Example:
          &quot;F0-&gt;FED ESCORTING c (13%D 60%S 62%F)&quot;
                
f   free_beer   
       %T%c-&gt;%O %p is free beer
       Tells your team about a clueless player who is an easy kill. 
       Example:
          &quot;F0-&gt;FED 6 is free beer&quot;

h   crippled
       %T%c-&gt;%O %p @ %l crippled
       Tells your team that someone is crippled, i.e. badly damaged. 
       Example:
          &quot;F0-&gt;FED 6 @ Cas crippled&quot;

l   controlling
       %T%c-&gt;%O Controlling at %l
       Tells your team that you are space controlling somewhere. This is 
       the art of dominating a region of space. Example:
          &quot;F0-&gt;FED Controlling at Cas&quot;

m   bombing
       %T%c-&gt;%O Bombing %l @ %n
       Tells your team that you are bombing. Many players turn this message 
       off (by inserting a %* anywhere in the message string) as they can 
       figure out for themselves where someone is going to bomb by their 
       course. Example:
          &quot;F0-&gt;FED Bombing Cas @ 5&quot;

n   no_gas
       %T%c-&gt;%O %p @ %l has no gas
       Tells your team about someone who is out of fuel, good or bad. 
       Example:
          &quot;F0-&gt;FED 6 @ Cas has no gas&quot;

o   ogg
       %T%c-&gt;%O Help Ogg %p at %l
       Tell your team to ogg a carrier. Example:
          &quot;FO-&gt;FED Help Ogg 6 at Cas&quot;

p   ogging
       %T%c-&gt;%O Ogging %h
       Tells your team who you are ogging. Example:
          &quot;F0-&gt;FED Ogging 6&quot;

t   taking       
       %T%c-&gt;%O (%S) Carrying %a to %l%?%n&gt;-1%{ @ %n%}
       Taking a planet. Example:
          &quot;F0-&gt;FED (CA)  Carrying 3 to Cas @ 5&quot;

0   pop 
        %T%c-&gt;%O %l%?%n&gt;-1%{ @ %n%}!
        Tells your team the number of armies on a planet or that it has 
        popped or been bombed or dropped on recently. Example:
            &quot;FO-&gt;FED Cas @ 5!&quot;

1   save_planet
       %T%c-&gt;%O Help at %l! %?%a&gt;0%{ (have %a arm%?%a=1 %{y%!ies%}) %} 
           %s%% shld, %d%% dam, %f%% fuel
       Need help NOW to take or protect a planet. Example:
          &quot;F0-&gt;FED Help at Cas! (have 3 armies) 60% shld, 13% dam, 63% fuel&quot;

2   base_ogg,   
       %T%c-&gt;%O Sync with --]&gt; %g &lt;[-- OGG ogg OGG base!!
       That greatest of maneuvers, the Ogg, as applied to an enemy SB. 
       Example:
          &quot;F0-&gt;FED Sync with --] c [--- OGG ogg OGG base!!&quot;

3   help1       
       %T%c-&gt;%O Help me! %d%% dam, %s%% shd, %f%% fuel %a  armies.
       General distress. Same for help2. Example:
          &quot;F0-&gt;FED Help me! 13% dam, 60%shd, 63% fuel 3 armies&quot;

4   help2
       %T%c-&gt;%O Help me! %d%% dam, %s%% shd, %f%% fuel %a armies.
          Defaults to same as above.

5   asw
       %T%c-&gt;%O Anti-bombing %p near %b.
       Tells your team that you are doing Anti Scout (bomber) Warfare. 
       Example:
          &quot;F0-&gt;FED Anti-bombing 6 near Bet&quot;

6   asbomb
       %T%c-&gt;%O DON'T BOMB %l. Let me bomb it (%S)
       Respectfully requests that you be allowed to bomb something. This is 
       typically used if you are flying an AS as they have a much better 
       chance of bombing a planet to a lower number, making it easier to 
       take. Example:
          &quot;F0-&gt;FED DON'T BOMB Cas. Let me bomb it (CA)&quot;

7   doing1
       %T%c-&gt;%O (%i)%?%a&gt;0%{ has %a arm%?%a=1%{y%!ies%}%} at lal.  
          %d%% dam, %s%% shd, %f%% fuel
       General information message. Example:
          &quot;F0-&gt;FED (Twinky) has 3 armies at lal. 13% dam, 60% shd, 62% 
           fuel&quot;

8   doing2
       %T%c-&gt;%O (%i)%?%a&gt;0%{ has %a arm%?%a=1%{y%!ies%}%} at lal.  
          %d%% dam, %s%% shd, %f%% fuel
       Same as doing1, by default

9   pickup      
       %T%c-&gt;%O %p++ @ %l
       One of the most useful macros. Use this if you see an enemy pick up 
       armies . Example:
          &quot;F0-&gt;FED 6++ @ Cas&quot;

@   other1
       %T%c-&gt;%O (%i)%?%a&gt;0%{ has %a arm%?%a=1%{y%!ies%}%} at  lal. 
          (%d%%D, %s%%S, %f%%F)
       Another general call. 

#   other2
        %T%c-&gt;%O (%i)%?%a&gt;0%{ has %a arm%?%a=1%{y%!ies%}%} at  lal. 
           (%d%%D, %s%%S, %f%%F)
        Same as above
</pre>

<h3>Headings</h3>

<p>If you configure an RCD, you also must configure the header of that
message, that is the part at the beginning that specifies who the message
is from and to. This isn't difficult; just add the header to the
beginning of the RCD.  For example, instead  of
<br><tt>&nbsp;&nbsp;dist.T.taking:      Carrying %a to %l%?%n&gt;-1%{ @ %n%}</tt>
<br>use
<br><tt>&nbsp;&nbsp;dist.T.taking:      % %T%c@%b Carrying %a to %l%?%n&gt;-1%{ @ %n%}</tt>

<p>
<br>The default header is
<font color="yellow">% %T%c-&gt;%O</font> and an alternative is
<font color="yellow">% %T%c@%b</font>


<h3>Example</h3>


We'll map the generic distress call (help) to 'h', 
and make it appear as: &quot;I'm about to die with %a of your team's armies!&quot;

<br><br><p>First, try to separate in your mind the two types of configurability
that are going on here.
<ol>
     <li> you are changing the key that sends the message
     <li> you are changing how the message appears to you
</ol>
     In order to do (1), just <a href="./keymapping.php">use a keymap</a>.  
Simply put the following in your config file: 
<pre>
keymap: hE
</pre>
     This performs the key configuration we wanted for the first example,
telling the system that you want "h" to do what "E" normally would do. 
You can then tell it to use E for something else, or you can leave it as
is, and either key will send a distress call. 
<br><br><p>
In order to change the message, put the following in your config file:
<pre>
dist.help:     %T%c-&gt;%O I'm about to die with %a of your team's armies!
</pre>
Note the header. 

<h3>Server Debugging</h3>

<p>If you have read all the documentation, are sure you are using the
right syntax, and RCD (or MACRO) still is not working, then check out the
following. 
<p>
     1. Did you receive RC_DISTRESS when you logged in?  
<p>
     The server must send this to the client to tell the client that it
understands RCD messages.  Otherwise the client will just send the standard
formatted RCDs. 
<p>
     Some clients have a mod which shows you whether RC_DISTRESS is on by
looking at the first line of the macro window.  If it says, &quot;Packages
active: NBT, NEWMACRO, SMARTMACRO&quot;,  you have no guarantee that RCD was
turned on by the server. If it says, &quot;Packages active: NBT, NEWMACRO, 
SMARTMACRO, RC_DISTRESS&quot; then RCD is definitely on.  
Don't worry about #1, go to #2.
<p>
     2. Are any MACROs assigned to the same key as the RCD you are
configuring?
<p>
     If this occurs, you will see the macro and NOT the RCD.
<p>
     3. Are any other RCDs assigned to the same key as the RCD you are
configuring (this includes the DEFAULT RCDS!!) ?
<p>   
     If this occurs, you will see whichever RCD happens to be listed first
when the client examines the RCD list.


<a name="customrcms"></a>
<center><h2>6. RCM's (Receiver Configurable Server Messages)</h2></center>

Those kill and take messages that the server sends are called RCM's, and
as you may have guessed, they work a lot like RCD's, in that you can change
how they appear to you. 
<p>
Short packet kill messages may be freely configured using
the macro syntax. Things are interpreted as follows:
<ul>
<li> the killed person corresponds to the sender,
<li> the killer corresponds to the target player,
<li> involved planet (killed by, destroyed, taken) to the target planet,
<li> damage is int part of kills and shield fraction part.
<li> whydead goes with wtmp.
</ul>
All others are undefined.
<p>
The format of the messages is:
<p>
msg.[name of message]: [RCM macro]
<p>
Available messages and their defaults are:
<pre>
msg.kill:  ........
msg.kill:GOD-&gt;ALL %i (%S) (%T%c%?%a&gt;0%{+%a armies%!%}) was kill 
           %?%d&gt;0%{%k%!NO CREDIT)%} for %u (%r%p) %?%w&gt;0%{%W%!%}
msg.planet:GOD-&gt;ALL %i (%S) (%T%c%?%a&gt;0%{+%a armies%!%} killed by %l (%z) 
            %?%w&gt;0%{%W%!%}
msg.bomb:%N-&gt;%Z We are being attacked by %i (%T%c) who is %d%% damaged.
msg.destroy:%N-&gt;%Z %N destroyed by %i (%T%c)
msg.take:%N-&gt;%O %N taken by %i (%T%c)
msg.ghostbust:GOD-&gt;ALL %i (%S) (%T%c) was kill %k for the GhostBusters
</pre>

<p>
BRMH-style formatted kill windows may be obtained by something like:
<pre>
msg.kill:  %i (%S) (%T%c%?%a&gt;0%{+%a armies%!%}) %&gt;30 kill 
             %?%d&gt;0%{%k%!NO CREDIT)%} for %u (%r%p) %?%w&gt;0%{%&gt;65%W%!%}
</pre>


<a name="credits"></a>
<center><h2>7. Credits</h2></center>

This document was based on material from the COW manual sections which
were written by Jeff Nelson sometime around 6/4/1993. In March of 2007,
akb4 rewrote and reformatted a bunch to create this as a separate manual.
Probably other people contributed as well. 

<?php
echo "</div>\n";
echo getFooter();
?>
