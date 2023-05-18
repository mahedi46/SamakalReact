import Layout from './components/Layout';
import { useEffect, useState } from "react";
import './style/style.css'

function App() {
  const [showButton, setShowButton] = useState(false);

  useEffect(() => {
    window.addEventListener("scroll", () => {
      if (window.pageYOffset > 300) {
        setShowButton(true);
      } else {
        setShowButton(false);
      }
    });
  }, []);

  const scrollToTop = () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  };

  return (
    <>
      <Layout/>
      {showButton && (
        <a id="button" onClick={scrollToTop} className="back-to-top">
          <i class="fas fa-angle-double-up"></i>
        </a>
      )}
      </>
  );
}

export default App;
