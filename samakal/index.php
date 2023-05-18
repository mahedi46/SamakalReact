<?php include_once "common/config.php";?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo $sSiteTitle; ?></title>

	<meta name="description" content="<?php echo $sSiteTitle; ?>">
	<meta name="keywords" content="<?php echo $sSiteTitle; ?>">

	<meta http-equiv="refresh" content="">
	<meta name="author" content="<?php echo $sAuthor; ?>">
	<meta name="Developer" content="<?php echo $sDeveloper; ?>">
	<meta name="resource-type" content="document">
	<meta name="contact" content="<?php echo $sEmail; ?>">
	<meta name="copyright"
		content="Copyright (c) <?php echo gmdate("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">

	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta name="googlebot-news" content="index, follow">
	<meta name="msnbot" content="index, follow">

	<meta property="fb:app_id" content="<?php echo $sAppId; ?>">
	<meta property="og:site_name" content="<?php echo $sSiteName; ?>">
	<meta property="og:title" content="<?php echo $sSiteTitle; ?>">
	<meta property="og:description" content="<?php echo $sSiteTitle; ?>">
	<meta property="og:url" content="<?php echo $sSiteURL; ?>">
	<meta property="og:type" content="article">
	<meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
	<meta property="og:locale" content="en_US">

	<link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
	<link rel="canonical" href="<?php echo $sSiteURL; ?>">

	<link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
	<link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=377677664574651&autoLogAppEvents=1" nonce="JeeONszk"></script>
	<?php
echo $sCSSBootStrap;
echo $sCSSFontAwesome;
echo $sCSSMeanMenu;
echo $sCSSSolaimanLipi;
echo $sCSSSlick;
echo $sCSSEMM;
?>

</head>

