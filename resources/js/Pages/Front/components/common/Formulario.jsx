import DoneIcon from '@mui/icons-material/Done';

function FormularioRegistro() {

    return (
        <>
            <div className="row justify-content-center mb-4">
                <div className="col-12 col-lg-8">
                    <form action="#" className="row g-3 p-4 p-lg-5 bg-white shadow d-flex items-align-center">
                        <div className="form-group col-12 col-lg-4">
                            <input type="text" className="form-control" placeholder="Nombre"/>
                        </div>
                        <div className="form-group col-12 col-sm-6 col-lg-4">
                            <input type="text" className="form-control" placeholder="Primer apellido"/>
                        </div>
                        <div className="form-group col-12 col-sm-6 col-lg-4">
                            <input type="text" className="form-control" placeholder="Segundo apellido"/>
                        </div>
                        <div className="form-group col-12">
                            <input type="email" className="form-control" placeholder="Correo electrónico"/>
                        </div>
                        <div className="form-group col-12 col-sm-6">
                            <select name="region" id="region" className="form-select" aria-label="Seleccionar región">
                                <option defaultValue>Región</option>
                                <option value="1">Región de Murcia</option>
                            </select>
                        </div>
                        <div className="form-group col-12 col-sm-6">
                            <select name="municipio" id="municipio" className="form-select" aria-label="Seleccionar municipio">
                                <option defaultValue>Municipio</option>
                                <option value="1">Cartagena</option>
                                <option value="1">Los Alcázares</option>
                                <option value="1">Murcia</option>
                            </select>
                        </div>
                        <div className="form-group col-12">
                            <select name="centro-formativo" id="centro-formativo" className="form-select" aria-label="Seleccionar centro formativo">
                                <option defaultValue>Escoge tu centro formativo</option>
                                <option value="1">CIFP Carlos III</option>
                                <option value="2">CIFP Politécnico</option>
                                <option value="3">CIFP Hespérides</option>
                                <option value="4">IES Ramón y Cajal</option>
                                <option value="5">IES Alfonso X "El Sabio"</option>
                                <option value="6">IES Antonio Menárguez Costa</option>
                            </select>
                        </div>
                        <div className="form-group col-12 col-lg-6">
                            <select name="categoria" id="categoria" className="form-select" aria-label="Seleccionar nivel">
                                <option defaultValue>Nivel de estudios</option>
                                <option value="1">FP Grado Medio</option>
                                <option value="2">FP Grado Superior</option>
                                <option value="3">Máster de Especialización</option>
                            </select>
                        </div>
                        <div className="form-group col-12 col-lg-6">
                            <select name="titulacion" id="titulacion" className="form-select" aria-label="Seleccionar titulación">
                                <option defaultValue>Titulación</option>
                                <option value="1">Marketing y publicidad</option>
                                <option value="2">Desarrollo de Aplicaciones Web</option>
                                <option value="3">Administración y finanzas</option>
                            </select>
                        </div>
                        <div className="col-12 col-md-4 offset-md-4 d-grid">
                            <a href="/register" className="d-flex justify-content-center enlaces">
                                <button className="button-82-pushable mt-5 d-flex justify-content-center gap-1" role="button">
                                    <span className="button-82-shadow"></span>
                                    <span className="button-82-edge"></span>
                                    <span className="button-82-front text d-flex gap-2">
                                        Registrarse
                                        <DoneIcon></DoneIcon>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </>
    )

}

export default FormularioRegistro;
