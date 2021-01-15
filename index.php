<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


$bookmarks = [
    "rss-alt"            => ["fas fa-fw fa-rss"           , "#EE802F",  "RSS"],
    "google-alt"         => ["fab fa-fw fa-google"        , "#DD4B39", "Google"],
    "twitter-alt"        => ["fab fa-fw fa-twitter"       , "#55ACEE", "Twitter"],
    "facebook-alt"       => ["fab fa-fw fa-facebook"      , "#3B5998", "Facebook"],
    "instagram-alt"      => ["fab fa-fw fa-instagram"     , "#3F729B", "Instagram"],
    "paypal-alt"         => ["fab fa-fw fa-paypal"        , "#00457c",  "PayPal"],
    "firefox-alt"        => ["fab fa-fw fa-firefox"       , "#be0575",  "Firefox"],
    "whatsapp-alt"        => ["fab fa-fw fa-whatsapp"       , "#07b826",  "WhatsApp"],
    "facebook-messenger-alt"        => ["fab fa-fw fa-facebook-messenger"       , "#008dff",  "Messenger"],
    "skype-alt"        => ["fab fa-fw fa-skype"       , "#017cd6",  "Skype"],
    "ubuntu-alt"        => ["fab fa-fw fa-ubuntu"       , "#dd4814",  "Ubuntu"],
    "apple-alt"          => ["fab fa-fw fa-apple"         , "#A2AAAD",  "Apple"],
];
$gradients = array_merge(array(),$bookmarks);
krsort($gradients);


