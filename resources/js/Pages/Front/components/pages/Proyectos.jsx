import FooterComponent from "../common/Footer"
import NavbarComponent from "../common/Navbar"

import escaleras from "@/Pages/assets/images/escaleras.jpg";
import aless from "@/Pages/assets/images/jugadores.jpg";
import joche from "@/Pages/assets/images/pasillo-gente.jpg";
import pasillo from "@/Pages/assets/images/pasillo.jpg";
import pared from "@/Pages/assets/images/ventana-exterior.jpg";
import ventana from "@/Pages/assets/images/ventanas-pasillo.jpg";

import NavTabComponent from "../common/NavTab";
import Pagination from 'react-bootstrap/Pagination';

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
                        <Pagination>
                            <Pagination.First />
                            <Pagination.Prev />
                            <Pagination.Item>{1}</Pagination.Item>
                            <Pagination.Ellipsis />

                            <Pagination.Item>{10}</Pagination.Item>
                            <Pagination.Item>{11}</Pagination.Item>
                            <Pagination.Item active>{12}</Pagination.Item>
                            <Pagination.Item>{13}</Pagination.Item>
                            <Pagination.Item disabled>{14}</Pagination.Item>

                            <Pagination.Ellipsis />
                            <Pagination.Item>{20}</Pagination.Item>
                            <Pagination.Next />
                            <Pagination.Last />
                        </Pagination>
                    </div>
                </div>
            </section>
            <FooterComponent />
        </>
    )

}

export default ProyectosView
