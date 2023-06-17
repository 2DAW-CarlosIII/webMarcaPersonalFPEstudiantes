import Nav from 'react-bootstrap/Nav';
import Button from 'react-bootstrap/Button';

import { useState, useEffect } from 'react';
import { Collapse } from 'bootstrap';
import AddCircleOutlineIcon from '@mui/icons-material/AddCircleOutline';

function NavTabComponent(props) {

  var [toggle, setToggle] = useState(false);

  useEffect(() => {
    var myCollapse = document.getElementById('collapseTarget');
    var bsCollpase = new Collapse(myCollapse, { toggle: false });
    toggle ? bsCollpase.show() : bsCollpase.hide();
  })

  return (
    <>
      <Nav variant="pills" defaultActiveKey="0" className='justify-content-center align-items-center mb-2'>
        <Nav.Item>
          <Nav.Link value="todas" eventKey="0" onClick={props.manejarSelectFamilia}>Todas</Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link value="informatica y comunicaciones" eventKey="1" onClick={props.manejarSelectFamilia}>Informática y comunicaciones</Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link value="comercio y marketing" eventKey="2" onClick={props.manejarSelectFamilia}>Comercio y marketing</Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link value="administracion y gestion" eventKey="3" onClick={props.manejarSelectFamilia}>Administración y gestión</Nav.Link>
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
                <input type="text" id="busqueda-proyectos" className="form-control" aria-label="Buscar por título, autor, tutor o centro" value={props.busqueda} onChange={props.manejarBusqueda} />
              </div>
              <select className="form-select" onChange={props.manejarSelect} aria-label="Ordenar alfabéticamente de la A a la Z" name="alfabeticamente">
                <option defaultValue value="az">A-Z</option>
                <option value="za">Z-A</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}

export default NavTabComponent;
