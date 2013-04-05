=== UsePermalinks ===
Contributors: nomad1337, jeherve
Donate link: http://www.tacticalcode.de/spenden
Tags: shortlink, permalink, wp_get_shortlink, jetpack, publicize
Requires at least: 3.0.0
Tested up to: 3.5.1
License: CC-BY-SA 3.0
License URI: http://creativecommons.org/licenses/by-sa/3.0/deed.en_US

UsePermalinks forces wp_get_shortlink to return a permalink. Handy if other plugins use ugly shortlinks.

== Description ==
Some Plugins use wp_get_shortlink to reference a blogpost. While this returns ugly URLs like http://example.com/?p=314192, it would be much better if these plugins used your permalinks, aka. something like http://example.com/2013/3/7/fancy-urls-wohoo.html
This plugin, UsePermalinks, returns beautiful permalinks instead of creepy 'shortlinks' (as WP calls them).
So if any other plugin uses wp_get_shortlink (like JetPack does atm for publicize), we intercept and instead return the permalink.

**Kudos to Jeremy Herve**, who did the actual research and coding:
[Support Ticket: Publicize Bug](http://wordpress.org/support/topic/publicize-bug?replies=1#post-4052562 "Support Ticket showing Jeremy's Answer, providing this plugin's source")

== Installation ==

1. Upload the `usepermalinks` directory to `/wp-content/plugins/`
1. Go to the Plugins-Section of your Admin-CP and activate it
1. Done.

== Frequently Asked Questions ==

= How does this work? =

We create a filter for `get_shortlink` to bypass the wp_get_shortlink function. When `wp_get_shortlink` is called, we return the permalink.

= Are you a wizard? =

Nope. I wasn't able to find the get_shortlink hook, because it's nowhere in the codex. Jeremy Herve provided the code, I just packed this into a plugin, added some metadata and uploaded it.

= What if something breaks? =

Well, not my bad. *If* something breaks, some plugin author has to be punished badly. wp_get_shortlink returns a hyperlink. Shortlink and Permalink lead to the same page. It doesn't matter which link you visit. The only case I can imagine another plugin not functioning is, when the other plugin parses a post's ID from the shortlink, which is more than stupid.

= So why would I use this plugin? =

Other plugins may use the shortlink to, let's say, publish it. Shortlinks are ugly. Permalinks are pretty. So if those plugins don't have an option to change that behaviour, we can just force it to do.
Specifically, JetPack Publicize uses shortlinks when publishing on Twitter. That's why I "wrote" this plugin.

== Incompatibility ==
As you might have just read, we block a WP core-function with this plugin and return something else.
While I (will have) tested this plugin against all recent WP versions, I cannot guarantee there are absolutely NO issues.
Especially if some cheap-arse plugins use wp_get_shortlink for some mean stuff it's not supposed to do, these plugins will break.

If there are any problems, ask within the support section at wordpress.org or leave a comment at *insert my pretty permalink here*.

== Changelog ==

= 1.0 =
* Initial version

= 1.1 =
* Forgot to add the actionhook to call the plugin's init function m(
* Rename README.md to README.txt for WP-compatibility

== Upgrade Notice ==

= 1.1 =
So yeah. If you want this plugin to function at all, upgrade. It can't work if it's never called.