$classics =
[
    "adn"            => ["fab fa-adn"           , "#D87A68", "App.net"],
    "bitbucket"      => ["fab fa-fw fa-bitbucket"     , "#205081", "Bitbucket"],
    "dropbox"        => ["fab fa-fw fa-dropbox"       , "#1087DD", "Dropbox"],
    "facebook"       => ["fab fa-fw fa-facebook"      , "#3B5998", "Facebook"],
    "flickr"         => ["fab fa-fw fa-flickr"        , "#2BA9E1", "Flickr"],
    "foursquare"     => ["fab fa-fw fa-foursquare"    , "#f94877", "Foursquare"],
    "github"         => ["fab fa-fw fa-github"        , "#444444", "GitHub"],
    "google"         => ["fab fa-fw fa-google"        , "#DD4B39", "Google"],
    "instagram"      => ["fab fa-fw fa-instagram"     , "#3F729B", "Instagram"],
    "linkedin"       => ["fab fa-fw fa-linkedin"      , "#007BB6", "LinkedIn"],
    "microsoft"      => ["fab fa-fw fa-microsoft"     , "#2672EC", "Microsoft"],
    "odnoklassniki"  => ["fab fa-fw fa-odnoklassniki" , "#F4731C", "Odnoklassniki"],
    "openid"         => ["fab fa-fw fa-openid"        , "#F7931E", "OpenID"],
    "pinterest"      => ["fab fa-fw fa-pinterest"     , "#CB2027", "Pinterest"],
    "reddit"         => ["fab fa-fw fa-reddit"        , "#EFF7FF", "Reddit"],
    "soundcloud"     => ["fab fa-fw fa-soundcloud"    , "#FF5500", "SoundCloud"],
    "tumblr"         => ["fab fa-fw fa-tumblr"        , "#CB2027", "Tumblr"],
    "twitter"        => ["fab fa-fw fa-twitter"       , "#55ACEE", "Twitter"],
    "vimeo"          => ["fab fa-fw fa-vimeo"         , "#1AB7EA", "Vimeo"],
    "vk"             => ["fab fa-fw fa-vk"            , "#587EA3", "VK"],
    "yahoo"          => ["fab fa-fw fa-yahoo"         , "#720E9E", "Yahoo!"],
    "gitlab"         => ["fab fa-fw fa-gitlab"        , "#e24329",  "Gitlab"],
    "amazon"         => ["fab fa-fw fa-amazon"        , "#e47911",  "Amazon"],
    "apple"          => ["fab fa-fw fa-apple"         , "#A2AAAD",  "Apple"],
    "evernote"       => ["fab fa-fw fa-evernote"      , "#2dbe60",  "Evernote"],
    "buffer"         => ["fab fa-fw fa-buffer"        , "#168eea",  "Buffer"],
    "dailymotion"    => ["fab fa-fw fa-dailymotion"   , "#00aaff",  "Dailymotion"],
    "deezer"         => ["fab fa-fw fa-deezer"        , "#ff0000",  "Deezer"],
    "deviantart"     => ["fab fa-fw fa-deviantart"    , "#4e6252",  "Deviant Art"],
    "jira"           => ["fab fa-fw fa-jira"          , "#0052CC",  "JIRA"],
    "paypal"         => ["fab fa-fw fa-paypal"        , "#00457c",  "PayPal"],
    "qq"             => ["fab fa-fw fa-qq"            , "#121214",  "QQ"],
    "salesforce"     => ["fab fa-fw fa-salesforce"    , "#1798c1",  "SalesForce"],
    "snapchat"       => ["fab fa-fw fa-snapchat"      , "#a8a601",  "Snapchat"],
    "slack"          => ["fab fa-fw fa-slack"         , "#2EB67D",  "Slack"],
    "spotify"        => ["fab fa-fw fa-spotify"       , "#1DB954",  "Spotify"],
    "stack-exchange" => ["fab fa-fw fa-stack-exchange", "#205296",  "Stack Exchange"],
    "stack-overflow" => ["fab fa-fw fa-stack-overflow", "#1f9df5",  "Stack Overflow"],
    "strava"         => ["fab fa-fw fa-strava"        , "#fc4c02",  "Strava"],
    "trello"         => ["fab fa-fw fa-trello"        , "#0079bf",  "Trello"],
    "twitch"         => ["fab fa-fw fa-twitch"        , "#6441a5",  "Twitch"],
    "wordpress"      => ["fab fa-fw fa-wordpress"     , "#21759b",  "Wordpress"],
    "xing"           => ["fab fa-fw fa-xing"          , "#126567",  "XING"],
    "whatsapp"       => ["fab fa-fw fa-whatsapp"      , "#128C7E",  "WhatsApp"],
    "line"           => ["fab fa-fw fa-line"          , "#00B900",  "Line"],
    "yandex"         => ["fab fa-fw fa-yandex"        , "#FFCC00",  "Yandex"],
    "youtube"        => ["fab fa-fw fa-youtube"       , "#FF0000",  "Youtube!"],
    "tiktok"         => ["fab fa-fw fa-tiktok"        , "#FF0000",  "Tiktok"],
    "rss"            => ["fas fa-fw fa-rss"           , "#EE802F",  "RSS"],
    "firefox"        => ["fab fa-fw fa-firefox"       , "#be0575",  "Firefox"],
    "telegram-plane" => ["fab fa-fw fa-telegram-plane", "#0088cc",  "Telegram"],
    "facebook-messenger" => ["fab fa-fw fa-facebook-messenger"       , "#008dff",  "Messenger"],
    "skype"        => ["fab fa-fw fa-skype"       , "#017cd6",  "Skype"],
    "opera"          => ["fab fa-fw fa-opera", "#b784a7", "Opera"],
    "ie"             => ["fab fa-fw fa-internet-explorer", "#0066FF", "Internet Explorer"],
    "edge"           => ["fab fa-fw fa-edge", "#0078d7", "Edge"],
    "chrome"         => ["fab fa-fw fa-chrome", "#4c8bf5", "Chrome"],
    "safari"         => ["fab fa-fw fa-safari", "#006cff", "Safari"],
    "suse"           => ["fab fa-fw fa-suse", "#73BA25", "Suse"],
    "redhat"         => ["fab fa-fw fa-redhat", "#CC0000", "Redhat"],
    "ubuntu"         => ["fab fa-fw fa-ubuntu", "#dd4814", "Ubuntu"],
    "centos"         => ["fab fa-fw fa-centos", "#212078", "CentOS"],
    "docker"         => ["fab fa-fw fa-docker", "#0db7ed", "Docker"],
    "octopus"        => ["fab fa-fw fa-octopus-deploy", "#106aab", "Octopus Deploy"],
];
krsort($classics);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Social Buttons for Bootstrap</title>

  <link rel="stylesheet" href="https://assets.glitchr.io/bootstrap/5.0.0-b1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://assets.glitchr.io/jquery/jquery-ui-1.12.1.min.css">
  <link rel="stylesheet" href="https://assets.glitchr.io/fonts/FontAwesome/5.15.1/css/all.min.css">

  <link rel="stylesheet" href="assets/css/stylesheet-socials.css">
  <link rel="stylesheet" href="assets/css/stylesheet-gitlab.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">

  <script src="https://assets.glitchr.io/jquery/jquery-3.5.1.min.js"></script>
  <script src="https://assets.glitchr.io/jquery/jquery-ui-1.12.1.min.js"></script>
  <script src="https://assets.glitchr.io/bootstrap/5.0.0-b1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- List of icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="https://assets.glitchr.io/ico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://assets.glitchr.io/ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://assets.glitchr.io/ico/favicon-16x16.png">
  <link rel="manifest" href="https://assets.glitchr.io/ico/site.webmanifest">
  <link rel="mask-icon" href="https://assets.glitchr.io/ico/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="https://assets.glitchr.io/ico/favicon.ico">
  <meta name="msapplication-TileColor" content="#603cba">
  <meta name="msapplication-config" content="https://assets.glitchr.io/ico/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4EDJX6N3YE"></script>
