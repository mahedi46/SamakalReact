import style from '../style/LeadTop3.module.css'
import leadtopimg1 from '../assets/images/rodrigo-samakal-63ba3d7fdc34d.jpg'
import leadtopimg2 from '../assets/images/cold-wave-samakal-63ba3a95af568.webp'
import leadtopimg3 from '../assets/images/flight-r-samakal-63ba385f2e9ba.webp'
import leadtopimg4 from '../assets/images/rodrigo-samakal-63ba3d7fdc34d.jpg'


export default function LeadTop3() {
  return (
    <div className={style.leadTop3}>
      <div className="row">
        <div className="col-lg-3 col-md-3 border-right">
          <div className={style.leadTop3_wrap}>
            <a href="#">
              <div className="Imgresize">
                <figure className="ImgViewer">
                  <picture className="FixingRatio">
                    <img
                      className="img-fluid w-100"
                      src={leadtopimg1}
                      alt="হেরে গোল মিসের খেসারত দিল রিয়াল"
                      title="হেরে গোল মিসের খেসারত দিল রিয়াল"
                    />
                  </picture>
                </figure>
              </div>
              <div className={style.Desc}>
                <h3 className={style.Title2}>হেরে গোল মিসের খেসারত দিল রিয়াল</h3>
              </div>
              <p className={style.leadNewsTop2Time}>
                <i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০
              </p>
            </a>
          </div>
        </div>
        <div className="col-lg-3 col-md-3 border-right">
	   <div className={style.leadTop3_wrap}>
            <a href="#">
              <div className="Imgresize">
                <figure className="ImgViewer">
                  <picture className="FixingRatio">
                    <img
                      className="img-fluid w-100"
                      src={leadtopimg2}
                      alt=" মৃদু শৈত্যপ্রবাহ অব্যাহত থাকতে পারে"
                      title=" মৃদু শৈত্যপ্রবাহ অব্যাহত থাকতে পারে"
                    />
                  </picture>
                </figure>
              </div>
              <div className={style.Desc}>
                <h3 className={style.Title2}> মৃদু শৈত্যপ্রবাহ অব্যাহত থাকতে পারে</h3>
              </div>
              <p className={style.leadNewsTop2Time}>
                <i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০
              </p>
            </a>
          </div>
        </div>
        <div className="col-lg-3 col-md-3 border-right">
          <div className={style.leadTop3_wrap}>
            <a href="#">
              <div className="Imgresize">
                <figure className="ImgViewer">
                  <picture className="FixingRatio">
                    <img
                      className="img-fluid w-100"
                      src={leadtopimg3}
                      alt=" ঘন কুয়াশায় শাহজালাল বিমানবন্দরে ফ্লাইটের অবতরণ-উড্ডয়ন বন্ধ"
                      title=" ঘন কুয়াশায় শাহজালাল বিমানবন্দরে ফ্লাইটের অবতরণ-উড্ডয়ন বন্ধ"
                    />
                  </picture>
                </figure>
              </div>
              <div className={style.Desc}>
                <h3 className={style.Title2}>
                  {" "}
                  ঘন কুয়াশায় শাহজালাল বিমানবন্দরে ফ্লাইটের অবতরণ-উড্ডয়ন বন্ধ
                </h3>
              </div>
              <p className={style.leadNewsTop2Time}>
                <i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০
              </p>
            </a>
          </div>
        </div>
        <div className="col-lg-3 col-md-3">
          <div className={style.leadTop3_wrap}>
            <a href="#">
              <div className="Imgresize">
                <figure className="ImgViewer">
                  <picture className="FixingRatio">
                    <img
                      className="img-fluid w-100"
                      src={leadtopimg4}
                      alt=" ফেব্রুয়ারিতেও থাকবে শীত"
                      title=" ফেব্রুয়ারিতেও থাকবে শীত"
                    />
                  </picture>
                </figure>
              </div>
              <div className={style.Desc}>
                <h3 className={style.Title2}>হেরে গোল মিসের খেসারত দিল রিয়াল</h3>
              </div>
              <p className={style.leadNewsTop2Time}>
                <i className="far fa-clock"></i>আপডেট ০৮ জানুয়ারি ২৩ । ১৯:০০
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  );
}
