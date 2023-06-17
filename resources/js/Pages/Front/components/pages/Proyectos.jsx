import FooterComponent from "../common/Footer"
import NavbarComponent from "../common/Navbar"

import escaleras from "@/Pages/assets/images/escaleras.jpg";
import aless from "@/Pages/assets/images/jugadores.jpg";
import joche from "@/Pages/assets/images/pasillo-gente.jpg";
import pasillo from "@/Pages/assets/images/pasillo.jpg";
import pared from "@/Pages/assets/images/ventana-exterior.jpg";
import ventana from "@/Pages/assets/images/ventanas-pasillo.jpg";
import { Pagination } from "react-bootstrap";
import Col from "react-bootstrap/Col";
import { getProyectos } from "../../../../Pages/assets/servicios/getProyectos"
import { useState, useEffect } from "react"

import NavTabComponent from "../common/NavTab";

function ProyectosView() {

    const [proyectos, setProyectos] = useState([]);

    const [pagina, setPagina] = useState(1);

    const [proyectosPorPagina, setProyectosPorPagina] = useState(6);

    const [busqueda, setBusqueda] = useState("");

    const [valorSelect, setValorSelect] = useState({
        familia: "todas",
        alfabeticamente: "az"
      });

      function manejarSelect(event) {
        setValorSelect({ ...valorSelect, [event.target.name]: event.target.value });
        setPagina(1);
        console.log(valorSelect);
      }

      function manejarSelectFamilia(event) {
        setValorSelect({...valorSelect, familia : event.target.getAttribute("value")})
        console.log(valorSelect);
      }

    function filtrarDatos(proyecto) {
        if (busqueda === "") return true;

        const autor = (proyecto.nombre || "").toString();
        const tutor = (proyecto.descripcion || "").toString();
        const titulo = (proyecto.ciclo || "").toString();
        return (
          autor.toLowerCase().includes(busqueda.toLowerCase()) ||
          tutor.toLowerCase().includes(busqueda.toLowerCase()) ||
          titulo.toLowerCase().includes(busqueda.toLowerCase())
        );
      }

      function filtrarFamilia(proyecto) {
        if (valorSelect.familia === "todas") return true;

        return proyecto.familia === valorSelect.familia;
      }

    //PAGINACIÓN
    const startIndex = (pagina - 1) * proyectosPorPagina;
    const endIndex = startIndex + proyectosPorPagina;
    const proyectosFiltrados = proyectos
        .filter(filtrarDatos)
        .filter(filtrarFamilia)
        .sort(ordenarAlfabeticamente)
    const elementosPaginados = proyectosFiltrados.slice(startIndex, endIndex);

    let paginasTotales = Math.ceil(
        proyectosFiltrados.length / proyectosPorPagina
    );
    let maximoPaginas = 7;

    //Función que controla la paginación y la elipsis de la misma.
    function crearElementosPagination() {
        let arrayPaginas = [];
        //Añadir primera página
        arrayPaginas.push(
            <Pagination.Item
                key={1}
                active={pagina === 1}
                onClick={manejarCambioPagina}
            >
                {1}
            </Pagination.Item>
        );

        if (paginasTotales <= maximoPaginas) {
            for (let i = 2; i <= paginasTotales; i++) {
                arrayPaginas.push(
                    <Pagination.Item
                        key={i}
                        active={i === pagina}
                        onClick={manejarCambioPagina}
                    >
                        {i}
                    </Pagination.Item>
                );
            }
        } else {
            const comienzoElipsis = Math.max(
                pagina - Math.floor(maximoPaginas / 2),
                2
            );
            const finalElipsis = Math.min(
                comienzoElipsis + maximoPaginas - 3,
                paginasTotales - 1
            );

            if (comienzoElipsis > 2) {
                arrayPaginas.push(<Pagination.Ellipsis key="start-ellipsis" />);
            }

            for (let i = comienzoElipsis; i <= finalElipsis; i++) {
                arrayPaginas.push(
                    <Pagination.Item
                        key={i}
                        active={pagina === i}
                        onClick={manejarCambioPagina}
                    >
                        {i}
                    </Pagination.Item>
                );
            }

            if (finalElipsis < paginasTotales - 1) {
                arrayPaginas.push(<Pagination.Ellipsis key="end-ellipsis" />);
            }

            // Agregar última página
            arrayPaginas.push(
                <Pagination.Item
                    key={paginasTotales}
                    active={pagina === paginasTotales}
                    onClick={manejarCambioPagina}
                >
                    {paginasTotales}
                </Pagination.Item>
            );
        }
        return arrayPaginas;
    }


    //Funciones para manejar la paginación
    function manejarCambioPagina(event) {
        if (isNaN(+event.target.text)) {
          return true;
        } else {
          setPagina(+event.target.text);
        }
      }

      function primeraPagina() {
        setPagina(1);
      }

      function ultimaPagina() {
        setPagina(paginasTotales);
      }

      function anteriorPagina() {
        if (pagina === 1) {
          setPagina(1);
        } else {
          setPagina((prevPagina) => pagina - 1);
        }
      }

      function siguientePagina() {
        if (pagina === paginasTotales) {
          setPagina(paginasTotales);
        } else {
          setPagina((prevPagina) => pagina + 1);
        }
      }

      //FIN DE LAS FUNCIONES DE LA PAGINACIÓN

      //Funcion que maneja la búsqueda
      function manejarBusqueda(event) {
        setBusqueda(event.target.value);
        setPagina(1);
        console.log(busqueda);
      }

      //Función para ordenar alfabéticamente
      function ordenarAlfabeticamente(a, b) {
        const nombreA = a.nombre;
        const nombreB = b.nombre;

        if (valorSelect.alfabeticamente === "az") {
          if (nombreA < nombreB) {
            return -1;
          }
          if (nombreA > nombreB) {
            return 1;
          }

          return 0;
        } else if (valorSelect.alfabeticamente === "za") {
          if (nombreB < nombreA) {
            return -1;
          }
          if (nombreB > nombreA) {
            return 1;
          }
          return 0;
        }
      }

    async function recuperarProyectos() {
        let proyectosRecuperados = await getProyectos();
        setProyectos(proyectosRecuperados);
        console.log(proyectosRecuperados)
        console.log("Datos recuperados");

    }

    useEffect(() => {
        recuperarProyectos();
    }, []);

    function mostrarProyectos(proyecto) {
        return (
            <div className="col-12 col-md-4">
                <div className="container-imagen">
                    <img src={proyecto.img_src} alt="imagen del proyecto" />
                    <div className="overlay"></div>
                    <div className="container-texto p-4">
                        <h5 className="fw-bold text-uppercase">{proyecto.nombre}</h5>
                        <p>{proyecto.url_github}</p>
                        <p><strong>{proyecto.familia}</strong></p>
                    </div>
                </div>
            </div>
        );
    }


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
                        <NavTabComponent
                        busqueda={busqueda}
                        manejarBusqueda={manejarBusqueda}
                        manejarSelect={manejarSelect}
                        manejarSelectFamilia={manejarSelectFamilia}

                        ></NavTabComponent>
                    </div>

                    <div className="row g-3 mb-5 text-white">
                        {elementosPaginados.map(mostrarProyectos)}
                    </div>
                    <div className="row">
                        <div className="d-flex justify-content-center">
                            <Pagination className="mt-5 justify-content-center">
                                <Pagination.First onClick={primeraPagina} />
                                <Pagination.Prev onClick={anteriorPagina} />
                                {crearElementosPagination()}
                                <Pagination.Next onClick={siguientePagina} />
                                <Pagination.Last onClick={ultimaPagina} />
                            </Pagination>
                        </div>
                    </div>
                </div>
            </section>
            <FooterComponent />
        </>
    )

}

export default ProyectosView
