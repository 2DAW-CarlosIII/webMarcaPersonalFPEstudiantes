import Card from 'react-bootstrap/Card';
import Col from 'react-bootstrap/Col';
import Row from 'react-bootstrap/Row';
import NavbarComponent from "../common/Navbar";

import ArrowBackIosNewIcon from '@mui/icons-material/ArrowBackIosNew';
import ArrowForwardIosIcon from '@mui/icons-material/ArrowForwardIos';

import jugadores from "../../../assets/images/jugadores.jpg";
import pasillo from "../../../assets/images/pasillo-gente.jpg";
import escaleras from "../../../assets/images/escaleras.jpg";


function ProyectoDetalle() {

    return (
        <>
            <NavbarComponent />
            <section id="proyecto-detail" className="">
                <div className="container min-vh-100 d-flex align-items-center" id="proyecto-portada">
                    <div className="row">
                        <div className="col-12 col-md-6">
                            <h1 className="text-uppercase display-2 fw-bold">Título del proyecto</h1>
                            <p className="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aut hic amet minus! At voluptates nisi, cum beatae consequatur labore voluptatem.</p>
                            <a href="#proyecto-autores" className="enlaces">
                                Autores
                                <ArrowForwardIosIcon></ArrowForwardIosIcon>
                            </a>
                        </div>
                    </div>
                </div>

                <div className="container min-vh-100 d-flex align-items-center" id="proyecto-autores">
                    <div className="row">
                        <div className="col-12 col-md-5">
                            <h1 className="text-uppercase display-2 fw-bold">Los autores</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aut hic amet minus! At voluptates nisi, cum beatae consequatur labore voluptatem.</p>
                            <a href="#proyecto-enlaces" className="enlaces">
                                Ver enlaces de acceso
                                <ArrowForwardIosIcon></ArrowForwardIosIcon>
                            </a>
                        </div>
                        <div className="col-12 col-md-7">
                            <Row xs={1} md={2} className="g-2 d-flex">
                                {Array.from({ length: 2 }).map((_, idx) => (
                                    <Col key={idx}>
                                        <Card>
                                            <Card.Img variant="top" src={jugadores} />
                                            <Card.Body>
                                                <Card.Title>Card title</Card.Title>
                                                <Card.Text>
                                                    This is a longer card with supporting text below as a natural
                                                    lead-in to additional content. This content is a little bit
                                                    longer.
                                                </Card.Text>
                                            </Card.Body>
                                        </Card>
                                    </Col>
                                ))}
                            </Row>
                        </div>
                    </div>
                </div>

                <div className="container min-vh-75 d-flex align-items-center" id="proyecto-enlaces">
                    <div className="row">
                        <div className="container mb-3">
                            <h1 className="text-uppercase display-2 fw-bold">Acceso</h1>
                            <p>Elige el formato en el que quieres ver el proyecto.</p>
                        </div>
                        <div className="container d-flex gap-2 mb-4">
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
                            <a href="#proyecto-portada" className="enlaces"><ArrowBackIosNewIcon></ArrowBackIosNewIcon></a>
                        </div>
                    </div>
                </div>
            </section>
        </>
    )

}

export default ProyectoDetalle
