import NavbarComponent from "../common/Navbar";
import React from "react";
import { useState, useEffect } from "react";
import Button from "react-bootstrap/Button"

import VentanaModal from '../common/VentanaModal';
import { getProyectoById } from "@/Pages/assets/servicios/getProyectoById";

import ExpandLessIcon from '@mui/icons-material/ExpandLess';
import ExpandMoreIcon from '@mui/icons-material/ExpandMore';
import imagenAjax from "../../../assets/images/ajaxloader.gif"

import jaime from "../../../assets/images/jaime.jpg";
import carmen from "../../../assets/images/carmen.png";
import andres from "../../../assets/images/andres.jpg";


function ProyectoDetalle(props) {

    const [modalShow, setModalShow] = useState(false);

    const [proyectoRecuperado, setProyectoRecuperado] = useState();

    const [buscando, setBuscando] = useState(true);

    async function recuperarProyectoById(id) {
        let proyectoPorId = await getProyectoById(id);
        setProyectoRecuperado(proyectoPorId);
        setBuscando(false);
    }

    useEffect(() => {
        recuperarProyectoById(props.id);
    }, []);

    function mostrarAutores(autor) {

        return (
            <div className="col-12 col-md-4 text-center">
                <div className="team-member" onClick={() => setModalShow(true)}>
                    <img src={'https://picsum.photos/356/600'} alt="Foto del usuario" />
                    <div className="team-member-content text-white">
                        <h4 className="fw-bold">{autor.first_name} {autor.last_name}</h4>
                        <p>{autor.email}</p>
                        <Button variant="light" size="sm"><a className="enlaces" href={autor.video_cv}>Video CV</a></Button>
                    </div>
                </div>
            </div>
        )
    }



    return (
        <>
            <div>
                <NavbarComponent />
                {buscando ? "" : <div><section id="proyecto-portada" className="">
                    <div className="container min-vh-100 d-grid align-items-center">
                        <div className="row">
                            <div className="col-12 col-md-6">
                                <h1 className="text-uppercase display-2 fw-bold">{proyectoRecuperado.nombre}</h1>
                                <h5 className="text-black-50 mb-3 fw-bold">Tutor: {proyectoRecuperado.teacher.first_name} {proyectoRecuperado.teacher.last_name}</h5>
                                <p className="">{proyectoRecuperado.descripcion}</p>
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
                        <div className="container min-vh-100 d-grid align-items-center">
                            <div className="mt-4 row g-4 d-flex justify-content-center">
                                {proyectoRecuperado.users.map(mostrarAutores)}
                                <div className="my-4 col-12 d-flex justify-content-center">
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
                    </section> </div>}

            </div>
        </>
    )

}

export default ProyectoDetalle
