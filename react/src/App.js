import { useEffect } from "react";
import {
  Routes,
  Route,
  useNavigationType,
  useLocation,
} from "react-router-dom";
import OnboardingQuestion from "./pages/OnboardingQuestion";
import LandingPage from "./pages/LandingPage";
import Login from "./pages/Login";
import Navbar from "./component/Navbar";
import Fouter from "./component/Fouter";
import ToursPackage from "./component/ToursPackage";
import SliderPuseHover from "./component/sliders/SliderPuseHover";
import AutoPlay from "./component/sliders/SliderPuseHover";
import BookARide from "./pages/BookARide";

function App() {
  const action = useNavigationType();
  const location = useLocation();
  const pathname = location.pathname;

  useEffect(() => {
    if (action !== "POP") {
      window.scrollTo(0, 0);
    }
  }, [action, pathname]);

  useEffect(() => {
    let title = "";
    let metaDescription = "";

    switch (pathname) {
      case "/":
        title = "";
        metaDescription = "";
        break;
    }

    if (title) {
      document.title = title;
    }

    if (metaDescription) {
      const metaDescriptionTag = document.querySelector(
        'head > meta[name="description"]'
      );
      if (metaDescriptionTag) {
        metaDescriptionTag.content = metaDescription;
      }
    }
  }, [pathname]);

  return (
    <Routes>
    
      <Route path="/" element={<LandingPage/>} />
      <Route path="/Login" element={<Login/>} />
      <Route path="/onboardingQuestion1" element={<OnboardingQuestion/>} />
   

      {/* Route pour test les component*/}
      <Route path="/Navbar" element={<Navbar/>} />
      <Route path="/Fouter" element={<Fouter/>} />
      <Route path="/package" element={<ToursPackage/>} />
      <Route path="/SliderPuseHover" element={<AutoPlay/>} />
      <Route path="/BookARide" element={<BookARide/>} />

    </Routes>
  );
}
export default App;