</head>

<body>
  <div class="jumbotron">
    <div class="container">
      <h1>Social Buttons for Bootstrap</h1>
      <p>
        Social Sign-In Buttons made in pure CSS based on
        <a href="https://getbootstrap.com/">Bootstrap</a> and
        <a href="https://fortawesome.github.io/Font-Awesome/">Font Awesome</a>!
      </p>
      <a href="https://gitlab.glitchr.io/KZL/bootstrap-socials" class="btn btn-outline btn-lg"><i
          style=" vertical-align: middle;" class="fa-fw fab fa-2x fa-gitlab"></i> View on GitLab</a>
      <a href="https://gitlab.glitchr.io/KZL/bootstrap-socials/-/archive/master/bootstrap-socials-master.zip" class="btn btn-outline btn-lg"><i
          style=" vertical-align: middle;" class="fa-fw fas fa-2x fa-download"></i> Download</a>
      <ul class="jumbotron-links">
      </ul>
    </div>
    <div class="bottom">
      <p>Original idea by <a href="https://twitter.com/lipis">@lipis</a> extended by <a
          href="https://twitter.com/kzl____">@kzl____</a></p>
    </div>
  </div>

  <?php

        array_walk($bookmarks, function(&$social, $code) {

          list($faCode, $color,$name) = $social;
          $social = "<li class=\"btn btn-social-icon-circle btn-lg btn-color-".$code."\"><i class=\"".$faCode."\"></i></li>";
        });

  ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul id="dock0" class="d-flex flex-row-reverse align-items-center justify-content-center">
          <?php foreach($bookmarks as $bookmark) echo $bookmark; ?>
        </ul>
      </div>
    </div>

    <div class="how-to" id="how-to">
      <div class="container">
        <div class="row">
          <div class="col-md-auto">
            <hr>
            <h2><a href="#how-to"><i style="font-size:32pt" class="fa-fw fas fa-parachute-box"></i></a> How to get them
              ?</h2>
            <ol>
              <li>
                Include Bootstrap and Font Awesome
                <p>
                  If you haven't done that already, include the latest
                  <a href="https://getbootstrap.com/">Bootstrap</a>
                  and <a href="https://fontawesome.com/">Font Awesome</a> in your project.
                </p>
              </li>
              <li>
                Include the CSS
                <p>
                  To enable the socials buttons, just include the
                  <code>stylesheet-socials.css</code> file into your project.
                </p>
              </li>
              <li>
                Add some buttons!
                <p>
                  Start using the buttons as you would normally do with the
                  Bootstrap buttons that have an icon by adding the relevant
                  class. An icon button (square or circle) can be obtained like this:
                </p>
                <pre>
  &lt;button class=&quot;btn <strong class="text-danger">[btn-social-icon|btn-social-icon-circle]</strong> <strong class="text-info">btn-twitter</strong>&quot;&gt;&lt;/button&gt;</pre>
                <p>
                  Alternative outline style are also available :
                </p>
                <pre>
  &lt;button class=&quot;btn <strong class="text-danger">btn-social-icon</strong> <strong class="text-info">btn-outline-twitter</strong>&quot;&gt;&lt;/button&gt;</pre>
                <p>
                  You can also tune them by removing the icon, keeping the color and custom buttons as you do with
                  FontAwesome!
                </p>
                <pre>
  &lt;button class=&quot;btn <strong class="text-danger">btn-social-icon</strong> <strong class="text-info">[btn-color-twitter|btn-outline-color-twitter]</strong>&quot;&gt;
    &lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;</pre>
                <p>
                  Eventually, you can combine icon and message in a button using these lines:
                </p>
                <pre>
  &lt;button class=&quot;btn btn-block <strong class="text-danger">[btn-social|btn-social-circle]</strong> <strong class="text-info">btn-color-twitter</strong>&quot;&gt;
    &lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt; Sign in with Twitter
  &lt;/button&gt;</pre>
              </li>
              <li>
                How to get more buttons ?
                <p>
                  First, download the source files on GitLab. Add new icons by generating a new stylesheet using SASS
                  and converting stylesheet-socials.scss after adding new entries at the end of the file.
                  Additionally the script get-fontawesome.sh will help you finding the unicode of the icon you are
                  looking for.
                </p>
                <pre>  git clone gitlab@gitlab.glitchr.io/KZL/bootstrap-socials.git
  cd bootstrap-socials
  nano assets/scss/stylesheet-socials.css # Make your changes here
  make
