
import PhotoSlider from '../PhotoSlider';
import img1 from '../../assets/images/u-boy-4-6225b8df62679.webp'
import img2 from '../../assets/images/Untitled-1-609f97bc9dcba.jpg'


export default function PhotoGalleryArea(){
    return(
        <section className="photo-gallery-area">
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>ছবি</a></h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="slider-wrap">
					<div className="row">
						<div className="col-lg-4">
							<div className="gallery-small">
								<div className="video-middel">
									<div className="row gx-2">
										<div className="col-lg-12">
											<div className="video-middel-items">
												<a href="#">
													<div className="video-img-wrap">
														<div className="Imgresize">
															<figure className="ImgViewer">
																<picture className="FixingRatio">
																	<img className="img-fluid w-100 h-100"
																		src={img1}
																		alt="ইউক্রেনীয় শিশুর সাহসিকতা"
																		title="ইউক্রেনীয় শিশুর সাহসিকতা"/>
																</picture>
															</figure>
														</div>
													</div>
													<div className="Desc">
														<h3 className="Title2">ইউক্রেনীয় শিশুর সাহসিকতা</h3>
													</div>
													<div className="video-icon">
														<i className="fas fa-camera"></i>
													</div>
												</a>
											</div>
										</div>
										<div className="col-lg-12">
											<div className="video-middel-items">
												<a href="#">
													<div className="video-img-wrap">
														<div className="Imgresize">
															<figure className="ImgViewer">
																<picture className="FixingRatio">
																	<img className="img-fluid w-100 h-100"
																		src={img2}
																		alt="গেরিলা যুদ্ধে মিয়ানমারের সুন্দরী"
																		title="গেরিলা যুদ্ধে মিয়ানমারের সুন্দরী"/>
																</picture>
															</figure>
														</div>
													</div>
													<div className="Desc">
														<h3 className="Title2">গেরিলা যুদ্ধে মিয়ানমারের সুন্দরী</h3>
													</div>
													<div className="video-icon">
														<i className="fas fa-camera"></i>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div className="col-lg-8">
							<div className="glallery-slider">
								{/* <div className="items">
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100 h-100" src={img3} alt="মাছ শিকার" title="মাছ শিকার"/>
												</picture>
											</figure>
										</div>
										<div className="Desc">
											<h3 className="Title2">মাছ শিকার</h3>
										</div>
									</a>
								</div>
								<div className="items">
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100 h-100" src={img4} alt="মিস ইউনিভার্স" title="মিস ইউনিভার্স"/>
												</picture>
											</figure>
										</div>
										<div className="Desc">
											<h3 className="Title2">মিস ইউনিভার্স</h3>
										</div>
									</a>
								</div>
								<div className="items">
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100 h-100" src={img5} alt="ভক্তদের ভিড়" title="ভক্তদের ভিড়"/>
												</picture>
											</figure>
										</div>
										<div className="Desc">
											<h3 className="Title2">ভক্তদের ভিড়</h3>
										</div>
									</a>
								</div>
								<div className="items">
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100 h-100" src={img6} alt="ফুরফেুরে মেজাজে ক্রিকেটাররা " title="ফুরফেুরে মেজাজে ক্রিকেটাররা"/>
												</picture>
											</figure>
										</div>
										<div className="Desc">
											<h3 className="Title2">ফুরফেুরে মেজাজে ক্রিকেটাররা</h3>
										</div>
									</a>
								</div> */}
                                <PhotoSlider/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    );
}