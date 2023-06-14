import NavbarComponent from "./Front/components/common/Navbar";
import LandingPage from "./Front/components/pages/LandingPage";
import FooterComponent from "./Front/components/common/Footer";
import './Front/index.css';
import 'bootstrap/dist/css/bootstrap.min.css';


function Front() {
    return (
        <>
            <NavbarComponent></NavbarComponent>
            <LandingPage></LandingPage>
            <FooterComponent></FooterComponent>
        </>
    )
}

export default Front
