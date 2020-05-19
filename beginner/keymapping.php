

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

echo getSidebarDownload();
echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>




<h3>5.1. Keymaps</h3>

     The original key assignments were created more out of ease of
memorization than speed of access in combat. For example, enabling the
tractor beam is awkward, requiring the use of the shift key. Also, people
will always have their particular preferences. For this reason, almost all
netrek players use a keymap to change the key assignments. Its use it quite
simple. Simply add a line of the form &quot;keymap:
&lt;key&gt;&lt;function&gt;&lt;key&gt;&lt;function&gt;&lt;key&gt;&lt;function&gt;....&quot; to your xtrekrc file.<p>
Each pair of characters assigns the key specified by &lt;key&gt; to perform the
function originally assigned to the key specified by &lt;function&gt;. For
example, to map toggle tractor (T) to 't', and set max warp (%) to 's', you
would use
<pre>
     keymap: tTs%
</pre>
     The space bar can be remapped, but it cannot be the first key to be
remapped in a sequence (obviously).  It is often mapped to det: 
<pre>
     keymap: tTs% d
</pre>
<h3>5.2. CKeymaps</h3>

     Control keymaps (ckeymap) handles the remapping of keys in an 
analoguous manner to the normal keymap (keymap).  The control keymap 
also allows the user to map both *upper* and *lower* case letters keys  
when pressed with the control key.  This means that ^u and ^U are
*different* keys when it come to mapping them.  
<p>
     Any combination of normal keys and control keys can be mapped to one 
another.  In other words, you can map from control key to control key,
control key to normal key, normal key to normal key, and normal key
to control key.
<p> 
New format for ckeymap is:<br>
c = any printable ascii character.<br>
^ = introduce control mapping (the key '^' not control + key.)
<p> 
Each entry is a pair, like:
<pre>
cc              # regular format
c^c             # regular-&gt;control
^cc             # control-&gt;regular
^c^c            # control-&gt;control
 
Example ckeymap:
ckeymap:                 ^a%r^b^m^ca%d5 tfDFf^^E
</pre>
Special case:<br>
     The '^' must be mapped with a double ^ (&quot;^^&quot;) in either the bound or
binding key position.
<p> 
Notes:<br>
     If you experience difficulties (you shouldn't) you might wish to use a 
normal keymap and a new ckeymap in combination.  Both are read in, the 
keymap first then the ckeymap.  This means that if a key which is defined 
in both the keymap and ckeymap, the ckeymap's definition will be the one 
used.
<p>
     Analogously, control keys may be used for buttonmap, singleMacro and
all macro and RCD definitions.




<p>
For the second example, we'll map AS bombing (asbomb) to '^A', 
without changing the message.
</ul>
If you want to map the asbomb distress onto control-shift-a that is
slightly more difficult.  The asbomb distress normally is associated with
control-6.  Since control keys are involved, we MUST use the control key 
map feature called ckeymap.  The following line would perform the 
operation we would like.
<pre>
ckeymap: ^A^6

     If you *also* want control-a to be asbomb, then use

ckeymap: ^A^6^a^6
</pre>



<?php
echo "</div>\n";
echo getFooter();
?>
