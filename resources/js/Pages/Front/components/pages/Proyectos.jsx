import FooterComponent from "../common/Footer"
import NavbarComponent from "../common/Navbar"

import SearchIcon from '@mui/icons-material/Search';

import escaleras from "../../../assets/images/escaleras.jpg";
import aless from "../../../assets/images/jugadores.jpg";
import joche from "../../../assets/images/pasillo-gente.jpg";
import pasillo from "../../../assets/images/pasillo.jpg";
import pared from "../../../assets/images/ventana-exterior.jpg";
import ventana from "../../../assets/images/ventanas-pasillo.jpg";
import NavTabComponent from "../common/NavTab";

function ProyectosView() {

    return (
        <>
            <NavbarComponent />
            <section id="proyectos-view" className="section-padding">
                <div className="container" id="galeria-proyectos">
                    <div className="row mb-4">
                        <div className="col-12 text-center">
                            <div className="mb-4">
                                <h1 className="mb-3 display-4 fw-semibold">Los proyectos a tu alcance</h1>
                                <p className="mb-3">Aquí están recogidos todos y cada uno de los proyectos que se encuentran en Marca Personal.</p>
                            </div>
                        </div>
                    </div>

                    <div className="row mb-4" id="nav-proyectos">
                        <NavTabComponent></NavTabComponent>
                    </div>

                    <div className="row mb-4">
                        FILTER
                    </div>

                    <div className="row g-3 mb-5 text-white">
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={escaleras} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={aless} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={joche} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-8">
                            <div className="container-imagen">
                                <img src={pared} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={pasillo} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={ventana} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-8">
                            <div className="container-imagen">
                                <img src={aless} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={escaleras} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={pasillo} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={joche} alt="" />
                                <div className="overlay"></div>
                                <div className="container-texto p-4">
                                    <h5 className="fw-bold text-uppercase">Nombre del proyecto</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                        <p>Paginacion</p>
                    </div>
                </div>
            </section>
            <FooterComponent />
        </>
    )

}

export default ProyectosView