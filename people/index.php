<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

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

<p><h2>Ask Questions. Get Answers</h2>
<ul>
	<li><b>In-Game Messaging</b><br>
	How to send Messages: Type 'm' or put your mouse cursor in the
	outgoing message window.  It is the upper of the two thin
	one-line windows at the bottom right of the netrek window.
	Type the letter for who you want to send to:

	<table border="0" bgcolor="#444444">
        <tr><td width="60"><b>A</b></td><td>Send to All (Everyone!)</td></tr>
        <tr bgcolor="#333333"><td><b>t</b></td><td>Send to your own team</td></tr>
	<tr><td><b>0</b>-<b>9</b>, <b>a</b>-<b>j</b></td><td>Message is sent to player of that number/letter</td></tr>
        <tr bgcolor="#333333"><td><b>F</b>,<b>K</b>,<b>R</b>,<b>O</b></td><td>Send to <b>F</b>ederation, <b>K</b>lingons, <b>R</b>omulans or <b>O</b>rions</td></tr>
	</table>
	Type now your message followed by enter. Use the Esc key to cancel a message before sending it.
	</li>

	<li>
	<a href="http://www.inl.org/netrek/netrekFAQ.html">Netrek
	Frequently Asked Questions (FAQ) List</a><br>
	Many questions regarding Netrek are answered in this
	list. Regardless of whether you know nothing about Netrek or
	have been playing for a year, the answer to your question is
	probably here.	Please read this FAQ before asking for help on
	Usenet or via email.
	</li>

	<li>
	<a href="news://rec.games.netrek/">Usenet: rec.games.netrek
	newsgroup</a><br>
	This is a Usenet newsgroup (often referred to as RGN) dedicated
	to the topic of Netrek. You can join in on discussions with
	fellow players. This is the primary communication medium for the
	Netrek community. A word of warning: asking common questions
	like &quot;How do I play Netrek?&quot; or &quot;Where do I
	download a client?&quot; will generally backfire with rude
	replies about getting a &quot;clue&quot; and reading the <a
	href="http://www.inl.org/netrek/netrekFAQ.html">FAQ</a>.  So,
	please look for the answer to any beginner questions on this
	home page before posting.
	</li>

	<li>
	<a href="irc://irc.freenode.net/netrek">IRC: #netrek channel</a><br>
	This is an IRC (Internet Relay Chat) channel also dedicated
	to, of course, the topic of Netrek. Join if you've got burning
	questions and need quick interactive help!
	</li>
</ul>

<p><h2><a href="http://facefiles.netrek.org/">Netrek Face Files</a></h2>
Did you ever wonder what the people you play with every day look like? There is
now a perfect opportunity to satisfy your need for information: go visit the 
<a href="http://facefiles.netrek.org/">Netrek Face Files</a>! And, most 
important of all, do not forget to leave your own photograph!

<p><h2>Advanced Netrek</h2>
Think you rewl? Yeah, whatever! Clue games are usually
reserved for players who have logged hundreds of hours in
&quot;pickup&quot; Netrek. If you've never played on a clue game, you
should join as an observer first to become familiarized with real
teamwork and gameplay.

<ul>
	<li>
	<a href="http://archives.real-time.com/mailman/listinfo/vanilla-clue-pickup">Clue-pickup
	Mailing List</a><br>
	If you want to play on league-style
	clued games, join this mailing list. Various teams announce clued games
	open to players during the league seasons. To subscribe to the list,
	send a message to <a
	href="mailto:vanilla-clue-pickup-subscribe@us.netrek.org">vanilla-clue-pickup-subscribe@us.netrek.org</a>.
	You can browse past messages in the
	<a href="http://archives.real-time.com/pipermail/vanilla-clue-pickup/">Archive</a>. 
	</li>

	<li>
	<a href="../leagues/">Netrek Leagues</a><br>
	There are several organized Netrek Leagues where best players
	from all over the world form teams to play each other. Join and
	play with your friends in organised teams and enjoy high quality
	games of Netrek. Find out more about the different leagues
	<a href="../leagues/">here</a>.
	</li>
</ul>

<p><h2><a href="http://www.shadowhunter.org/gatherings/">Gatherings</a></h2>
Meet players in person! Netrek gatherings are events in which netrekkers
from all over the world converge to one place to play a lot of netrek,
drink lots of beer and generally have a good time. There have been
many gatherings in the past, also on smaller (national) scale. <a
href="http://www.shadowhunter.org/gatherings/">Here</a> are the few events
where we do have recordings from. There definately must have been lots
more gatherings in the USA.

<p><h2><a href="../developer/">Netrek Development</a></h2>
If you are interested in helping to improve or enhance
Netrek, check out <a href="../developer/">this link</a>.


<?
echo "</div>\n";
echo getFooter();
?>
