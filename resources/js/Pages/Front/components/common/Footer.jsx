import FacebookIcon from '@mui/icons-material/Facebook';
import InstagramIcon from '@mui/icons-material/Instagram';
import LinkedInIcon from '@mui/icons-material/LinkedIn';
import YouTubeIcon from '@mui/icons-material/YouTube';

import logo from '../../../assets/images/mp-logo-light.svg';

function FooterComponent() {

    return (
        <>
        <footer className="py-5 text-white" id="footer">
            <div className="footer-top my-4">
                <div className="container">
                    <div className="row g-4">
                        <div className="col-12 col-lg-4">
                            <a href="/"><img src={logo} alt="" className='mb-3' id="footer-icon"/></a>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi earum atque consequuntur suscipit.</p>
                            <div className="social-links d-flex gap-2">
                                <a href="" className="enlaces"><FacebookIcon></FacebookIcon></a>
                                <a href="" className="enlaces"><InstagramIcon></InstagramIcon></a>
                                <a href="" className="enlaces"><LinkedInIcon></LinkedInIcon></a>
                                <a href="" className="enlaces"><YouTubeIcon></YouTubeIcon></a>
                            </div>
                        </div>
                        <div className="col-12 col-lg-3 ms-auto">
                            <h6 className='fw-semibold text-uppercase mb-4'>Contacto</h6>
                            <p className='mb-1'>968 32 13 01</p>
                            <p className='mb-1'>30019702@murciaeduca.es</p>
                            <p className='mb-1'>Calle Carlos III, 3 - Cartagena, 30201</p>
                        </div>
                        <div className="col-12 col-lg-3">
                            <h6 className='fw-semibold text-uppercase mb-4'>Horario de apertura</h6>
                            <p className='mb-1'>Lunes a Viernes - 8:00h a 21:15h</p>
                            <p className='mb-1'>Sábados y domingos - Cerrado</p>
                        </div>
                    </div>
                </div>
            </div>
            <div className="footer-bottom mb-4">
                <div className="container">
                    <div className="row mt-4 justify-content-between">
                        <div className="col-auto">
                            <p className="mb-0">Copyrights all rights reserved</p>
                        </div>
                        <div className="col-auto">
                            <p className="mb-0">Designed by <a href='/' className="enlaces">CIFP Carlos III</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </>
    )

}

export default FooterComponent;
