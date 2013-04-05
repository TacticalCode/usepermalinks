== UsePermalinks ==
Plugin by: Damon Dransfeld
Latest version: 1.1
Stable version: 1.1
Tested WP-Version: 3.5.1

Kudos to Jeremy Herve, who did the actual research and coding:
http://wordpress.org/support/topic/publicize-bug?replies=1#post-4052562

== Description ==
Some Plugins use wp_get_shortlink to reference a blogpost. While this return ugly URLs like http://example.com/?p=314192, it would be much better if these plugins used your permalinks, aka. something like http://example.com/2013/3/7/fancy-urls-wohoo.html
This plugin, UsePermalinks, returns beautiful permalinks instead of creepy 'shortlinks' (as WP calls them).
Those other, mean plugins use wp_get_shortlink to get the link to a blogpost. But instead of returning 'shortlinks', UsePermalinks intercepts and returns your permalinks. Awesome.

== Incompatibility ==
As you might have just read, we block a WP core-function with this plugin and return something else.
While I (will have) tested this plugin against all recent WP versions, I cannot guarantee there are absolutely NO issues.
Especially if some cheap-arse plugins use wp_get_shortlink for some mean stuff it's not supposed to do, these plugins will break.

If there are any problems, ask within the support section at wordpress.org or leave a comment at *insert my pretty permalink here*.

== Changelog ==
2013-04-04	v1.0:	Initial version
2013-04-05	v1.1:	My Brain hurts... Add action hook to call the init function m(
					Add Tabs to Changelog for better readability
					This file is now called README.txt instead of README.md
