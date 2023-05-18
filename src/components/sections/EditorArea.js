import style from '../../style/EditorArea.module.css'
import editoImg from '../../assets/images/Untitled-2-samakal-63b9ef769cbe7.webp'
import editoImg2 from '../../assets/images/Untitled-1-Recovered-samakal-63b983dc92cf9.jpg'
import editoImg3 from '../../assets/images/Untitled-1-Recovered-samakal-63b99866c9812.webp'

export default function EditorArea(){
	return(
		<section className={style.EditorArea}>
			<div className="container">
				<div className="row">
					<div className="col-lg-12">
						<div className="section-heading">
							<h2><a href="#"><i className="fas fa-angle-double-right"></i>সম্পাদকীয় ও উপসম্পাদকীয়</a>
							</h2>
							<span><a href="#">আরও<i className="fas fa-angle-double-right"></i></a></span>
						</div>
					</div>
				</div>
				<div className="row">
					<div className="col-lg-6 col-md-6 border-right d-flex">
						<div className={`${style.EditorNews} align-self-stretch`}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={editoImg}
												alt="স্বীয় পদে কুঠারাঘাত" title="স্বীয় পদে কুঠারাঘাত"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h5 className="Title">স্বীয় পদে কুঠারাঘাত</h5>
									<p className="leadNewsTop2Time"><i className="far fa-edit"></i>সম্পাদকীয়</p>
									<div className="Brief">
										<p>রাষ্ট্রীয় নিষেধাজ্ঞা অমান্য করিয়া তিন ফসলি জমি ও নদী দখল করিয়া এক
											মাগুরা জেলাতেই ৯৬টা ইটভাটা গড়িয়া উঠিবার যে চিত্র শনিবার সমকালে
											প্রকাশ হইয়াছে, উহা নিছক অঞ্চলবিশেষের চিত্র হইতে পারে না। এই
											আশঙ্কা অমূলক হইতে পারে না যে, হদিস করিলে দেশের অন্যান্য জেলাতেও
											মিলিবে একই পরিস্থিতি। বস্তুত অতীতেও বিভিন্ন সময়ে সমকালেই প্রকাশিত
											প্রতিবেদনে আমরা অভিন্ন চিত্র দেখিয়াছি। অন্যত্রও মাগুরার ন্যায়
											ইটভাটার কারণে একদিকে কৃষিজমি কমিতেছে, অন্যদিকে পরিবেশ ও
											জনস্বাস্থ্য নাজুক হইয়া পড়িতেছে</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div className="col-lg-3 col-md-3 border-right">
						<div className={style.EditorNewsList}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={editoImg2}
												alt="হেফাজতের সঙ্গে আপসের ফল পাচ্ছে সরকার"
												title="হেফাজতের সঙ্গে আপসের ফল পাচ্ছে সরকার"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h3 className={style.Title2}> <span>সাক্ষাৎকার: রাশেদ খান মেনন /</span> হেফাজতের
										সঙ্গে আপসের ফল পাচ্ছে সরকার</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-edit"></i>সাক্ষাৎকার গ্রহণ: সাইফুর
									রহমান তপন</p>
							</a>
						</div>
						<div className={style.EditorNewsList}>
							<a href="#">
								<div className="Imgresize">
									<figure className="ImgViewer">
										<picture className="FixingRatio">
											<img className="img-fluid w-100"
												src={editoImg3}
												alt=" নিছক দুই ভাইয়ের মল্লযুদ্ধ নয়"
												title=" নিছক দুই ভাইয়ের মল্লযুদ্ধ নয়"/>
										</picture>
									</figure>
								</div>
								<div className={style.Desc}>
									<h3 className={style.Title2}><span>হ্যারির আত্মজীবনী/</span> নিছক দুই ভাইয়ের
										মল্লযুদ্ধ নয়</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-edit"></i>গ্যাবি হিনস্লিফ</p>
							</a>
						</div>
					</div>
					<div className="col-lg-3 col-md-3 border-right">
						<div className={style.EditorNewsRight}>
							<a href="#">
								<div className={style.Desc}>
									<h3 className={style.Title2}><span>সড়ক দুর্ঘটনা/</span> ব্যক্তির বেপরোয়া আচরণ বনাম
										কাঠামোগত দায়</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-edit"></i>কল্লোল মোস্তফা</p>
							</a>
						</div>
						<div className={style.EditorNewsRight}>
							<a href="#">
								<div className={style.Desc}>
									<h3 className={style.Title2}><span>মতামত/</span> মৃত্যুকূপে বসবাস এবং সিটি করপোরেশনের
										দায়</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-edit"></i>মিজান শাজাহান</p>
							</a>
						</div>
						<div className={style.EditorNewsRight}>
							<a href="#">
								<div className={style.Desc}>
									<h3 className={style.Title2}><span>মতামত/</span> দেশপ্রেম শুধু গানে আর পোশাকে
										সীমাবদ্ধ করছি কি?</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-edit"></i>ঞ্যোহ্লা মং</p>
							</a>
						</div>
						<div className={style.EditorNewsRight}>
							<a href="#">
								<div className={style.Desc}>
									<h3 className={style.Title2}>বঙ্গবন্ধুর সর্বশেষ কারাজীবন</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-edit"></i>মুহম্মদ মনিরুল হক</p>
							</a>
						</div>
						<div className={style.EditorNewsRight}>
							<a href="#">
								<div className={style.Desc}>
									<h3 className={style.Title2}><span>অন্যদৃষ্টি /</span> সংখ্যাগরিষ্ঠতা নয়,
										সংখ্যালঘিষ্ঠতা</h3>
								</div>
								<p className="leadNewsTop2Time"><i className="far fa-edit"></i>সেলিম খান</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	);
}