<body>

	<?php echo $sFbRoot; ?>


	<?php include_once "common/header.php";?>

	<!-- Back to top button -->
	<a id="button"><i class="fas fa-angle-double-up"></i></a>
	
	<section class="popupModal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal fade" id="modal-popup" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <a type="button" class="gallery-cl-btn close" data-bs-dismiss="modal"
                                            aria-label="Close"> <span aria-hidden="true">×</span> </a>
                                    </div>
                                    <div class="modal-body">
                                        <picture>
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/adsbig.jpg"
                                                alt="" title="" class="img-fluid img100">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     </section>
	
	<main>
		<section class="trendingNews">
			<div class="container">
				<div class="row d-flex justify-content-end">
					<div class="col-lg-10">
						<div class="trending-tag d-flex align-items-center mt-3">
							<span>আলোচিত : </span>
							<a href="#" target="_blank">শৈত্যপ্রবাহ</a>
							<a href="#" target="_blank">বিপিএল</a>
							<a href="#" target="_blank">বাণিজ্য মেলা</a>
							<a href="#" target="_blank">মেট্রোরেল</a>
							<a href="#" target="_blank">পরীমণি</a>
							<a href="#" target="_blank">আবহাওয়ার খবর</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="leadNews">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div class="dateAndSocial-info">
							<div class="dateInfo">
								<span><i class="fas fa-map-marker-alt"></i>ঢাকা</span>
								<span><i
										class="fas fa-calendar-alt"></i><?php echo fEn2Bn($dtDateTime); ?></span>
							</div>
							<div class="socail-icon">
								<a class="facebook" href="#"><i class="fab fa-facebook-f"></i>facebook</a>
								<a class="twitter" href="#"><i class="fab fa-twitter"></i>twitter</a>
								<a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i>linkedin</a>
								<a class="youtube" href="#"><i class="fab fa-youtube-square"></i>youtube</a>
								<a class="instagram" href="#"><i class="fab fa-instagram"></i>instagram</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-8">
						<div class="leadNewsTop1">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/74641-1673177425.jpg"
												alt=" ব্রাজিলের সঙ্গে বাণিজ্যিক সহযোগিতা বাড়ানোর আহ্বান প্রধানমন্ত্রীর"
												title=" ব্রাজিলের সঙ্গে বাণিজ্যিক সহযোগিতা বাড়ানোর আহ্বান প্রধানমন্ত্রীর">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h1 class="Title"> ব্রাজিলের সঙ্গে বাণিজ্যিক সহযোগিতা বাড়ানোর আহ্বান
										প্রধানমন্ত্রীর</h1>
									<div class="Brief">
										<p>প্রধানমন্ত্রী শেখ হাসিনা বাংলাদেশ ও ব্রাজিলের মধ্যে বাণিজ্যিক
											সহযোগিতা বৃদ্ধির প্রয়োজনীয়তার ওপর গুরুত্বারোপ করে বলেছেন, দুই
											দেশের মধ্যে ব্যবসা সম্প্রসারণের বিপুল সম্ভাবনা রয়েছে। বাংলাদেশে
											নিযুক্ত ব্রাজিলের রাষ্ট্রদূত পাওলো ফার্নান্দো দিয়াস ফেরেস রোববার
											প্রধানমন্ত্রীর সরকারি বাসভবন গণভবনে তাঁর সঙ্গে সৌজন্য সাক্ষাৎ
											করতে গেলে তিনি এ কথা বলেন। বৈঠক শেষে সাংবাদিকদের ব্রিফ করেন
											প্রধানমন্ত্রীর স্পিচ রাইটার নজরুল ইসলাম।</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="leadNewsTop2">
							<div class="leadNewsTop2Body">
								<a href="#">
									<div class="Desc">
										<h3 class="Title2"> গণমাধ্যমকর্মী বিল পরীক্ষা করতে আরও ৯০ দিন সময় নিল
											সংসদীয় কমিটি</h3>
									</div>
								</a>
								<p class="leadNewsTop2Time"> আপডেট ০৮ জানুয়ারি ২৩ । ১০:৪৪ </p>
							</div>
							<div class="leadNewsTop2Body">
								<a href="#">
									<div class="Desc">
										<h3 class="Title2">যুক্তরাষ্ট্র জ্ঞানের অভাবে নির্বাচনে কারসাজি নিয়ে
											সন্দেহ করে: পররাষ্ট্রমন্ত্রী</h3>
									</div>
								</a>
								<p class="leadNewsTop2Time"> আপডেট ০৮ জানুয়ারি ২৩ । ০৯:৫৮ </p>
							</div>
							<div class="leadNewsTop2Body">
								<a href="#">
									<div class="Desc">
										<h3 class="Title2">দুই সপ্তাহের মধ্যে শতভাগ বই শিক্ষার্থীদের হাতে
											পৌঁছে যাবে: দীপু মনি</h3>
									</div>
								</a>
								<p class="leadNewsTop2Time"> আপডেট ০৮ জানুয়ারি ২৩ । ০৯:৫৮ </p>
							</div>
							<div class="leadNewsTop2Body">
								<a href="#">
									<div class="Desc">
										<h3 class="Title2"> রাজশাহীতে মৌসুমের সর্বনিম্ন তাপমাত্রা ৮.৫ ডিগ্রি
											সেলসিয়াস</h3>
									</div>
								</a>
								<p class="leadNewsTop2Time"> আপডেট ০৮ জানুয়ারি ২৩ । ১০:৪৪ </p>
							</div>
						</div>
					</div>
				</div>
				<div class="leadTop3">
					<div class="row">
						<div class="col-lg-3 col-md-3 border-right">
							<div class="leadTop3-wrap">
								<a href="#">
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/rodrigo-samakal-63ba3d7fdc34d.jpg"
													alt="হেরে গোল মিসের খেসারত দিল রিয়াল"
													title="হেরে গোল মিসের খেসারত দিল রিয়াল">
											</picture>
										</figure>
									</div>
									<div class="Desc">
											<h3 class="Title2">হেরে গোল মিসের খেসারত দিল রিয়াল</h3>
									</div>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 border-right">
							<div class="leadTop3-wrap">
								<a href="#">
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/cold-wave-samakal-63ba3a95af568.webp"
													alt=" মৃদু শৈত্যপ্রবাহ অব্যাহত থাকতে পারে"
													title=" মৃদু শৈত্যপ্রবাহ অব্যাহত থাকতে পারে">
											</picture>
										</figure>
									</div>
									<div class="Desc">
											<h3 class="Title2"> মৃদু শৈত্যপ্রবাহ অব্যাহত থাকতে পারে</h3>
									</div>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 border-right">
							<div class="leadTop3-wrap">
								<a href="#">
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/flight-r-samakal-63ba385f2e9ba.webp"
													alt=" ঘন কুয়াশায় শাহজালাল বিমানবন্দরে ফ্লাইটের অবতরণ-উড্ডয়ন বন্ধ"
													title=" ঘন কুয়াশায় শাহজালাল বিমানবন্দরে ফ্লাইটের অবতরণ-উড্ডয়ন বন্ধ">
											</picture>
										</figure>
									</div>
									<div class="Desc">
											<h3 class="Title2"> ঘন কুয়াশায় শাহজালাল বিমানবন্দরে ফ্লাইটের
												অবতরণ-উড্ডয়ন বন্ধ</h3>
									</div>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="leadTop3-wrap">
								<a href="#">
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-46-samakal-63b9dec88f436.webp"
													alt=" ফেব্রুয়ারিতেও থাকবে শীত"
													title=" ফেব্রুয়ারিতেও থাকবে শীত">
											</picture>
										</figure>
									</div>
									<div class="Desc">
											<h3 class="Title2">হেরে গোল মিসের খেসারত দিল রিয়াল</h3>
									</div>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="adSection">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center">
						<a href="#"><img class="img-fluid"
								src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/14656915817296608306.gif"
								alt="advertisement" title="advertisement"></a>
					</div>
				</div>
			</div>
		</section>
		<section class="Spcategory1">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9">
						<div class="Spccat-left">
							<div class="row">
								<div class="col-lg-4 col-md-4 border-right">
									<div class="Spccat-left-body">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/kiayara-samakal-63ba702cb95b2.webp"
															alt=" কিয়ারার গালে বরুণের চুমু, খুব্ধ সিদ্ধার্থ"
															title=" কিয়ারার গালে বরুণের চুমু, খুব্ধ সিদ্ধার্থ">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">কিয়ারার গালে বরুণের চুমু, ক্ষুব্ধ
													সিদ্ধার্থ</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-left-body">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/oindrila-samakal-63ba755acc27a.webp"
															alt="ঐন্দ্রিলার পর ক্যান্সারে আক্রান্ত তার মা"
															title="ঐন্দ্রিলার পর ক্যান্সারে আক্রান্ত তার মা">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">ঐন্দ্রিলার পর ক্যান্সারে আক্রান্ত তার মা
												</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/amir-khosru-f-samakal-63ba7c1aeadaa.jpg"
																	alt="রাষ্ট্র মেরামতে ২৭ দফা রূপরেখা বিএনপির আন্দোলনের অংশ: আমীর খসরু"
																	title="রাষ্ট্র মেরামতে ২৭ দফা রূপরেখা বিএনপির আন্দোলনের অংশ: আমীর খসরু">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2">রাষ্ট্র মেরামতে ২৭ দফা রূপরেখা
															বিএনপির আন্দোলনের অংশ: আমীর খসরু</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/----5-samakal-63ba78e963e9f.jpg"
																	alt=" সাশ্রয়ী মূল্যে বিদ্যুৎ চায় মেট্রোরেল ও হাইটেক পার্ক"
																	title=" সাশ্রয়ী মূল্যে বিদ্যুৎ চায় মেট্রোরেল ও হাইটেক পার্ক">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2"><span>গণশুনানি চলছে /</span>
															সাশ্রয়ী মূল্যে বিদ্যুৎ চায় মেট্রোরেল ও হাইটেক
															পার্ক</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/du-samakal-63ba787396ca8.webp"
																	alt=" তারেক-জোবায়দার সম্পদ ক্রোকের আদেশে উদ্বেগ ঢাবি সাদা দলের"
																	title=" তারেক-জোবায়দার সম্পদ ক্রোকের আদেশে উদ্বেগ ঢাবি সাদা দলের">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2">তারেক-জোবায়দার সম্পদ ক্রোকের
															আদেশে উদ্বেগ ঢাবি সাদা দলের</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 border-right">
									<div class="Spccat-left-body">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/----3-samakal-63ba69fb07cf8.webp"
															alt=" শিশুর শরীরে ভিটামিনের ঘাটতি হলে বুঝবেন কীভাবে"
															title=" শিশুর শরীরে ভিটামিনের ঘাটতি হলে বুঝবেন কীভাবে">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">শিশুর শরীরে ভিটামিনের ঘাটতি হলে বুঝবেন
													কীভাবে</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-left-body">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/----2-samakal-63ba53fc76da0.jpg"
															alt=" শীতে খুশকি দূর করার ঘরোয়া উপায়"
															title=" শীতে খুশকি দূর করার ঘরোয়া উপায়">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">শীতে খুশকি দূর করার ঘরোয়া উপায়</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/----4-samakal-63ba7323410ee.jpg"
																	alt=" এক কুকুরের দাম উঠল ২০ কোটি রুপি!"
																	title=" এক কুকুরের দাম উঠল ২০ কোটি রুপি!">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2"> এক কুকুরের দাম উঠল ২০ কোটি
															রুপি!</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/mexico-samakal-63ba845f67c37.jpg"
																	alt=" মেক্সিকোতে দুই মেট্রো ট্রেনের সংঘর্ষে হতাহত ৫৮"
																	title=" মেক্সিকোতে দুই মেট্রো ট্রেনের সংঘর্ষে হতাহত ৫৮">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2"> মেক্সিকোতে দুই মেট্রো ট্রেনের
															সংঘর্ষে হতাহত ৫৮</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/----6-samakal-63ba823315fae.jpg"
																	alt=" সুনামগঞ্জে একটি বাড়ি ঘেরাও করে পুলিশের অভিযান"
																	title=" সুনামগঞ্জে একটি বাড়ি ঘেরাও করে পুলিশের অভিযান">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2"> সুনামগঞ্জে একটি বাড়ি ঘেরাও করে
															পুলিশের অভিযান</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 border-right">
									<div class="Spccat-left-body">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-23-samakal-63b9d1c473035.jpg"
															alt="দার্জিলিং কমলায় আশার আলো"
															title="দার্জিলিং কমলায় আশার আলো">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2"><span>ছাদবাগান/ </span>দার্জিলিং কমলায়
													আশার আলো</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-left-body">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/sarfaaz-samakal-63ba6407b2470.jpg"
															alt=" প্রত্যাবর্তন: প্রশংসায় ভাসছেন সরফরাজ"
															title=" প্রত্যাবর্তন: প্রশংসায় ভাসছেন সরফরাজ">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">প্রত্যাবর্তন: প্রশংসায় ভাসছেন সরফরাজ</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/bnp-samakal-63ba7cf7e5f9c.webp"
																	alt=" বিএনপির অবস্থান কর্মসূচির সময় পরিবর্তন"
																	title=" বিএনপির অবস্থান কর্মসূচির সময় পরিবর্তন">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2"> বিএনপির অবস্থান কর্মসূচির সময়
															পরিবর্তন</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/martinez-samakal-63ba6c0541c44.jpg"
																	alt=" পর্তুগালের কোচ হচ্ছেন রবার্তো মার্টিনেজ"
																	title=" পর্তুগালের কোচ হচ্ছেন রবার্তো মার্টিনেজ">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2"> পর্তুগালের কোচ হচ্ছেন রবার্তো
															মার্টিনেজ</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row gx-2">
												<div class="col-lg-4">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/Kishoreganj-samakal-63ba610c1ceb0.webp"
																	alt=" দাদনের মিথ্যা মামলায় তছনছ একটি পরিবার"
																	title=" দাদনের মিথ্যা মামলায় তছনছ একটি পরিবার">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-8">
													<div class="Desc">
														<h3 class="Title2"> দাদনের মিথ্যা মামলায় তছনছ একটি
															পরিবার</h3>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<section class="DLPSTab2">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
										href="#tabs-1" role="tab" aria-selected="true">সর্বশেষ</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabs-2"
										role="tab" aria-selected="false">সর্বাধিক পঠিত</a></li>
							</ul>
							<div class="panel-body PanelHeight">
								<div class="tab-content">
									<div class="tab-pane active" id="tabs-1" role="tabpanel">
										<div class="DLatestNews longEnough mCustomScrollbar"
											data-mcs-theme="dark">
											<div class="DLatestNewsList">
												<a href="#">
													<p>বিশ্বকাপজয়ী কোচকে বিরল সম্মাননা দিলো স্প্যানিশ ক্লাব
														মায়োর্কা (ভিডিও)</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>প্রথমবারের মতো বেসরকারিভাবে গমের নতুন জাত উদ্ভাবন
													</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>ছেলেকে হত্যার দায়ের মায়ের যাবজ্জীবন</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>আগামী জাতীয় সংসদ নির্বাচন ইভিএম না ব্যালটে জানালো
														ইসি</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>দারিদ্রতার কারণে স্কুল থেকে ঝরে পড়া ছাত্রটি এখন
														টেক্সাসের বিচারক</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>নির্বাচন অবাধ ও সুষ্ঠু হওয়া নিয়ে কোনো লুকোচুরি নেই
														: পররাষ্ট্রমন্ত্রী</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>আফ্রিকানদের সঙ্গে দিল্লি পুলিশের সংঘর্ষ</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>স্কুল বন্ধ রেখে গণশিক্ষা প্রতিমন্ত্রীর ছেলের বউভাতে
														শিক্ষক-কর্মচারীরা</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>গ্রাহক পর্যায়ে বিদ্যুতের দাম বাড়ানোর সুপারিশ </p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>হলফনামায় গড়মিল পাওয়ায় হিরো আলমের মনোনয়নপত্র বাতিল
													</p>
												</a>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tabs-2" role="tabpanel">
										<div class="DLatestNews longEnough mCustomScrollbar"
											data-mcs-theme="dark">
											<div class="DLatestNewsList">
												<a href="#">
													<p>মেসিকে টপকে লাতিন আমেরিকার সেরা প্লেয়ার নেইমার </p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>রমজানের সম্ভাব্য তারিখ ঘোষণা করল আরব আমিরাত</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>বৃষ্টির পর সবুজে ছেয়ে গেছে মক্কার পাহাড়</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>টানা ৩৫ বছর ইমামতি, বিদায়বেলায় ১৫ লাখ টাকা সম্মানী
													</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>নেইমারকে কম দামে বিক্রি করতে চায় পিএসজি,
														সম্ভাব্য গন্তব্য তিনটি</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>ছিটকে গেলেন মেসি-নেইমার</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>তামান্না-বিজয়ের ঘনিষ্ঠ মুহূর্তের ভিডিও ভাইরাল </p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>একসঙ্গে থাকা নিয়ে মুখ খুললেন পরীমণি</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>পুরস্কারে লাথি দেয়া বডি বিল্ডার জাহিদ প্রসঙ্গে যা
														বললেন ক্রীড়া প্রতিমন্ত্রী</p>
												</a>
											</div>
											<div class="DLatestNewsList">
												<a href="#">
													<p>বিকল্প ধারার মহাসচিব একাই হাতিয়ে নেন ৫১৭ কোটি ৬৩ লাখ
														টাকা (ভিডিও)</p>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="allnews">
								<a href="#"><i class="fab fa-telegram-plane"></i>সব খবর</a>
							</div>
						</section>
						<section class="sideAdd mt-5">
							<a href="#"><img class="img-fluid"
									src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/6590592196136328000.gif"
									alt="advertisement" title="advertisement">
							</a>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="EditorArea">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>সম্পাদকীয় ও উপসম্পাদকীয়</a>
							</h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 border-right d-flex">
						<div class="EditorNews align-self-stretch">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-2-samakal-63b9ef769cbe7.webp"
												alt="স্বীয় পদে কুঠারাঘাত" title="স্বীয় পদে কুঠারাঘাত">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h5 class="Title">স্বীয় পদে কুঠারাঘাত</h5>
									<p class="leadNewsTop2Time"><i class="far fa-edit"></i>সম্পাদকীয়</p>
									<div class="Brief">
										<p>রাষ্ট্রীয় নিষেধাজ্ঞা অমান্য করিয়া তিন ফসলি জমি ও নদী দখল করিয়া এক
											মাগুরা জেলাতেই ৯৬টা ইটভাটা গড়িয়া উঠিবার যে চিত্র শনিবার সমকালে
											প্রকাশ হইয়াছে, উহা নিছক অঞ্চলবিশেষের চিত্র হইতে পারে না। এই
											আশঙ্কা অমূলক হইতে পারে না যে, হদিস করিলে দেশের অন্যান্য জেলাতেও
											মিলিবে একই পরিস্থিতি। বস্তুত অতীতেও বিভিন্ন সময়ে সমকালেই প্রকাশিত
											প্রতিবেদনে আমরা অভিন্ন চিত্র দেখিয়াছি। অন্যত্রও মাগুরার ন্যায়
											ইটভাটার কারণে একদিকে কৃষিজমি কমিতেছে, অন্যদিকে পরিবেশ ও
											জনস্বাস্থ্য নাজুক হইয়া পড়িতেছে</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 border-right">
						<div class="EditorNewsList">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-1-Recovered-samakal-63b983dc92cf9.jpg"
												alt="হেফাজতের সঙ্গে আপসের ফল পাচ্ছে সরকার"
												title="হেফাজতের সঙ্গে আপসের ফল পাচ্ছে সরকার">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2"> <span>সাক্ষাৎকার: রাশেদ খান মেনন /</span> হেফাজতের
										সঙ্গে আপসের ফল পাচ্ছে সরকার</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-edit"></i>সাক্ষাৎকার গ্রহণ: সাইফুর
									রহমান তপন</p>
							</a>
						</div>
						<div class="EditorNewsList">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-1-Recovered-samakal-63b99866c9812.webp"
												alt=" নিছক দুই ভাইয়ের মল্লযুদ্ধ নয়"
												title=" নিছক দুই ভাইয়ের মল্লযুদ্ধ নয়">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2"><span>হ্যারির আত্মজীবনী/</span> নিছক দুই ভাইয়ের
										মল্লযুদ্ধ নয়</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-edit"></i>গ্যাবি হিনস্লিফ</p>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 border-right">
						<div class="EditorNewsRight">
							<a href="#">
								<div class="Desc">
									<h3 class="Title2"><span>সড়ক দুর্ঘটনা/</span> ব্যক্তির বেপরোয়া আচরণ বনাম
										কাঠামোগত দায়</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-edit"></i>কল্লোল মোস্তফা</p>
							</a>
						</div>
						<div class="EditorNewsRight">
							<a href="#">
								<div class="Desc">
									<h3 class="Title2"><span>মতামত/</span> মৃত্যুকূপে বসবাস এবং সিটি করপোরেশনের
										দায়</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-edit"></i>মিজান শাজাহান</p>
							</a>
						</div>
						<div class="EditorNewsRight">
							<a href="#">
								<div class="Desc">
									<h3 class="Title2"><span>মতামত/</span> দেশপ্রেম শুধু গানে আর পোশাকে
										সীমাবদ্ধ করছি কি?</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-edit"></i>ঞ্যোহ্লা মং</p>
							</a>
						</div>
						<div class="EditorNewsRight">
							<a href="#">
								<div class="Desc">
									<h3 class="Title2">বঙ্গবন্ধুর সর্বশেষ কারাজীবন</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-edit"></i>মুহম্মদ মনিরুল হক</p>
							</a>
						</div>
						<div class="EditorNewsRight">
							<a href="#">
								<div class="Desc">
									<h3 class="Title2"><span>অন্যদৃষ্টি /</span> সংখ্যাগরিষ্ঠতা নয়,
										সংখ্যালঘিষ্ঠতা</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-edit"></i>সেলিম খান</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="commonTwo-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>বাংলাদেশ</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<div class="commonTwo-body">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/lanset-bayjid-samakal-63babd7d292c0.webp"
												alt="ল্যানসেটে প্রকাশ পেল ডা. বায়জীদ খুরশীদের নেতৃত্বে করা গবেষণা"
												title="ল্যানসেটে প্রকাশ পেল ডা. বায়জীদ খুরশীদের নেতৃত্বে করা গবেষণা">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">ল্যানসেটে প্রকাশ পেল ডা. বায়জীদ খুরশীদের নেতৃত্বে করা
										গবেষণা</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="commonTwo-body">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Bebichok-samakal-603aa92243539-samakal-63bab781e9dd5.webp"
												alt=" গেট নির্মাণে অর্ধকোটি টাকার অনিয়ম, তদন্তে ধীরগতি"
												title=" গেট নির্মাণে অর্ধকোটি টাকার অনিয়ম, তদন্তে ধীরগতি">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">গেট নির্মাণে অর্ধকোটি টাকার অনিয়ম, তদন্তে ধীরগতি</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="commonTwo-body">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-29-samakal-63b9d5e81b758.jpg"
												alt=" সৌদিফেরত ৪ এতিম শিশুর কী হবে"
												title=" সৌদিফেরত ৪ এতিম শিশুর কী হবে">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2"><span>বাংলাদেশি বাবা ও ইন্দোনেশীয় মায়ের সন্তান /</span>
										সৌদিফেরত ৪ এতিম শিশুর কী হবে</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-3">
						<div class="commonTwo-body">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/jamuka-samakal-63ba968eca6a7.webp"
												alt=" কিয়ারার গালে বরুণের চুমু, খুব্ধ সিদ্ধার্থ"
												title=" কিয়ারার গালে বরুণের চুমু, খুব্ধ সিদ্ধার্থ">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">জামুকা'র ডিজি রোহেলের ডক্টরেট ডিগ্রি অর্জন</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="entertainment-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>বিনোদন</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8 d-flex">
						<div class="entertainment-big align-self-stretch">
							<a href="#">
								<div class="row">
									<div class="col-lg-4">
										<div class="Desc">
											<h5 class="Title">আবারও নারীপ্রধান গল্পে ববি</h5>
											<div class="Brief">
												<p>বছর শুরুতেই 'চালাও গুলি' নামে শিরোনামে 'ব্ল্যাক ওয়ার' ছবি আইটেম গানে দেখা গেছে চিত্রনায়িকা ববি হককে। এবার নতুন বছরের  দুই সপ্তাহ পেরোতে না পেরোতেই এই নায়িকার নতুন ছবিতে চুক্তিবদ্ধ হওয়ার খবর এলো। ছবির নাম 'মেঘনা কন্যা'।  গ্রাম এবং শহরের দুইজন নারীর শেকল ভাঙার গল্প নিয়ে নির্মিত হবে ছবিটি। সংগ্রামী এই নারীর ভুমিকায় দেখা যাবে ববিকে। পরিচালনা করবেন ফুয়াদ চৌধুরী। </p>
											</div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/bbbb-samakal-63bd3ba93e3ff.webp"
														alt="পরীমনির মাদক মামলা স্থগিত থাকবে: হাইকোর্ট"
														title="পরীমনির মাদক মামলা স্থগিত থাকবে: হাইকোর্ট">
												</picture>
											</figure>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 d-flex">
						<div class="entertainment-small align-self-stretch">
							<div class="Spccat-small">
								<a href="#">
									<div class="row">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/bipa12-samakal-63bad80f97268.webp"
															alt="‘সেক্স সিম্বল’ উপাধি, দুর্বিসহ হয়ে উঠেছিল বিপাশার জীবন"
															title="‘সেক্স সিম্বল’ উপাধি, দুর্বিসহ হয়ে উঠেছিল বিপাশার জীবন">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2">‘সেক্স সিম্বল’ উপাধি, দুর্বিসহ হয়ে উঠেছিল
													বিপাশার জীবন</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
							<div class="Spccat-small">
								<a href="#">
									<div class="row">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/rasmika12-samakal-63b9517c42c8c.webp"
															alt="আমাকে কেউ ভালোবাসে না, বললেন রাশ্মিকা"
															title="আমাকে কেউ ভালোবাসে না, বললেন রাশ্মিকা">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2">আমাকে কেউ ভালোবাসে না, বললেন রাশ্মিকা
												</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
							<div class="Spccat-small">
								<a href="#">
									<div class="row">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/rrrr7-samakal-63b91ca7ee107.webp"
															alt="অমিতাভের নাতির সঙ্গে শাহরুখকন্যার প্রেমের গুঞ্জন"
															title="অমিতাভের নাতির সঙ্গে শাহরুখকন্যার প্রেমের গুঞ্জন">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2">অমিতাভের নাতির সঙ্গে শাহরুখকন্যার প্রেমের
													গুঞ্জন</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="entertainmentThree mt-4">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<div class="commonTwo-body">
								<a href="#">
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/rrr-samakal-63be221b829ce.webp"
													alt=" গোল্ডেন গ্লোব জিতল ‘আরআরআর’ সিনেমার ‘নাটু নাটু’"
													title=" গোল্ডেন গ্লোব জিতল ‘আরআরআর’ সিনেমার ‘নাটু নাটু’">
											</picture>
										</figure>
									</div>
									<div class="Desc">
										<h3 class="Title2">গোল্ডেন গ্লোব জিতল ‘আরআরআর’ সিনেমার ‘নাটু নাটু’</h3>
									</div>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
										১৯:০০</p>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="commonTwo-body">
								<a href="#">
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/98-samakal-63bd5a4540fe8.webp"
													alt="আরিয়ানের সঙ্গে প্রেম, সত্যিটা জানালেন পাকিস্তানি অভিনেত্রী"
													title="আরিয়ানের সঙ্গে প্রেম, সত্যিটা জানালেন পাকিস্তানি অভিনেত্রী">
											</picture>
										</figure>
									</div>
									<div class="Desc">
										<h3 class="Title2">আরিয়ানের সঙ্গে প্রেম, সত্যিটা জানালেন পাকিস্তানি অভিনেত্রী</h3>
									</div>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
										১৯:০০</p>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="commonTwo-body">
								<a href="#">
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/MM12-samakal-63bd68817d763.webp"
													alt=" এক ছবিতে থালাপাতি বিজয়ের পারিশ্রমিক ১৮০ কোটি রুপি"
													title=" এক ছবিতে থালাপাতি বিজয়ের পারিশ্রমিক ১৮০ কোটি রুপি">
											</picture>
										</figure>
									</div>
									<div class="Desc">
										<h3 class="Title2">এক ছবিতে থালাপাতি বিজয়ের পারিশ্রমিক ১৮০ কোটি রুপি</h3>
									</div>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
										১৯:০০</p>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="commonTwo-body">
								<a href="#">
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/jafar-samakal-63ba9fab2a0d7.webp"
													alt="'জাফর ইকবালের উদাসীনতা একদিন আমাকেও পেয়ে বসে'"
													title="'জাফর ইকবালের উদাসীনতা একদিন আমাকেও পেয়ে বসে'">
											</picture>
										</figure>
									</div>
									<div class="Desc">
										<h3 class="Title2">'জাফর ইকবালের উদাসীনতা একদিন আমাকেও পেয়ে বসে'</h3>
									</div>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
										১৯:০০</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="adSection">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center">
						<a href="#"><img class="img-fluid"
								src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/4979068418500340758.png"
								alt="advertisement" title="advertisement"></a>
					</div>
				</div>
			</div>
		</section>
		<section class="sports-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>খেলা</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="sports-big">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100 h-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/naomi-osaka-samakal-63baf0e6ea64e.webp"
												alt="অস্ট্রেলিয়ান ওপেনে খেলবেন না ওসাকা"
												title="অস্ট্রেলিয়ান ওপেনে খেলবেন না ওসাকা">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h5 class="Title">অস্ট্রেলিয়ান ওপেনে খেলবেন না ওসাকা</h5>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ । ১৯:০০</p>
								</div>
							</a>
						</div>
						<div class="row mt-4">
							<div class="col-lg-6">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/ronaldo-abubakor-samakal-63bacbe5b0f54.webp"
														alt="রোনালদোকে জায়গা দিতে ক্লাব ছাড়লেন আবুবকর"
														title="রোনালদোকে জায়গা দিতে ক্লাব ছাড়লেন আবুবকর">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">রোনালদোকে জায়গা দিতে ক্লাব ছাড়লেন আবুবকর</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/henry-samakal-63baa30722392.webp"
														alt="ইনজুরিতে পাকিস্তান ও ভারতের বিপক্ষে নেই হেনরি"
														title="ইনজুরিতে পাকিস্তান ও ভারতের বিপক্ষে নেই হেনরি">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">ইনজুরিতে পাকিস্তান ও ভারতের বিপক্ষে নেই হেনরি
											</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="sports-big">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100 h-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/khwaja-samakal-63bab73159c7f.webp"
												alt=" সিডনি টেস্ট ড্র, ২০০ করতে না পারার আক্ষেপ নেই খাজার"
												title=" সিডনি টেস্ট ড্র, ২০০ করতে না পারার আক্ষেপ নেই খাজার">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h5 class="Title"> সিডনি টেস্ট ড্র, ২০০ করতে না পারার আক্ষেপ নেই খাজার</h5>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ । ১৯:০০</p>
								</div>
							</a>
						</div>
						<div class="row mt-4">
							<div class="col-lg-6">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/schaloni-(6)-samakal-63badc8b0881f.webp"
														alt="বর্ষসেরা কোচ হলেন লিওনেল স্কালোনি"
														title="বর্ষসেরা কোচ হলেন লিওনেল স্কালোনি">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">বর্ষসেরা কোচ হলেন লিওনেল স্কালোনি</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/shiriam-hathuru-samakal-63bbb24b0f022.webp"
														alt="হাথুরু শ্রীরামে সমন্বয়ের চেষ্টা"
														title="হাথুরু শ্রীরামে সমন্বয়ের চেষ্টা">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">হাথুরু শ্রীরামে সমন্বয়ের চেষ্টা</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-6">

					</div>
				</div>
			</div>
		</section>
		<section class="commonThree">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>টেকলাইফ</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="commonThree-big">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-27-samakal-63bb17ca6af77.webp"
												alt=" ফোল্ডিং ফোনের জাদু" title=" ফোল্ডিং ফোনের জাদু">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">ফোল্ডিং ফোনের জাদু</h3>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ ।
										১৯:০০</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="commonThree-big">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/metro_rail_bangladesh_tbs_2-samakal-63b1d3769b9ab.jpg"
												alt=" মেট্রোরেলে প্রযুক্তির চমক"
												title=" মেট্রোরেলে প্রযুক্তির চমক">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">মেট্রোরেলে প্রযুক্তির চমক</h3>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ ।
										১৯:০০</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="commonThree-small">
							<div class="Spccat-small">
								<a href="#">
									<div class="row">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-26-samakal-63bb179d88f54.webp"
															alt="‘ ওয়াইফাই সংযোগ পাচ্ছে না কম্পিউটার?"
															title="‘ ওয়াইফাই সংযোগ পাচ্ছে না কম্পিউটার?">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2">‘ ওয়াইফাই সংযোগ পাচ্ছে না কম্পিউটার?</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
							<div class="Spccat-small">
								<a href="#">
									<div class="row">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-25-samakal-63bb17753d66a.webp"
															alt=" অফলাইনে চলবে হোয়াটসঅ্যাপ"
															title=" অফলাইনে চলবে হোয়াটসঅ্যাপ">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2">অফলাইনে চলবে হোয়াটসঅ্যাপ</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="politics-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>রাজনীতি</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<div class="politics-big">
							<a href="#">
								<div class="row">
									<div class="col-lg-4">
										<div class="Desc">
											<h5 class="Title">বিএনপি-জামায়াতের হাতে ক্ষমতা ছাড়তে পারি না: ওবায়দুল কাদের </h5>
											<div class="Brief">
												<p>আওয়ামী লীগের সাধারণ সম্পাদক, সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের বলেছেন, স্বাধীনতাবিরোধী জঙ্গিবাদী বিএনপি-জামায়াতের হাতে ক্ষমতা ছেড়ে দিতে পারি না। ওরা দেশকে ধ্বংস করে। বুধবার দুপুরে রাজধানীর গুলিস্তানের বঙ্গবন্ধু অ্যাভিনিউয়ে আওয়ামী লীগের কেন্দ্রীয় কার্যালয়ের সামনে আলোচনা সভায় এ কথা বলেন তিনি।  দলীয় কার্যালয়ের সামনে পূর্বঘোষিত অবস্থান কর্মসূচি চলাকালে আলোচনা সভা অনুষ্ঠিত হয়।</p>
											</div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-1-samakal-63be7569e9e60.webp"
														alt="বিএনপি-জামায়াতের হাতে ক্ষমতা ছাড়তে পারি না: ওবায়দুল কাদের"
														title="বিএনপি-জামায়াতের হাতে ক্ষমতা ছাড়তে পারি না: ওবায়দুল কাদের">
												</picture>
											</figure>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="row mt-4">
							<div class="col-lg-4">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/dhaka-samakal-63bad4a06f9b5.jpg"
														alt=" রাজধানীতে স্বেচ্ছাসেবক দলের মশাল মিছিল"
														title=" রাজধানীতে স্বেচ্ছাসেবক দলের মশাল মিছিল">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2"> রাজধানীতে স্বেচ্ছাসেবক দলের মশাল মিছিল</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/jubodol-samakal-63bac8a0cb794.webp"
														alt=" ফ্যাসিবাদকে সরাতে রাজপথে তুমুল আন্দোলনের প্রস্তুতি নিন: মামুন হাসান"
														title=" ফ্যাসিবাদকে সরাতে রাজপথে তুমুল আন্দোলনের প্রস্তুতি নিন: মামুন হাসান">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2"> ফ্যাসিবাদকে সরাতে রাজপথে তুমুল আন্দোলনের
												প্রস্তুতি নিন: মামুন হাসান</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/AL-samakal-63baf199de02d.webp"
														alt=" আ'লীগের যুগ্ম সাধারণ সম্পাদক ও সাংগঠনিক সম্পাদকদের বিভাগীয় দায়িত্ব বণ্টন"
														title=" আ'লীগের যুগ্ম সাধারণ সম্পাদক ও সাংগঠনিক সম্পাদকদের বিভাগীয় দায়িত্ব বণ্টন">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2"> আ'লীগের যুগ্ম সাধারণ সম্পাদক ও সাংগঠনিক
												সম্পাদকদের বিভাগীয় দায়িত্ব বণ্টন</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<!-- <section class="sideAdd">
							<a href="#"><img class="img-fluid"
									src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/16923999543103229359.jpg"
									alt="advertisement" title="advertisement">
							</a>
						</section> -->
						<div class="AreaSearch">
							<div class="DescTitle"><h2>আপনার জেলার খবর</h2><span class="ColorBox"></span><div></div></div>
							<form action="" method="get">
								<div class="row form-group">
									<div class="col-md-12 mt-4">
										<label for="division" class="sr-only">বিভাগ</label>
										<select class="form-control" name="division" id="division">
										<option>--বিভাগ--</option>
										<option data-id="2" value="barisal">বরিশাল</option>
										<option data-id="3" value="chittagong">চট্টগ্রাম</option>
										<option data-id="4" value="dhaka">ঢাকা</option>
										<option data-id="5" value="khulna">খুলনা</option>
										<option data-id="6" value="rajshahi">রাজশাহী</option>
										<option data-id="7" value="sylhet">সিলেট</option>
										<option data-id="8" value="rangpur">রংপুর</option>
										<option data-id="9" value="mymensingh">ময়মনসিংহ</option>
										</select>
									</div>
									<div class="col-md-12 mt-4">
										<label for="district" class="sr-only">জেলা</label>
										<select class="form-control" name="district" id="district">
										<option value="" selected="">--জেলা--</option>
										</select>
									</div>
									<div class="col-md-12 mt-4">
										<button type="submit" class="btn btn-danger btn-block">অনুসন্ধান করুন
										</button>
									</div>
								</div>

							</form>
						</div>
						<section class="sideAdd mt-4">
							<a href="#"><img class="img-fluid"
									src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/5204544464240371351.gif"
									alt="advertisement" title="advertisement">
							</a>
						</section>
						<div class="fb-page mt-3">
							<div class="fb-page" data-href="https://www.facebook.com/TheDailySamakal/" data-width="300" data-hide-cover="false" data-show-facepile="false"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="commonThree">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>ক্যাম্পাস</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="commonThree-big">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-23-samakal-63bb16fdd93de.webp"
												alt=" যেভাবে শুরু করবেন" title=" যেভাবে শুরু করবেন">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2"><span>প্রতিযোগিতামূলক চাকরির প্রস্তুতি /</span> যেভাবে
										শুরু করবেন</h3>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ ।
										১৯:০০</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="commonThree-big">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-11-samakal-63b1d2371604b.webp"
												alt=" বৃত্তি ইন্টার্নশিপ ফেলোশিপ জার্নাল"
												title=" বৃত্তি ইন্টার্নশিপ ফেলোশিপ জার্নাল">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2"><span>কোথায় পাব খোঁজখবর /</span> বৃত্তি ইন্টার্নশিপ
										ফেলোশিপ জার্নাল</h3>
									<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ ।
										১৯:০০</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="commonThree-small">
							<div class="Spccat-small">
								<a href="#">
									<div class="row">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-22-samakal-63bb164e5b6ea.jpg"
															alt="‘ স্নাতকোত্তরে বৃত্তি"
															title="‘ স্নাতকোত্তরে বৃত্তি">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>যুক্তরাজ্যের নটিংহ্যাম
														বিশ্ববিদ্যালয় /</span> স্নাতকোত্তরে বৃত্তি</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
							<div class="Spccat-small">
								<a href="#">
									<div class="row">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-21-samakal-63bb161924130.webp"
															alt="রঙিন বিদায়" title="রঙিন বিদায়">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>রাজশাহী বিশ্ববিদ্যালয় /</span> রঙিন
													বিদায়</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="internation-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<div class="section-heading">
									<h2><a href="#"><i class="fas fa-angle-double-right"></i>আন্তর্জাতিক</a> </h2>
									<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="internation-big">
									<div class="commonTwo-body">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/ukraine-samakal-63bb946032c2a.jpg"
															alt=" ইউক্রেনের ৬০০ সৈন্য হত্যার দাবি মস্কোর, 'মিথ্যাচার' বলছে কিয়েভ"
															title=" ইউক্রেনের ৬০০ সৈন্য হত্যার দাবি মস্কোর, 'মিথ্যাচার' বলছে কিয়েভ">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">ইউক্রেনের ৬০০ সৈন্য হত্যার দাবি মস্কোর,
													'মিথ্যাচার' বলছে কিয়েভ</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
								</div>
								<div class="international-small mt-4">
									<div class="Spccat-small">
										<a href="#">
											<div class="row">
												<div class="col-lg-5">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100 h-100"
																	src="<?php echo $sSiteURL; ?>media/imgAll/bg/china-samakal-63bbb52143dfd.jpg"
																	alt="চীনের এক প্রদেশে ৯০% মানুষ করোনায় আক্রান্ত"
																	title="চীনের এক প্রদেশে ৯০% মানুষ করোনায় আক্রান্ত">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-7">
													<div class="Desc">
														<h3 class="Title2">চীনের এক প্রদেশে ৯০% মানুষ
															করোনায় আক্রান্ত</h3>
													</div>
													<p class="leadNewsTop2Time"><i
															class="far fa-clock"></i>০৮ জানুয়ারি ২৩ ।
														১৯:০০</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="international-small">
									<div class="Spccat-small">
										<a href="#">
											<div class="Desc">
												<h3 class="Title2">নেতানিয়াহু সরকারের বিরুদ্ধে বিক্ষোভে
													হাজারো ইসরায়েলি</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="Desc">
												<h3 class="Title2">ভারতে কয়লা খনি ধসে ১০ জন আটকে পড়ার শঙ্কা
												</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="Desc">
												<h3 class="Title2">শীতের কারণে দিল্লিতে স্কুল বন্ধ ঘোষণা
												</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="Desc">
												<h3 class="Title2">মেক্সিকোতে দুই মেট্রো ট্রেনের সংঘর্ষে
													হতাহত ৫৮</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="economics">
							<div class="row">
								<div class="col-lg-12">
									<div class="section-heading">
										<h2><a href="#"><i class="fas fa-angle-double-right"></i>অর্থনীতি</a> </h2>
										<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="economics-big">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/gapexco-samakal-63bb8fe610301.webp"
															alt=" গার্মেন্ট এক্সেসরিজের আন্তর্জাতিক প্রদর্শনী শুরু হচ্ছে"
															title=" গার্মেন্ট এক্সেসরিজের আন্তর্জাতিক প্রদর্শনী শুরু হচ্ছে">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">গার্মেন্ট এক্সেসরিজের আন্তর্জাতিক
													প্রদর্শনী শুরু হচ্ছে</h3>
												<p class="leadNewsTop2Time"><i
														class="far fa-clock"></i>আপডেট ০৮
													জানুয়ারি ২৩ ।
													১৯:০০</p>
											</div>
										</a>
									</div>
									<div class="economics-small mt-4">
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/chukti-bank-samakal-63bb8ed82f215.jpg"
																		alt=" ৫০ ব্যাংকের সঙ্গে বাংলাদেশ ব্যাংকের চুক্তি"
																		title=" ৫০ ব্যাংকের সঙ্গে বাংলাদেশ ব্যাংকের চুক্তি">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2"><span>খাদ্য নিরাপত্তায়
																	পুনঃঅর্থায়ন স্কিম /</span> ৫০
																ব্যাংকের সঙ্গে বাংলাদেশ ব্যাংকের চুক্তি
															</h3>
														</div>
														<p class="leadNewsTop2Time"><i
																class="far fa-clock"></i>০৮ জানুয়ারি ২৩
															। ১৯:০০</p>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/share-samakal-63bb8dcf773c3.webp"
																		alt=" লেনদেনের শীর্ষে বীমা খাত"
																		title=" লেনদেনের শীর্ষে বীমা খাত">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2"><span>শেয়ারবাজার /</span>
																লেনদেনের শীর্ষে বীমা খাত</h3>
														</div>
														<p class="leadNewsTop2Time"><i
																class="far fa-clock"></i>০৮ জানুয়ারি ২৩
															। ১৯:০০</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="economics">
							<div class="row">
								<div class="col-lg-12">
									<div class="section-heading">
										<h2><a href="#"><i class="fas fa-angle-double-right"></i>চাকরি</a> </h2>
										<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="economics-big">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/wasa-a-samakal-63bbc2a7c0315.webp"
															alt=" মিডিয়া অফিসার পদে লোক নেবে ওয়াসা, বেতন ৫০ হাজার থেকে ১ লাখ"
															title=" মিডিয়া অফিসার পদে লোক নেবে ওয়াসা, বেতন ৫০ হাজার থেকে ১ লাখ">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2"> মিডিয়া অফিসার পদে লোক নেবে ওয়াসা, বেতন
													৫০ হাজার থেকে ১ লাখ</h3>
												<p class="leadNewsTop2Time"><i
														class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
													১৯:০০</p>
											</div>
										</a>
									</div>
									<div class="economics-small mt-4">
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/police-jio-samakal-639dc517d7de6.jpg"
																		alt="এসএসসি পাসে পুলিশে চাকরির সুযোগ, আবেদন যেভাবে"
																		title="এসএসসি পাসে পুলিশে চাকরির সুযোগ, আবেদন যেভাবে">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">এসএসসি পাসে পুলিশে চাকরির
																সুযোগ, আবেদন যেভাবে</h3>
														</div>
														<p class="leadNewsTop2Time"><i
																class="far fa-clock"></i>০৮ জানুয়ারি ২৩
															। ১৯:০০</p>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/PSC-samakal-63874b4f9b4f5.webp" alt="‘ স্নাতকোত্তরে বৃত্তি" title="‘ স্নাতকোত্তরে বৃত্তি">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">৪৫তম বিসিএসের বিজ্ঞপ্তি প্রকাশ</h3>
														</div>
														<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="commonTwo-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>জীবনশৈলী</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="commonTwo-body">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Pic-3-samakal-63bbbd8f164b6.jpg"
												alt=" শিশুর মানসিক স্বাস্থ্যের খেয়াল রাখবেন যেভাবে"
												title=" শিশুর মানসিক স্বাস্থ্যের খেয়াল রাখবেন যেভাবে">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">শিশুর মানসিক স্বাস্থ্যের খেয়াল রাখবেন যেভাবে</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="commonTwo-body">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Pic-2-samakal-63bba96bc8c76.jpg"
												alt="রাতের খাবার খাওয়ার পর কফি পান কি ভালো?"
												title="রাতের খাবার খাওয়ার পর কফি পান কি ভালো?">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">রাতের খাবার খাওয়ার পর কফি পান কি ভালো?</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="commonTwo-body">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/Pic-2-samakal-63b91d2773915.jpg"
												alt=" নিয়মিত ঘুমের সমস্যা? যা মানা জরুরি"
												title=" নিয়মিত ঘুমের সমস্যা? যা মানা জরুরি">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">নিয়মিত ঘুমের সমস্যা? যা মানা জরুরি</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="commonTwo-body">
							<a href="#">
								<div class="Imgresize">
									<figure class="ImgViewer">
										<picture class="FixingRatio">
											<img class="img-fluid w-100"
												src="<?php echo $sSiteURL; ?>media/imgAll/bg/----2-samakal-63b666451fd88.webp"
												alt=" 'ফ্যাটি লিভার' হলে যা খাবেন"
												title=" 'ফ্যাটি লিভার' হলে যা খাবেন">
										</picture>
									</figure>
								</div>
								<div class="Desc">
									<h3 class="Title2">'ফ্যাটি লিভার' হলে যা খাবেন</h3>
								</div>
								<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="KalerKhaya-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>কালের খেয়া</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-6">
								<div class="KalerKhaya-big">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-54-samakal-63b71f6546fed.jpg"
														alt="সভ্যতা-সংস্কৃতি ও নারী"
														title="সভ্যতা-সংস্কৃতি ও নারী">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">সভ্যতা-সংস্কৃতি ও নারী</h3>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="KalerKhaya-small">
									<div class="Spccat-small">
										<a href="#">
											<div class="row">
												<div class="col-lg-5">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-56-samakal-63b72092b87b0.jpg" alt="আত্মবিশ্বাস আর আশাবাদ" title="আত্মবিশ্বাস আর আশাবাদ">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-7">
													<div class="Desc">
														<h3 class="Title2">গুচ্ছ গুচ্ছ কবিতা</h3>
													</div>
													<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
												</div>
											</div>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row">
												<div class="col-lg-5">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-53-samakal-63b71ebbad051.webp" alt="‘ স্নাতকোত্তরে বৃত্তি" title="‘ স্নাতকোত্তরে বৃত্তি">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-7">
													<div class="Desc">
														<h3 class="Title2"><span>আপন দর্পণ/</span> আত্মবিশ্বাস আর আশাবাদ</h3>
													</div>
													<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
												</div>
											</div>
										</a>
									</div>
									<div class="Spccat-small">
										<a href="#">
											<div class="row">
												<div class="col-lg-5">
													<div class="Imgresize">
														<figure class="ImgViewer">
															<picture class="FixingRatio">
																<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-51-samakal-63b71c87f1a17.webp" alt="সোনালি সকাল রুপোলি রাত্রি" title=" সোনালি সকাল রুপোলি রাত্রি">
															</picture>
														</figure>
													</div>
												</div>
												<div class="col-lg-7">
													<div class="Desc">
														<h3 class="Title2">সোনালি সকাল রুপোলি রাত্রি</h3>
													</div>
													<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 d-flex align-items-center">
						<section class="sideAdd">
							<a href="#"><img class="img-fluid"
									src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/6590592196136328000.gif"
									alt="advertisement" title="advertisement">
							</a>
						</section>
					</div>
				</div>
			</div>
		</div>
		<section class="multiple-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="economics">
							<div class="row">
								<div class="col-lg-12">
									<div class="section-heading">
										<h2><a href="#"><i class="fas fa-angle-double-right"></i>রাজধানী</a> </h2>
										<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="economics-big">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/12-samakal-63bc49e348071.webp"
															alt="ঢাবিতে ক্রিকেট খেলা নিয়ে ২ বিভাগের শিক্ষার্থীদের সংঘর্ষ, আহত ২০"
															title="ঢাবিতে ক্রিকেট খেলা নিয়ে ২ বিভাগের শিক্ষার্থীদের সংঘর্ষ, আহত ২০">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">ঢাবিতে ক্রিকেট খেলা নিয়ে ২ বিভাগের শিক্ষার্থীদের সংঘর্ষ, আহত ২০</h3>
											</div>
										</a>
									</div>
									<div class="economics-small mt-4">
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/Screenshot-2023-01-09-225222-samakal-63bc46f0eb026.webp"
																		alt="ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি"
																		title="ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2"><span>গ্রেপ্তার ৫ /</span> ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/10-samakal-63bc412920c20.webp" alt="রমনায় কর কমিশনারের স্ত্রীর ঝুলন্ত লাশ উদ্ধার" title="রমনায় কর কমিশনারের স্ত্রীর ঝুলন্ত লাশ উদ্ধার">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">রমনায় কর কমিশনারের স্ত্রীর ঝুলন্ত লাশ উদ্ধার</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/8-samakal-63bc3b64396e8.jpg" alt="তেজগাঁওয়ে কারখানার ভেতর নিরাপত্তাকর্মী খুন" title="তেজগাঁওয়ে কারখানার ভেতর নিরাপত্তাকর্মী খুন">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">তেজগাঁওয়ে কারখানার ভেতর নিরাপত্তাকর্মী খুন</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="economics">
							<div class="row">
								<div class="col-lg-12">
									<div class="section-heading">
										<h2><a href="#"><i class="fas fa-angle-double-right"></i>সারাদেশ</a> </h2>
										<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="economics-big">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/2-samakal-63bcefa3a788e.jpg"
															alt="ঘাটাইলে দুই ট্রাকের মুখোমুখি সংঘর্ষে চালক নিহত"
															title="ঘাটাইলে দুই ট্রাকের মুখোমুখি সংঘর্ষে চালক নিহত">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">ঘাটাইলে দুই ট্রাকের মুখোমুখি সংঘর্ষে চালক নিহত</h3>
											</div>
										</a>
									</div>
									<div class="economics-small mt-4">
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/1-samakal-63bce5c89c9c6.webp"
																		alt="রংপুরে দুই বাসের মুখোমুখি সংঘর্ষ, নিহত ৩"
																		title="রংপুরে দুই বাসের মুখোমুখি সংঘর্ষ, নিহত ৩">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">রংপুরে দুই বাসের মুখোমুখি সংঘর্ষ, নিহত ৩</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Patuakhali-20-(09-samakal-63bcdb9eafaf7.webp" alt="দুমকিতে বিয়ের দাবিতে তরুণীর আমরণ অনশন" title="দুমকিতে বিয়ের দাবিতে তরুণীর আমরণ অনশন">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">দুমকিতে বিয়ের দাবিতে তরুণীর আমরণ অনশন</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/manikgonj-court-samakal-63bc68b074c50.jpg" alt="স্কুলছাত্রকে হত্যার অভিযোগে দুই নারী রিমান্ডে" title="স্কুলছাত্রকে হত্যার অভিযোগে দুই নারী রিমান্ডে">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">স্কুলছাত্রকে হত্যার অভিযোগে দুই নারী রিমান্ডে</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="economics">
							<div class="row">
								<div class="col-lg-12">
									<div class="section-heading">
										<h2><a href="#"><i class="fas fa-angle-double-right"></i>শিক্ষা</a> </h2>
										<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="economics-big">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-41-samakal-63bb2d59b8f7a.jpg"
															alt="করোনায় ঝরে পড়া শিশুরা আর ফেরেনি বিদ্যালয়ে"
															title="করোনায় ঝরে পড়া শিশুরা আর ফেরেনি বিদ্যালয়ে">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">করোনায় ঝরে পড়া শিশুরা আর ফেরেনি বিদ্যালয়ে</h3>
											</div>
										</a>
									</div>
									<div class="economics-small mt-4">
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/6-samakal-63bae9d9781a1.webp"
																		alt="প্রয়োজনে আসন বাড়িয়ে বঞ্চিত শিক্ষার্থীদের অগ্রাধিকার দেওয়া হবে: জবি উপাচার্য"
																		title="প্রয়োজনে আসন বাড়িয়ে বঞ্চিত শিক্ষার্থীদের অগ্রাধিকার দেওয়া হবে: জবি উপাচার্য">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">প্রয়োজনে আসন বাড়িয়ে বঞ্চিত শিক্ষার্থীদের অগ্রাধিকার দেওয়া হবে: জবি উপাচার্য</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-37-samakal-63b9db576dad8.webp" alt="জরুরি ভিত্তিতে চলছে সংশোধনী কাজ" title="জরুরি ভিত্তিতে চলছে সংশোধনী কাজ">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2"><span>পাঠ্যবইয়ে ভুলত্রুটি /</span> জরুরি ভিত্তিতে চলছে সংশোধনী কাজ</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/pix-2-samakal-63b86f50157e5.jpg" alt="হাড়কাঁপানো শীতে চারুকলায় রস উৎসব" title="হাড়কাঁপানো শীতে চারুকলায় রস উৎসব">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">হাড়কাঁপানো শীতে চারুকলায় রস উৎসব</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="economics">
							<div class="row">
								<div class="col-lg-12">
									<div class="section-heading">
										<h2><a href="#"><i class="fas fa-angle-double-right"></i>প্রবাস</a> </h2>
										<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="economics-big">
										<a href="#">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/cambridge-police-arif-samakal-63b669312a0f3.jpg"
															alt="যুক্তরাষ্ট্রে পুলিশের গুলিতে বাংলাদেশি বংশোদ্ভূত ছাত্র নিহত"
															title="যুক্তরাষ্ট্রে পুলিশের গুলিতে বাংলাদেশি বংশোদ্ভূত ছাত্র নিহত">
													</picture>
												</figure>
											</div>
											<div class="Desc">
												<h3 class="Title2">যুক্তরাষ্ট্রে পুলিশের গুলিতে বাংলাদেশি বংশোদ্ভূত ছাত্র নিহত</h3>
											</div>
										</a>
									</div>
									<div class="economics-small mt-4">
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/3-samakal-63b50649894ff.webp"
																		alt="ভূমধ্যসাগরে ডুবল রিপনের ইউরোপের স্বপ্ন"
																		title="ভূমধ্যসাগরে ডুবল রিপনের ইউরোপের স্বপ্ন">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">ভূমধ্যসাগরে ডুবল রিপনের ইউরোপের স্বপ্ন</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-1-samakal-63b4f7cfdd1db.webp" alt="লটারিতে ১০৫ কোটি টাকা পেলেন আমিরাত প্রবাসী বাংলাদেশি" title="লটারিতে ১০৫ কোটি টাকা পেলেন আমিরাত প্রবাসী বাংলাদেশি">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">লটারিতে ১০৫ কোটি টাকা পেলেন আমিরাত প্রবাসী বাংলাদেশি</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
										<div class="Spccat-small">
											<a href="#">
												<div class="row gx-2">
													<div class="col-lg-5">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/main-uddin-ahmed-samakal-63b32e054421f.webp" alt="যুক্তরাষ্ট্র প্রবাসী সাংবাদিক মাইন উদ্দিন আর নেই" title="যুক্তরাষ্ট্র প্রবাসী সাংবাদিক মাইন উদ্দিন আর নেই">
																</picture>
															</figure>
														</div>
													</div>
													<div class="col-lg-7">
														<div class="Desc">
															<h3 class="Title2">যুক্তরাষ্ট্র প্রবাসী সাংবাদিক মাইন উদ্দিন আর নেই</h3>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="video-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>ভিডিও</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="video-big">
							<a href="#">
								<div class="video-img-wrap">
									<div class="video-overlay"></div>
									<div class="Imgresize">
										<figure class="ImgViewer">
											<picture class="FixingRatio">
												<img class="img-fluid w-100 h-100"
													src="<?php echo $sSiteURL; ?>media/imgAll/bg/pori-samakal-63b92ddb1e951.webp"
													alt="মান-অভিমান শেষ, দুবাই যাচ্ছেন রাজ-পরী"
													title="মান-অভিমান শেষ, দুবাই যাচ্ছেন রাজ-পরী">
											</picture>
										</figure>
									</div>
								</div>
								<div class="Desc">
									<h3 class="Title2">মান-অভিমান শেষ, দুবাই যাচ্ছেন রাজ-পরী</h3>
								</div>
								<div class="video-icon">
									<i class="fas fa-play"></i>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="video-middel">
							<div class="row gx-2">
								<div class="col-lg-6">
									<div class="video-middel-items">
										<a href="#">
											<div class="video-img-wrap">
												<div class="video-overlay"></div>
												<div class="Imgresize">
													<figure class="ImgViewer">
														<picture class="FixingRatio">
															<img class="img-fluid w-100 h-100"
																src="<?php echo $sSiteURL; ?>media/imgAll/bg/28-12-22-PM_Metrorail-Opening-7-samakal-63abebeb29fba.webp"
																alt="অহংকারের মুকুটে আরেকটি পালক যুক্ত হলো: প্রধানমন্ত্রী"
																title="অহংকারের মুকুটে আরেকটি পালক যুক্ত হলো: প্রধানমন্ত্রী">
														</picture>
													</figure>
												</div>
											</div>
											<div class="Desc">
												<h3 class="Title2">অহংকারের মুকুটে আরেকটি পালক যুক্ত হলো: প্রধানমন্ত্রী</h3>
											</div>
											<div class="video-icon">
												<i class="fas fa-play"></i>
											</div>
										</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="video-middel-items">
										<a href="#">
											<div class="video-img-wrap">
												<div class="video-overlay"></div>
												<div class="Imgresize">
													<figure class="ImgViewer">
														<picture class="FixingRatio">
															<img class="img-fluid w-100 h-100"
																src="<?php echo $sSiteURL; ?>media/imgAll/bg/28-12-22-PM_Metrorail-Opening-19-samakal-63ac1f3395c3a.jpg"
																alt="১০ মিনিটে উত্তরা থেকে আগারগাঁও"
																title="১০ মিনিটে উত্তরা থেকে আগারগাঁও">
														</picture>
													</figure>
												</div>
											</div>
											<div class="Desc">
												<h3 class="Title2">১০ মিনিটে উত্তরা থেকে আগারগাঁও</h3>
											</div>
											<div class="video-icon">
												<i class="fas fa-play"></i>
											</div>
										</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="video-middel-items">
										<a href="#">
											<div class="video-img-wrap">
												<div class="video-overlay"></div>
												<div class="Imgresize">
													<figure class="ImgViewer">
														<picture class="FixingRatio">
															<img class="img-fluid w-100 h-100"
																src="<?php echo $sSiteURL; ?>media/imgAll/bg/pm-and-rehana-samakal-63ac0cf3e67c2.jpg"
																alt="টিকিট কেটে মেট্রোরেলের প্রথম যাত্রী হলেন প্রধানমন্ত্রী"
																title="টিকিট কেটে মেট্রোরেলের প্রথম যাত্রী হলেন প্রধানমন্ত্রী">
														</picture>
													</figure>
												</div>
											</div>
											<div class="Desc">
												<h3 class="Title2">টিকিট কেটে মেট্রোরেলের প্রথম যাত্রী হলেন প্রধানমন্ত্রী</h3>
											</div>
											<div class="video-icon">
												<i class="fas fa-play"></i>
											</div>
										</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="video-middel-items">
										<a href="#">
											<div class="video-img-wrap">
												<div class="video-overlay"></div>
												<div class="Imgresize">
													<figure class="ImgViewer">
														<picture class="FixingRatio">
															<img class="img-fluid w-100 h-100"
																src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-1-samakal-63b5c981ba30c.jpg"
																alt=" মাছের জাদুঘরে বিরল সমাহার"
																title=" মাছের জাদুঘরে বিরল সমাহার">
														</picture>
													</figure>
												</div>
											</div>
											<div class="Desc">
												<h3 class="Title2"> মাছের জাদুঘরে বিরল সমাহার</h3>
											</div>
											<div class="video-icon">
												<i class="fas fa-play"></i>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="photo-gallery-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>ছবি</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="slider-wrap">
					<div class="row">
						<div class="col-lg-4">
							<div class="gallery-small">
								<div class="video-middel">
									<div class="row gx-2">
										<div class="col-lg-12">
											<div class="video-middel-items">
												<a href="#">
													<div class="video-img-wrap">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/u-boy-4-6225b8df62679.webp"
																		alt="ইউক্রেনীয় শিশুর সাহসিকতা"
																		title="ইউক্রেনীয় শিশুর সাহসিকতা">
																</picture>
															</figure>
														</div>
													</div>
													<div class="Desc">
														<h3 class="Title2">ইউক্রেনীয় শিশুর সাহসিকতা</h3>
													</div>
													<div class="video-icon">
														<i class="fas fa-camera"></i>
													</div>
												</a>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="video-middel-items">
												<a href="#">
													<div class="video-img-wrap">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-1-609f97bc9dcba.jpg"
																		alt="গেরিলা যুদ্ধে মিয়ানমারের সুন্দরী"
																		title="গেরিলা যুদ্ধে মিয়ানমারের সুন্দরী">
																</picture>
															</figure>
														</div>
													</div>
													<div class="Desc">
														<h3 class="Title2">গেরিলা যুদ্ধে মিয়ানমারের সুন্দরী</h3>
													</div>
													<div class="video-icon">
														<i class="fas fa-camera"></i>
													</div>
												</a>
											</div>
										</div>
										<!-- <div class="col-lg-12">
											<div class="video-middel-items">
												<a href="#">
													<div class="video-img-wrap">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/mannat-617d475e06f8b.webp"
																		alt="ভক্তদের ভিড়"
																		title="ভক্তদের ভিড়">
																</picture>
															</figure>
														</div>
													</div>
													<div class="Desc">
														<h3 class="Title2">ভক্তদের ভিড়</h3>
													</div>
													<div class="video-icon">
														<i class="fas fa-camera"></i>
													</div>
												</a>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="video-middel-items">
												<a href="#">
													<div class="video-img-wrap">
														<div class="Imgresize">
															<figure class="ImgViewer">
																<picture class="FixingRatio">
																	<img class="img-fluid w-100 h-100"
																		src="<?php echo $sSiteURL; ?>media/imgAll/bg/pic-5-61cded28d38d5.jpg"
																		alt="এসএসসির ফল প্রকাশ"
																		title="এসএসসির ফল প্রকাশ">
																</picture>
															</figure>
														</div>
													</div>
													<div class="Desc">
														<h3 class="Title2">এসএসসির ফল প্রকাশ</h3>
													</div>
													<div class="video-icon">
														<i class="fas fa-camera"></i>
													</div>
												</a>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="glallery-slider">
								<div class="items">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/suprobhat--1024x683.jpg" alt="মাছ শিকার" title="মাছ শিকার">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">মাছ শিকার</h3>
										</div>
									</a>
								</div>
								<div class="items">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Harnaaz-Sandhu-61b75de733ba2.webp" alt="মিস ইউনিভার্স" title="মিস ইউনিভার্স">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">মিস ইউনিভার্স</h3>
										</div>
									</a>
								</div>
								<div class="items">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/mannat-617d475e06f8b.webp" alt="ভক্তদের ভিড়" title="ভক্তদের ভিড়">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">ভক্তদের ভিড়</h3>
										</div>
									</a>
								</div>
								<div class="items">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100 h-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Miraz-63515cdc3604e.jpg" alt="ফুরফেুরে মেজাজে ক্রিকেটাররা " title="ফুরফেুরে মেজাজে ক্রিকেটাররা ">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">ফুরফেুরে মেজাজে ক্রিকেটাররা</h3>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="politics-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>প্রযুক্তি</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<div class="politics-big">
							<a href="#">
								<div class="row">
									<div class="col-lg-4">
										<div class="Desc">
											<h5 class="Title">সিইএস ২০২৩ :আইওটি পণ্য প্রদর্শন করছে ওয়ালটন</h5>
											<div class="Brief">
												<p>নতুন করে সংকট সৃষ্টি না করতে বিএনপির প্রতি আহ্বান
													জানিয়েছেন আওয়ামী লীগের সাধারণ সম্পাদক ওবায়দুল কাদের।
													তিনি বলেন, অংশগ্রহণের মাধ্যমে আসুন আমরা আগামী জাতীয়
													নির্বাচনে একসঙ্গে লড়াই করি। আশা করছি বিএনপি নতুন করে
													কোনো সংকট তৈরি করবে না। আগামী নির্বাচনের জন্য প্রস্তুতি
													নিন। জাতীয় নির্বাচনকে সামনে রেখে অনেক চ্যালেঞ্জ আসতে
													পারে। এসব চ্যালেঞ্জ মোকাবিলায় আওয়ামী লীগ সম্পূর্ণ
													প্রস্তুত রয়েছে। শনিবার দুপুরে গোপালগঞ্জের টুঙ্গিপাড়ায়
													দলের সভাপতি প্রধানমন্ত্রী শেখ হাসিনার নেতৃত্বে জাতির
													পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের সমাধিতে নতুন কমিটির
													সদস্যদের শ্রদ্ধা নিবেদন শেষে সাংবাদিকদের সঙ্গে আলাপে
													এসব কথা বলেন তিনি।</p>
											</div>
										</div>
									</div>
									<div class="col-lg-8">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-1-Recovered-samakal-63b997ea09673.gif"
														alt=" সিইএস ২০২৩ :আইওটি পণ্য প্রদর্শন করছে ওয়ালটন"
														title=" সিইএস ২০২৩ :আইওটি পণ্য প্রদর্শন করছে ওয়ালটন">
												</picture>
											</figure>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="row mt-4">
							<div class="col-lg-4">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/chatgpt-samakal-63bb870835d65.webp"
														alt=" নিউইয়র্কে স্কুলে নিষিদ্ধ হলো 'চ্যাটজিপিটি'"
														title=" নিউইয়র্কে স্কুলে নিষিদ্ধ হলো 'চ্যাটজিপিটি'">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">নিউইয়র্কে স্কুলে নিষিদ্ধ হলো 'চ্যাটজিপিটি'</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/nagad-samakal-63ad604bb1d32.png"
														alt=" ‘দশ টাকার দৌড়’ বিজয়ীদের হাতে বাইক তুলে দিল ‘নগদ’"
														title=" ‘দশ টাকার দৌড়’ বিজয়ীদের হাতে বাইক তুলে দিল ‘নগদ’">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">‘দশ টাকার দৌড়’ বিজয়ীদের হাতে বাইক তুলে দিল ‘নগদ’</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="commonTwo-body">
									<a href="#">
										<div class="Imgresize">
											<figure class="ImgViewer">
												<picture class="FixingRatio">
													<img class="img-fluid w-100"
														src="<?php echo $sSiteURL; ?>media/imgAll/bg/Untitled-1-Recovered-samakal-63b9979de090e.gif"
														alt=" এন্ট গ্রুপের নিয়ন্ত্রণ ছাড়ছেন জ্যাক মা"
														title=" এন্ট গ্রুপের নিয়ন্ত্রণ ছাড়ছেন জ্যাক মা">
												</picture>
											</figure>
										</div>
										<div class="Desc">
											<h3 class="Title2">এন্ট গ্রুপের নিয়ন্ত্রণ ছাড়ছেন জ্যাক মা</h3>
										</div>
										<p class="leadNewsTop2Time"><i class="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<section class="sideAdd">
							<a href="#"><img class="img-fluid"
									src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/16923999543103229359.jpg"
									alt="advertisement" title="advertisement">
							</a>
						</section>
						<section class="sideAdd mt-5">
							<a href="#"><img class="img-fluid"
									src="<?php echo $sSiteURL; ?>media/imgAll/advertisement/7768529967026486986.gif"
									alt="advertisement" title="advertisement">
							</a>
						</section>
					</div>
				</div>
			</div>
		</section>
		<section class="bishes-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2><a href="#"><i class="fas fa-angle-double-right"></i>বিশেষ আয়োজন</a></h2>
							<span><a href="#">আরও<i class="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="bishes-ayojon-item">
							<div class="Spccat-small">
								<a href="#">
									<div class="row gx-2">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/6-samakal-63b0828c9acb2.webp"
															alt="ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি"
															title="ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>কালের যাত্রা ২০২৩/ </span>বিবেক ও কর্তব্যজ্ঞানের অপেক্ষায়</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="bishes-ayojon-item">
							<div class="Spccat-small">
								<a href="#">
									<div class="row gx-2">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/5-samakal-63b0827de7024.webp"
															alt=" দেশের উন্নয়ন ও উত্তরণ প্রসঙ্গে"
															title=" দেশের উন্নয়ন ও উত্তরণ প্রসঙ্গে">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>কালের যাত্রা ২০২৩/ </span> দেশের উন্নয়ন ও উত্তরণ প্রসঙ্গে</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="bishes-ayojon-item">
							<div class="Spccat-small">
								<a href="#">
									<div class="row gx-2">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/4-samakal-63b0826f1cc1e.gif"
															alt=" নারীর অধিকার মানবাধিকার"
															title=" নারীর অধিকার মানবাধিকার">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>অধিকার/ </span> নারীর অধিকার মানবাধিকার</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="bishes-ayojon-item">
							<div class="Spccat-small">
								<a href="#">
									<div class="row gx-2">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/3-samakal-63b0826356f91.gif"
															alt=" নতুন সময়ের মানবসম্পদ"
															title=" নতুন সময়ের মানবসম্পদ">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>তথ্যপ্রযুক্তি / </span>নতুন সময়ের মানবসম্পদ</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="bishes-ayojon-item">
							<div class="Spccat-small">
								<a href="#">
									<div class="row gx-2">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/2-samakal-63b0824d53685.webp"
															alt=" আস্থা ও আস্থার সংকট"
															title=" আস্থা ও আস্থার সংকট">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>ই-কমার্স / </span>আস্থা ও আস্থার সংকট</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="bishes-ayojon-item">
							<div class="Spccat-small">
								<a href="#">
									<div class="row gx-2">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/1-samakal-63b0823d38e88.gif"
															alt="প্রাথমিক থেকে বিশ্ববিদ্যালয় শিক্ষা বাণিজ্য আর ক্ষমতার ভার"
															title="প্রাথমিক থেকে বিশ্ববিদ্যালয় শিক্ষা বাণিজ্য আর ক্ষমতার ভার">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>শিক্ষা/</span> প্রাথমিক থেকে বিশ্ববিদ্যালয় শিক্ষা বাণিজ্য আর ক্ষমতার ভার</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!-- <div class="col-lg-3">
						<div class="bishes-ayojon-item">
							<div class="Spccat-small">
								<a href="#">
									<div class="row gx-2">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/6-samakal-63b0828c9acb2.webp"
															alt="ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি"
															title="ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>কালের যাত্রা ২০২৩/ </span>বিবেক ও কর্তব্যজ্ঞানের অপেক্ষায়</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="bishes-ayojon-item">
							<div class="Spccat-small">
								<a href="#">
									<div class="row gx-2">
										<div class="col-lg-5">
											<div class="Imgresize">
												<figure class="ImgViewer">
													<picture class="FixingRatio">
														<img class="img-fluid w-100 h-100"
															src="<?php echo $sSiteURL; ?>media/imgAll/bg/6-samakal-63b0828c9acb2.webp"
															alt="ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি"
															title="ব্যাংক খাত নিয়ে গুজব ছড়াচ্ছে জামায়াত-শিবির: ডিবি">
													</picture>
												</figure>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="Desc">
												<h3 class="Title2"><span>কালের যাত্রা ২০২৩/ </span>বিবেক ও কর্তব্যজ্ঞানের অপেক্ষায়</h3>
											</div>
											<p class="leadNewsTop2Time"><i class="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</section>
	</main>

	<?php include_once "common/footer.php";?>

	<?php echo $sJSjQuery;
echo $sJSBootStrap;
echo $sPopper;
echo $sJSSlick;
echo $sJSEMM;
?>
</body>

</html>