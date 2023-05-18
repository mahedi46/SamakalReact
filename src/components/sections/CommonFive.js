import style from '../../style/CommonOne.module.css'
import Imag1 from '../../assets/images/Pic-3-samakal-63bbbd8f164b6.jpg'
import Imag2 from '../../assets/images/Pic-2-samakal-63bba96bc8c76.jpg'
import Imag3 from '../../assets/images/Pic-2-samakal-63b91d2773915.jpg'
import Imag4 from '../../assets/images/----2-samakal-63b666451fd88.webp'

export default function CommonFive(){
	return(
		<section className={style.commonTwo_area}>
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>জীবনশৈলী</a></h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="row">
					<div className="col-lg-3 col-md-3">
						<div className={style.commonTwo_body}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={Imag1}
												alt="ল্যানসেটে প্রকাশ পেল ডা. বায়জীদ খুরশীদের নেতৃত্বে করা গবেষণা"
												title="ল্যানসেটে প্রকাশ পেল ডা. বায়জীদ খুরশীদের নেতৃত্বে করা গবেষণা"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h3 className={style.Title2}>ল্যানসেটে প্রকাশ পেল ডা. বায়জীদ খুরশীদের নেতৃত্বে করা
										গবেষণা</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div className="col-lg-3 col-md-3">
						<div className={style.commonTwo_body}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={Imag2}
												alt=" গেট নির্মাণে অর্ধকোটি টাকার অনিয়ম, তদন্তে ধীরগতি"
												title=" গেট নির্মাণে অর্ধকোটি টাকার অনিয়ম, তদন্তে ধীরগতি"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h3 className={style.Title2}>গেট নির্মাণে অর্ধকোটি টাকার অনিয়ম, তদন্তে ধীরগতি</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div className="col-lg-3 col-md-3">
						<div className={style.commonTwo_body}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={Imag3}
												alt=" সৌদিফেরত ৪ এতিম শিশুর কী হবে"
												title=" সৌদিফেরত ৪ এতিম শিশুর কী হবে"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h3 className={style.Title2}><span>বাংলাদেশি বাবা ও ইন্দোনেশীয় মায়ের সন্তান /</span>
										সৌদিফেরত ৪ এতিম শিশুর কী হবে</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
					<div className="col-lg-3 col-md-3">
						<div className={style.commonTwo_body}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={Imag4}
												alt=" কিয়ারার গালে বরুণের চুমু, খুব্ধ সিদ্ধার্থ"
												title=" কিয়ারার গালে বরুণের চুমু, খুব্ধ সিদ্ধার্থ"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h3 className={style.Title2}>জামুকা'র ডিজি রোহেলের ডক্টরেট ডিগ্রি অর্জন</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
									১৯:০০</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	);
}