</pre>
                <p>Additionally the script ./get-fontawesome.sh will help you finding the unicode of the icon you are
                  looking for.</p>
                <pre>  ./get-fontawesome.sh       <strong class="text-info"># Get the list of the currently referenced icons</strong>
  ./get-fontawesome.sh smile <strong class="text-info"># Get the "smile" icon</strong>
</pre>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <?php

$block1 = array_merge(array(), $gradients);
array_walk($block1, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

	$social = "<li class=\"btn btn-block btn-social btn-color-".$code."\">".
        	        "<i class=\"".$faCode."\"></i> Sign in with ".$name." !".
                "</li>";

});

$block2 = array_merge(array(), $gradients);
array_walk($block2, function(&$social, $code) {

  list($faCode, $color,$name) = $social;
  $social = "<li class=\"btn btn-social-icon btn-lg btn-color-".$code."\"><i class=\"".$faCode."\"></i></li>";
});

$block3 = array_merge(array(), $gradients);
array_walk($block3, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social = "<li data-code=\"".$code."\" data-icon=\"".$faCode."\" data-name=\"".$name."\"><code>btn-".$code."</code> <i class=\"social-hex\">".$color."</i></li>";

});

$block4 = array_merge(array(), $gradients);
array_walk($block4, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-lg btn-color-".$code."\"        ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-lg btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-color-".$code."\"               ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-outline-color-".$code."\"       ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-sm btn-color-".$code."\"        ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
    "<button class=\"btn btn-block btn-social btn-changeHTML btn-sm btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>";

});

$block5 = array_merge(array(), $gradients);
array_walk($block5, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
        "<button class=\"btn btn-social-icon btn-changeHTML-icon btn-lg btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon btn-lg btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon        btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon        btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon btn-sm btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon btn-sm btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>";

});

$block6 = array_merge(array(), $gradients);
array_walk($block6, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
        "<button class=\"btn btn-social-icon btn-lg btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon btn-lg btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon        btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon        btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon btn-sm btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon btn-sm btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>";

});

$random_index = array_keys($gradients )[random_int(0,count($gradients)-1)];

