
import style from '../style/HeaderTop.module.css'

export default function HeaderTop(){
	return(
		<div className={style.header_top}>
			<div className="container">
				<div className="row">
					<div className="col-lg-6 d-flex align-items-center">
						<ul>
							<li><a href="#">ই-পেপার</a></li>
							<li><a href="#">আর্কাইভ</a></li>
							<li><a href="#">Bangla Font</a></li>
							<li><a href="#">ইউনিকোড কনভার্টার</a></li>
						</ul>
					</div>
					<div className="col-lg-6 d-flex align-items-center justify-content-end">
						<div className={style.language_video_wrap}>
							<a href="#">ভিডিও</a>
							<a className={`btn ${style.lang_btn}`} href="#">English</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
}