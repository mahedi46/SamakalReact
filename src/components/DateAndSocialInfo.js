import style from '../style/DateAndSocialInfo.module.css'
import moment from 'moment/moment.js'
import 'moment/locale/bn'

export default function DateAndSocialInfo(){
	
	let DayNow = moment().local('bn-BD').format('dddd, MMMM Do, YYYY');
		
	return(
		<div className={style.dateAndSocial_info}>
			<div className={style.dateInfo}>
				<span><i className="fas fa-map-marker-alt"></i>ঢাকা</span>
				<span><i className="fas fa-calendar-alt"></i>{DayNow}</span>
			</div>
			<div className={style.socail_icon}>
				<a className={style.facebook} href="#"><i className="fab fa-facebook-f"></i>facebook</a>
				<a className={style.twitter} href="#"><i className="fab fa-twitter"></i>twitter</a>
				<a className={style.linkedin} href="#"><i className="fab fa-linkedin-in"></i>linkedin</a>
				<a className={style.youtube} href="#"><i className="fab fa-youtube-square"></i>youtube</a>
				<a className={style.instagram} href="#"><i className="fab fa-instagram"></i>instagram</a>
			</div>
		</div>
	);
}