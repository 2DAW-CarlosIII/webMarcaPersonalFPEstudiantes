import Card from 'react-bootstrap/Card';
import Col from 'react-bootstrap/Col';
import Row from 'react-bootstrap/Row';
import NavbarComponent from "../common/Navbar";

import ExpandLessIcon from '@mui/icons-material/ExpandLess';
import ExpandMoreIcon from '@mui/icons-material/ExpandMore';

import ventana from "../../../assets/images/ventana-exterior.jpg";
import pasillo from "../../../assets/images/pasillo-gente.jpg";
import ventanaPasillo from "../../../assets/images/ventanas-pasillo.jpg";


function ProyectoDetalle() {

    return (
        <>
            <NavbarComponent />
            <section id="proyecto-portada" className="">
                <div className="container min-vh-100 d-grid align-items-center">
                    <div className="row">
                        <div className="col-12 col-md-6">
                            <h1 className="text-uppercase display-2 fw-bold">Título del proyecto</h1>
                            <p className="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aut hic amet minus! At voluptates nisi, cum beatae consequatur labore voluptatem.</p>
                            <a href="#proyecto-autores" className="enlaces">
                                Autores
                                <ExpandMoreIcon></ExpandMoreIcon>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="proyecto-detail" className="section-padding">
            </section>

            <section id="proyecto-autores" className="">
                <div className="my-4 container min-vh-100 d-grid align-items-center">
                    <div className="row g-4">
                        <div className="col-12 col-md-4 text-center">
                            <a href="">
                                <div className="team-member">
                                    <img src={ventana} alt="" />
                                    <div className="team-member-content text-white">
                                        <h4 className="fw-bold">Andrés Esparza</h4>
                                        <p className="mb-0">El pro backend</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div className="col-12 col-md-4 text-center">
                            <a href="">
                                <div className="team-member">
                                    <img src={pasillo} alt="" />
                                    <div className="team-member-content text-white">
                                        <h4 className="fw-bold">Jaime Lloret</h4>
                                        <p className="mb-0">El pro fullstack</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div className="col-12 col-md-4 text-center">
                            <a href="">
                                <div className="team-member">
                                    <img src={ventanaPasillo} alt="" />
                                    <div className="team-member-content text-white">
                                        <h4 className="fw-bold">Carmen Márquez</h4>
                                        <p className="mb-0">La pro front</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div className="mt-4 col-12">
                            <a href="#proyecto-acceso" className="enlaces">
                                Ver enlaces de acceso
                                <ExpandMoreIcon></ExpandMoreIcon>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="proyecto-detail" className="section-padding">
            </section>

            <section id="proyecto-acceso">
                <div className="container min-vh-100 d-grid align-items-center">
                    <div className="row justify-content-end">
                        <div className="col-12 col-md-6 text-end">
                            <div className="container mb-3">
                                <h1 className="text-uppercase display-2 fw-bold">Acceso</h1>
                                <p>Elige el formato en el que quieres ver el proyecto.</p>
                            </div>
                            <div className="container d-flex justify-content-end gap-2 mb-4">
                                <div>
                                    <a href="" className="enlaces">
                                        <button className="button-82-pushable" role="button">
                                            <span className="button-82-shadow"></span>
                                            <span className="button-82-edge"></span>
                                            <span className="button-82-front text">
                                                Documento
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <a href="" className="enlaces">
                                        <button className="button-82-pushable" role="button">
                                            <span className="button-82-shadow"></span>
                                            <span className="button-82-edge"></span>
                                            <span className="button-82-front text">
                                                Web
                                            </span>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <a href="" className="enlaces">
                                        <button className="button-82-pushable" role="button">
                                            <span className="button-82-shadow"></span>
                                            <span className="button-82-edge"></span>
                                            <span className="button-82-front text">
                                                Otro
                                            </span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div className="container">
                                <a href="#proyecto-portada" className="enlaces">
                                    Volver al Título
                                    <ExpandLessIcon></ExpandLessIcon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </>
    )

}

export default ProyectoDetalle