?>

    <div class="container" id="gradient">
      <div class="row">
        <div class="col-md-12">
          <hr>
          <h2><a href="#gradient"><i class="fa-fw fab fa-slack-hash"></i></a>Gradient Style</h2>
          <br /><br />
        </div>
      </div>
    </div>

    <div id="more" class="container">
      <div class="row">
        <div class="col-sm-4 social-buttons">
          <h3 class="text-center">All buttons</h3>
          <br />
          <ul id="dock1" class=" d-flex flex-column-reverse"><?php foreach($block1 as $block) echo $block; ?></ul>
        </div>

        <div class="col-sm-4">
          <h3 class="text-center">Available classes</h3>
          <br />

          <ul class="social-class1 d-flex flex-column-reverse list-unstyled">
            <?php foreach($block3 as $block) echo $block; ?>
          </ul>
        </div>

        <div class="col-sm-4">
          <div class="social-sizes1">

            <h3 class="text-center">Different sizes & styles</h3>
            <br />

              <?php echo $block4[$random_index]; ?>
            <hr>

            <div class="text-center">
              <p>You can use the badge style..</p>
              <?php echo $block5[$random_index]; ?>
            </div>
            <hr>

            <div class="text-center">
              <p>.. or also tune them with your own icon or text</p>
              <?php echo $block6[$random_index]; ?>
            </div>
          </div>

        </div>
      </div>
    </div>






    <?php


$block1 = array_merge(array(), $classics);
array_walk($block1, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

	$social = "<li class=\"btn btn-block btn-social-circle btn-color-".$code."\">".
        	        "<i class=\"".$faCode."\"></i> Sign in with ".$name." !".
                "</li>";

});

$block2 = array_merge(array(), $classics);
array_walk($block2, function(&$social, $code) {

  list($faCode, $color,$name) = $social;
  $social = "<li class=\"btn btn-social-icon-circle btn-lg btn-color-".$code."\"><i class=\"".$faCode."\"></i></li>";
});

$block3 = array_merge(array(), $classics);
array_walk($block3, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social = "<li data-code=\"".$code."\" data-icon=\"".$faCode."\" data-name=\"".$name."\"><code>btn-".$code."</code> <i class=\"social-hex\">".$color."</i></li>";

});

$block4 = array_merge(array(), $classics);
array_walk($block4, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
		"<button class=\"btn btn-block btn-social-circle btn-changeHTML btn-lg btn-color-".$code."\"        ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social-circle btn-changeHTML btn-lg btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social-circle btn-changeHTML btn-color-".$code."\"               ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social-circle btn-changeHTML btn-outline-color-".$code."\"       ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social-circle btn-changeHTML btn-sm btn-color-".$code."\"        ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
    "<button class=\"btn btn-block btn-social-circle btn-changeHTML btn-sm btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>";

});

$block5 = array_merge(array(), $classics);
array_walk($block5, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
        "<button class=\"btn btn-social-icon-circle btn-changeHTML-icon btn-lg btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon-circle btn-changeHTML-icon btn-lg btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon-circle btn-changeHTML-icon        btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon-circle btn-changeHTML-icon        btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon-circle btn-changeHTML-icon btn-sm btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon-circle btn-changeHTML-icon btn-sm btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>";

});

$block6 = array_merge(array(), $classics);
array_walk($block6, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
        "<button class=\"btn btn-social-icon-circle btn-lg btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon-circle btn-lg btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon-circle        btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon-circle        btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon-circle btn-sm btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon-circle btn-sm btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>";

});

$random_index = array_keys($classics)[random_int(0,count($classics)-1)];

