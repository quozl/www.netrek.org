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

<h1>Contact People</h1>
<p>
One of the most important aspects in the game of Netrek is
communication. It turns the game into a <i>team</i> game, where effective
communication with fellow team players improves the chances on winning.
Inside the game you can always ask for help. But also outside the game
there are many possibilities to discuss netrek and get answers to your
questions. Get in touch!
</p>

<p><h2>Ask Questions. Get Answers.</h2>
<ul>
	<li>Talk to people in the game with <a href="../beginner/messaging.php">In-Game Messaging</a></li>
	<li>Chat live at the 
	<a href="irc://irc.freenode.net/#netrek">#netrek IRC channel, on irc.freenode.net</a><br>
	This is an IRC (Internet Relay Chat) channel dedicated
	to, of course, the topic of Netrek.<br>Hop on if you've got burning
	questions and need quick interactive help!
	</li>


	<li>
	<a href="news://rec.games.netrek/">Usenet: rec.games.netrek
	newsgroup</a><br>Or, if you don't have a newsreader and want 
        to view it thru Google Groups, look at <a href="http://groups.google.com/group/rec.games.netrek">http://groups.google.com/group/rec.games.netrek</a>
	This is a Usenet newsgroup (often referred to as RGN) dedicated
	to the topic of Netrek. You can join in on discussions with
	fellow players. This is the primary communication medium for the
	Netrek community. A word of warning: asking common questions
	like &quot;How do I play Netrek?&quot; or &quot;Where do I
	download a client?&quot; will generally backfire with rude
	replies about getting a &quot;clue&quot; and reading the stuff
        on this website. So,
	please look for the answer to any beginner questions on this
	home page before posting.
	</li>

        <li>
        There are <a href="http://www.playnetrek.org/smf/">webforums over at playnetrek.org</a>.
        </li>

        <li>
        We've got mailing lists, too. <br><br>
        <ul>
        <li><a href="http://groups.google.com/group/netrek-forever">Netrek-Forever Google Group</a><br>for general discussion. 
        <li><a href="http://mailman.us.netrek.org/mailman/listinfo/netrek-dev">netrek-dev</a><br>for game developers, server admins, website work, etc. 
        <li><a href="http://groups.google.com/group/netrek-clue-games/">The Clue Game list.</a><br>
Once you know the basics, if you want to take it to the next
level and see what Netrek is really about, you want to play clue games. Some
of the players in these games have played thousands of hours. 
If you've never played on a clue game, you
should join as an observer first to become familiarized with real
teamwork and gameplay.

        </ul>
        </li>

</ul>


<p>
<h2>Gatherings</h2>

<br>
Sometimes there are Netrek gatherings, where players from all over
the world converge to one place to play a lot of netrek,
drink lots of beer and generally have a good time. ShadowHunter has 
<a href="http://www.shadowhunter.org/gatherings/">a page of photos and other stuff</a> from the European gatherings of the 1990s. 




<?
echo "</div>\n";
echo getFooter();
?>
