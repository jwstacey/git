<?php

	include('template-parts/header.php');

	$images = array(
		array(
				'src' => 'images/car1.jpg',
				'alt' => 'Chris\'s car',
			),
		array(
				'src' => 'images/car2.png',
				'alt' => 'James\'s car',
			),
		array(
				'src' => 'images/car3.jpg',
				'alt' => 'Craig\'s car',
			),
	);

?>

<!-- Carousel
================================================== -->

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

	<ol class="carousel-indicators">

		<?php foreach ($images as $k => $image) { ?>
			<li data-target="#myCarousel" data-slide-to="<?= html($k) ?>" <?= ($k == 0 ? ' class="active" ' : '')?>></li>
		<?php }?>

	</ol>

	<div class="carousel-inner">

		<?php foreach ($images as $k => $image) { ?>

			<div class="item<?= ($k == 0 ? ' active' : '')?>">

				<img src="<?= html($image['src']) ?>" alt="<?= html($image['alt']) ?>" />

				<div class="container">
					<div class="carousel-caption">
						<h1>Slide <?= html($k + 1) ?> Heading</h1>
						<p>A picture of "<?= html($image['alt']) ?>".</p>
						<p><a class="btn btn-lg btn-primary" href="/" role="button">Click there</a></p>
					</div>
				</div>

			</div>

		<?php } ?>

	</div>

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-right"></span></a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-left"></span></a>

</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

	<!-- Three columns of text below the carousel -->
	<div class="row">
		<div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140" />
			<h2>Heading</h2>
			<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			<p><a class="btn btn-default" href="#" role="button">View details »</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140" />
			<h2>Heading</h2>
			<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
			<p><a class="btn btn-default" href="#" role="button">View details »</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140" />
			<h2>Heading</h2>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p><a class="btn btn-default" href="#" role="button">View details »</a></p>
		</div><!-- /.col-lg-4 -->
	</div><!-- /.row -->


	<!-- START THE FEATURETTES -->

	<hr class="featurette-divider" />

	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-responsive" src="https://placekitten.com/g/500/500" alt="Generic placeholder image" />
		</div>
	</div>

	<hr class="featurette-divider" />

	<div class="row featurette">
		<div class="col-md-5">
			<img class="featurette-image img-responsive" src="https://placekitten.com/g/500/500" alt="Generic placeholder image" />
		</div>
		<div class="col-md-7">
			<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		</div>
	</div>

	<hr class="featurette-divider" />

	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
			<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-responsive" src="https://placekitten.com/g/500/500" alt="Generic placeholder image" />
		</div>
	</div>

	<hr class="featurette-divider" />

	<!-- /END THE FEATURETTES -->


	<!-- FOOTER -->
	<footer>
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>© 2015 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
	</footer>

</div><!-- /.container -->

<?php include('./template-parts/footer.php'); ?>