?>


    <div class="container" id="circle">
      <div class="row">
        <div class="col-md-12">
          <hr>
          <h2><a href="#circle"><i class="fa-fw fab fa-slack-hash"></i></a>Circle Style</h2>
          <br /><br />
        </div>
      </div>
    </div>

    <div id="more" class="container">
      <div class="row">
        <div class="col-sm-4 social-buttons">
          <h3 class="text-center">All buttons</h3>
          <br />
          <ul id="dock2" class=" d-flex flex-column-reverse"><?php foreach($block1 as $block) echo $block; ?></ul>
        </div>

        <div class="col-sm-4">
          <h3 class="text-center">Available classes</h3>
          <br />

          <ul class="social-class2 d-flex flex-column-reverse list-unstyled">
            <?php foreach($block3 as $block) echo $block; ?>
          </ul>
        </div>

        <div class="col-sm-4">
          <div class="social-sizes2">

            <h3 class="text-center">Different sizes & styles</h3>
            <br />

            <div>
              <?php echo $block4[$random_index]; ?>
            </div>
            <hr>

            <div class="text-center">
              <p>You can use the badge style..</p>
              <?php echo $block5[$random_index]; ?>
            </div>
            <hr>

            <div class="text-center">
              <p>.. or also tune them with your own icon or text</p>
              <?php echo $block6[$random_index]; ?>
            </div>
          </div>

        </div>
      </div>
    </div>



    <?php


$block1 = array_merge(array(), $classics);
array_walk($block1, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

	$social = "<li class=\"btn btn-block btn-social btn-color-".$code."\">".
        	        "<i class=\"".$faCode."\"></i> Sign in with ".$name." !".
                "</li>";

});

$block2 = array_merge(array(), $classics);
array_walk($block2, function(&$social, $code) {

  list($faCode, $color,$name) = $social;
  $social = "<li class=\"btn btn-social-icon btn-lg btn-color-".$code."\"><i class=\"".$faCode."\"></i></li>";
});

$block3 = array_merge(array(), $classics);
array_walk($block3, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social = "<li data-code=\"".$code."\" data-icon=\"".$faCode."\" data-name=\"".$name."\"><code>btn-".$code."</code> <i class=\"social-hex\">".$color."</i></li>";

});

$block4 = array_merge(array(), $classics);
array_walk($block4, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-lg btn-color-".$code."\"        ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-lg btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-color-".$code."\"               ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-outline-color-".$code."\"       ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
		"<button class=\"btn btn-block btn-social btn-changeHTML btn-sm btn-color-".$code."\"        ><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>".
    "<button class=\"btn btn-block btn-social btn-changeHTML btn-sm btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i> Sign in with ".$name."</button><br/>";

});

$block5 = array_merge(array(), $classics);
array_walk($block5, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
        "<button class=\"btn btn-social-icon btn-changeHTML-icon btn-lg btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon btn-lg btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon        btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon        btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon btn-sm btn-color-".$code."\"><i class=\"".$faCode."\"></i></button>".
        "<button class=\"btn btn-social-icon btn-changeHTML-icon btn-sm btn-outline-color-".$code."\"><i class=\"".$faCode."\"></i></button>";

});

$block6 = array_merge(array(), $classics);
array_walk($block6, function(&$social, $code) {

  list($faCode, $color,$name) = $social;

  $social =
        "<button class=\"btn btn-social-icon btn-lg btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon btn-lg btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon        btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon        btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon btn-sm btn-color-".$code."\"><i class=\"fas fa-smile\"></i></button>".
        "<button class=\"btn btn-social-icon btn-sm btn-outline-color-".$code."\"><i class=\"fas fa-smile\"></i></button>";

});

$random_index = array_keys($classics)[random_int(0,count($classics)-1)];

