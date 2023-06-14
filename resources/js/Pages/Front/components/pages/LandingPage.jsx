import jugadores from "../../../../../../public/images/jugadores.jpg";
import pasillo from "../../../assets/images/pasillo-gente.jpg";
import escaleras from "../../../../../../public/images/escaleras.jpg";
import FormularioRegistro from "../common/Formulario";

import PersonIcon from '@mui/icons-material/Person';
import LocationCityIcon from '@mui/icons-material/LocationCity';
import AccountBalanceIcon from '@mui/icons-material/AccountBalance';
import AddIcon from '@mui/icons-material/Add';

function LandingPage() {
    return (
        <>
            <section id="cabecera" className="mb-5 min-vh-100 d-flex align-items-center text-center">
                <div className="container">
                    <div className="row">
                        <div className="col-12">
                            <h1 className="fw-semibold text-uppercase display-1 text-white">marca personal</h1>
                            <h5 className="text-white mt-3 mb-4">Un lugar donde podrás compartir, visualizar y editar los proyectos realizados durante el curso académico.</h5>
                            <a href="#contacto">
                                <button className="button-82-pushable" role="button">
                                    <span className="button-82-shadow"></span>
                                    <span className="button-82-edge"></span>
                                    <span className="button-82-front text">
                                        ¡Quiero registrarme!
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="utilidades" className="my-5 section-padding">
                <div className="container">
                    <div className="row mb-4">
                        <div className="col-12 text-center">
                            <div className="mb-4">
                                <h1 className="mb-3 display-4 fw-semibold">¿Qué puedes hacer en Marca Personal?</h1>
                                <p className="mb-3">Según si eres profesor, alumno o empresa, Marca Personal te servirá para diferentes cometidos:</p>
                            </div>
                        </div>
                    </div>
                    <div className="row text-center g-5">
                        <div className="col-12 col-md-4">
                            <div className="utilidades shadow p-lg-5 p-4">
                                <div className="cajaIcono mb-4">
                                    <PersonIcon sx={{ fontSize: 30 }}></PersonIcon>
                                </div>
                                <h5 className="fw-semibold mb-3">Alumno</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi vero excepturi ab.</p>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="utilidades shadow p-lg-5 p-4">
                                <div className="cajaIcono mb-4">
                                    <AccountBalanceIcon sx={{ fontSize: 30 }}></AccountBalanceIcon>
                                </div>
                                <h5 className="fw-semibold mb-3">Docente</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi vero excepturi ab.</p>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="utilidades shadow p-lg-5 p-4">
                                <div className="cajaIcono mb-4">
                                    <LocationCityIcon sx={{ fontSize: 30 }}></LocationCityIcon>
                                </div>
                                <h5 className="fw-semibold mb-3">Empresas</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi vero excepturi ab.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contador" className="section-padding">
                <div className="container py-2 text-center text-white">
                    <div className="row g-4">
                        <div className="col-lg-3 col-sm-6">
                            <h1 className="display-4 fw-bold">6</h1>
                            <h6 className="text-uppercase mt-3 fw-semibold">centros adscritos</h6>
                        </div>
                        <div className="col-lg-3 col-sm-6">
                            <h1 className="display-4 fw-bold">+200</h1>
                            <h6 className="text-uppercase mt-3 fw-semibold">usuarios registrados</h6>
                        </div>
                        <div className="col-lg-3 col-sm-6">
                            <h1 className="display-4 fw-bold">+300</h1>
                            <h6 className="text-uppercase mt-3 fw-semibold">proyectos compartidos</h6>
                        </div>
                        <div className="col-lg-3 col-sm-6">
                            <h1 className="display-4 fw-bold">+100k</h1>
                            <h6 className="text-uppercase mt-3 fw-semibold">visualizaciones</h6>
                        </div>
                    </div>
                </div>
            </section>

            <section id="ultimosProyectos" className="section-padding">
                <div className="container">
                    <div className="row mb-4">
                        <div className="col-12 text-center">
                            <div className="mb-4">
                                <h1 className="mb-3 display-4 fw-semibold">Echa un vistazo</h1>
                                <p className="mb-3">¡Aquí tienes una muestra de los últimos proyectos que se han compartido!</p>
                            </div>
                        </div>
                    </div>

                    <div className="row g-4 mb-4">
                        <div className="col-12 col-md-6">
                            <div className="container-imagen">
                                <img src={escaleras} alt="" />
                                <div className="overlay-light"></div>
                                <div className="container-texto p-4">
                                    <p>25 de abril, 2023</p>
                                    <h5 className="fw-bold text-uppercase"><a href="">Nombre del proyecto</a></h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                    <a href="">Leer más...</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-6">
                            <div className="container-imagen">
                                <img src={escaleras} alt="" />
                                <div className="overlay-light"></div>
                                <div className="container-texto p-4">
                                    <p>25 de abril, 2023</p>
                                    <h5 className="fw-bold text-uppercase"><a href="">Nombre del proyecto</a></h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                    <a href="">Leer más...</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={pasillo} alt="" />
                                <div className="overlay-light"></div>
                                <div className="container-texto p-4">
                                    <p>25 de abril, 2023</p>
                                    <h5 className="fw-bold text-uppercase"><a href="">Nombre del proyecto</a></h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                    <a href="">Leer más...</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={jugadores} alt="" />
                                <div className="overlay-light"></div>
                                <div className="container-texto p-4">
                                    <p>25 de abril, 2023</p>
                                    <h5 className="fw-bold text-uppercase"><a href="">Nombre del proyecto</a></h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                    <a href="">Leer más...</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-4">
                            <div className="container-imagen">
                                <img src={pasillo} alt="" />
                                <div className="overlay-light"></div>
                                <div className="container-texto p-4">
                                    <p>25 de abril, 2023</p>
                                    <h5 className="fw-bold text-uppercase"><a href="">Nombre del proyecto</a></h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit?</p>
                                    <a href="">Leer más...</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-12 d-flex justify-content-center">
                            <a href="/proyectos">
                                <button className="button-82-pushable mt-4 d-flex justify-content-center gap-1" role="button">
                                    <span className="button-82-shadow"></span>
                                    <span className="button-82-edge"></span>
                                    <span className="button-82-front text">
                                        Ver más proyectos
                                        <AddIcon></AddIcon>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contacto" className="section-padding text-white">
                <div className="container">
                    <div className="row mb-5">
                        <div className="col-12 text-center">
                            <div className="mb-4">
                                <h1 className="mb-3 display-4 fw-semibold">Anímate a compartir</h1>
                                <p className="mb-3">Aquí podrás tener el reconocimiento que tus proyectos necesitan.</p>
                            </div>
                        </div>
                    </div>
                    <FormularioRegistro></FormularioRegistro>
                </div>
            </section>
        </>
    )
}

export default LandingPage;
