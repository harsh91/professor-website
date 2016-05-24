<div id="feedbackModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
		<form action="sendFeedback.php" method="post">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Feedback</h4>
		  </div>
		  <div class="modal-body col-lg-12 col-xs-12">
			<p>Thank you for your feedback</p>
				<input class="col-lg-7 col-xs-7 feedback-inputs" type="text" name="name" placeholder="Full Name"/>
				<input class="col-lg-7 col-xs-7 feedback-inputs" type="text" name="email" placeholder="Email"/>
				<textarea class="col-lg-7 col-xs-7 feedback-inputs" name="feedback" placeholder="Give us your Feedback"></textarea>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-success">Submit</button>
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  </div>
	  </form>
    </div>

  </div>
</div>