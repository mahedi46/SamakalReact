import img from '../../assets/advertisement/4979068418500340758.png'

export default function AddAreaTwo(){
	return(
		<section className="adSection">
			<div className="container">
				<div className="row">
					<div className="col-lg-12 d-flex justify-content-center">
						<a href="#">
							<img className="img-fluid" src={img} alt="advertisement" title="advertisement"/>
						</a>
					</div>
				</div>
			</div>
		</section>
	);
}