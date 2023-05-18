<?php include_once("common/class.banglaDate.php");
$bn=new BanglaDate(time()-86400);$bn->set_time(time()-86400, 6);$date=$bn->get_date();
$dtDateBN=$date[0]."&nbsp;".$date[1]."&nbsp;".$date[2];
?>
<header>
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex align-items-center">
					<ul>
						<!-- <li><a href="#">আজকের পত্রিকা</a></li> -->
						<li><a href="#">ই-পেপার</a></li>
						<li><a href="#">আর্কাইভ</a></li>
						<li><a href="#">Bangla Font</a></li>
						<li><a href="#">ইউনিকোড কনভার্টার</a></li>
						<!-- <li><a href="#">ভিডিও</a></li> -->
					</ul>
				</div>
				<div class="col-lg-6 d-flex align-items-center justify-content-end">
					<div class="language-video-wrap">
						<a href="#">ভিডিও</a>
						<a class="btn lang-btn" href="#">English</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-buttom">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 m-auto d-flex align-items-center justify-content-center">
					<div class="logo">
						<a href="<?php echo $sSiteURL; ?>"><img class="img-fluid" src="<?php echo $sLogoURL; ?>" alt="The Daily Samakal" title="The Daily Samakal"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-menu" id="menu-bar">
		<div class="menu-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 headerAlign">
						<nav class="navbar navbar-expand-lg navbar-light">
							<div class="container-fluid">
								<a class="navbar-brand" href="<?php echo $sSiteURL; ?>">
									<div class="logo">
										<img class="img-fluid" src="<?php echo $sLogoURL; ?>" alt="The Daily Samakal" title="The Daily Samakal">
									</div>
								</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
									data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
									aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="#">বাংলাদেশ</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">রাজনীতি</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">অর্থনীতি</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">আন্তর্জাতিক</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">খেলা</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">বিনোদন</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">সারাদেশ</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">মতামত</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">প্রবাস</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">রাজধানী</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">জীবনশৈলী</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#">চট্টগ্রাম</a>
										</li>
										<li class="nav-item dropdown mega-dropdown">
											<a class="nav-link dropdown-toggle" href="#"
												id="navbarDropdownMenuLink" role="button"
												data-bs-toggle="dropdown" aria-expanded="false">
												অন্যান্য <i class="fa fa-bars" aria-hidden="true"
													style="font-size: 15px;"></i>
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
												<div class="mega-dropdown-menu-inner">
													<div class="container">
														<div class="menu-inner">
															<div class="row">
																<ul class="list-unstyled must-menu">
																	<li class="col-sm-3">
																		<a href="https://samakal.com/dhaka">ঢাকা</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/industry-trade">শিল্প-বাণিজ্য</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/education">শিক্ষা</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/chittagong">চট্টগ্রাম</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/chaturango">চতুরঙ্গ</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/interview">সাক্ষাৎকার</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/stock-market">শেয়ারবাজার</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/crime">অপরাধ</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/capital">রাজধানী</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="https://samakal.com/goltable">গোলটেবিল</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">প্রতিষ্ঠাবার্ষিকী</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">টি–টোয়েন্টি বিশ্বকাপ</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">নারী দিবস</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">ঈদ আনন্দ</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">বইমেলা</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">জীবনশৈলী</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">সাহিত্য ও সংস্কৃতি</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">প্রযুক্তি</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">সারাদেশ</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">মন্তব্য</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">জীবন সংগ্রাম</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">চাকরি</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">শিল্পমঞ্চ</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">স্মরণ</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">ভ্রমণ</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">মতামত</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">অফবিট</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">কার্টুন</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">ফিচার</a>
																	</li>
																	<li class="col-sm-3">
																		<a href="#">সমকাল অনুসন্ধান</a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<ul class="list-unstyled list-inline mega-adition must-menu">
																	<li> <a href="#"
																			title="বিশেষ আয়োজন">বিশেষ
																			আয়োজন</a></li>
																	<li><a href="" title="ই-পেপার" target="_blank">ই-পেপার</a>
																	</li>
																	<li>
																		<a href="#"><i class="fa fa-camera" aria-hidden="true" title="ছবি" style="color: #662b8e;"></i>ছবি</a>
																	</li>
																	<li>
																		<a href="#"><i class="fas fa-video"></i>ভিডিও</a>
																	</li>
																	<li>
																		<a href="#"><i class="fa fa-play" aria-hidden="true" title="ফেসবুক লাইভ" style="color: #4267B2;font-size: 17px"></i>ফেসবুক লাইভ</a>
																	</li>
																	<li>
																		<a href="#"><i class="far fa-file-archive"></i>আর্কাইভ</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="mega-rest-part"></div>
											</div>
										</li>
										<!-- <li class="nav-item">
											<div class="search-button">
												<a  href="#" class="search-toggle" data-selector="#menu-bar"></a>
											</div>
										</li> -->
									</ul>
								</div>
							</div>
						</nav>
						<div class="search-button">
							<a  href="#" class="search-toggle" data-selector="#menu-bar"></a>
						</div>
						<div class="header-search">
							<form action="" class="search-box">
								<input type="text" class="text search-input" placeholder="খুঁজুন..." />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>