import style from '../../style/SportsArea.module.css'
import img1 from '../../assets/images/naomi-osaka-samakal-63baf0e6ea64e.webp'
import img2 from '../../assets/images/ronaldo-abubakor-samakal-63bacbe5b0f54.webp'
import img3 from '../../assets/images/henry-samakal-63baa30722392.webp'
import img4 from '../../assets/images/khwaja-samakal-63bab73159c7f.webp'
import img5 from '../../assets/images/schaloni-(6)-samakal-63badc8b0881f.webp'
import img6 from '../../assets/images/shiriam-hathuru-samakal-63bbb24b0f022.webp'
import img7 from '../../assets/images/schaloni-(6)-samakal-63badc8b0881f.webp'

export default function SportsArea(){
	return(
		<section className={style.sports_area}>
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>খেলা</a></h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="row">
					<div className="col-lg-6 col-md-6">
						<div className={style.sports_big}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100 h-100"
												src={img1}
												alt="অস্ট্রেলিয়ান ওপেনে খেলবেন না ওসাকা"
												title="অস্ট্রেলিয়ান ওপেনে খেলবেন না ওসাকা"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h5 className={style.Title}>অস্ট্রেলিয়ান ওপেনে খেলবেন না ওসাকা</h5>
									<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ । ১৯:০০</p>
								</div>
							</a>
						</div>
						<div className="row mt-4">
							<div className="col-lg-6">
								<div className={style.commonTwo_body}>
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img2}
														alt="রোনালদোকে জায়গা দিতে ক্লাব ছাড়লেন আবুবকর"
														title="রোনালদোকে জায়গা দিতে ক্লাব ছাড়লেন আবুবকর"/>
												</picture>
											</figure>
										</div>
										<div className={style.Desc}>
											<h3 className={style.Title2}>রোনালদোকে জায়গা দিতে ক্লাব ছাড়লেন আবুবকর</h3>
										</div>
										<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div className="col-lg-6">
								<div className={style.commonTwo_body}>
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img3}
														alt="ইনজুরিতে পাকিস্তান ও ভারতের বিপক্ষে নেই হেনরি"
														title="ইনজুরিতে পাকিস্তান ও ভারতের বিপক্ষে নেই হেনরি"/>
												</picture>
											</figure>
										</div>
										<div className={style.Desc}>
											<h3 className={style.Title2}>ইনজুরিতে পাকিস্তান ও ভারতের বিপক্ষে নেই হেনরি
											</h3>
										</div>
										<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div className="col-lg-6 col-md-6">
						<div className={style.sports_big}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100 h-100"
												src={img4}
												alt=" সিডনি টেস্ট ড্র, ২০০ করতে না পারার আক্ষেপ নেই খাজার"
												title=" সিডনি টেস্ট ড্র, ২০০ করতে না পারার আক্ষেপ নেই খাজার"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h5 className={style.Title}> সিডনি টেস্ট ড্র, ২০০ করতে না পারার আক্ষেপ নেই খাজার</h5>
									<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি
										২৩ । ১৯:০০</p>
								</div>
							</a>
						</div>
						<div className="row mt-4">
							<div className="col-lg-6">
								<div className={style.commonTwo_body}>
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img5}
														alt="বর্ষসেরা কোচ হলেন লিওনেল স্কালোনি"
														title="বর্ষসেরা কোচ হলেন লিওনেল স্কালোনি"/>
												</picture>
											</figure>
										</div>
										<div className={style.Desc}>
											<h3 className={style.Title2}>বর্ষসেরা কোচ হলেন লিওনেল স্কালোনি</h3>
										</div>
										<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div className="col-lg-6">
								<div className={style.commonTwo_body}>
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img6}
														alt="হাথুরু শ্রীরামে সমন্বয়ের চেষ্টা"
														title="হাথুরু শ্রীরামে সমন্বয়ের চেষ্টা"/>
												</picture>
											</figure>
										</div>
										<div className={style.Desc}>
											<h3 className={style.Title2}>হাথুরু শ্রীরামে সমন্বয়ের চেষ্টা</h3>
										</div>
										<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div className="row mt-4">
					<div className="col-lg-6">

					</div>
				</div>
			</div>
		</section>
	);
}