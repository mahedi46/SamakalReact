import DateAndSocialInfo from "../DateAndSocialInfo";
import style from "../../style/LeadNewsTop1.module.css"
import LeadOne from '../../assets/images/74641-1673177425.jpg'
import LeadTop3 from "../LeadTop3";
export default function LeadNews(){
	return(
		<section className={style.leadNews}>
			<div className="container">
				<div className="row">
					<div className="col-lg-2">
						<DateAndSocialInfo/>
					</div>
					<div className="col-lg-6 col-md-8">
						<div className={style.leadNewsTop1}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid"
												src={LeadOne}
												alt=" ব্রাজিলের সঙ্গে বাণিজ্যিক সহযোগিতা বাড়ানোর আহ্বান প্রধানমন্ত্রীর"
												title=" ব্রাজিলের সঙ্গে বাণিজ্যিক সহযোগিতা বাড়ানোর আহ্বান প্রধানমন্ত্রীর" />
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h1 className={style.Title}> ব্রাজিলের সঙ্গে বাণিজ্যিক সহযোগিতা বাড়ানোর আহ্বান
										প্রধানমন্ত্রীর</h1>
									<div className={style.Brief}>
										<p>প্রধানমন্ত্রী শেখ হাসিনা বাংলাদেশ ও ব্রাজিলের মধ্যে বাণিজ্যিক
											সহযোগিতা বৃদ্ধির প্রয়োজনীয়তার ওপর গুরুত্বারোপ করে বলেছেন, দুই
											দেশের মধ্যে ব্যবসা সম্প্রসারণের বিপুল সম্ভাবনা রয়েছে। বাংলাদেশে
											নিযুক্ত ব্রাজিলের রাষ্ট্রদূত পাওলো ফার্নান্দো দিয়াস ফেরেস রোববার
											প্রধানমন্ত্রীর সরকারি বাসভবন গণভবনে তাঁর সঙ্গে সৌজন্য সাক্ষাৎ
											করতে গেলে তিনি এ কথা বলেন। বৈঠক শেষে সাংবাদিকদের ব্রিফ করেন
											প্রধানমন্ত্রীর স্পিচ রাইটার নজরুল ইসলাম।</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div className="col-lg-4 col-md-4">
						<div className={style.leadNewsTop2}>
							<div className={style.leadNewsTop2Body}>
								<a href="#">
									<div className={style.Desc}>
										<h3 className={style.Title2}> গণমাধ্যমকর্মী বিল পরীক্ষা করতে আরও ৯০ দিন সময় নিল
											সংসদীয় কমিটি</h3>
									</div>
								</a>
								<p className={style.leadNewsTop2Time}> আপডেট ০৮ জানুয়ারি ২৩ । ১০:৪৪ </p>
							</div>
							<div className={style.leadNewsTop2Body}>
								<a href="#">
									<div className={style.Desc}>
										<h3 className={style.Title2}>যুক্তরাষ্ট্র জ্ঞানের অভাবে নির্বাচনে কারসাজি নিয়ে
											সন্দেহ করে: পররাষ্ট্রমন্ত্রী</h3>
									</div>
								</a>
								<p className={style.leadNewsTop2Time}> আপডেট ০৮ জানুয়ারি ২৩ । ১০:৪৪ </p>
							</div>
							<div className={style.leadNewsTop2Body}>
								<a href="#">
									<div className={style.Desc}>
										<h3 className={style.Title2}>দুই সপ্তাহের মধ্যে শতভাগ বই শিক্ষার্থীদের হাতে
											পৌঁছে যাবে: দীপু মনি</h3>
									</div>
								</a>
								<p className={style.leadNewsTop2Time}> আপডেট ০৮ জানুয়ারি ২৩ । ১০:৪৪ </p>
							</div>
							<div className={style.leadNewsTop2Body}>
								<a href="#">
									<div className={style.Desc}>
										<h3 className={style.Title2}> রাজশাহীতে মৌসুমের সর্বনিম্ন তাপমাত্রা ৮.৫ ডিগ্রি
											সেলসিয়াস</h3>
									</div>
								</a>
								<p className={style.leadNewsTop2Time}> আপডেট ০৮ জানুয়ারি ২৩ । ১০:৪৪ </p>
							</div>
						</div>
					</div>
				</div>
				<LeadTop3/>
			</div>
		</section>
	);
}