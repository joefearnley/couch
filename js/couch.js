/**
 *
 *	@author: joe fearnley
 *	@date:   06.30.09
 *	@file:   couch.js
 *
 *	This file contains all the javascript for 
 *	the couch wordpress theme.
 */


/**
 * on page load, execute the following
 */
$(document).ready(function() {

    // call twitter api and get recent tweets
    $.getJSON("http://twitter.com/statuses/user_timeline/joefearnley.json?count=5&callback=?",
        function(tweets) {

            // this will be out initial html 
            var html = "";

            // loop through results and build the html
            $.each(tweets, function(i,tweets) {

                // check array 
                if(typeof tweets != "undefined") {

                    // parse tweet and add html
                    var tweetText =  parseTweetForLinks(tweets.text);
                    html += "<li>" + tweetText + "</li>";
                }
            });

            // add the html to the feed
            $("#tweets").html(html);
        });

	// watch the twitter toggle.
	$("#twitter-link").click(function () {
		$("#tweets").toggle("slow");
	});  

	// hide the tweets on initial load
	$("#tweets").hide();

	// search box events
	$("#search").blur(function () {
		if (this.value == "") {
			this.value = "search site";
		}
	}); 
 
	$("#search").focus(function () {
		if (this.value == "search site") {
			this.value = "";
		}
	});

});



/**
 * Use regex to replace links and @ replies with html links. Found it here:
 *
 * http://blog.webandy.com/2009/04/20/auto-link-twitter-ruby-javascript.html
 *
 * @param tweet
 *
 * @return tweet
 */
function parseTweetForLinks(tweet) {

    // check for links
    if(tweet.search(/(https?:\/\/[-\w\.]+:?\/[\w\/_\.]*(\?\S+)?)/) > -1) {
        tweet = tweet.replace(/(https?:\/\/[-\w\.]+:?\/[\w\/_\.]*(\?\S+)?)/, "<a href='$1'>$1</a>")
    }

    // check for @ replies
    if(tweet.search(/@\w+/) > -1) {
        tweet = tweet.replace(/(@)(\w+)/g, "$1<a href='http://twitter.com/$2'>$2</a>");
    }

    return tweet;
}
