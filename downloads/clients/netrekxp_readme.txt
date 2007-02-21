NetrekXP client changes:

Version 4.4.0.3: (Released on 11-Jul-2004)

- added "viewBox: (on)/off" to show tactical boundaries on galaxy
- added "omitTeamLetter: on/(off)" to stop drawing team letter on galaxy
- added "showStars: (on)/off" to have paradise-like background stars
- added "warpStreaks: (on)/off" to draw streaks while warping to starbase and having
  background stars on
- added "disableWinkey: (on)/off" to allow Windows and Context keyboard keys to be disabled
- added "timerType: 0-4" to be able to switch timer like in paradise.
  0 - don't show
  (1) - show current time
  2 - show server time
  3 - show time in ship
  4 - show user-set time
- "\" will now reset timer to 00:00:00 and start counting up
- added "continuousMouseFix: on/(off)" option. If enabled the continuous mouse will follow
  any buttons that are pressed at the same time. For example if you are steering and
  firing at the same time this fix will allow both events to occur. Without the fix the
  behavior was to only allow one button action.
- sound volume can now be changed using keyboard: 
  'v' - decrease volume
  'V' - increase volume
- planet bitmaps can now be switched through options menu
- rearranged option menus. moved all show/hide window options to Windows menu
- added metaserver2.us.netrek.org and metaserver.eu.netrek.org to the default list of
  servers to try to connect to before falling down to metaCache
- changed some defaults to help newbies
- options menu now automatically resizes when switching from one page to another
- messages can now be up to 1024 characters long. to allow server-side compatibility every
  message longer than 69 characters is split to chunks of 69 and sent one-by-one
- planets and players will appear as soon as they enter tactical window bounds. earlier
  the bitmaps were painted only when their center was entering tactical window

Version 4.4.0.2: (Released on 04-Mar-2004)

- repack of 4.4.0.1 with some bug fixes

Version 4.4.0.1:

- most options in rc file can now have four appearances:
     1. option.observer: string (i.e. "keymap.observer: aabbcc")
     2. option.servernick: string (i.e. "keymap.continuum: aabbcc")
        This one will work only if you have "server.servernick: servername" in rc
        (i.e. "server.continuum: continuum.us.netrek.org")
     3. option.servertype: string (i.e. "keymap.bronco: aabbcc")
        This will work if you either connect from metaserver window (then types are taken from metaserver report)
        or if you use option "server.nickname" to map server to nickname and then define "serverType.nickname" to
        be one of "paradise, bronco, chaos, inl, sturgeon, hockey, dogfight" (so you will have two lines is rc:
        "server.pickled: pickled.psychosis.net" and "serverType.pickled: bronco")
     4. option: string (i.e. "keymap: aabbccdd")
  the options are validated in same order (from 1 to 4 where 1 is best match and 4 is worst match)
- added "window.allow" option to message windows (review, review_all, review_team, review_your, review_kill, review_phaser)
  The option lets you set type of messages logged into that window.
  Message types:
        I - individual messages
        T - team messages
        A - all messages
        K - kill messages
        P - phaser messages
  Default settings:
        review.allow: ITAKP
        review_all.allow: A
        review_team.allow: T
        review_your.allow: I
        review_kill.allow: K
        review_phaser.allow: P
- removed "phaserMsg" rc option, because now you can define where to log phaser messages using "window.allow: P"
- changed player list to not show any information on hidden players instead of returning your own info like
  it was before
- player list is now clickable:
     LeftClick - send private message to person that was clicked
     RightClick - send message to own team
     MiddleClick - send message to all
- added "playerListMessaging: on/off" rc option to enable/disable clickable player list (also added to options
  window to be able to do that in-game)
- added "beepOnPrivateMessage: on/off" rc option. If enabled the client will beep when you receive private
  message from somebody that is not yourself or god.
- added "showHockeyScore: on/off" rc option to show hockey score during the game on map
- changed '-n' command line behavior to opposite. Now the client won't show console window by default
  unless you run it with '-n' or you start the program from command line.
