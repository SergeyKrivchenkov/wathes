<!--banner-starts-->
<div class="bnr" id="home">
	<div id="top" class="callbacks_container">
		<ul class="rslides" id="slider4">
			<li>
				<img src="<?= WWW ?>/images/bnr-1.jpg" alt="" />
			</li>
			<li>
				<img src="<?= WWW ?>/images/bnr-2.jpg" alt="" />
			</li>
			<li>
				<img src="<?= WWW ?>/images/bnr-3.jpg" alt="" />
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
<!--banner-ends-->
<!--Slider-Starts-Here-->
<script src="<?= WWW ?>/js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function() {
		// Slideshow 4
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function() {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function() {
				$('.events').append("<li>after event fired.</li>");
			}
		});

	});
</script>
<!--End-slider-script-->
<!--about-starts-->
<div class="about">
	<div class="container">
		<div class="about-top grid-1">
			<div class="col-md-4 about-left">
				<figure class="effect-bubba">
					<img class="img-responsive" src="<?= WWW ?>/images/abt-1.jpg" alt="" />
					<figcaption>
						<h2>Nulla maximus nunc</h2>
						<p>In sit amet sapien eros Integer dolore magna aliqua</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4 about-left">
				<figure class="effect-bubba">
					<img class="img-responsive" src="<?= WWW ?>/images/abt-2.jpg" alt="" />
					<figcaption>
						<h4>Mauris erat augue</h4>
						<p>In sit amet sapien eros Integer dolore magna aliqua</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4 about-left">
				<figure class="effect-bubba">
					<img class="img-responsive" src="<?= WWW ?>/images/abt-3.jpg" alt="" />
					<figcaption>
						<h4>Cras elit mauris</h4>
						<p>In sit amet sapien eros Integer dolore magna aliqua</p>
					</figcaption>
				</figure>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--about-end-->
<!--product-starts-->
<div class="product">
	<div class="container">
		<div class="product-top">


			<!-- <option value="<?= $key; ?>"> <?= $value['title']; ?></option> -->



			<?php foreach ($data['products'] as $value) : ?>
				<div class="product-one col-md-3" style="margin-top:0; margin-bottom:10px;">
					<div class=" product-left">
						<div class="product-main simpleCart_shelfItem">

							<?php if (($value['img'])) : ?>

								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="<?= WWW ?>/images/<?= $value['img'] ?>" alt="" /></a>

							<?php else : ?>

								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="<?= WWW ?>/images/no-image.jpg" alt="?????????????????????? ??????????????????????" /></a>

							<?php endif; ?>

							<!-- <small style="font-size: 8px;"><s><?= $value['old_price'] ?></s></small> -->

							<div class="product-bottom">
								<h3><?= $value['title'] ?></h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ <?= $value['price'] ?></span>

									<?php if ($value['old_price'] != 0) : ?>
										<small style="font-size: 8px;"><s><?= $value['old_price'] ?></s></small>
									<?php endif; ?>
								</h4>

							</div>
							<?php if ($value['old_price'] != 0) : ?>

								<?php $discont = round(($value['old_price'] - $value['price']) / ($value['old_price'] / 100));  ?>
								<div class="srch">
									<span>-<?= $discont ?>%</span>
								</div>
							<?php endif; ?>

						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			<?php endforeach; ?>
			<!-- <div class="product-one">
				<div class="col-md-3 product-left">
					<div class="product-main simpleCart_shelfItem">
						<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="<?= WWW ?>/images/p-5.png" alt="" /></a>
						<div class="product-bottom">
							<h3>Smart Watches</h3>
							<p>Explore Now</p>
							<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
						</div>
						<div class="srch">
							<span>-50%</span>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
			</div> -->
		</div>
	</div>
</div>
<!--product-end-->
<?php
debug($data['products'])
?>