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

//echo getSidebarDownload();
//echo getSidebarNews();
echo getSidebarHints();
//echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>


<h1>Netrek Software Development</h1>
<p>
Netrek software is the result of years of
contributions made by many individuals. If you are interested in
being part of this grand tradition by helping with continued growth 
and development of Netrek software, 
read on for developer resources. We don't just need coders, by the way;
we also need people to help with promotion, and with web page and doc editing.
 </p>
<br>
<h2>General Info and Getting Involved</h2>
<ul>
<li>The
<a href="http://mailman.us.netrek.org/mailman/listinfo/netrek-dev">netrek-dev</a> mailing list and the 
<a href="irc://irc.freenode.net/#netrek">#netrek IRC channel, on irc.freenode.net</a>
 are the main
developer hangouts, including folks doing web pages and promotion.

<li>Notes are kept on the 
<a href="http://wiki.netrek.org/">developer wiki</a>. 

<li>
For source code, see the Developer Wiki <a
href="http://wiki.netrek.org/index.php/SourceControl">source code control</a>
page for where to find source code for various Netrek programs. 

<li>
For binaries and maybe some source code, see 
<a href="../downloads/">the main download page</a>, 
the <a href="../downloads/clients/">full client list download page</a>,
the <a href="http://www.netrek.org/files/">website files repository</a>, 
and <a href="http://ftp.netrek.org/pub/netrek/">the old ftp archive.</a>
</ul>

<p>
<h2>Future Directions</h2>
<ul>
	<li><a href="multiple-roles-multiple-teams.pdf">Multiple Roles,
	Multiple Teams, Dynamic Environment: Autonomous Netrek Agents</a><br />
	This is a paper written by Marcus Huber and Tedd Hadley
	on AI agents. It was published in ACM's &quot;Proceedings of the First
	International Conference on Autonomous Agents, 1997,&quot; pages
	332-339. The article is <a
 	href="http://www.acm.org/pubs/citations/proceedings/ai/267658/p332-huber/">available</a>
 	from the <a href="http://www.acm.org/dl/">ACM Digital Library</a> if
	you are a subscribed ACM member (or you can simply use
	<a href="http://citeseer.ist.psu.edu/27115.html">CiteSeer</a>).</li>

	<li><a href="http://www.inl.org/netrek/netrekFOCS.html">Netrek
	Frequently Offered Clever Suggestions (FOCS)</a><br />
	The same ideas get proposed over and over by people
	trying to enhance Netrek, and the same discussions come up again and
	again. The FOCS is an attempt to stem the flow by presenting old
	discussions and arguments against the ideas. It's a bit out of
        date; check the dev mailing list and wiki, and the netrek irc channel
        for an idea of what mods folks are up to now.</li>

</ul>
</p>

<p>
<h2>Archival Information</h2>
<ul>
	<li><a href="./design.html">Netrek
	Game Design</a><br />
	1997 document describing the major Netrek design changes over the years.</li>

	<li><a href="./server-secrets.txt">Netrek
	Server Secrets</a><br />
	(a bit outdated (1993), but interesting). An archive of little known facts, 
        bugs or features of servers from yesteryear.</li>

        <li>Also see the <a href="../about">history section</a>.
</ul>
</p>


<p>

<h2>Projects</h2>
<br><p>
<b>Current projects include:</b>
<ul>
<li>The Vanilla Server, game server for Bronco, INL, Hockey, Sturgeon, etc.
<li>The Metaserver
<li>The main windows client, Netrek XP 2009
<li>The main Macintosh client, MacTrek
<li>COW, the most advanced open source unix client
<li>netrek-client-pygame, a new client written in Python using the pygame library
<li>BRMH, a unix client with lots of ports available, including OS X
</ul>

<b>Functional Older projects:</b>
<ul>
<li>TedTurner is a Paradise client for unix, including OS X. If anyone ever wanted to play Paradise on a Mac, dusting off this with a build against more current OS X might be nice. 
<li>The Netrek Paradise server is the only game server not unified into the Vanilla server. 
<li>Netrek XP Mod, a Windows client which formed the basis of XP 2006. It is expected that the 4.4.0.4 release from the spring of 2006 will be the final release. 
<li>There were a bunch of developmental projects that formed the path from the unix clients to the Windows clients. These included a COW port to windows and Netrek:1999. 
<li>trekhopd was written to allow Netrek play over TCP from behind a dual-homed firewall. 
<li>pledit was written to edit player lists, but was obsoleted by LTD-style statistics.
</ul>

<b>Incomplete Older projects:</b>
<ul>
<li>glTrek was a project to write a client in Java. It reached Alpha release in summer of 2003.
<li>JTrek was a project to write a client in Java. It reached Alpha release in Fall 1998. 
<li>
<a href="http://www.dtek.chalmers.se/~matso/nttng/">Netrek: The
Next Generation</a>, was a project by 
<a href="mailto:matso@dtek.chalmers.se">Mats Olsson</a><br />
to do  a complete rewrite of Netrek in Java. Project died out in 1999.
</li>

</ul>




<?
echo "</div>\n";
echo getFooter();
?>
