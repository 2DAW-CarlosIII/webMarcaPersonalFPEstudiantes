import logo from '../../../assets/images/mp-logo-light.svg';
import PersonIcon from '@mui/icons-material/Person';

import Button from 'react-bootstrap/Button';
import Container from 'react-bootstrap/Container';
import Form from 'react-bootstrap/Form';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';

function NavbarComponent() {
  return (
    <Navbar style={{backgroundColor: 'var(--grey700)'}} expand="lg" fixed="top" data-bs-theme="dark">
      <Container fluid>
        <Navbar.Brand href="/">
          <div style={{width: 'auto', height: '40px'}}>
            <img src={logo} alt="" style={{width: '100%', height: '100%'}}/>
          </div>
        </Navbar.Brand>
        <Navbar.Toggle aria-controls="navbarScroll" />
        <Navbar.Collapse id="navbarScroll">
          <Nav
            className="me-auto my-2 my-lg-0"
            style={{ maxHeight: '100px' }}
            navbarScroll
          >
            <Nav.Link href="/proyectos">Los proyectos</Nav.Link>
            <NavDropdown title="Categorías" id="navbarScrollingDropdown">
              <NavDropdown.Item href="#action3">Profesores</NavDropdown.Item>
              <NavDropdown.Item href="#action4">
                Alumnos
              </NavDropdown.Item>
              <NavDropdown.Divider />
              <NavDropdown.Item href="#action5">
                Centros
              </NavDropdown.Item>
            </NavDropdown>
            <Nav.Link href="#footer">Contacto</Nav.Link>
          </Nav>
          <Form className="d-flex me-1 gap-2">
            <Form.Control
              type="search"
              placeholder="Quiero ver..."
              className="me-2"
              aria-label="Search"
            />
            <Button variant="outline-light">Buscar</Button>
            <Button variant="light" className='d-flex gap-1'>
              <PersonIcon></PersonIcon>
            </Button>
          </Form>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
}

export default NavbarComponent;