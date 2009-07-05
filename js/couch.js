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

	// watch the twitter toggle.
	$("#twitter-link").click(function () {
		$("#tweets").toggle("slow");
	});  

});
