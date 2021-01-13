#! /bin/bash

function fontawesome {

	NAME="$1"
	STYLE="brands"
	UNICODE=$(curl -s https://fontawesome.com/icons/${NAME}?style=${STYLE} | \
                    grep unicode | \
                    sed -e 's/[{}]/''/g' | \
                    awk -v k="text" '{n=split($0,a,","); for (i=1; i<=n; i++) print a[i]}' | \
                    grep unicode | \
                    sed 's/"unicode":"\(.*\)"/\1/g' | head -1)

	#echo "\"$1\", \"$UNICODE\""
	echo "'$UNICODE'"
}

if [ ! -z "$1" ]; then

   fontawesome "$1"
   exit 0
fi

fontawesome stack-overflow
fontawesome adn
fontawesome bitbucket
fontawesome dropbox
fontawesome facebook
fontawesome flickr
fontawesome foursquare
fontawesome github
fontawesome google
fontawesome instagram
fontawesome linkedin
fontawesome microsoft
fontawesome odnoklassniki
fontawesome openid
fontawesome pinterest
fontawesome reddit
fontawesome soundcloud
fontawesome tumblr
fontawesome twitter
fontawesome vimeo
fontawesome vk
fontawesome yahoo
fontawesome amazon
fontawesome apple
fontawesome evernote
fontawesome box
fontawesome buffer
fontawesome dailymotion
fontawesome deezer
fontawesome deviantart
fontawesome foursquare
fontawesome jira
fontawesome windows
fontawesome paypal
fontawesome qq
fontawesome salesforce
fontawesome snapchat
fontawesome slack
fontawesome spotify
fontawesome stack-exchange
fontawesome strava
fontawesome trello
fontawesome twitch
fontawesome wordpress
fontawesome xing
fontawesome whatsapp
fontawesome line
fontawesome yandex
fontawesome youtube
