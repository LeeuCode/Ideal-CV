	
		</ul>
			<label for="slide1"></label>
			<label for="slide2"></label>
			<label for="slide3"></label>
			<label for="slide4"></label>
	</div>
	<!-- //main -->
	<!-- swipe box js -->
	<script src="<?= Enqueue('/theme/js/jquery.swipebox.min.js'); ?>"></script>
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->
	<!-- Skill Bar js -->
	<script src="<?= Enqueue('/theme/js/skill.bars.jquery.js'); ?>"></script>
	<script>
	$(document).ready(function(){

		$('.skillbar').skillBars({
			from: 0,
			speed: 4000,
			interval: 100,
			decimals: 0,
		});

	});
	</script>
	<!-- //End Skill Bar js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= Enqueue('/theme/js/bootstrap.js'); ?>"></script>

    <script>
		$(function() {
			// Get the form.
			var form = $('#ajax-contact');

			// Get the messages div.
			var formMessages = $('#form-messages');

			// TODO: The rest of the code will go here...

			// Set up an event listener for the contact form.
			$(form).submit(function(event) {
				// Stop the browser from submitting the form.
				event.preventDefault();
				// Serialize the form data.
				var formData = $(this).serialize();

				$( "#button" ).html('<i class=" onclic fa fa-spinner" ></i> Sending....');
				
				// Submit the form using AJAX.
				$.post($(form).attr('action'),formData)
				.done(function( data ) {
					$( "#button" ).html('<i class="fa fa-send" ></i> Send');
					// Make sure that the formMessages div has the 'success' class.
					$(formMessages).show();
					// Set the message text.
					$(formMessages).html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa  fa-check-circle"></i></strong> Your message was sent successfully.</div>');
					// Clear the form.
					$('#name').val('');
					$('#email').val('');
					$('#message').val('');
					$('#phone').val('');
				});
				
			});

		});
	</script>
	

</body>
</html>