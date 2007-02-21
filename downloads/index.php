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

<h1>Download Netrek Software</h1>
<p>
Netrek software is mostly divided into two categories: clients and
servers. If you want to simply play Netrek, you will need to download a
blessed client binary.</p>

<h2><a href="clients/">Netrek Client Software</a></h2>
<p>
There are various Netrek clients. It is arguable
whether any one client is better than another. Different people prefer
different clients, and most clients can be used to play on any Bronco,
INL, Netrek Hockey and Chaos servers.
</p>

The process consists of the following steps:
<ol>
<li><a href="clients/">choose a client</a> based on your
personal preference and supported Operating Systems.</li>
<li>Install and customize your configuration by editing your netrekrc file.</li>
</ol>

<h2>Netrek Server Software</h2>
The server software only comes in source code form. If you are interested
in running your own server or helping in server development, you should
consult the the Info section before downloading the software. If you
just want to play Netrek, you do not need to run your own server.

<ul>
<li>
	<a href="http://vanilla.us.netrek.org/">Vanilla Server</a><br />
	The Vanilla Server is the most currently maintained
	Netrek server. It supports a variety of server modes including
	traditional Bronco, Chaos, Hockey and other customizations.
</li>

<li>
	<a href="ftp://ftp.netrek.org/pub/netrek/servers/INL/">INL
	Server</a><br />
	This server software has now been replaced by the
	Vanilla Server. This server is used for clued games and official
	INL/ENL/INHL games. It is not intended to be used for
	&quot;pickup&quot; play.
</li>

<li>
	<a href="ftp://ftp.netrek.org/pub/netrek/servers/calvin/">Calvin
	Server</a><br />
	This is a modified Bronco server that used to be at
	calvin.usc.edu. It contains some special modifications not yet
	incorporated into the Vanilla server.
</li>
</ul>

<h2><a href="../developer/">Netrek Software Development</a></h2>
<p>
This page lists all current development efforts in Netrek software. If
you are interested in contributing to Netrek, please check this link out.
</p>

<h2><a href="http://ftp.netrek.org/pub/netrek/">Netrek Continuum FTP Archive</a></h2>
<p>
This is a meta FTP archive containing almost all known Netrek software,
including mirrors of several Netrek FTP sites in the U.S. and Europe. If
you are unable to connect to the primary sites for the various client
and server software, you can find copies here.
</p>


<?
echo "</div>\n";
echo getFooter();
?>