- modified help window to show 'Off' for unmapped keys
- now you can remap keys by pointing at the key in the help window and pushing key you want it to be
- xtrekrc.txt and netrekrc.txt are also searched during defaults initialization
- Pig Call will now include binary version number
- 4th and 5th mouse buttons can now be mapped and used (not tested)
  button 4 can be mapped as '4'
  button 5 can be mapped as '5'
- wheel up and down can be mapped in buttonmap now ('6' for wheelup and '7' for wheeldown)
- added average phaser hit to phaser statistics
- added player number to phaser message (Phaser burst hit guest (R0) for 64 points 10:00:01)
- minor fix in message window. it wasn't refreshed when switching out of netrek with Alt-Tab
  and coming back.
- fixed application bitmap that wasn't loaded right. added both big and small bitmaps. So don't panic when
  you don't see ugly Windows default application icon on your taskbar.
- pingStats window didn't have base window as parent, so it could float around. Also removed option
  to display while not logged in.
- swapped between message windows and dashboard/playerlist. dashboard is now below tactical
- added help line to metaserver window. clickable links to favorite netrek internet resources
- fixed minor bug in saveOptions() where first two macro lines of the first macro were not saved
- added help file to the project (netrek.chm)
- binded F1 to open help file if it exists in executable directory
- added "Save options now" menu to options menu

Versions pre-4.4.0.1:

03-Feb-2004:

- added command line option '-n' to hide console window that is pretty much useless
  unless you need to see what is the problem with connection

05-Jul-2003:

- added "metaPing: on/off" to show ping statistics in the metaserver window. The feature
  was coded by Erik Hietbrink (Shadow Hunter). The feature is enabled by default.

18-May-2003:

- macros in macro window can now be scrolled using 'f' - line down, 'b' - line up,
  'F' - page down, 'B' - page up

16-May-2003:

