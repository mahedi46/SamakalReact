import React, { useState,useEffect } from 'react';
import logo from '../assets/images/logo.webp'

export default function Navbar(){

// 	const [dropdown, setDropdown] = useState(false);
//     const toggleOpen = () => setDropdown(!dropdown);
    
    
    // Sticky Menu Area
  useEffect(() => {
    window.addEventListener("scroll", isSticky);
    return () => {
      window.removeEventListener("scroll", isSticky);
    };
  });

  /* Method that will fix header after a specific scrollable */
  const isSticky = (e) => {
    const header = document.querySelector(".main-menu");
    const scrollTop = window.scrollY;
    scrollTop >= 100
      ? header.classList.add("sticky")
      : header.classList.remove("sticky");
  };

	return(
		<div className="main-menu" id="menu-bar">
			<div className="menu-wrapper">
				<div className="container">
					<div className="row">
						<div className="col-lg-12 headerAlign">
							<nav className="navbar navbar-expand-lg navbar-light">
								<div className="container-fluid">
									<a className="navbar-brand" href="#">
										<div className="logo">
											<img className="img-fluid" src={logo} alt="The Daily Samakal" title="The Daily Samakal"/>
										</div>
									</a>
									<button className="navbar-toggler" type="button" data-bs-toggle="collapse"
										data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
										aria-label="Toggle navigation">
										<span className="navbar-toggler-icon"></span>
									</button>
									<div className="collapse navbar-collapse justify-content-center" id="navbarNav">
										<ul className="navbar-nav">
											<li className="nav-item">
												<a className="nav-link" href="#">বাংলাদেশ</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">রাজনীতি</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">অর্থনীতি</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">আন্তর্জাতিক</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">খেলা</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">বিনোদন</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">সারাদেশ</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">মতামত</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">প্রবাস</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">রাজধানী</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">জীবনশৈলী</a>
											</li>
											<li className="nav-item">
												<a className="nav-link" href="#">চট্টগ্রাম</a>
											</li>
											<li className="nav-item dropdown mega-dropdown">
												<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
													অন্যান্য <i className="fa fa-bars" aria-hidden="true"></i>
												</a>
												<div className="dropdown-menu" aria-labelledby="navbarDropdown">
													<div className="mega-dropdown-menu-inner">
														<div className="container">
															<div className="menu-inner">
																<div className="row">
																	<ul className="list-unstyled must-menu">
																		<li className="col-sm-3">
																			<a href="https://samakal.com/dhaka">ঢাকা</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/industry-trade">শিল্প-বাণিজ্য</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/education">শিক্ষা</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/chittagong">চট্টগ্রাম</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/chaturango">চতুরঙ্গ</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/interview">সাক্ষাৎকার</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/stock-market">শেয়ারবাজার</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/crime">অপরাধ</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/capital">রাজধানী</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="https://samakal.com/goltable">গোলটেবিল</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">প্রতিষ্ঠাবার্ষিকী</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">টি–টোয়েন্টি বিশ্বকাপ</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">নারী দিবস</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">ঈদ আনন্দ</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">বইমেলা</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">জীবনশৈলী</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">সাহিত্য ও সংস্কৃতি</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">প্রযুক্তি</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">সারাদেশ</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">মন্তব্য</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">জীবন সংগ্রাম</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">চাকরি</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">শিল্পমঞ্চ</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">স্মরণ</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">ভ্রমণ</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">মতামত</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">অফবিট</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">কার্টুন</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">ফিচার</a>
																		</li>
																		<li className="col-sm-3">
																			<a href="#">সমকাল অনুসন্ধান</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div className="row">
																<div className="col-md-12">
																	<ul className="list-unstyled list-inline mega0-adition must-menu">
																		<li> <a href="#"
																				title="বিশেষ আয়োজন">বিশেষ
																				আয়োজন</a></li>
																		<li><a href="" title="ই-পেপার" target="_blank">ই-পেপার</a>
																		</li>
																		<li>
																			<a href="#"><i className="fa fa-camera" aria-hidden="true" title="ছবি"></i>ছবি</a>
																		</li>
																		<li>
																			<a href="#"><i className="fas fa-video"></i>ভিডিও</a>
																		</li>
																		<li>
																			<a href="#"><i className="fa fa-play" aria-hidden="true" title="ফেসবুক লাইভ"></i>ফেসবুক লাইভ</a>
																		</li>
																		<li>
																			<a href="#"><i className="far fa-file-archive"></i>আর্কাইভ</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div className="mega-rest-part"></div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</nav>
							{/* <div className="search_button">
								<a  href="#" className="search-toggle" data-selector="#menu-bar"></a>
							</div>
							<div className="header-search">
								<form action="" className="search-box">
									<input type="text" className="text search-input" placeholder="খুঁজুন..." />
								</form>
							</div> */}
						</div>
					</div>
				</div>
			</div>
		</div>
	);
}