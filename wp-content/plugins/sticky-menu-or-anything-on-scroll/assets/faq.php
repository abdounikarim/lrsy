<h2><?php _e('FAQ','Sticky Anything plugin'); ?>/<?php _e('Troubleshooting','Sticky Anything plugin'); ?></h2>

<p><strong><?php _e('Q: I selected a class/ID in the settings screen, but the element doesn\'t stick when I scroll down. Why not?','Sticky Anything plugin'); ?></strong><br />
<?php _e('First, make sure that if you select the element by its classname, it is preceded by a dot (e.g. ".main-menu"), and if you select it by its ID, that it\'s preceded by a pound/hash/number sign (e.g. "#main-menu").  Also, make sure there is only ONE element on the page with the selector you\'re using. If there is none, or more than one element that matches your selector, nothing will happen.','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: Once the element becomes sticky, it\'s not positioned/sized properly at all.','Sticky Anything plugin'); ?></strong><br />
<?php _e('Due to the nature of CSS, there are situations where an element will not stick properly, usually if it has specific properties that are used to manipulate its location and/or dimensions. If your sticky element has any of the following properties, this could cause conflicts:</p><ul><li>- negative margins</li><li>- absolute positioning</li><li>- top/left/bottom/right properties</li><li>- "display: inline"</li><li>- "!important" applied to any of its properties</li></ul><p>Try to avoid all this where possible, but if you can\'t, using the plugin in Legacy Mode (see below) helps sometimes.<br>Another situation that can cause trouble, is when any parent of your sticky element has the "transform" CSS property applied to it.','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: Once the element becomes sticky, it\'s not responsive and doesn\'t resize when I change the browser size.','Sticky Anything plugin'); ?></strong><br />
<?php _e('This is a known (and annoying) bug in the plugin that I haven\'t been able to solve properly yet. For some sites (when the element does not contain any Javascript interactivity, usually), it sometimes helps to use the plugin in Legacy Mode (see below).','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: Is it possible to add some styles to the element but <em>only</em> when it\'s sticky?','Sticky Anything plugin'); ?></strong><br />
<?php _e('To add styles to your sticky element when it\'s <em>not sticky</em>, use classname ".element-is-not-sticky".<br>To add styles to your sticky element <em>only</em> when it\'s sticky, use classname ".element-is-sticky".','Sticky Anything plugin'); ?></p>
<p><?php _e('The following code would give your element a red background only when it\'s not sticky, and blue only when it is:','Sticky Anything plugin'); ?></p>
<p><?php _e('<code>.element-is-not-sticky {<br>&nbsp;&nbsp;&nbsp;background: red;<br>&nbsp;&nbsp;&nbsp;}<br><br>.element-is-sticky {<br>&nbsp;&nbsp;&nbsp;background: blue;<br>&nbsp;&nbsp;&nbsp;}</code>','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: Once the element becomes sticky, there\'s a brief moment where you see it twice.','Sticky Anything plugin'); ?></strong><br />
<?php _e('If you\'re using the plugin in Legacy Mode (see below), this happens when the sticky element (or any of its contents) has a CSS transition applied to it. Because the original element becomes invisible (and a cloned copy of it becomes visible), the visible-to-invisible status change will take place with a transition (ie. not instantly). Either remove any of the transitions the element has, or try disabling the Legacy Mode.','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: My menu sticks, but it doesn\'t open on the <a href="https://wordpress.org/themes/responsive" target="_blank">Responsive</a> theme when it\'s sticky.','Sticky Anything plugin'); ?></strong><br />
<?php _e('This was a bug in pre-2.0 versions, and an incompatibility with the theme. It has been fixed in 2.0, but in Legacy Mode, this bug is still present. If you need to enable Legacy Mode for some reason, it would be better to turn off stickiness for the mobile menu (set "Do not stick element when screen smaller than:" to 651 pixels).','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: I have another plugin called <a href="https://wordpress.org/plugins/easy-smooth-scroll-links/" target="_blank">Easy Smooth Scroll Links</a>, but once my menu becomes sticky, that one doesn\'t work anymore.','Sticky Anything plugin'); ?></strong><br />
<?php _e('This was a bug in pre-2.0 versions, and an incompatibility with the plugin. It has been fixed in 2.0, but in Legacy Mode, this bug is still present. If you need Legacy Mode enabled for some reason, there is no fix for this bug, however there is an alternative workaround. According to reports from users who had this issue, a plugin called <a href="https://wordpress.org/plugins/page-scroll-to-id/" target="_blank">Page Scroll To ID</a> is a worthy alternative to Easy Smooth Scroll Links and works with the Sticky Anything plugin in Legacy Mode.','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: Still doesn\'t work. What could be wrong?','Sticky Anything plugin'); ?></strong><br />
<?php _e('Check the "Debug Mode" checkbox in the plugin\'s settings. Reload the page and you may see errors in your browser\'s console window. If you\'ve used a selector that doesn\'t exist, OR there are more of them on the page, you will be notified of that in the console.','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: Is it possible to have multiple sticky elements?','Sticky Anything plugin'); ?></strong><br />
<?php _e('The current version only allows one sticky element, but this functionality will be implemented in the next major version. No expected release date, though.','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: What is Legacy Mode? Should I use it?','Sticky Anything plugin'); ?></strong><br />
<?php _e('In version 2.0 of the plugin, a new/better method for making elements sticky was introduced. Before this, a sticky element would essentially be a cloned copy of the original element. Now, the element itself becomes sticky and doesn\'t use copying and cloning anymore, which solves a lot of issues.','Sticky Anything plugin'); ?></p>
<p><?php _e('So, should you use it or not? Well, if you <em>upgraded</em> this plugin from an earlier version, Legacy Mode will be turned ON by default, because chances are that the old method worked perfectly fine for your site. If that\'s the case, there is not really a need to use the new method and you can just continue using the old, classic method. If it ain\'t broke, don\'t fix it, right?','Sticky Anything plugin'); ?></p>
<p><?php _e('Having said that, it\'s worth checking if your element works just as well with Legacy Mode turned OFF, since this is the "better" method. Just give it a quick try. If it doesn\'t work, you can always just go back and enable it again.','Sticky Anything plugin'); ?></p>
<p><?php _e('<span style="font-weight:bold;">NOTE: new installs of the plugin will have the Legacy Mode turned off by default. Only UPGRADES from 1.4 (or before) should have it turned on by default.</span>','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: What is this Dynamic Mode thing exactly?','Sticky Anything plugin'); ?></strong><br />
<?php _e('This mode is only available in Legacy Mode, and to properly explain this, we\'ll need to go a little deeper in the plugin\'s functionality. So bear with me...','Sticky Anything plugin'); ?></p>
<p><?php _e('In Legacy Mode, when an element becomes sticky at the top of the page (and keeps its place regardless of the scrolling), it\'s actually not the element itself you see, but a cloned copy of it, while the actuak original element is out of view and invisible.','Sticky Anything plugin'); ?></p>
<p><?php _e('The original element always stays where it originally is on the page, while the cloned element is always at the top of the browser viewport screen. However, you will never see them both at the same time; depending on your scroll position, it always just shows either one or the other.','Sticky Anything plugin'); ?></p>
<p><?php _e('In the original plugin version, the clone would be created right the moment when you load the page (but not visible right away). Then when you would scroll down, it would become visible (and stick at the top), while the original element would disappear from view.','Sticky Anything plugin'); ?></p>
<p><?php _e('However, some themes use JavaScript to dynamically create elements (menus, mostly) for mobile sites. With this method, a menu doesn\'t exist in the HTML source code when you load the page, but is created some time after the page is fully loaded -- in many cases, these menus would just be generated ONLY when the screen is more (or less) than a certain specific width. With the original version of the plugin, the problem would be that the original element (that you want to make sticky) may not have been fully created upon page load, so the clone would also not be fully functional.','Sticky Anything plugin'); ?></p>
<p><?php _e('Enter Dynamic Mode. Now, a clone of the element is not created on page load -- instead, it\'s only created when the user scrolls and hits the "sticky" point. This ensures that the cloned element is an actual 1-on-1 copy of what the original element consists of at that specific point in time (and not at the "page is loaded" point, which may be different if the element was altered since).','Sticky Anything plugin'); ?></p>
<p><?php _e('Why don\'t we use Dynamic Mode all the time then? This has to do with the fact that other plugins initialize themselves on page load and may need the full markup (including the cloned element) at that point. In Dynamic Mode, there is no clone available yet on page load, so that could cause an issue if that other plugin is looking for an element that doesn\'t exist yet.','Sticky Anything plugin'); ?></p>
<p><?php _e('(This may all sound terribly confusing. And it is! So, much work was done to fix this nonsense: since v2.0 of the plugin, a whole different method is being used to make elements sticky, and Dynamic Mode is not even an issue anymore.)','Sticky Anything plugin'); ?></p>
<p><?php _e('Phew!','Sticky Anything plugin'); ?></p>

<p><strong><?php _e('Q: I\'ll need more help please!','Sticky Anything plugin'); ?></strong><br />
<?php _e('<!-- The plugin\'s own page can be found at <a href="http://www.senff.com/plugins/sticky-anything-wp" target="_blank">http://www.senff.com/plugins/sticky-anything-wp</a>. If that still doesn\'t help you solve your issue, please do NOT file a bug through the form on my website, but instead --> Please go to the plugin\'s <a href="https://wordpress.org/support/plugin/sticky-menu-or-anything-on-scroll" target="_blank">support forum  on WordPress.org</a> and post a message (include a link to your site if possible). Repsonse time is usually within a few hours maximum.','Sticky Anything plugin'); ?></p>
