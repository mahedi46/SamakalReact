import style from '../style/TrendingNews.module.css'

export default function TrendingNews(){
	return(
		<section className={style.trendingNews}>
			<div className="container">
				<div className="row d-flex justify-content-end">
					<div className="col-lg-10">
						<div className={`${style.trending_tag} d-flex align-items-center mt-3`}>
							<span>আলোচিত : </span>
							<a href="#" target="_blank">শৈত্যপ্রবাহ</a>
							<a href="#" target="_blank">বিপিএল</a>
							<a href="#" target="_blank">বাণিজ্য মেলা</a>
							<a href="#" target="_blank">মেট্রোরেল</a>
							<a href="#" target="_blank">পরীমণি</a>
							<a href="#" target="_blank">আবহাওয়ার খবর</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	);
}