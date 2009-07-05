</div><!-- end of #content -->

</div><!-- end of #wrap -->

<div id="footer">

	<div id="footer-cols">
		<div class="footer-col">
			<h3 class="flickr"><a href="http://www.flickr.com/photos/joefearnley/">seein'</a></h3>
			<span id="photos"><script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=19111910%40N00"></script></span>
		</div>

		<div class="footer-col">
			<h3 class="writin"><a href="./archives/">writin'</a></h3>
			<ul><?php get_archives('postbypost', '4', 'html', '', '', true); ?></ul>
		</div>

		<div class="footer-col"> 
			<h3 class="digg"><a href="http://digg.com/users/joefearnley">diggin'</a></h3>
			<script type="text/javascript" src="http://digg.com/diggjs/user/dugg/joefearnley/1"></script>
		</div>

		<div class="footer-col">
		    <h3 class="delicious"><a href="http://del.icio.us/joefearnley">bookmarkin'</a></h3>
			<?php delicious_bookmarks('joefearnley', 5, true, false, false, '', false, '', false, false); ?>
		</div>
		<br class="clear" />
	</div>

	<br class="clear" />

</div><!-- end of #footer -->

	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-6368887-1");
			pageTracker._trackPageview();
		} catch(err) {}
	</script>

</body>
</html>
