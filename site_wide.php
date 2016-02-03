<!-- StackOverflow http://stackoverflow.com/questions/13408244/using-bootstrap-have-alert-box-remember-close-action -->
<script src="js/jquery.cookie.min.js"></script>
<script>
jQuery(function( $ ){
	if( $.cookie('alert-cookie-1') === 'closed' ){
      $('.alert-1').hide();
  }

	if( $.cookie('alert-cookie-2') === 'closed' ){
      $('.alert-2').hide();
  }

	$('.close-1').click(function( e ){
		e.preventDefault();
		$.cookie('alert-cookie-1', 'closed', { path: '/' });
	});

	$('.close-2').click(function( e ){
		e.preventDefault();
		$.cookie('alert-cookie-2', 'closed', { path: '/' });
	});
});
</script>
<div class="alert alert-dismissible alert-warning fade in alert-1">
	<button type="button" class="close close-1" data-dismiss="alert">x</button>
	<p><span class="glyphicon glyphicon-alert"></span> <b>Warning!</b> You're visiting a beta version of this site. Please report any issues, glaring bugs, or utter failures, to the <a href="https://github.com/malsf21/robotics-club-website/issues" class="alert-link">repository</a>.</p>
</div>
<div class="alert alert-dismissible alert-info fade in alert-2">
	<button type="button" class="close close-2" data-dismiss="alert">x</button>
	<p><span class="glyphicon glyphicon-pushpin"></span> <b>Hey there!</b> We're looking for students to help us out with this website! Fork our <a href="https://github.com/malsf21/robotics-club-website" class="alert-link">repository</a> or contact <a href="mailto:matthew.wang@ucc.on.ca" class="alert-link">Matthew Wang</a> for more information.</p>
</div>
