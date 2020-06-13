<!DOCTYPE HTML>
<html lang="en">

<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="robots" content="all,index,follow">
	<meta http-equiv="Content-Language" content="id-ID">
	<meta NAME="Distribution" CONTENT="Global">
	<meta NAME="Rating" CONTENT="General">
	<link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />

	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/reset.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/main-stylesheet.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/shortcode.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/fonts.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/<?php echo background(); ?>/responsive.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/style.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/ideaboxWeather.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/slide.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/asset/admin/plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/lightbox/lightbox.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/jscript/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/jscript/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/jscript/theme-scripts.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/background/bootstrap.js"></script>
	<?php if ($this->uri->segment(1) == 'main' or $this->uri->segment(1) == '') { ?>
		<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/js/jssor.slider-23.1.0.mini.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/slide/js/slide.js"></script>
	<?php } ?>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		$(document).ready(function() {
			$('#state').change(function() {
				var state_id = $(this).val();
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('auth/city'); ?>",
					data: "stat_id=" + state_id,
					success: function(response) {
						$('#city').html(response);
					}
				})
			})
		})

		$(document).ready(function() {
			$('#state_reseller').change(function() {
				var state_id = $(this).val();
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('auth/city'); ?>",
					data: "stat_id=" + state_id,
					success: function(response) {
						$('#city_reseller').html(response);
					}
				})
			})
		})

		function toDuit(number) {
			var number = number.toString(),
				duit = number.split('.')[0],
				duit = duit.split('').reverse().join('')
				.replace(/(\d{3}(?!$))/g, '$1,')
				.split('').reverse().join('');
			return 'Rp ' + duit;
		}
	</script>
	<style type="text/css">
		.the-menu a.active {
			color: palevioletred !important;
		}

		.produk:hover {
			background-color: #cecece;
		}

		.modal-backdrop.in {
			z-index: 1;
		}

		.modal-body {
			margin: 0px 25px;
		}

		.content input[type=text] {
			display: block;
			background: #fff;
			padding: 6px 13px;
			font-size: 13px;
			border: 1px solid #d3d3d3;
			font-family: 'Arial';
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
	</style>
</head>

<body>

	<div class="boxed">
		<div class="header">
			<?php include "header.php"; ?>
		</div>

		<div class="content">
			<div class="wrapper">
				<div class="main-content">
					<?php echo $contents; ?>
					<div class="clear-float"></div>
				</div>
			</div>
		</div>

		<footer>
			<div class="footer">
				<?php
				include "footer.php";
				?>
			</div>
		</footer>
	</div>
	<!-- Scripts -->

	<script type='text/javascript'>
		$(function() {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 400) {
					$('#Back-to-top').fadeIn();
				} else {
					$('#Back-to-top').fadeOut();
				}
			});
			$('#Back-to-top').click(function() {
				$('body,html')
					.animate({
						scrollTop: 0
					}, 300)
					.animate({
						scrollTop: 40
					}, 200)
					.animate({
						scrollTop: 0
					}, 130)
					.animate({
						scrollTop: 15
					}, 100)
					.animate({
						scrollTop: 0
					}, 70);
			});
		});

		function jam() {
			var waktu = new Date();
			var jam = waktu.getHours();
			var menit = waktu.getMinutes();
			var detik = waktu.getSeconds();

			if (jam < 10) {
				jam = "0" + jam;
			}
			if (menit < 10) {
				menit = "0" + menit;
			}
			if (detik < 10) {
				detik = "0" + detik;
			}
			var jam_div = document.getElementById('jam');
			jam_div.innerHTML = jam + ":" + menit + ":" + detik;
			setTimeout("jam()", 1000);
		}
		jam();
	</script>

	<script>
		$(function() {
			var url = window.location.pathname,
				urlRegExp = new RegExp(url.replace(/\/$/, '') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
			// now grab every link from the navigation
			$('.the-menu a').each(function() {
				// and test its normalized href against the url pathname regexp
				if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
					$(this).addClass('active');
				}
			});

		});
	</script>
	<script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script>
		$(function() {
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"scrollX": true,
				"lengthMenu": [
					[30, 55, 70, -1],
					[30, 55, 70, "All"]
				]
			});
		});
	</script>
</body>

</html>