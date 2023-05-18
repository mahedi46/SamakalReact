import style from '../../style/PoliticsArea.module.css'
import img1 from '../../assets/images/dhaka-samakal-63bad4a06f9b5.jpg'
import img2 from '../../assets/images/jubodol-samakal-63bac8a0cb794.webp'
import img3 from '../../assets/images/Untitled-1-samakal-63be7569e9e60.webp'
import img4 from '../../assets/images/AL-samakal-63baf199de02d.webp'
import Add from '../../assets/advertisement/5204544464240371351.gif'



export default function PoliticsArea(){
	return(
		<section className={style.politics_area}>
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>রাজনীতি</a></h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="row">
					<div className="col-lg-9">
						<div className={style.politics_big}>
							<a href="#">
								<div className="row">
									<div className="col-lg-4">
										<div className={style.Desc}>
											<h5 className={style.Title}>বিএনপি-জামায়াতের হাতে ক্ষমতা ছাড়তে পারি না: ওবায়দুল কাদের </h5>
											<div className={style.Brief}>
												<p>আওয়ামী লীগের সাধারণ সম্পাদক, সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের বলেছেন, স্বাধীনতাবিরোধী জঙ্গিবাদী বিএনপি-জামায়াতের হাতে ক্ষমতা ছেড়ে দিতে পারি না। ওরা দেশকে ধ্বংস করে। বুধবার দুপুরে রাজধানীর গুলিস্তানের বঙ্গবন্ধু অ্যাভিনিউয়ে আওয়ামী লীগের কেন্দ্রীয় কার্যালয়ের সামনে আলোচনা সভায় এ কথা বলেন তিনি।  দলীয় কার্যালয়ের সামনে পূর্বঘোষিত অবস্থান কর্মসূচি চলাকালে আলোচনা সভা অনুষ্ঠিত হয়।</p>
											</div>
										</div>
									</div>
									<div className="col-lg-8">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img3}
														alt="বিএনপি-জামায়াতের হাতে ক্ষমতা ছাড়তে পারি না: ওবায়দুল কাদের"
														title="বিএনপি-জামায়াতের হাতে ক্ষমতা ছাড়তে পারি না: ওবায়দুল কাদের"/>
												</picture>
											</figure>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div className="row mt-4">
							<div className="col-lg-4">
								<div className={style.commonTwo_body}>
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img1}
														alt=" রাজধানীতে স্বেচ্ছাসেবক দলের মশাল মিছিল"
														title=" রাজধানীতে স্বেচ্ছাসেবক দলের মশাল মিছিল"/>
												</picture>
											</figure>
										</div>
										<div className={style.Desc}>
											<h3 className={style.Title2}> রাজধানীতে স্বেচ্ছাসেবক দলের মশাল মিছিল</h3>
										</div>
										<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div className="col-lg-4">
								<div className={style.commonTwo_body}>
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img2}
														alt=" ফ্যাসিবাদকে সরাতে রাজপথে তুমুল আন্দোলনের প্রস্তুতি নিন: মামুন হাসান"
														title=" ফ্যাসিবাদকে সরাতে রাজপথে তুমুল আন্দোলনের প্রস্তুতি নিন: মামুন হাসান"/>
												</picture>
											</figure>
										</div>
										<div className={style.Desc}>
											<h3 className={style.Title2}> ফ্যাসিবাদকে সরাতে রাজপথে তুমুল আন্দোলনের
												প্রস্তুতি নিন: মামুন হাসান</h3>
										</div>
										<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
							<div className="col-lg-4">
								<div className={style.commonTwo_body}>
									<a href="#">
										<div className="Imgresize">
											<figure className="ImgViewer">
												<picture className="FixingRatio">
													<img className="img-fluid w-100"
														src={img4}
														alt=" আ'লীগের যুগ্ম সাধারণ সম্পাদক ও সাংগঠনিক সম্পাদকদের বিভাগীয় দায়িত্ব বণ্টন"
														title=" আ'লীগের যুগ্ম সাধারণ সম্পাদক ও সাংগঠনিক সম্পাদকদের বিভাগীয় দায়িত্ব বণ্টন"/>
												</picture>
											</figure>
										</div>
										<div className={style.Desc}>
											<h3 className={style.Title2}> আ'লীগের যুগ্ম সাধারণ সম্পাদক ও সাংগঠনিক
												সম্পাদকদের বিভাগীয় দায়িত্ব বণ্টন</h3>
										</div>
										<p className="leadNewsTop2Time"><i className="far fa-clock"></i>আপডেট ০৮
											জানুয়ারি ২৩ ।
											১৯:০০</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div className="col-lg-3">
						<div className="AreaSearch">
							<div className="DescTitle"><h2>আপনার জেলার খবর</h2><span className="ColorBox"></span><div></div></div>
							<form action="" method="get">
								<div className="row form-group">
									<div className="col-md-12 mt-4">
										<label for="division" className="sr-only">বিভাগ</label>
										<select className="form-control" name="division" id="division">
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
									<div className="col-md-12 mt-4">
										<label for="district" className="sr-only">জেলা</label>
										<select className="form-control" name="district" id="district">
										<option value="" selected="">--জেলা--</option>
										</select>
									</div>
									<div className="col-md-12 mt-4">
										<button type="submit" className="btn btn-danger btn-block">অনুসন্ধান করুন
										</button>
									</div>
								</div>

							</form>
						</div>
						<section className="sideAdd mt-4">
							<a href="#">
								<img className="img-fluid" src={Add} alt="advertisement" title="advertisement"/>
							</a>
						</section>
						<div className="fb-page mt-3">
							<div className="fb-page" data-href="https://www.facebook.com/TheDailySamakal/" data-width="300" data-hide-cover="false" data-show-facepile="false"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	);
}