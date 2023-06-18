import { BrowserRouter, Routes, Route } from 'react-router-dom';
import LandingPage from "./Front/components/pages/LandingPage";
import ProyectoDetalle from './Front/components/pages/Proyecto';
import ProyectosView from "./Front/components/pages/Proyectos";

function Front() {
    return (
        <>
            <BrowserRouter>
                <Routes>
                    <Route path="/" element={<LandingPage/>}/>
                    <Route path="/proyectos" element={<ProyectosView/>}/>
                    <Route path="/proyecto" element={<ProyectoDetalle/>}/>
                </Routes>
            </BrowserRouter>
        </>
    )
}

export default Front
