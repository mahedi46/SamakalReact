
import style from '../../style/CommonThree.module.css'
import img1 from '../../assets/images/Untitled-27-samakal-63bb17ca6af77.webp'
import img2 from '../../assets/images/metro_rail_bangladesh_tbs_2-samakal-63b1d3769b9ab.jpg'
import img3 from '../../assets/images/Untitled-26-samakal-63bb179d88f54.webp'
import img4 from '../../assets/images/Untitled-25-samakal-63bb17753d66a.webp'

export default function CommonThree(){
	return(
		<section className={style.commonThree}>
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>টেকলাইফ</a></h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="row">
					<div className="col-lg-4 col-md-6">
						<div className={style.commonThree_big}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={img1}
												alt=" ফোল্ডিং ফোনের জাদু" title=" ফোল্ডিং ফোনের জাদু"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h3 className={style.Title2}>ফোল্ডিং ফোনের জাদু</h3>
									<p className={style.leadNewsTop2Time}><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ ।
										১৯:০০</p>
								</div>
							</a>
						</div>
					</div>
					<div className="col-lg-4 col-md-6">
						<div className={style.commonThree_big}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={img2}
												alt=" মেট্রোরেলে প্রযুক্তির চমক"
												title=" মেট্রোরেলে প্রযুক্তির চমক"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h3 className={style.Title2}>মেট্রোরেলে প্রযুক্তির চমক</h3>
									<p className={style.leadNewsTop2Time}><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ ।
										১৯:০০</p>
								</div>
							</a>
						</div>
					</div>
					<div className="col-lg-4 col-md-6">
						<div className={style.commonThree_small}>
							<div className={style.Spccat_small}>
								<a href="#">
									<div className="row">
										<div className="col-lg-5">
											<div className="Imgresize">
												<figure className="ImgViewer">
													<picture className="FixingRatio">
														<img className="img-fluid w-100 h-100"
															src={img3}
															alt="‘ ওয়াইফাই সংযোগ পাচ্ছে না কম্পিউটার?"
															title="‘ ওয়াইফাই সংযোগ পাচ্ছে না কম্পিউটার?"/>
													</picture>
												</figure>
											</div>
										</div>
										<div className="col-lg-7">
											<div className={style.Desc}>
												<h3 className={style.Title2}>‘ ওয়াইফাই সংযোগ পাচ্ছে না কম্পিউটার?</h3>
											</div>
											<p className={style.leadNewsTop2Time}><i className="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
							<div className={style.Spccat_small}>
								<a href="#">
									<div className="row">
										<div className="col-lg-5">
											<div className="Imgresize">
												<figure className="ImgViewer">
													<picture className="FixingRatio">
														<img className="img-fluid w-100 h-100"
															src={img4}
															alt=" অফলাইনে চলবে হোয়াটসঅ্যাপ"
															title=" অফলাইনে চলবে হোয়াটসঅ্যাপ"/>
													</picture>
												</figure>
											</div>
										</div>
										<div className="col-lg-7">
											<div className={style.Desc}>
												<h3 className={style.Title2}>অফলাইনে চলবে হোয়াটসঅ্যাপ</h3>
											</div>
											<p className={style.leadNewsTop2Time}><i className="far fa-clock"></i>আপডেট ০৮
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
	);
}