<html>
	<head>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		<link href="/assets/styles.css" rel="stylesheet"/>

		<link rel="stylesheet" href="/assets/ladda/dist/ladda-themeless.min.css">
		<script src="/assets/ladda/dist/spin.min.js"></script>
		<script src="/assets/ladda/dist/ladda.min.js"></script>
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4">
					<div class="post">
						<div class="post-img-content">
							<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive" />
							<span class="post-title"><b>Make a Image Blur Effects With</b>
								<br />
								<b>CSS3 Blur</b></span>
						</div>
						<div class="content">
							<div class="author">
								By <b>Bhaumik</b> |
								<time datetime="2014-01-20">
									January 20th, 2014
								</time>
							</div>
							<div>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s, when an
								unknown printer took a galley of type and scrambled it to make a type specimen book.
							</div>
							<a href="#" id="like_1" class="btn btn-success btn-md ladda-button ajax-like" data-style="slide-right" data-size="l"><span class="ladda-label">Like</span></a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="post">
						<div class="post-img-content">
							<img src="http://placehold.it/460x250/2980b9/ffffff&text=CSS3" class="img-responsive" />
							<span class="post-title"><b>Make a Image Blur Effects With</b>
								<br />
								<b>CSS3 Blur</b></span>
						</div>
						<div class="content">
							<div class="author">
								By <b>Bhaumik</b> |
								<time datetime="2014-01-20">
									January 20th, 2014
								</time>
							</div>
							<div>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s, when an
								unknown printer took a galley of type and scrambled it to make a type specimen book.
							</div>
							<div>
								<a href="#" id="like_2" class="btn btn-success btn-md ladda-button ajax-like" data-style="slide-right" data-size="l"><span class="ladda-label">Like</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="post">
						<div class="post-img-content">
							<img src="http://placehold.it/460x250/47A447/ffffff&text=jQuery" class="img-responsive" />
							<span class="post-title"><b>Make a Image Blur Effects With</b>
								<br />
								<b>CSS3 Blur</b></span>
						</div>
						<div class="content">
							<div class="author">
								By <b>Bhaumik</b> |
								<time datetime="2014-01-20">
									January 20th, 2014
								</time>
							</div>
							<div>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s, when an
								unknown printer took a galley of type and scrambled it to make a type specimen book.
							</div>
							<a href="#" id="like_3" class="btn btn-success btn-md ladda-button ajax-like" data-style="slide-right" data-size="l"><span class="ladda-label">Like</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(function() {
				$('.ajax-like').click(function(e) {
					e.preventDefault();
					var l = Ladda.create(this);
					var id = $(this).attr("id");
					l.start();
					$.post("/like", {
						"post_id" : $(this).attr("id")
					}, function(response) {
						if (response.result != null && response.result == "1") {
							if (response.isunlike == "1") {
								$("#" + id).removeClass("btn-success");
								$("#" + id).addClass("btn-danger");
								$("#" + id).html(response.text);
							} else {
								$("#" + id).removeClass('btn-danger');
								$("#" + id).addClass("btn-success");
								$("#" + id).html(response.text);
							}
						} else {
							alert("Server Error");
						}
					}, "json").always(function() {
						l.stop();
					});
					return false;
				});
			});
		</script>
	</body>
</html>