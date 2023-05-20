import { useState,useEffect } from 'react';

import modalImg from '../assets/advertisement/adsbig.jpg'
export default function PreModal(){
	
	const [showModal, setShowModal] = useState(true);
	
	useEffect(() => {
        let timedelay= setTimeout(()=>setShowModal(false),10000);
        return () => {
            clearTimeout(timedelay);
          };
	 }, []);
	
	const modalClose=()=>{
		setShowModal(false);
	 }
	 
	return(
        <section className="popupModal">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-12">
                            <div className={"modal fade" + (showModal ? " show d-block" : " d-none")} id="modal-popup" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel">
                                <div className="modal-dialog" role="document">
                                    <div className="modal-content">
                                        <div className="modal-header">
                                            <a type="button" className="gallery-cl-btn close" data-bs-dismiss="modal" onClick={modalClose}
                                                aria-label="Close"> <span aria-hidden="true">×</span> </a>
                                        </div>
                                        <div className="modal-body">
                                            <picture>
                                                <img src={modalImg}
                                                    alt="" title="" className="img-fluid img100"/>
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
	);
}