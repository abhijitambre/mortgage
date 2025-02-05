<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require_once __DIR__ . '/vendor/autoload.php';
	$settings = require_once __DIR__ . '/settings.php';
	require_once __DIR__ . '/functions.php';

	$body = "<h1>Письмо с сайта</h1>\n
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, esse ipsa itaque laudantium necessitatibus reprehenderit soluta? A accusamus alias aliquid, eius enim ipsum maxime mollitia perferendis quae, quod, suscipit unde?";

	$attachments = [];

	// Використання функції send_mail для відправлення листа
	$result = send_mail($settings['mail_settings_prod'], ['denisaroslav34@gmail.com'], 'Письмо с сайта', $body, $attachments);

	$message = $result ? "Повідомлення відправлено!" : "Помилка при відправці.";
}

?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	// Collect form data from POST request
	$firstName = htmlspecialchars($_POST['first_name'] ?? '');
	$lastName = htmlspecialchars($_POST['last_name'] ?? '');
	$email = htmlspecialchars($_POST['email'] ?? '');
	$phone = htmlspecialchars($_POST['phone'] ?? '');

	$groupData = [];

	for ($i = 1; $i <= 9; $i++) {
		if (isset($_POST["group$i"])) {
			$groupData["Group $i"] = htmlspecialchars($_POST["group$i"]);
		}
	}

	// Format email content
	$subject = "New Form Submission";
	$to = "abhiambre5@gmail.com"; // Replace with your email address
	$headers = "From: no-reply@example.com\r\n" .
		"Content-Type: text/html; charset=UTF-8";

	$message = "<html><body>";
	$message .= "<h2>Form Submission Details</h2>";
	$message .= "<p><strong>First Name:</strong> $firstName</p>";
	$message .= "<p><strong>Last Name:</strong> $lastName</p>";
	$message .= "<p><strong>Email:</strong> $email</p>";
	$message .= "<p><strong>Phone:</strong> $phone</p>";

	$message .= "<h3>Group Data</h3><ul>";
	foreach ($groupData as $group => $response) {
		$message .= "<li><strong>$group:</strong> $response</li>";
	}
	$message .= "</ul></body></html>";

	// Send email
	if (mail($to, $subject, $message, $headers)) {
		echo "<script>alert('Form submitted successfully!');</script>";
	} else {
		echo "<script>alert('Failed to send form data. Please try again later.');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>page-life-insurance</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="stylesheet" href="css/style.min.css?_v=20240412081353">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="wrapper">
		<header data-scroll="250" class="header">
			<div class="header__top">
				<div class="header__container">
					<a href="#" class="header__logo">
						<picture>
							<source srcset="img/header/logo-compare.webp" type="image/webp"><img src="img/header/logo-compare.png" alt="logo-Compare1">
						</picture>
					</a>
					<div class="header__wrapper">
						<div data-da=".bottom__container, 650" class="header__menu menu">
							<nav class="menu__body">
								<ul class="menu__list">
									<li class="menu__item"><a href="#" data-goto-header data-goto-top="50" data-goto=".page__box" class="menu__link">Services</a></li>
									<li class="menu__item"><a href="#" data-goto-header data-goto-top="50" data-goto=".advantages-section__title" class="menu__link">How It Works</a></li>
									<li class="menu__item"><a href="#" data-goto-header data-goto-top="50" data-goto=".page__reviews" class="menu__link">Reviews</a></li>
									<li class="menu__item"><a href="#" data-goto-header data-goto-top="50" data-goto=".page__about-us" class="menu__link">About Us</a></li>
								</ul>
							</nav>
						</div>
						<div class="header__image">
							<picture>
								<source srcset="img/header/secure.webp" type="image/webp"><img src="img/header/secure.png" alt="secure">
							</picture>
						</div>
					</div>
				</div>
			</div>
			<div class="header__bottom">
				<div class="bottom__container">

				</div>
			</div>
			<div class="page__scrol-up">
				<picture>
					<source srcset="img/scroll-up.webp" type="image/webp"><img data-goto=".wrapper" data-scroll src="img/scroll-up.png" alt="scroll-up">
				</picture>
			</div>
		</header>


		<main class="page">
			<section class="page__main-block main-block life-insurance-bg main-block-business-loans">
				<div class="main-block__container">
					<div class="main-block__body">
						<h1 class="main-block__title">Compare Life Insurance <span>Today!</span></h1>
						<div class="main-block__wrapper wrapper-main">
							<div class="wrapper-main__text ">
								Get life insurance quotes in under 60 seconds, for FREE
								<picture>
									<source srcset="img/business-loan/swoosh.webp" type="image/webp"><img class="image-business-loans" src="img/business-loan/swoosh.png" alt="green-swoosh">
								</picture>
							</div>
							<div class="business-loans-body">
								<div class="business-loans-body__image-wrapper">
									<picture>
										<source srcset="img/business-loan/info.webp" type="image/webp"><img src="img/business-loan/info.png" alt="info" class="business-loans-body__image">
									</picture>
								</div>
								<div class="business-loans-body__text">Multiple providers and options, all from Compare 1</div>
								<picture>
									<source srcset="img/main-page/green-arrow.webp" type="image/webp"><img src="img/main-page/green-arrow.png" alt="green-arrow" class="business-loans-body__image-arrow">
								</picture>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__box box">
				<form action="" method="post">
					<div class="box__container">
						<div class="box__title">Get Started</div>
						<div class=" box__item skils-item box__item">
							<div class="skils-item__info">

							</div>
							<div style="width: 7.14%;" class="skils-item__line skils-item__line--green"></div>
						</div>
						<div id="group1" class="box__buttons">
							<div class="box__subtitle">What state are you located in?</div>
							<div class="box__buttons__wrapper">
								<button type="button" class="box__button" data-target="group2">New South Wales</button>
								<button type="button" class="box__button" data-target="group2">Victoria</button>
								<button type="button" class="box__button" data-target="group2">Queensland</button>
								<button type="button" class="box__button" data-target="group2">Western Australia</button>
								<button type="button" class="box__button" data-target="group2">South Australia</button>
								<button type="button" class="box__button" data-target="group2">Northern Territory</button>
								<button type="button" class="box__button" data-target="group2">Tasmania</button>
								<button type="button" class="box__button" data-target="group2">Australian Capital Territory</button>
							</div>
						</div>
						<div id="group2" class="box__buttons" style="display: none;">
							<div class="box__subtitle">How old are you?</div>
							<div class="box__buttons__wrapper wrapper-2">
								<button type="button" class="box__button" data-target="group3">20-29</button>
								<button type="button" class="box__button" data-target="group3">30-39</button>
								<button type="button" class="box__button" data-target="group3">40-49</button>
								<button type="button" class="box__button" data-target="group3">50-55</button>
								<button type="button" class="box__button" data-target="group3">56+</button>
							</div>
						</div>
						<div id="group3" class="box__buttons" style="display: none;">
							<div class="box__subtitle">Do you currently have Medical or Life Insurance?</div>
							<div class="box__buttons__wrapper wrapper-2">
								<button type="button" class="box__button" data-target="group4">I have medical insurance</button>
								<button type="button" class="box__button" data-target="group4">I have life insurance</button>
								<button type="button" class="box__button" data-target="group4">No</button>
							</div>
						</div>
						<div id="group4" class="box__buttons" style="display: none;">
							<div class="box__subtitle">What is your current living situation?</div>
							<div class="box__buttons__wrapper mb wrapper-2">
								<button type="button" class="box__button" data-target="group5">I Live By Myself</button>
								<button type="button" class="box__button" data-target="group5">I Live With A Significant Other</button>
								<button type="button" class="box__button" data-target="group5">I Live With A Significant Other and 1 or More Kids</button>
								<button type="button" class="box__button" data-target="group5">I Live With 1 or More Kids</button>
							</div>
						</div>
						<div id="group5" class="box__buttons" style="display: none;">
							<div class="box__subtitle">What kind of life insurance are you exploring?</div>
							<div class="box__buttons__wrapper mb wrapper-2">
								<button type="button" class="box__button" data-target="group6">Life Insurance</button>
								<button type="button" class="box__button" data-target="group6">Trauma Insurance</button>
								<button type="button" class="box__button" data-target="group6">Total Permanent Disability Insurance</button>
								<button type="button" class="box__button" data-target="group6">Income Protection Insurance</button>
								<button type="button" class="box__button" data-target="group6">Not Sure Yet</button>
							</div>
						</div>
						<div id="group6" class="box__buttons" style="display: none;">
							<div class="box__subtitle">What kind of life insurance are you exploring?</div>
							<div class="box__buttons__wrapper mb wrapper-2">
								<button type="button" class="box__button" data-target="group7">Full Time</button>
								<button type="button" class="box__button" data-target="group7">Part Time</button>
								<button type="button" class="box__button" data-target="group7">Self Employed</button>
								<button type="button" class="box__button" data-target="group7">Retired</button>
								<button type="button" class="box__button" data-target="group7">Centrelink</button>
								<button type="button" class="box__button" data-target="group7">Unemployed</button>

							</div>
						</div>
						<div id="group7" class="box__buttons" style="display: none;">
							<div class="box__subtitle ">Who do we have the pleasure of helping today?</div>
							<div class="box-form__body">
								<input type="hidden" name="group1" id="hiddenGroup1">
								<input type="hidden" name="group2" id="hiddenGroup2">
								<input type="hidden" name="group3" id="hiddenGroup3">
								<input type="hidden" name="group4" id="hiddenGroup4">
								<input type="hidden" name="group5" id="hiddenGroup5">
								<input type="hidden" name="group6" id="hiddenGroup6">
								<input type="hidden" name="group7" id="hiddenGroup7">
								<input type="hidden" name="group8" id="hiddenGroup8">
								<input type="hidden" name="group9" id="hiddenGroup9">
								<input type="name" data-required placeholder="First Name" class="input inp-p">
								<input type="name" data-required placeholder="Last Name" class="input inp-p">
							</div>
							<button type="submit" class="box-form__button box__button" data-target="group8">Continue</button>
						</div>
						<div id="group8" class="box__buttons" style="display: none;">
							<div class="box__subtitle">Almost Done</div>
							<div class="box__label">Please enter your email</div>
							<div class="box-form__body">
								<input type="email" data-required placeholder="Email" class="input inp-p">
							</div>
							<button type="submit" class="box-form__button box__button" data-target="group9">Continue</button>
						</div>
						<div id="group9" class="box__buttons" style="display: none;">
							<div class="box__subtitle">Last Step</div>
							<div class="box-form__body">
								<input type="text" data-required placeholder="Phone Number" class="input inp-p">
							</div>
							<button type="submit" name="sendMailBtn">Continue</button>
						</div>
					</div>
				</form>
				<?php

				use PHPMailer\PHPMailer\PHPMailer;
				use PHPMailer\PHPMailer\Exception;

				// Load PHPMailer
				require 'path/to/PHPMailer/src/Exception.php';
				require 'path/to/PHPMailer/src/PHPMailer.php';
				require 'path/to/PHPMailer/src/SMTP.php';

				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					// Capture the hidden inputs and user-provided data
					$group1 = $_POST['group1'] ?? '';
					$group2 = $_POST['group2'] ?? '';
					$group3 = $_POST['group3'] ?? '';
					$group4 = $_POST['group4'] ?? '';
					$group5 = $_POST['group5'] ?? '';
					$group6 = $_POST['group6'] ?? '';
					$group7 = $_POST['group7'] ?? '';
					$firstName = $_POST['firstName'] ?? '';
					$lastName = $_POST['lastName'] ?? '';
					$email = $_POST['email'] ?? '';
					$phone = $_POST['phone'] ?? '';

					// Create email content
					$message = "<h2>User Details</h2>";
					$message .= "<p><strong>State:</strong> $group1</p>";
					$message .= "<p><strong>Age Group:</strong> $group2</p>";
					$message .= "<p><strong>Insurance Type:</strong> $group3</p>";
					$message .= "<p><strong>Living Situation:</strong> $group4</p>";
					$message .= "<p><strong>Life Insurance:</strong> $group5</p>";
					$message .= "<p><strong>Employment Status:</strong> $group6</p>";
					$message .= "<p><strong>First Name:</strong> $firstName</p>";
					$message .= "<p><strong>Last Name:</strong> $lastName</p>";
					$message .= "<p><strong>Email:</strong> $email</p>";
					$message .= "<p><strong>Phone:</strong> $phone</p>";

					// Set up PHPMailer
					$mail = new PHPMailer(true);
					try {
						// Server settings
						$mail->isSMTP();
						$mail->Host = 'smtp.gmail.com'; // Set the SMTP server
						$mail->SMTPAuth = true;
						$mail->Username = 'abhijit.theworks@gmail.com'; // SMTP username
						$mail->Password = 'your_password'; // SMTP password
						$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
						$mail->Port = 587;

						// Recipients
						$mail->setFrom('abhijit.theworks@gmail.com', 'Your Name');
						$mail->addAddress('abhijit.theworks@gmail.com', 'Recipient Name'); // Add a recipient

						// Content
						$mail->isHTML(true);
						$mail->Subject = 'New Form Submission';
						$mail->Body = $message;

						// Send the email
						$mail->send();
						echo 'Message has been sent successfully';
					} catch (Exception $e) {
						echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
					}
				}
				?>

			</section>
			<section class="page__reviews reviews">
				<div class="reviews__container">
					<div class="reviews__body">
						<div class="reviews__text">Our customers rate us</div>
						<div class="reviews__wrapper-stars">
							<picture>
								<source srcset="img/main-page/box-section/stars.webp" type="image/webp"><img src="img/main-page/box-section/stars.png" alt="stars">
							</picture>
						</div>
					</div>
				</div>
			</section>
			<section class="page__advantages advantages-section business-loans-advantages">
				<div class="advantages-section__container">
					<div class="advantages-section__top-block block-top">
						<div class="block-top__title">As featured on:</div>
						<div class="advantages-section__top-block items-wrap">
							<div class="advantages-section__items first-items items marquee">
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/business-insider-01.webp" type="image/webp"><img src="img/main-page/advantages-section/business-insider-01.png" alt="business-insider">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/fox-sports-02.webp" type="image/webp"><img src="img/main-page/advantages-section/fox-sports-02.png" alt="fox-sports">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/msn-03.webp" type="image/webp"><img src="img/main-page/advantages-section/msn-03.png" alt="msn">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/daily-main-04.webp" type="image/webp"><img src="img/main-page/advantages-section/daily-main-04.png" alt="daily-main">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/perth-now-05.webp" type="image/webp"><img src="img/main-page/advantages-section/perth-now-05.png" alt="perth-now">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/seven-west-media-06.webp" type="image/webp"><img src="img/main-page/advantages-section/seven-west-media-06.png" alt="seven-west-media">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/bloomberg-08.webp" type="image/webp"><img src="img/main-page/advantages-section/bloomberg-08.png" alt="bloomberg">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/the-mirrir-07.webp" type="image/webp"><img src="img/main-page/advantages-section/the-mirrir-07.png" alt="the-mirrir">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/cnbs-10.webp" type="image/webp"><img src="img/main-page/advantages-section/cnbs-10.png" alt="cnbs">
										</picture>
									</div>
								</div>
							</div>
							<div aria-hidden="true" class="advantages-section__items second-items items marquee">
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/business-insider-01.webp" type="image/webp"><img src="img/main-page/advantages-section/business-insider-01.png" alt="business-insider">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/fox-sports-02.webp" type="image/webp"><img src="img/main-page/advantages-section/fox-sports-02.png" alt="fox-sports">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/msn-03.webp" type="image/webp"><img src="img/main-page/advantages-section/msn-03.png" alt="msn">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/daily-main-04.webp" type="image/webp"><img src="img/main-page/advantages-section/daily-main-04.png" alt="daily-main">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/perth-now-05.webp" type="image/webp"><img src="img/main-page/advantages-section/perth-now-05.png" alt="perth-now">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/seven-west-media-06.webp" type="image/webp"><img src="img/main-page/advantages-section/seven-west-media-06.png" alt="seven-west-media">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/bloomberg-08.webp" type="image/webp"><img src="img/main-page/advantages-section/bloomberg-08.png" alt="bloomberg">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/the-mirrir-07.webp" type="image/webp"><img src="img/main-page/advantages-section/the-mirrir-07.png" alt="the-mirrir">
										</picture>
									</div>
								</div>
								<div class="advantages-section__item item">
									<div class="advantages-section__image">
										<picture>
											<source srcset="img/main-page/advantages-section/cnbs-10.webp" type="image/webp"><img src="img/main-page/advantages-section/cnbs-10.png" alt="cnbs">
										</picture>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__benefits benefits-section">
				<div class="benefits-section__container">
					<h2 class="benefits-section__title title">Why Choose Us</h2>
					<div class="benefits-section__advantages-bar advantages-bar">
						<div class="advantages-bar__item">
							<div class="advantages-bar__wrapper">
								<div class="advantages-bar__image-wrapper">
									<picture>
										<source srcset="img/business-loan/advantages-bar/01.webp" type="image/webp"><img src="img/business-loan/advantages-bar/01.png" alt="Image" class="advantages-bar__image">
									</picture>
								</div>
								<div class="advantages-bar__title">Flexible payments terms</div>
							</div>
						</div>
						<div data-watch class="advantages-bar__element-line"></div>
						<div class="advantages-bar__item">
							<div class="advantages-bar__wrapper">
								<div class="advantages-bar__image-wrapper">
									<picture>
										<source srcset="img/business-loan/advantages-bar/02.webp" type="image/webp"><img src="img/business-loan/advantages-bar/02.png" alt="Image" class="advantages-bar__image">
									</picture>
								</div>
								<div class="advantages-bar__title">We make things secure and easy</div>
							</div>
						</div>
						<div data-watch class="advantages-bar__element-line second-element-line"></div>
						<div class="advantages-bar__item">
							<div class="advantages-bar__wrapper">
								<div class="advantages-bar__image-wrapper">
									<picture>
										<source srcset="img/business-loan/advantages-bar/03.webp" type="image/webp"><img src="img/business-loan/advantages-bar/03.png" alt="Image" class="advantages-bar__image">
									</picture>
								</div>
								<div class="advantages-bar__title">Trusted by Australians</div>
							</div>
						</div>
					</div>
					<div class="benefits-section__body body-benefits">
						<div class="body-benefits__wrapper">
							<div class="body-benefits__item">
								<div class="body-benefits__image-wrapper">
									<picture>
										<source srcset="img/business-loan/confused-confusion.webp" type="image/webp"><img src="img/business-loan/confused-confusion.png" alt="confused-confusion" class="body-benefits__image">
									</picture>
								</div>
								<div class="body-benefits__text">Researching for the right business loan is time-consuming. Compare 1 can connect you to 80+ lenders to get the <span>BEST RATES AND TERMS</span> that suit your situation. </div>
							</div>
							<div class="body-benefits__item">
								<div class="body-benefits__image-wrapper">
									<picture>
										<source srcset="img/business-loan/right-files.webp" type="image/webp"><img src="img/business-loan/right-files.png" alt="right-files" class="body-benefits__image">
									</picture>
								</div>
								<div class="body-benefits__text"><span>Compare 1</span> will handle your process from start to finish. </div>
							</div>
							<div class="body-benefits__item">
								<div class="body-benefits__image-wrapper">
									<picture>
										<source srcset="img/business-loan/file.webp" type="image/webp"><img src="img/business-loan/file.png" alt="file" class="body-benefits__image">
									</picture>
								</div>
								<div class="body-benefits__text">We make it easy for you! Our process only requires <span>LITTLE OR NO PAPERWORK.</span></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer data-watch class="footer">
			<div class="footer__top top-footer">
				<div class="top-footer__container">
					<a href="#" class="top-footer__image-wrapper">
						<picture>
							<source srcset="img/footer/logo-white-top.webp" type="image/webp"><img src="img/footer/logo-white-top.png" alt="Logo-compare-1" class="top-footer__image">
						</picture>
					</a>
					<div class="top-footer__body">
						<div class="top-footer__item item-top">
							<div class="item-top__title">Pages</div>
							<ul class="item-top__list">
								<li class="item-top__item"><a href="#" class="item-top__link">Services</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">How It Works</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">Reviews</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">About </a></li>
							</ul>
						</div>
						<div class="top-footer__item item-top">
							<div class="item-top__title">Services</div>
							<ul class="item-top__list">
								<li class="item-top__item"><a href="#" class="item-top__link">Business Loan</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">Mortgage</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">Life Insurance</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">Solar</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">Vehicle Loan </a></li>
							</ul>
						</div>
						<div class="top-footer__item item-top">
							<div class="item-top__title last-title"></div>
							<ul class="item-top__list">
								<li class="item-top__item"><a href="#" class="item-top__link">Personal Loan</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">Health Insurance</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">Superannuation</a></li>
								<li class="item-top__item"><a href="#" class="item-top__link">Car Insurance</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__bottom bottom-footer">
				<div class="bottom-footer__container">
					<div class="bottom-footer__left left-bottom">
						<ul class="left-bottom__list">
							<li class="left-bottom__item"><a href="#" class="left-bottom__link bottom-text">Terms & Condition</a></li>
							<li class="left-bottom__item"><a href="#" class="left-bottom__link bottom-text">Privacy Policy</a></li>
							<li class="left-bottom__item"><a href="#" class="left-bottom__link bottom-text">Contact</a></li>
						</ul>
						<div class="left-bottom__text bottom-text">
							<div class="left-bottom__copyright">
								© Copyright Compare 1 2023.
								All rights reserved.
							</div>
							<div class="left-bottom__street">
								13.01, 222 Pitt Street, Sydney CBD, NSW, 2000
							</div>
						</div>
					</div>
					<div class="bottom-footer__right right-bottom">
						<div class="right-bottom__text bottom-text">
							<p>
								Compare 1 is a referral service. We can help you find a suitable provider to service your specific requests. We receive referral commissions from third-party companies for making introductions. These include high street banks, insurance companies, lenders, niche funding specialists, and solar energy providers. As we comply with data protection legislation, we place robust systems to protect information against corruption, destruction, loss, misuse, or unauthorized access. Rest assured, we will not pass your specified information to any potential 3rd party company without proper consent.
							</p>
							<p>
								Filling out our assessment form or quiz means to consent to proceed with a specific offering through a referral from Compare1. It also means that you acknowledge receiving emails, notices, phone calls, and text messages on the contact details provided. You will be dealing directly with third-party companies. As such, Compare 1 does not guarantee the accuracy of the information given on their websites.
							</p>
							<p>
								By submitting your details on this site, you are agreeing to the Terms & Conditions and have read and understood the Privacy Policy.
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>


	</div>
	<script src="js/app.min.js?_v=20240412081353"></script>
	<script>
		// JavaScript to dynamically populate hidden fields based on user selections
		document.querySelectorAll('.box__button').forEach(button => {
			button.addEventListener('click', function() {
				const targetGroup = this.dataset.target;
				const parentGroup = this.closest('.box__buttons').id;

				// Set hidden field value for the group
				const hiddenField = document.getElementById(`hidden${parentGroup}`);
				if (hiddenField) {
					hiddenField.value = this.textContent.trim();
				}

				// Show the next group
				if (targetGroup) {
					document.getElementById(targetGroup).style.display = 'block';
				}

				// Hide the current group
				this.closest('.box__buttons').style.display = 'none';
			});
		});
	</script>
</body>

</html>