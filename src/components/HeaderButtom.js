import sytle from '../style/HeaderButtom.module.css'
import Logo from '../assets/images/logo.webp'
export default function HeaderButtom(){
	return(
		<div className={sytle.header_buttom}>
			<div className="container">
				<div className="row">
					<div className="col-lg-4 m-auto d-flex align-items-center justify-content-center">
						<div className={sytle.logo}>
							<a href="#"><img className="img-fluid" src={Logo} alt="The Daily Samakal" title="The Daily Samakal"/></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
}