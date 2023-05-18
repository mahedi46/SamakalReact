import React from "react";
import Slider from "react-slick";
import img4 from '../assets/images/Harnaaz-Sandhu-61b75de733ba2.webp'
import img3 from '../assets/images/suprobhat--1024x683.jpg'
import img5 from '../assets/images/mannat-617d475e06f8b.webp'
import img6 from '../assets/images/Miraz-63515cdc3604e.jpg'

export default function PhotoSlider() {
  var settings = {
    dots: false,
    arrows: true,
    infinite: true,
    fade:true,
    speed:1000,
    slidesToShow: 1,
    slidesToScroll: 1,
  };
  return (
    <Slider {...settings}>
      <div className="items">
        <a href="#">
          <div className="Imgresize">
            <figure className="ImgViewer">
              <picture className="FixingRatio">
                <img
                  className="img-fluid w-100 h-100"
                  src={img3}
                  alt="মাছ শিকার"
                  title="মাছ শিকার"
                />
              </picture>
            </figure>
          </div>
          <div className="Desc">
            <h3 className="Title2">মাছ শিকার</h3>
          </div>
        </a>
      </div>
      <div className="items">
        <a href="#">
          <div className="Imgresize">
            <figure className="ImgViewer">
              <picture className="FixingRatio">
                <img
                  className="img-fluid w-100 h-100"
                  src={img4}
                  alt="মিস ইউনিভার্স"
                  title="মিস ইউনিভার্স"
                />
              </picture>
            </figure>
          </div>
          <div className="Desc">
            <h3 className="Title2">মিস ইউনিভার্স</h3>
          </div>
        </a>
      </div>
      <div className="items">
        <a href="#">
          <div className="Imgresize">
            <figure className="ImgViewer">
              <picture className="FixingRatio">
                <img
                  className="img-fluid w-100 h-100"
                  src={img5}
                  alt="ভক্তদের ভিড়"
                  title="ভক্তদের ভিড়"
                />
              </picture>
            </figure>
          </div>
          <div className="Desc">
            <h3 className="Title2">ভক্তদের ভিড়</h3>
          </div>
        </a>
      </div>
      <div className="items">
        <a href="#">
          <div className="Imgresize">
            <figure className="ImgViewer">
              <picture className="FixingRatio">
                <img
                  className="img-fluid w-100 h-100"
                  src={img6}
                  alt="ফুরফেুরে মেজাজে ক্রিকেটাররা "
                  title="ফুরফেুরে মেজাজে ক্রিকেটাররা"
                />
              </picture>
            </figure>
          </div>
          <div className="Desc">
            <h3 className="Title2">ফুরফেুরে মেজাজে ক্রিকেটাররা</h3>
          </div>
        </a>
      </div>
    </Slider>
  );
}
