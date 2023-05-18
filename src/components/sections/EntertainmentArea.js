import style from '../../style/EntertainmentArea.module.css'
import img1 from '../../assets/images/bbbb-samakal-63bd3ba93e3ff.webp'
import img2 from '../../assets/images/bipa12-samakal-63bad80f97268.webp'
import img3 from '../../assets/images/rasmika12-samakal-63b9517c42c8c.webp'
import img4 from '../../assets/images/rrrr7-samakal-63b91ca7ee107.webp'
import img5 from '../../assets/images/rrr-samakal-63be221b829ce.webp'
import img6 from '../../assets/images/98-samakal-63bd5a4540fe8.webp'
import img7 from '../../assets/images/MM12-samakal-63bd68817d763.webp'
import img8 from '../../assets/images/jafar-samakal-63ba9fab2a0d7.webp'


export default function EntertainmentArea(){
	return(
		<section className={style.entertainment_area}>
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>বিনোদন</a></h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="row">
					<div className="col-lg-8 col-md-8 d-flex">
						<div className={`${style.entertainment_big} align-self-stretch`}>
							<a href="#">
								<div className="row">
									<div className="col-lg-4">
										<div className={style.Desc}>
											<h5 className="Title">আবারও নারীপ্রধান গল্পে ববি</h5>
											<div className="Brief">
												<p>বছর শুরুতেই 'চালাও গুলি' নামে শিরোনামে 'ব্ল্যাক ওয়ার' ছবি আইটেম গানে দেখা গেছে চিত্রনায়িকা ববি হককে। এবার নতুন বছরের  দুই সপ্তাহ পেরোতে না পেরোতেই এই নায়িকার নতুন ছবিতে চুক্তিবদ্ধ হওয়ার খবর এলো। ছবির নাম 'মেঘনা কন্যা'।  গ্রাম এবং শহরের দুইজন নারীর শেকল ভাঙার গল্প নিয়ে নির্মিত হবে ছবিটি। সংগ্রামী এই নারীর ভুমিকায় দেখা যাবে ববিকে। পরিচালনা করবেন ফুয়াদ চৌধুরী। </p>
											</div>
										</div>
									</div>
									<div className="col-lg-8">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img1}
														alt="পরীমনির মাদক মামলা স্থগিত থাকবে: হাইকোর্ট"
														title="পরীমনির মাদক মামলা স্থগিত থাকবে: হাইকোর্ট"/>
												</picture>
											</figure>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div className="col-lg-4 col-md-4 d-flex">
						<div className={`${style.entertainment_small} align-self-stretch`}>
							<div className={style.Spccat_small}>
								<a href="#">
									<div className="row">
										<div className="col-lg-5">
											<div className="Imgresize">
												<figure className="ImgViewer">
													<picture className="FixingRatio">
														<img className="img-fluid w-100 h-100"
															src={img2}
															alt="‘সেক্স সিম্বল’ উপাধি, দুর্বিসহ হয়ে উঠেছিল বিপাশার জীবন"
															title="‘সেক্স সিম্বল’ উপাধি, দুর্বিসহ হয়ে উঠেছিল বিপাশার জীবন"/>
													</picture>
												</figure>
											</div>
										</div>
										<div className="col-lg-7">
											<div className={style.Desc}>
												<h3 className={style.Title2}>‘সেক্স সিম্বল’ উপাধি, দুর্বিসহ হয়ে উঠেছিল
													বিপাশার জীবন</h3>
											</div>
											<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
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
															src={img3}
															alt="আমাকে কেউ ভালোবাসে না, বললেন রাশ্মিকা"
															title="আমাকে কেউ ভালোবাসে না, বললেন রাশ্মিকা"/>
													</picture>
												</figure>
											</div>
										</div>
										<div className="col-lg-7">
											<div className={style.Desc}>
												<h3 className={style.Title2}>আমাকে কেউ ভালোবাসে না, বললেন রাশ্মিকা
												</h3>
											</div>
											<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
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
															alt="অমিতাভের নাতির সঙ্গে শাহরুখকন্যার প্রেমের গুঞ্জন"
															title="অমিতাভের নাতির সঙ্গে শাহরুখকন্যার প্রেমের গুঞ্জন"/>
													</picture>
												</figure>
											</div>
										</div>
										<div className="col-lg-7">
											<div className={style.Desc}>
												<h3 className={style.Title2}>অমিতাভের নাতির সঙ্গে শাহরুখকন্যার প্রেমের
													গুঞ্জন</h3>
											</div>
											<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
												জানুয়ারি ২৩ । ১৯:০০</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div className={`${style.entertainmentThree} mt-4`}>
					<div className="row">
						<div className="col-lg-3 col-md-3">
							<div className={style.commonTwo_body}>
								<a href="#">
									<div className="Imgresize">
										<figure className="ImgViewer">
											<picture className="FixingRatio">
												<img className="img-fluid w-100"
													src={img5}
													alt=" গোল্ডেন গ্লোব জিতল ‘আরআরআর’ সিনেমার ‘নাটু নাটু’"
													title=" গোল্ডেন গ্লোব জিতল ‘আরআরআর’ সিনেমার ‘নাটু নাটু’"/>
											</picture>
										</figure>
									</div>
									<div className={style.Desc}>
										<h3 className={style.Title2}>গোল্ডেন গ্লোব জিতল ‘আরআরআর’ সিনেমার ‘নাটু নাটু’</h3>
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
													src={img6}
													alt="আরিয়ানের সঙ্গে প্রেম, সত্যিটা জানালেন পাকিস্তানি অভিনেত্রী"
													title="আরিয়ানের সঙ্গে প্রেম, সত্যিটা জানালেন পাকিস্তানি অভিনেত্রী"/>
											</picture>
										</figure>
									</div>
									<div className={style.Desc}>
										<h3 className={style.Title2}>আরিয়ানের সঙ্গে প্রেম, সত্যিটা জানালেন পাকিস্তানি অভিনেত্রী</h3>
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
													src={img7}
													alt=" এক ছবিতে থালাপাতি বিজয়ের পারিশ্রমিক ১৮০ কোটি রুপি"
													title=" এক ছবিতে থালাপাতি বিজয়ের পারিশ্রমিক ১৮০ কোটি রুপি"/>
											</picture>
										</figure>
									</div>
									<div className={style.Desc}>
										<h3 className={style.Title2}>এক ছবিতে থালাপাতি বিজয়ের পারিশ্রমিক ১৮০ কোটি রুপি</h3>
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
													src={img8}
													alt="'জাফর ইকবালের উদাসীনতা একদিন আমাকেও পেয়ে বসে'"
													title="'জাফর ইকবালের উদাসীনতা একদিন আমাকেও পেয়ে বসে'"/>
											</picture>
										</figure>
									</div>
									<div className={style.Desc}>
										<h3 className={style.Title2}>'জাফর ইকবালের উদাসীনতা একদিন আমাকেও পেয়ে বসে'</h3>
									</div>
									<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ ।
										১৯:০০</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	);
}