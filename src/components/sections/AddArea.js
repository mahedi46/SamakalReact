
import AddImg from '../../assets/advertisement/14656915817296608306.gif'


export default function AddArea(){
	
	return(
		<section className="adSection">
			<div className="container">
				<div className="row">
					<div className="col-lg-12 d-flex justify-content-center">
						<a href="#">
							<img className="img-fluid" src={AddImg} alt="advertisement" title="advertisement"/>
						</a>
					</div>
				</div>
			</div>
		</section>
	);
}