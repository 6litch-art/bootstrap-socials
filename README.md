Social Buttons for Bootstrap
============================

Original idea by @lipis extended by @kzl____

Social Buttons made in pure CSS based on
[Bootstrap](http://twbs.github.io/bootstrap/) and
[Font Awesome](http://fortawesome.github.io/Font-Awesome/)!

[Check the live demo!](http://bootstrap-socials.glitchr.io)

Installation
------------

Include the default `stylesheet-socials.css` in your project, or generate it using SASS

Available classes
-----------------
 - `btn-adn`
 - `btn-bitbucket`
 - `btn-dropbox`
 - `btn-facebook`
 - `btn-flickr`
 - `btn-foursquare`
 - `btn-github`
 - `btn-google`
 - `btn-instagram`
 - `btn-linkedin`
 - `btn-microsoft`
 - `btn-odnoklassniki`
 - `btn-openid`
 - `btn-pinterest`
 - `btn-reddit`
 - `btn-soundcloud`
 - `btn-tumblr`
 - `btn-twitter`
 - `btn-vimeo`
 - `btn-vk`
 - `btn-yahoo`
 - `btn-[..]`


How to get them ?
-----------------
1) Include Bootstrap and Font Awesome

2) If you haven't done that already, include the latest Bootstrap and Font Awesome in your project.
Include the CSS

3) To enable the socials buttons, just include the stylesheet-socials.css file into your project.

Add some buttons!
-----------------
Start using the buttons as you would normally do with the Bootstrap buttons that have an icon by adding the relevant class. An icon button (square or circle) can be obtained like this:
```
<button class="btn [btn-social-icon|btn-social-icon-circle] btn-twitter"></button>
```

Alternative outline style are also available :
```
<button class="btn btn-social-icon btn-outline-twitter"></button>
```

You can also tune them by removing the icon, keeping the color and custom buttons as you do with FontAwesome!
```
<button class="btn btn-social-icon [btn-color-twitter|btn-outline-color-twitter]">
  <i class="fa fa-twitter"></i>
</button>
```

Eventually, you can combine icon and message in a button using these lines:
```
<button class="btn btn-block [btn-social|btn-social-circle] btn-color-twitter">
  <i class="fa fa-twitter"></i> Sign in with Twitter
</button>
```

How to get more buttons ?
-------------------------

First, download the source files on GitLab. Add new icons by generating a new stylesheet using SASS and converting stylesheet-socials.scss after adding new entries at the end of the file. Additionally the script get-fontawesome.sh will help you finding the unicode of the icon you are looking for.
```
git clone http://gitlab.glitchr.io/public-repository/bootstrap-socials.git
cd bootstrap-socials
nano assets/scss/stylesheet-socials.css # Make your changes here
make
```

Additionally the script ./get-fontawesome.sh will help you finding the unicode of the icon you are looking for.
```
./get-fontawesome.sh       # Get the list of the currently referenced icons
./get-fontawesome.sh smile # Get the "smile" icon
```


Notes
-----
You can ask for new icons. Any improvement would be very welcome !