?>


    <div class="container" id="classic">
      <div class="row">
        <div class="col-md-12">
          <hr>
          <h2><a href="#classic"><i class="fa-fw fab fa-slack-hash"></i></a>Classic Style</h2>
          <br /><br />
        </div>
      </div>
    </div>

    <div id="more" class="container">
      <div class="row">
        <div class="col-sm-4 social-buttons">
          <h3 class="text-center">All buttons</h3>
          <br />
          <ul id="dock3" class=" d-flex flex-column-reverse"><?php foreach($block1 as $block) echo $block; ?></ul>
        </div>

        <div class="col-sm-4">
          <h3 class="text-center">Available classes</h3>
          <br />

          <ul class="social-class3 d-flex flex-column-reverse list-unstyled">
            <?php foreach($block3 as $block) echo $block; ?>
          </ul>
        </div>

        <div class="col-sm-4">
          <div class="social-sizes3">

            <h3 class="text-center">Different sizes & styles</h3>
            <br />

            <div>
              <?php echo $block4[$random_index]; ?>
            </div>
            <hr>

            <div class="text-center">
              <p>You can use the badge style..</p>
              <?php echo $block5[$random_index]; ?>
            </div>
            <hr>

            <div class="text-center">
              <p>.. or also tune them with your own icon or text</p>
              <?php echo $block6[$random_index]; ?>
            </div>
          </div>

        </div>
      </div>
    </div>



  </div>
  <footer>
    <ul class="links">
      <li><a href="https://gitlab.glitchr.io"><i class="fab fa-gitlab"></i> GitLab</a></li>
      <li><a href="https://twitter.com/KZL____"><i class="fab fa-twitter"></i> Twitter</a></li>
      <li><a href="https://www.buymeacoffee.com/kzl0"><i class="fas fa-coffee"></i> Coffee</a></li>
    </ul>
  </footer>

  <div class="gitlab-corner-wrapper"><a href="https://gitlab.glitchr.io" class="gitlab-corner"
      aria-label="View source on GitLab">
      <svg id="logo_art" data-name="logo art" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 586 559">
        <g id="g44">
          <path id="path46" class="cls-1"
            d="M461.17,301.83l-18.91-58.12L404.84,128.43a6.47,6.47,0,0,0-12.27,0L355.15,243.64H230.82L193.4,128.43a6.46,6.46,0,0,0-12.26,0L143.78,243.64l-18.91,58.19a12.88,12.88,0,0,0,4.66,14.39L293,435,456.44,316.22a12.9,12.9,0,0,0,4.73-14.39" />
        </g>
        <g id="g48">
          <path id="path50" class="cls-2" d="M293,434.91h0l62.16-191.28H230.87L293,434.91Z" />
        </g>
        <g id="g56">
          <path id="path58" class="cls-1" d="M293,434.91,230.82,243.63h-87L293,434.91Z" />
        </g>
        <g id="g64">
          <path id="path66" class="cls-3"
            d="M143.75,243.69h0l-18.91,58.12a12.88,12.88,0,0,0,4.66,14.39L293,435,143.75,243.69Z" />
        </g>
        <g id="g72">
          <path id="path74" class="cls-2" d="M143.78,243.69h87.11L193.4,128.49a6.47,6.47,0,0,0-12.27,0l-37.35,115.2Z" />
        </g>
        <g id="g76">
          <path id="path78" class="cls-1" d="M293,434.91l62.16-191.28H442.3L293,434.91Z" />
        </g>
        <g id="g80">
          <path id="path82" class="cls-3"
            d="M442.24,243.69h0l18.91,58.12a12.85,12.85,0,0,1-4.66,14.39L293,434.91l149.2-191.22Z" />
        </g>
        <g id="g84">
          <path id="path86" class="cls-2" d="M442.28,243.69h-87.1l37.42-115.2a6.46,6.46,0,0,1,12.26,0l37.42,115.2Z" />
        </g>
      </svg>
    </a></div>

  <!-- Some JavaScript that is used only in this demo, not needed for the buttons -->
  <script src="assets/js/index.js"></script>

  <script src="assets/js/dock.js"></script>
  <script>
    $(document).ready(function () {
      $('#dock0 li').resizeOnApproach({
        y: 0,
        split: 1,
        zoom: 2,
        jump: -2,
        trigger: 1
      });
      $('#dock1 li').resizeOnApproach({
        y: 1,
        split: 12.5,
        zoom: 1.10,
        jump: -2,
        trigger: 1
      });
      $('#dock2 li').resizeOnApproach({
        y: 1,
        split: 12.5,
        zoom: 1.10,
        jump: -2,
        trigger: 1
      });
      $('#dock3 li').resizeOnApproach({
        y: 1,
        split: 12.5,
        zoom: 1.10,
        jump: -2,
        trigger: 1
      });
    });
  </script>
</body>

</html>
