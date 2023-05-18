import FooterLogo from "../../assets/images/logo.webp";
export default function Footer() {
	let currentDate = new Date();
	let year = currentDate.getFullYear(); 
	let banglaYear=year.toLocaleString('bn-BD',{
		useGrouping: false
	   })
	
  return (
	<footer>
	<div className="DFooterBg">
	    <div className="container">
		   <div className="FooterTop1">
			  <div className="row">
				 <div className="col-lg-12 d-flex justify-content-center">
					<div className="DFooterMenu">
						   <ul>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">বিশেষ আয়োজন
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">কালের খেয়া
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">ছবি
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">ই-পেপার
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">ফিচার
									</div>
								 </a>
							  </li>
							  <li>
								 <a href=""><div className="DFooterMenuList">মতামত</div></a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">ভিডিও
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">ইউনিকোড কনভার্টার
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">আজকের পত্রিকা
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">আর্কাইভ
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">ফেসবুক লাইভ
									</div>
								 </a>
							  </li>
							  <li>
								 <a href="">
									<div className="DFooterMenuList">বিজ্ঞাপন মূল্য তালিকা
									</div>
								 </a>
							  </li>
						   </ul>
					</div>
				 </div>
			  </div>
		   </div>
		   <div className="row">
			  <div className="col-lg-3 d-flex align-items-center justify-content-center border-right">
				 <div className="DFooterLogo">
					<a href="#"><img src={FooterLogo} alt="" title="" className="img-fluid img100"/></a>
				 </div>
			  </div>
			  <div className="col-lg-6 border-right">
				 <div className="line-white hidden-xs"></div>
				 <div className="amader-doinik-barta-info-div pt-5 pb-5">
					<p> <strong>সম্পাদক ও প্রকাশক:</strong> শ্রাবস্তী আহাম্মদ <br/> <strong>ভারপ্রাপ্ত সম্পাদক :</strong>  মোজাম্মেল হোসেন । প্রকাশক : আবুল
					    কালাম আজাদ</p>
					<p>সম্পাদকীয় ও বার্তা যোগাযোগ : ঢাকা ট্রেড সেন্টার, লেভেল-পাঁচ, ৯৯ কাজী নজরুল ইসলাম এভিনিউ,
					    কারওয়ান বাজার, ঢাকা -১২১৫।</p>
					<p>অফিস: ১২, শহীদ সাংবাদিক সেলিনা পারভীন সড়ক, মগবাজার প্লাজা (তৃতীয়
					    তলা), মগবাজার, ঢাকা ১২১৭।</p>
					<p>ফোন:<a href="tel:০১৮৮৬৪৫৮৫৩৪ "> ০১৮৮৬৪৫৮৫৩৪ </a> । ই-মেইল: <a
						   href="mailto:info@amaderbarta.net">info@amaderbarta.net</a> </p>
				 </div>
			  </div>
			  <div className="col-lg-3 d-flex align-items-center justify-content-center">
				 <div className="DFooterSocialIcon">
					<p>আমাদের ফলো করুনঃ </p>
					<ul className="social-network social-circle">
					    <li><a href="#" target="blank" className="icoFacebook" title="Facebook"><i
								 className="fab fa-facebook-f"></i></a></li>
					    <li><a href="#" target="blank" className="icoTwitter" title="Twitter"><i
								 className="fab fa-twitter"></i></a></li>
					    <li><a href="#" target="blank" className="icoInstagram" title="instagram"><i
								 className="fab fa-instagram"></i></a></li>
					    <li><a href="#" target="blank" className="icoYoutube" title="youtube"><i
								 className="fab fa-youtube"></i></a></li>
					</ul>
				 </div>
			  </div>
		   </div>
	    </div>
	</div>
	<div className="DFooterBottomBG">
	    <div className="container">
		   <div className="d-flex justify-content-center">
			  <p><a href="<?php echo $sSiteURL; ?>">কপিরাইট {banglaYear} &copy; সমকাল </a>কর্তৃক সর্বসত্ব &reg; সংরক্ষিত | উন্নয়নে <a href="https://www.emythmakers.com" target="_blank">ইমিথমেকারস.কম</a></p>
		   </div>
	    </div>
	</div>
 </footer>
  );
}
