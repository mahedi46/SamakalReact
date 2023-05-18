import img1 from '../../assets/images/Untitled-54-samakal-63b71f6546fed.jpg'
import img2 from '../../assets/images/Untitled-56-samakal-63b72092b87b0.jpg'
import img3 from '../../assets/images/Untitled-53-samakal-63b71ebbad051.webp'
import img4 from '../../assets/images/Untitled-51-samakal-63b71c87f1a17.webp'
import ad from '../../assets/advertisement/6590592196136328000.gif'

export default function KalerKhayaArea(){
    return(
        <div className="KalerKhaya-area">
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>কালের খেয়া</a></h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="row">
					<div className="col-lg-9">
						<div className="row">
							<div className="col-lg-6">
								<div className="KalerKhaya-big">
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img1}
														alt="সভ্যতা-সংস্কৃতি ও নারী"
														title="সভ্যতা-সংস্কৃতি ও নারী"/>
												</picture>
											</figure>
										</div>
										<div className="Desc">
											<h3 className="Title2">সভ্যতা-সংস্কৃতি ও নারী</h3>
											<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</a>
								</div>
							</div>
							<div className="col-lg-6">
								<div className="KalerKhaya-small">
									<div className="Spccat-small">
										<a href="#">
											<div className="row">
												<div className="col-lg-5">
													<div className="Imgresize">
														<figure className="ImgViewer">
															<picture className="FixingRatio">
																<img className="img-fluid w-100 h-100" src={img2} alt="আত্মবিশ্বাস আর আশাবাদ" title="আত্মবিশ্বাস আর আশাবাদ"/>
															</picture>
														</figure>
													</div>
												</div>
												<div className="col-lg-7">
													<div className="Desc">
														<h3 className="Title2">গুচ্ছ গুচ্ছ কবিতা</h3>
													</div>
													<p className="leadNewsTop2Time"><i className="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
												</div>
											</div>
										</a>
									</div>
									<div className="Spccat-small">
										<a href="#">
											<div className="row">
												<div className="col-lg-5">
													<div className="Imgresize">
														<figure className="ImgViewer">
															<picture className="FixingRatio">
																<img className="img-fluid w-100 h-100" src={img3} alt="‘ স্নাতকোত্তরে বৃত্তি" title="‘ স্নাতকোত্তরে বৃত্তি"/>
															</picture>
														</figure>
													</div>
												</div>
												<div className="col-lg-7">
													<div className="Desc">
														<h3 className="Title2"><span>আপন দর্পণ/</span> আত্মবিশ্বাস আর আশাবাদ</h3>
													</div>
													<p className="leadNewsTop2Time"><i className="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
												</div>
											</div>
										</a>
									</div>
									<div className="Spccat-small">
										<a href="#">
											<div className="row">
												<div className="col-lg-5">
													<div className="Imgresize">
														<figure className="ImgViewer">
															<picture className="FixingRatio">
																<img className="img-fluid w-100 h-100" src={img4} alt="সোনালি সকাল রুপোলি রাত্রি" title=" সোনালি সকাল রুপোলি রাত্রি"/>
															</picture>
														</figure>
													</div>
												</div>
												<div className="col-lg-7">
													<div className="Desc">
														<h3 className="Title2">সোনালি সকাল রুপোলি রাত্রি</h3>
													</div>
													<p className="leadNewsTop2Time"><i className="far fa-clock"></i>০৮ জানুয়ারি ২৩ । ১৯:০০</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div className="col-lg-3 d-flex align-items-center">
						<section className="sideAdd">
							<a href="#">
                                <img className="img-fluid"
									src={ad}
									alt="advertisement" title="advertisement"/>
							</a>
						</section>
					</div>
				</div>
			</div>
		</div>
    );
}