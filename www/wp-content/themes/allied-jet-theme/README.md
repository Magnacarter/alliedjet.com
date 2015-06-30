# barebones-framework

![alt tag](https://raw.githubusercontent.com/Magnacarter/barebones-framework/master/imgs/jolly-roger-template.png)


<h2>Author &amp; Intro</h2>

Author: <a href="https://github.com/Magnacarter" target="_blank">Adam Carter</a>

Author Website: http://adamkristopher.com

A custom framework to get a WordPress site up and running in a jiffy. It's pretty much a collection of the cleanest code I've written over the last few months from several portfolio style sites. The files included allow one to quickly build a portfolio site. Of course, it can also be used for writing any type of site one desires.

The HTML that is currently in the theme should be 100% adaptive and responsive to changes in viewport size. But there may be a bug here and there.

I will update this document as the theme evolves.

<h2>Settings</h2>

Create four pages; Home, Contact, About, Blog.

Create two menus, name them "main-nav" and "push-nav". Populate them with the identical pages.

Go to settings in the admin panel, select Reading, select "A static page", then select "home" for front page and "blog" for posts page.

Go to settings in the admin panel, select Permalinks, select "Post name" and save changes.

To set the hamburger icon nav button go to imgs/hamburger-nav-icon.png, add it to the WordPress media directory, then go to "options" in the admin panel, scroll down to the header section and add it under "hamburger_icon".

<h2>Useful Includes</h2>

I've included two Custom Post Types; Testimonial and Portofolio located in includes/post-types.php.

There is also a file included for writing hooks located in includes/barebones-hooks.php.

<h2>ACF Fields</h2>

I am using <a href="http://www.advancedcustomfields.com/resources/repeater/" target="_blank">ACF Pro</a> Repeater fields for all slider data. I believe you will need the ACF Pro license key to access repeater fileds and an "options" menu for global fields. However, you can always get the free version of ACF and work around this. All acf fields are located in includes/acf.php. However if you wish to not have those fileds hard coded you can import them with the acf-fields.json file stored in import-files/ acf-fields.json.

<h2>Gravity Forms</h2>

There are two <a href="http://www.gravityforms.com/" target="_blank">Gravity forms</a> being used; one in a subscribe widget in the blog sidebar and one "contact us" form in the contact page. If you have Gravity Forms you can get the gravity_forms.json export file in import-files/gravity-forms.json. But, of course, you can customize your own forms, these just have some css written to make them not look so... "Gravity Formy". ;)

<h2>jQuery Plugins &amp; CSS</h2>

I structured a great portion of the theme's HTML elements with the <a href="http://unsemantic.com/" target="_blank">unsemantic grid</a>. I choose it because it's easy to use, fluid and packed with cool grid classes that make building an adaptive site a breeze. If you are unfamiliar with unsemantic, I highly recommend digging into their docs for an hour or so.

Third party jQuery Plugins being enqueued include: <a href="https://github.com/vimeo/player-api/tree/master/javascript" target="_blank">froogaloop</a>, <a href="http://www.woothemes.com/flexslider/" target="_blank">flexslider</a>, <a href="https://github.com/jquery/jquery-mousewheel" target="_blank">mousewheel</a>, <a href="https://github.com/gdsmith/jquery.easing" target="_blank">easing</a>, <a href="http://fittextjs.com/" target="_blank">fittext</a>, <a href="http://takien.github.io/jPushMenu/" target="_blank">pushmenu</a>.

Third party styles being enqueued include: <a href="http://unsemantic.com/" target="_blank">unsemantic grid</a>, <a href="https://daneden.github.io/animate.css/" target="_blank">animate.css</a>.

Third party Social Media icon fonts are included in barebones-framework/ss_icon_fonts. In order to changes these icons to different social media icons you will need to change the numerical HTML encoding
of the Unicode character that are located in footer.php. For a list of the social media unicodes available visit http://www.devinit.org/archivedsite/wp-content/themes/devinit/ss-social/documentation.html.
