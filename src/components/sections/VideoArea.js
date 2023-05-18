import img1 from '../../assets/images/pori-samakal-63b92ddb1e951.webp'
import img2 from '../../assets/images/28-12-22-PM_Metrorail-Opening-7-samakal-63abebeb29fba.webp'
import img3 from '../../assets/images/28-12-22-PM_Metrorail-Opening-19-samakal-63ac1f3395c3a.jpg'
import img4 from '../../assets/images/pm-and-rehana-samakal-63ac0cf3e67c2.jpg'
import img6 from '../../assets/images/Untitled-1-samakal-63b5c981ba30c.jpg'


export default function VideoArea(){
    return(
        <section className="video-area">
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>ভিডিও</a></h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="row">
					<div className="col-lg-6">
						<div className="video-big">
							<a href="#">
								<div className="video-img-wrap">
									<div className="video-overlay"></div>
									<div className="Imgresize">
										<figure className="ImgViewer">
											<picture className="FixingRatio">
												<img className="img-fluid w-100 h-100"
													src={img1}
													alt="মান-অভিমান শেষ, দুবাই যাচ্ছেন রাজ-পরী"
													title="মান-অভিমান শেষ, দুবাই যাচ্ছেন রাজ-পরী"/>
											</picture>
										</figure>
									</div>
								</div>
								<div className="Desc">
									<h3 className="Title2">মান-অভিমান শেষ, দুবাই যাচ্ছেন রাজ-পরী</h3>
								</div>
								<div className="video-icon">
									<i className="fas fa-play"></i>
								</div>
							</a>
						</div>
					</div>
					<div className="col-lg-6">
						<div className="video-middel">
							<div className="row gx-2">
								<div className="col-lg-6">
									<div className="video-middel-items">
										<a href="#">
											<div className="video-img-wrap">
												<div className="video-overlay"></div>
												<div className="Imgresize">
													<figure className="ImgViewer">
														<picture className="FixingRatio">
															<img className="img-fluid w-100 h-100"
																src={img2}
																alt="অহংকারের মুকুটে আরেকটি পালক যুক্ত হলো: প্রধানমন্ত্রী"
																title="অহংকারের মুকুটে আরেকটি পালক যুক্ত হলো: প্রধানমন্ত্রী"/>
														</picture>
													</figure>
												</div>
											</div>
											<div className="Desc">
												<h3 className="Title2">অহংকারের মুকুটে আরেকটি পালক যুক্ত হলো: প্রধানমন্ত্রী</h3>
											</div>
											<div className="video-icon">
												<i className="fas fa-play"></i>
											</div>
										</a>
									</div>
								</div>
								<div className="col-lg-6">
									<div className="video-middel-items">
										<a href="#">
											<div className="video-img-wrap">
												<div className="video-overlay"></div>
												<div className="Imgresize">
													<figure className="ImgViewer">
														<picture className="FixingRatio">
															<img className="img-fluid w-100 h-100"
																src={img3}
																alt="১০ মিনিটে উত্তরা থেকে আগারগাঁও"
																title="১০ মিনিটে উত্তরা থেকে আগারগাঁও"/>
														</picture>
													</figure>
												</div>
											</div>
											<div className="Desc">
												<h3 className="Title2">১০ মিনিটে উত্তরা থেকে আগারগাঁও</h3>
											</div>
											<div className="video-icon">
												<i className="fas fa-play"></i>
											</div>
										</a>
									</div>
								</div>
								<div className="col-lg-6">
									<div className="video-middel-items">
										<a href="#">
											<div className="video-img-wrap">
												<div className="video-overlay"></div>
												<div className="Imgresize">
													<figure className="ImgViewer">
														<picture className="FixingRatio">
															<img className="img-fluid w-100 h-100"
																src={img4}
																alt="টিকিট কেটে মেট্রোরেলের প্রথম যাত্রী হলেন প্রধানমন্ত্রী"
																title="টিকিট কেটে মেট্রোরেলের প্রথম যাত্রী হলেন প্রধানমন্ত্রী"/>
														</picture>
													</figure>
												</div>
											</div>
											<div className="Desc">
												<h3 className="Title2">টিকিট কেটে মেট্রোরেলের প্রথম যাত্রী হলেন প্রধানমন্ত্রী</h3>
											</div>
											<div className="video-icon">
												<i className="fas fa-play"></i>
											</div>
										</a>
									</div>
								</div>
								<div className="col-lg-6">
									<div className="video-middel-items">
										<a href="#">
											<div className="video-img-wrap">
												<div className="video-overlay"></div>
												<div className="Imgresize">
													<figure className="ImgViewer">
														<picture className="FixingRatio">
															<img className="img-fluid w-100 h-100"
																src={img6}
																alt=" মাছের জাদুঘরে বিরল সমাহার"
																title=" মাছের জাদুঘরে বিরল সমাহার"/>
														</picture>
													</figure>
												</div>
											</div>
											<div className="Desc">
												<h3 className="Title2"> মাছের জাদুঘরে বিরল সমাহার</h3>
											</div>
											<div className="video-icon">
												<i className="fas fa-play"></i>
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
    );
}