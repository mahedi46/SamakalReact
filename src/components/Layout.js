import { useState } from "react";
import Header from "./sections/Header";
import TrendingNews from "./TrendingNews";
import LeadNews from "./sections/LeadNews";
import AddArea from "./sections/AddArea";
import Spcategory1 from "./sections/Spcategory1";
import EditorArea from "./sections/EditorArea";
import CommonOne from "./sections/CommonOne";
import EntertainmentArea from "./sections/EntertainmentArea";
import AddAreaTwo from "./sections/AddAreaTwo";
import SportsArea from "./sections/SportsArea";
import CommonThree from "./sections/CommonThree";
import PoliticsArea from "./sections/PoliticsArea";
import CommonFour from "./sections/CommonFour";
import InternationalArea from "./sections/InternationArea";
import CommonFive from "./sections/CommonFive";
import KalerKhayaArea from "./sections/KalerKhayaArea";
import MultipleArea from "./sections/MultipleArea";
import VideoArea from "./sections/VideoArea";
import PhotoGalleryArea from "./sections/PhotoGalleryArea";
import Technology from "./sections/Technology";
import BishesSection from "./sections/BishesSection";
import Footer from "./sections/Footer";
import PreModal from "./PreModal";


export default function Layout(){
	
	
	return(
		<main>
			<PreModal/>
			<Header/>
			<TrendingNews/>
			<LeadNews/>
			<AddArea/>
			<Spcategory1/>
			<EditorArea/>
			<CommonOne/>
			<EntertainmentArea/>
			<AddAreaTwo/>
			<SportsArea/>
			<CommonThree/>
			<PoliticsArea/>
			<CommonFour/>
			<InternationalArea/>
			<CommonFive/>
			<KalerKhayaArea/>
			<MultipleArea/>
			<VideoArea/>
			<PhotoGalleryArea/>
			<Technology/>
			<BishesSection/>
			<Footer/>
		</main>
	);
}