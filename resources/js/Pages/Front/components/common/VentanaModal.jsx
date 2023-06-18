import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';

function VentanaModal(props) {
  return (
    <Modal
      {...props}
      size="lg"
      aria-labelledby="contained-modal-title-vcenter"
      centered
    >
      <Modal.Header closeButton>
        <Modal.Title id="contained-modal-title-vcenter">
          <h2 className="fw-bold">
            Andrés Esparza
          </h2>
        </Modal.Title>
      </Modal.Header>
      <Modal.Body className="text-center">
        <h4 className="fw-bold text-uppercase">Video curriculum</h4>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6J_6jpt_GbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </Modal.Body>
      <Modal.Footer>
        <Button onClick={props.onHide}>Close</Button>
      </Modal.Footer>
    </Modal>
  );
}

export default VentanaModal
