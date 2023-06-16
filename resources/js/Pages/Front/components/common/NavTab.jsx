import Nav from 'react-bootstrap/Nav';

import { useState, useEffect } from 'react';
import { Collapse } from 'bootstrap';
import AddCircleOutlineIcon from '@mui/icons-material/AddCircleOutline';

function NavTabComponent() {

  var [toggle, setToggle] = useState(false);

  useEffect(() => {
    var myCollapse = document.getElementById('collapseTarget');
    var bsCollpase = new Collapse(myCollapse, { toggle: false });
    toggle ? bsCollpase.show() : bsCollpase.hide();
  })

  return (
    <>
      <Nav variant="pills" defaultActiveKey="/proyectos" className='justify-content-center align-items-center mb-2'>
        <Nav.Item>
          <Nav.Link href="/proyectos">Todos</Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="1">Informática</Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="2">Marketing</Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="3">Administración</Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="4">Comercio</Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link eventKey="5">Transporte</Nav.Link>
        </Nav.Item>
      </Nav>

      <div className="d-flex flex-column justify-content-center m-0" id="filtros-toggle">
        <button className="btn mb-1" onClick={() => setToggle(toggle => !toggle)}>
          <div className='d-flex justify-content-center align-items-center gap-2'>
            <AddCircleOutlineIcon color="disabled"></AddCircleOutlineIcon>
            <p className='m-0 text-black-50'>Ver más filtros</p>
          </div>
        </button>
        <div className="collapse" id="collapseTarget">
          <div className="d-flex justify-content-center">
            <div className="d-inline-block gap-2">
              <div className="input-group mb-3">
                <span className="input-group-text">Buscar por nombre...</span>
                <input type="text" id="busqueda-proyectos" className="form-control" aria-label="Buscar por título, autor, tutor o centro" />
              </div>
              <select className="form-select" aria-label="Ordenar alfabéticamente de la A a la Z">
                <option defaultValue>Ordenar por...</option>
                <option value="1">A-Z</option>
                <option value="2">Z-A</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default NavTabComponent;
