import Nav from 'react-bootstrap/Nav';

function NavTabComponent() {
  return (
    <Nav variant="pills" defaultActiveKey="/proyectos" className='justify-content-center'>
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
  );
}

export default NavTabComponent;