- added "mainResizeable: on/off" to enable resizing of main window (not in-game).
- fixed the behavior of main window with "windowMove: off" (it wouldn't move too).

14-May-2003:

- added "windowMove: on/off" rc option to disable in-game movement of client windows.
- same for options menu (under Controls menu)

15-Mar-2003:

- Ctrl-g will autologin as guest in the login screen

13-Mar-2003:

- added randomizer for first hint to be shown in hints window
- added "agriCAPS: on/off" rc option to be able to display AGRI planet names in capital
  letters on the map window
- added "agriColor: 0-2" to choose between: 0 - owner race color, 1 - white, 2 - gray
- hints window can now be closed with "unmap special windows" key (space by default)

12-Mar-2003:

- agri planet names are written in white on the map
- hints code was rewritten to get rid of hints.dat formatting.
- fixed code that allowed to gather info on cloaked or in-fog-of-war enemy from playerlist

21-Feb-2003:

- extended "playerlist" rc option to be able to select amount of decimal places in
  float numbers. 
  Now it is possible to set "playerlist: nTK1  RNr1 S1d0" in order to see:
  "R0 CA 0.5  Ensign guest 0.8 2.4 95"
  or giving old "playerlist: nTK RNr Sd" will give you:
  "R0 CA 0.50 Ensign guest 0.82 2.43 95.07"
  Current options that can be followed by numbers 0-2 are: KODSrdBPHkVv

19-Feb-2003:

- macros can now be sent using players from the player list as target. Some default
  distresses can also be used with playerlist.

09-Feb-2003:

- added hints window. If you're newbie player you will be given some hints on the
  game. Credits to Charlie ter Horst, Kevin M Bernatz, David Swasey.
- added showHints: on/off rc option to disable hints window. Don't do that if you
  still didn't read all of them

25-Jan-2003:

- fixed info/lock in the player list window to work right in case of playerListHack: on

24-Jan-2003:

- added playerListHack: on/off option to fix the problem with displaying
  observers/players in the player list window while playing on server with
  old code. If playerListHack is on then every player with letter greater 
  than 'f' will be shown as observer.
  This way you can display only players in the player list. 
  Use 'L' to rotate player list window between: all players/players only/observers only
- changed maximum number of macro lines to be 500 instead of old 75

20-Jan-2003:

- fixed colorfulPhasers option to shrink in case that shrinkage is used
- added phaserShrinkStyle option to enable switch between standard COW
  phaser shrink code and BRMH shrink code (phaser shrinks during rechange time)
  0 - COW style
  1 - BRMH style

19-Jan-2003:

- Alt+End will minimize netrek window
- Alt+Enter will show titlebar of main window (this is old feature that wasn't documented)

18-Jan-2003:

- added player status window toggle 'S' to playback mode
- changed normal playback speed to more 'normal'
- fixed playback help window

13-Jan-2003:

- added "saveMacro", "saveRCD", "saveRCM" boolean rc options to enable saving of
  macros, distresses and messages.
- added new Save_Menu options menu that has options on what information to include
  in the saveFile.

12-Jan-2003:

- added keymap and buttonmap to save options code
- changed saveBig to be on by default

11-Jan-2003:

- expanded options menu to contain some missing options
- changed code for tractor/pressor clearing
- fixed player statistics window for playback mode

10-Jan-2003:

- added some string variables to options save file. probably it is enough for most
  players

09-Jan-2003:

- added "saveFile: filename" rc option to define file to save options to 
  (default xtrekrc.sav). Currently can save only integer and boolean options.
- added "saveBig: on/off" rc option to save options with/without remarks. 
  on - the saveFile will contain description of each variable and possible 
       values for some of them.
  off - only options with their values will be saved.
- mapped " (double quote) to save current options to saveFile
- updated help window

08-Jan-2003:

- removed player number from Puck player on hockey server (local window)

07-Jan-2003:

- added support for 19FLAGS feature.

01-Jan-2003:

- added help window for playback mode
- added support for wheel mouse scroll in text windows

31-Dec-2002:

- added functionality to player list window. Now you can get info on any player or
  lock on any player (observers can lock on cloacked teammates) by just pointing
  at the player line in the list and pushing appropriate key.

24-Dec-2002:

- changed phaserMsg to be printed to review window by default. This was done to
  enable newbie players to see phaser messages by default.
- added "SHOW_ALL_TRACTORS" feature support. This feature enables code that shows 
  tractor/pressor beams of every player in the game. It is server side decision 
  to enable this feature. By default it is enabled only for observers.
- added "showAllTractorPressor on/off" to be able to disable the code of
  SHOW_ALL_TRACTORS even if server supports it
- added option menu for "showAllTractorPressor" variable.

17-Dec-2002:

- added xtrekrc_options.txt file that contains a full list of available xtrekrc options
- renamed sample.xtrekrc to xtrekrc_sample.txt and formatted appropriately
- changed "showHockeyLines" to "showHockeyLinesLocal"
- added "showHockeyLinesMap" to show hockey lines on galaxy
- added menu line for showHockeyLinesMap
- mapped "G" to toggle hockey lines on galaxy window
- updated help window

16-Dec-2002:

- mapped "H" to toggle hockey lines
- moved all documentation to docs folder
- changed loaddocs() function to strip first two characters of the document line
  if they are ^[b or ^[i. In case these are the first two characters of netrekxp.doc 
  the line will appear in bold for ^[b or in underline for ^[i (^[ character here is
  ascii x1b that represents ESC char)
- added cow.doc, cow.txt, newbie.txt to distribution. As I know these files can be
  distributed freely.
- added sample.xtrekrc (actually some strips from mine xtrekrc).

15-Dec-2002:

- added "hockeyLines on/off" to show hockey lines on tactical
- Changed help window text to match current working keys
- Fixed bitmaps location in playback.c
- changed default documentation file to be netrekxp.doc instead of brm.doc
- compiled netrekxp.doc from old version of cow.doc. Still some features missing
- fixed some bitmaps 
- reduced bitmap sizes

