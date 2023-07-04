<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiclosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ciclos')->truncate();
        $familias = FamiliasProfesionalesSeeder::$familias_profesionales;
        foreach (self::$ciclos as $ciclo) {
            DB::table('ciclos')->insert([
                'codCiclo' => $ciclo['codCiclo'],
                'codFamilia' => $ciclo['codFamilia'],
                'familia_id' => array_search($ciclo['codFamilia'], array_column($familias, 'codigo')) + 1,
                'grado' => $ciclo['grado'],
                'nombre' => $ciclo['nombre'],
            ]);
        }
        $this->command->info('¡Tabla ciclos inicializada con datos!');
    }

    private static $ciclos = array(
        array('codFamilia' => 'ADG','grado' => 'G.M.','codCiclo' => 'ACEC2','nombre' => 'Técnico en Actividades Ecuestres'),
        array('codFamilia' => 'ADG','grado' => 'G.S.','codCiclo' => 'ACFI3','nombre' => 'Técnico Superior en Acondicionamiento Físico'),
        array('codFamilia' => 'ADG','grado' => 'BÁSICA','codCiclo' => 'ACID1','nombre' => 'Profesional Básico en Acceso y Conservación en Instalaciones Deportivas'),
        array('codFamilia' => 'ADG','grado' => 'G.S.','codCiclo' => 'EASO3','nombre' => 'Técnico Superior en Enseñanza y Animación Sociodeportiva'),
        array('codFamilia' => 'ADG','grado' => 'G.M.','codCiclo' => 'GMTL2','nombre' => 'Técnico en Guía en el Medio Natural y de Tiempo Libre'),
        array('codFamilia' => 'AFD','grado' => 'G.S.','codCiclo' => 'ADFI3','nombre' => 'Técnico Superior en Administración y Finanzas'),
        array('codFamilia' => 'AFD','grado' => 'G.S.','codCiclo' => 'ASDI3','nombre' => 'Técnico Superior en Asistencia a la Dirección'),
        array('codFamilia' => 'AFD','grado' => 'G.M.','codCiclo' => 'GADM2','nombre' => 'Técnico en Gestión Administrativa'),
        array('codFamilia' => 'AFD','grado' => 'BÁSICA','codCiclo' => 'INOF1','nombre' => 'Profesional Básico en Informática de Oficina'),
        array('codFamilia' => 'AFD','grado' => 'BÁSICA','codCiclo' => 'SEAD1','nombre' => 'Profesional Básico en Servicios Administrativos'),
        array('codFamilia' => 'AGA','grado' => 'BÁSICA','codCiclo' => 'ACAG1','nombre' => 'Profesional Básico en Actividades Agropecuarias'),
        array('codFamilia' => 'AGA','grado' => 'G.M.','codCiclo' => 'ACEC2','nombre' => 'Técnico en Actividades Ecuestres'),
        array('codFamilia' => 'AGA','grado' => 'G.M.','codCiclo' => 'ACMN2','nombre' => 'Técnico en Aprovechamiento y Conservación del Medio Natural'),
        array('codFamilia' => 'AGA','grado' => 'BÁSICA','codCiclo' => 'AGCO1','nombre' => 'Profesional Básico en Agro-jardinería y Composiciones Florales'),
        array('codFamilia' => 'AGA','grado' => 'BÁSICA','codCiclo' => 'APFO1','nombre' => 'Profesional Básico en Aprovechamientos Forestales'),
        array('codFamilia' => 'AGA','grado' => 'G.S.','codCiclo' => 'GASA3','nombre' => 'Técnico Superior en Ganadería y Asistencia en Sanidad Animal'),
        array('codFamilia' => 'AGA','grado' => 'G.S.','codCiclo' => 'GFMN3','nombre' => 'Técnico Superior en Gestión Forestal y del Medio Natural'),
        array('codFamilia' => 'AGA','grado' => 'G.M.','codCiclo' => 'JAFO2','nombre' => 'Técnico en Jardinería y Floristería'),
        array('codFamilia' => 'AGA','grado' => 'G.S.','codCiclo' => 'PAMR3','nombre' => 'Técnico Superior en Paisajismo y Medio Rural'),
        array('codFamilia' => 'AGA','grado' => 'G.M.','codCiclo' => 'PRAE2','nombre' => 'Técnico en Producción Agroecológica'),
        array('codFamilia' => 'AGA','grado' => 'G.M.','codCiclo' => 'PRAP2','nombre' => 'Técnico en Producción Agropecuaria'),
        array('codFamilia' => 'ARA','grado' => 'G.S.','codCiclo' => 'ARFA3','nombre' => 'Técnico Superior en Artista Fallero y Construcción de Escenografías'),
        array('codFamilia' => 'ARG','grado' => 'BÁSICA','codCiclo' => 'ARGR1','nombre' => 'Profesional Básico en Artes Gráficas'),
        array('codFamilia' => 'ARG','grado' => 'G.S.','codCiclo' => 'DEPM3','nombre' => 'Técnico superior en Diseño y Edición de Publicaciones Impresas y Multimedia'),
        array('codFamilia' => 'ARG','grado' => 'G.S.','codCiclo' => 'DGPG3','nombre' => 'Técnico Superior en Diseño y Gestión de la Producción Gráfica'),
        array('codFamilia' => 'ARG','grado' => 'G.M.','codCiclo' => 'IMGR2','nombre' => 'Técnico en Impresión Gráfica'),
        array('codFamilia' => 'ARG','grado' => 'G.M.','codCiclo' => 'PIAG2','nombre' => 'Técnico Post-impresión y Acabados Gráficos'),
        array('codFamilia' => 'ARG','grado' => 'G.M.','codCiclo' => 'PRID2','nombre' => 'Técnico en Pre-impresión Digital'),
        array('codFamilia' => 'COM','grado' => 'G.M.','codCiclo' => 'ACCO2','nombre' => 'Técnico en Actividades Comerciales'),
        array('codFamilia' => 'COM','grado' => 'G.S.','codCiclo' => 'COIN3','nombre' => 'Técnico Superior en Comercio Internacional'),
        array('codFamilia' => 'COM','grado' => 'G.M.','codCiclo' => 'COPA2','nombre' => 'Técnico en Comercialización de Productos Alimentarios'),
        array('codFamilia' => 'COM','grado' => 'G.S.','codCiclo' => 'GVEC3','nombre' => 'Técnico Superior en Gestión de Ventas y Espacios Comerciales'),
        array('codFamilia' => 'COM','grado' => 'G.S.','codCiclo' => 'MAPU3','nombre' => 'Técnico Superior en Marketing y Publicidad'),
        array('codFamilia' => 'COM','grado' => 'BÁSICA','codCiclo' => 'SECO1','nombre' => 'Profesional Básico en Servicios Comerciales'),
        array('codFamilia' => 'COM','grado' => 'G.S.','codCiclo' => 'TRLO3','nombre' => 'Técnico Superior en Transporte y Logística'),
        array('codFamilia' => 'ELE','grado' => 'G.S.','codCiclo' => 'AURI3','nombre' => 'Técnico Superior en Automatización y Robótica Industrial'),
        array('codFamilia' => 'ELE','grado' => 'C.E. (G.S.)','codCiclo' => 'CIOP3','nombre' => 'Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de Operación'),
        array('codFamilia' => 'ELE','grado' => 'C.E. (G.M.)','codCiclo' => 'CIOT2','nombre' => 'Conectados a Internet (IoT)'),
        array('codFamilia' => 'ELE','grado' => 'BÁSICA','codCiclo' => 'ELEL1','nombre' => 'Profesional Básico en Electricidad y Electrónica'),
        array('codFamilia' => 'ELE','grado' => 'G.S.','codCiclo' => 'EMCL3','nombre' => 'Técnico Superior en Electromedicina Clínica'),
        array('codFamilia' => 'ELE','grado' => 'BÁSICA','codCiclo' => 'FAEM1','nombre' => 'Profesional Básico en Fabricación de Elementos Metálicos'),
        array('codFamilia' => 'ELE','grado' => 'BÁSICA','codCiclo' => 'IEME1','nombre' => 'Profesional Básico en Instalaciones Electrotécnicas y Mecánica'),
        array('codFamilia' => 'ELE','grado' => 'C.E. (G.M.)','codCiclo' => 'IMSC2','nombre' => 'Curso de Especialización en Instalación y Mantenimiento de Sistemas'),
        array('codFamilia' => 'ELE','grado' => 'G.M.','codCiclo' => 'INEA2','nombre' => 'Técnico en Instalaciones Eléctricas y Automáticas'),
        array('codFamilia' => 'ELE','grado' => 'G.M.','codCiclo' => 'INTE2','nombre' => 'Técnico en Instalaciones de Telecomunicaciones'),
        array('codFamilia' => 'ELE','grado' => 'C.E. (G.M.)','codCiclo' => 'IREG2','nombre' => 'Curso de Especialización en Implementación de Redes 5G'),
        array('codFamilia' => 'ELE','grado' => 'G.S.','codCiclo' => 'MAEL3','nombre' => 'Técnico Superior en Mantenimiento Electrónico'),
        array('codFamilia' => 'ELE','grado' => 'C.E. (G.S.)','codCiclo' => 'ROCO3','nombre' => 'Curso de Especialización en Robótica Colaborativa'),
        array('codFamilia' => 'ELE','grado' => 'G.S.','codCiclo' => 'SELA3','nombre' => 'Técnico Superior en Sistemas Electrotécnicos y Automatizados'),
        array('codFamilia' => 'ELE','grado' => 'C.E. (G.S.)','codCiclo' => 'SITF3','nombre' => 'Curso de Especialización en Sistemas de Señalización y Telecomunicaciones Ferroviarias'),
        array('codFamilia' => 'ELE','grado' => 'G.S.','codCiclo' => 'STEI3','nombre' => 'Técnico Superior en Sistemas de Telecomunicaciones e Informáticos'),
        array('codFamilia' => 'ENA','grado' => 'C.E. (G.S.)','codCiclo' => 'AUEN3','nombre' => 'Curso de Especialización en Auditoría Energética'),
        array('codFamilia' => 'ENA','grado' => 'G.S.','codCiclo' => 'CEEL3','nombre' => 'Técnico Superior en Centrales Eléctricas'),
        array('codFamilia' => 'ENA','grado' => 'G.S.','codCiclo' => 'EEST3','nombre' => 'Técnico Superior en Eficiencia Energética y Energía Solar Térmica'),
        array('codFamilia' => 'ENA','grado' => 'G.S.','codCiclo' => 'ENRE3','nombre' => 'Técnico Superior en Energías Renovables'),
        array('codFamilia' => 'ENA','grado' => 'G.S.','codCiclo' => 'GEAG3','nombre' => 'Técnico Superior en Gestión del Agua'),
        array('codFamilia' => 'ENA','grado' => 'G.M.','codCiclo' => 'REAG2','nombre' => 'Técnico en Redes y Estaciones de Tratamiento de Agua'),
        array('codFamilia' => 'EOC','grado' => 'G.M.','codCiclo' => 'CONS2','nombre' => 'Técnico en Construcción'),
        array('codFamilia' => 'EOC','grado' => 'G.S.','codCiclo' => 'OCOC3','nombre' => 'Técnico Superior en Organización y Control de Obras de Construcción'),
        array('codFamilia' => 'EOC','grado' => 'G.M.','codCiclo' => 'OIDR2','nombre' => 'Técnico en Obras de Interior, Decoración y Rehabilitación'),
        array('codFamilia' => 'EOC','grado' => 'G.S.','codCiclo' => 'PRED3','nombre' => 'Técnico Superior en Proyectos de Edificación'),
        array('codFamilia' => 'EOC','grado' => 'G.S.','codCiclo' => 'PROC3','nombre' => 'Técnico Superior en Proyectos de Obra Civil'),
        array('codFamilia' => 'EOC','grado' => 'BÁSICA','codCiclo' => 'REMA1','nombre' => 'Profesional Básico en Reforma y Mantenimiento de Edificios'),
        array('codFamilia' => 'FME','grado' => 'G.M.','codCiclo' => 'CMMP2','nombre' => 'Técnico en Conformado por Moldeo de Metales y Polímeros'),
        array('codFamilia' => 'FME','grado' => 'G.S.','codCiclo' => 'COME3','nombre' => 'Técnico Superior en Construcciones Metálicas'),
        array('codFamilia' => 'FME','grado' => 'G.S.','codCiclo' => 'DIFM3','nombre' => 'Técnico Superior en Diseño en Fabricación Mecánica'),
        array('codFamilia' => 'FME','grado' => 'C.E. (G.S.)','codCiclo' => 'FAAD3','nombre' => 'Curso de Especialización en Fabricación Aditiva'),
        array('codFamilia' => 'FME','grado' => 'BÁSICA','codCiclo' => 'FAEM1','nombre' => 'Profesional Básico en Fabricación de Elementos Metálicos'),
        array('codFamilia' => 'FME','grado' => 'BÁSICA','codCiclo' => 'FAMO1','nombre' => 'Profesional Básico en Fabricación y Montaje'),
        array('codFamilia' => 'FME','grado' => 'BÁSICA','codCiclo' => 'IEME1','nombre' => 'Profesional Básico en Instalaciones Electrotécnicas y Mecánica'),
        array('codFamilia' => 'FME','grado' => 'C.E. (G.S.)','codCiclo' => 'MCIA3','nombre' => 'Curso de Especialización en Materiales Compuestos en la Industria Aeroespacial'),
        array('codFamilia' => 'FME','grado' => 'G.M.','codCiclo' => 'MECA2','nombre' => 'Técnico en Mecanizado'),
        array('codFamilia' => 'FME','grado' => 'G.M.','codCiclo' => 'MESA2','nombre' => 'Técnico en Montaje de Estructuras e Instalación de Sistemas Aeronáuticos'),
        array('codFamilia' => 'FME','grado' => 'G.S.','codCiclo' => 'PPFM3','nombre' => 'Técnico Superior en Programación de la Producción en Fabricación Mecánica'),
        array('codFamilia' => 'FME','grado' => 'G.S.','codCiclo' => 'PPMP3','nombre' => 'Técnico Superior en Programación de la Producción en Moldeo de Metales y Polímeros'),
        array('codFamilia' => 'FME','grado' => 'G.M.','codCiclo' => 'SOCA2','nombre' => 'Técnico en Soldadura y Calderería'),
        array('codFamilia' => 'HOT','grado' => 'BÁSICA','codCiclo' => 'ALLA1','nombre' => 'Profesional Básico en Alojamiento y Lavandería'),
        array('codFamilia' => 'HOT','grado' => 'G.S.','codCiclo' => 'AVGE3','nombre' => 'Técnico Superior en Agencias de Viajes y Gestión de Eventos'),
        array('codFamilia' => 'HOT','grado' => 'G.M.','codCiclo' => 'COGA2','nombre' => 'Técnico en Cocina y Gastronomía'),
        array('codFamilia' => 'HOT','grado' => 'G.M.','codCiclo' => 'COPA2','nombre' => 'Técnico en Comercialización de Productos Alimentarios'),
        array('codFamilia' => 'HOT','grado' => 'BÁSICA','codCiclo' => 'CORE1','nombre' => 'Profesional Básico en Cocina y Restauración'),
        array('codFamilia' => 'HOT','grado' => 'G.S.','codCiclo' => 'DICO3','nombre' => 'Técnico Superior en Dirección de Cocina'),
        array('codFamilia' => 'HOT','grado' => 'G.S.','codCiclo' => 'DISR3','nombre' => 'Técnico Superior en Dirección de Servicios de Restauración'),
        array('codFamilia' => 'HOT','grado' => 'G.S.','codCiclo' => 'GEAT3','nombre' => 'Técnico Superior en Gestión de Alojamientos Turísticos'),
        array('codFamilia' => 'HOT','grado' => 'G.S.','codCiclo' => 'GIAT3','nombre' => 'Técnico Superior en Guía, Información y Asistencias Turísticas'),
        array('codFamilia' => 'HOT','grado' => 'C.E. (G.M.)','codCiclo' => 'PABA2','nombre' => 'Curso de Especialización en Panadería y Bollería Artesanales'),
        array('codFamilia' => 'HOT','grado' => 'BÁSICA','codCiclo' => 'PAPA1','nombre' => 'Profesional Básico en Actividades de Panadería y Pastelería'),
        array('codFamilia' => 'HOT','grado' => 'G.M.','codCiclo' => 'SERE2','nombre' => 'Técnico en Servicios de Restauración'),
        array('codFamilia' => 'IEX','grado' => 'G.M.','codCiclo' => 'EXSO2','nombre' => 'Técnico en Excavaciones y Sondeos'),
        array('codFamilia' => 'IEX','grado' => 'G.M.','codCiclo' => 'PINA2','nombre' => 'Técnico en Piedra Natural'),
        array('codFamilia' => 'IFC','grado' => 'G.S.','codCiclo' => 'ASIR3','nombre' => 'Técnico Superior en Administración de Sistemas Informáticos en Red'),
        array('codFamilia' => 'IFC','grado' => 'C.E. (G.S.)','codCiclo' => 'CIIN3','nombre' => 'Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de la Información'),
        array('codFamilia' => 'IFC','grado' => 'G.S.','codCiclo' => 'DAPM3','nombre' => 'Técnico Superior en Desarrollo de Aplicaciones Multiplataforma'),
        array('codFamilia' => 'IFC','grado' => 'G.S.','codCiclo' => 'DAPW3','nombre' => 'Técnico Superior en Desarrollo de Aplicaciones Web'),
        array('codFamilia' => 'IFC','grado' => 'C.E. (G.S.)','codCiclo' => 'DVRV3','nombre' => 'Curso de Especialización en Desarrollo de Videojuegos y Realidad Virtual'),
        array('codFamilia' => 'IFC','grado' => 'C.E. (G.S.)','codCiclo' => 'IABD3','nombre' => 'Curso de Especialización en Inteligencia Artificial y Big Data'),
        array('codFamilia' => 'IFC','grado' => 'BÁSICA','codCiclo' => 'INCO1','nombre' => 'Profesional Básico en Informática y Comunicaciones'),
        array('codFamilia' => 'IFC','grado' => 'BÁSICA','codCiclo' => 'INOF1','nombre' => 'Profesional Básico en Informática de Oficina'),
        array('codFamilia' => 'IFC','grado' => 'G.M.','codCiclo' => 'SMIR2','nombre' => 'Técnico en Sistemas Microinformáticos y Redes'),
        array('codFamilia' => 'IMA','grado' => 'C.E. (G.S.)','codCiclo' => 'DIMI3','nombre' => 'Curso de Especialización en Digitalización del Mantenimiento Industrial'),
        array('codFamilia' => 'IMA','grado' => 'G.S.','codCiclo' => 'DPTF3','nombre' => 'Técnico Superior en Desarrollo de Proyectos de Instalaciones Térmicas y de Fluidos'),
        array('codFamilia' => 'IMA','grado' => 'C.E. (G.S.)','codCiclo' => 'FAIN3','nombre' => 'Curso de Especialización en Fabricación Inteligente'),
        array('codFamilia' => 'IMA','grado' => 'BÁSICA','codCiclo' => 'FAMO1','nombre' => 'Profesional Básico en Fabricación y Montaje'),
        array('codFamilia' => 'IMA','grado' => 'G.M.','codCiclo' => 'INFC2','nombre' => 'Técnico en Instalaciones Frigoríficas y de Climatización'),
        array('codFamilia' => 'IMA','grado' => 'G.M.','codCiclo' => 'INPC2','nombre' => 'Técnico en Instalaciones de Producción de Calor'),
        array('codFamilia' => 'IMA','grado' => 'G.M.','codCiclo' => 'MAEL2','nombre' => 'Técnico en Mantenimiento Electromecánico'),
        array('codFamilia' => 'IMA','grado' => 'BÁSICA','codCiclo' => 'MAVI1','nombre' => 'Profesional Básico en Mantenimiento de Viviendas'),
        array('codFamilia' => 'IMA','grado' => 'G.S.','codCiclo' => 'MEIN3','nombre' => 'Técnico Superior en Mecatrónica Industrial'),
        array('codFamilia' => 'IMA','grado' => 'G.S.','codCiclo' => 'MITF3','nombre' => 'Técnico Superior en Mantenimiento de Instalaciones Térmicas y de Fluidos'),
        array('codFamilia' => 'IMA','grado' => 'C.E. (G.S.)','codCiclo' => 'MOIN3','nombre' => 'Curso de Especialización en Modelado de la Información en la Construcción (BIM)'),
        array('codFamilia' => 'IMP','grado' => 'G.S.','codCiclo' => 'AIPC3','nombre' => 'Técnico Superior en Asesoría de Imagen Personal y Corporativa'),
        array('codFamilia' => 'IMP','grado' => 'G.S.','codCiclo' => 'CMPR3','nombre' => 'Técnico Superior en Caracterización y Maquillaje Profesional'),
        array('codFamilia' => 'IMP','grado' => 'G.S.','codCiclo' => 'EDPE3','nombre' => 'Técnico Superior en Estilismo y Dirección de Peluquería'),
        array('codFamilia' => 'IMP','grado' => 'G.M.','codCiclo' => 'ESBE2','nombre' => 'Técnico en Estética y Belleza'),
        array('codFamilia' => 'IMP','grado' => 'G.S.','codCiclo' => 'ESIB3','nombre' => 'Técnico Superior en Estética Integral y Bienestar'),
        array('codFamilia' => 'IMP','grado' => 'G.M.','codCiclo' => 'PCNC2','nombre' => 'Técnico en Peluquería y Cosmética Capilar'),
        array('codFamilia' => 'IMP','grado' => 'BÁSICA','codCiclo' => 'PEES1','nombre' => 'Profesional Básico en Peluquería y Estética'),
        array('codFamilia' => 'IMP','grado' => 'G.S.','codCiclo' => 'TEBI3','nombre' => 'Técnico Superior en Termalismo y Bienestar'),
        array('codFamilia' => 'IMS','grado' => 'G.S.','codCiclo' => 'AJEI3','nombre' => 'Técnico Superior en Animación 3D, Juegos y Entornos Interactivos'),
        array('codFamilia' => 'IMS','grado' => 'C.E. (G.S.)','codCiclo' => 'AUSU3','nombre' => 'Curso de Especialización en Audiodescripción y Subtitulación'),
        array('codFamilia' => 'IMS','grado' => 'G.S.','codCiclo' => 'ICTI3','nombre' => 'Técnico Superior en Iluminación, Captación y Tratamiento de Imagen'),
        array('codFamilia' => 'IMS','grado' => 'G.S.','codCiclo' => 'PAES3','nombre' => 'Técnico Superior en Producción de Audiovisuales y Espectáculos'),
        array('codFamilia' => 'IMS','grado' => 'G.S.','codCiclo' => 'RAES3','nombre' => 'Técnico Superior en Realización de Proyectos Audiovisuales y Espectáculos'),
        array('codFamilia' => 'IMS','grado' => 'G.S.','codCiclo' => 'SAES3','nombre' => 'Técnico Superior en Sonido para Audiovisuales y Espectáculos'),
        array('codFamilia' => 'IMS','grado' => 'G.M.','codCiclo' => 'VDJS2','nombre' => 'Técnico en Video Disc-jockey y Sonido'),
        array('codFamilia' => 'INA','grado' => 'G.M.','codCiclo' => 'ACOV2','nombre' => 'Técnico en Aceites de Oliva y Vinos'),
        array('codFamilia' => 'INA','grado' => 'G.M.','codCiclo' => 'ELPA2','nombre' => 'Técnico en Elaboración de Productos Alimenticios'),
        array('codFamilia' => 'INA','grado' => 'BÁSICA','codCiclo' => 'INAL1','nombre' => 'Profesional Básico en Industrias Alimentarias'),
        array('codFamilia' => 'INA','grado' => 'BÁSICA','codCiclo' => 'PAPA1','nombre' => 'Profesional Básico en Actividades de Panadería y Pastelería'),
        array('codFamilia' => 'INA','grado' => 'G.M.','codCiclo' => 'PARC2','nombre' => 'Técnico en Panadería, Repostería y Confitería'),
        array('codFamilia' => 'INA','grado' => 'G.S.','codCiclo' => 'PCIA3','nombre' => 'Técnico Superior en Procesos y Calidad en la Industria Alimentaria'),
        array('codFamilia' => 'INA','grado' => 'G.S.','codCiclo' => 'VITI3','nombre' => 'Técnico en Vitivinicultura'),
        array('codFamilia' => 'MAM','grado' => 'BÁSICA','codCiclo' => 'CAMU1','nombre' => 'Profesional Básico en Carpintería y Mueble'),
        array('codFamilia' => 'MAM','grado' => 'G.M.','codCiclo' => 'CAMU2','nombre' => 'Técnico en Carpintería y Mueble'),
        array('codFamilia' => 'MAM','grado' => 'G.S.','codCiclo' => 'DIAM3','nombre' => 'Técnico Superior en Diseño y Amueblamiento'),
        array('codFamilia' => 'MAM','grado' => 'G.M.','codCiclo' => 'INAM2','nombre' => 'Técnico en Instalación y Amueblamiento'),
        array('codFamilia' => 'MAM','grado' => 'G.M.','codCiclo' => 'PTMA2','nombre' => 'Técnico en Procesado y Transformación de la Madera'),
        array('codFamilia' => 'MAP','grado' => 'BÁSICA','codCiclo' => 'ACMA1','nombre' => 'Profesional Básico en Actividades Marítimo-Pesqueras'),
        array('codFamilia' => 'MAP','grado' => 'G.S.','codCiclo' => 'ACUI3','nombre' => 'Técnico Superior en Acuicultura'),
        array('codFamilia' => 'MAP','grado' => 'G.M.','codCiclo' => 'CUAC2','nombre' => 'Técnico en Cultivos Acuícolas'),
        array('codFamilia' => 'MAP','grado' => 'G.M.','codCiclo' => 'MCMB2','nombre' => 'Técnico en Mantenimiento y Control de la Maquinaria de Buques y Embarcaciones'),
        array('codFamilia' => 'MAP','grado' => 'BÁSICA','codCiclo' => 'MEDR1','nombre' => 'Profesional Básico en Mantenimiento de Embarcaciones Deportivas y de Recreo'),
        array('codFamilia' => 'MAP','grado' => 'G.M.','codCiclo' => 'NPLI2','nombre' => 'Técnico en Navegación y Pesca de Litoral'),
        array('codFamilia' => 'MAP','grado' => 'G.S.','codCiclo' => 'OMMB3','nombre' => 'Técnico Superior en Organización del Mantenimiento de Maquinaria de Buques y Embarcaciones'),
        array('codFamilia' => 'MAP','grado' => 'G.M.','codCiclo' => 'OSHI2','nombre' => 'Técnico en Operaciones Subacuáticas e Hiperbáricas'),
        array('codFamilia' => 'MAP','grado' => 'G.S.','codCiclo' => 'TMPA3','nombre' => 'Técnico Superior en Transporte Marítimo y Pesca de Altura'),
        array('codFamilia' => 'QUI','grado' => 'C.E. (G.S.)','codCiclo' => 'CUCE3','nombre' => 'Curso de Especialización en Cultivos Celulares'),
        array('codFamilia' => 'QUI','grado' => 'G.S.','codCiclo' => 'FPFB3','nombre' => 'Técnico Superior en Fabricación de Productos Farmacéuticos, Biotecnológicos y Afines'),
        array('codFamilia' => 'QUI','grado' => 'G.S.','codCiclo' => 'LACC3','nombre' => 'Técnico Superior en Laboratorio de Análisis y de Control de Calidad'),
        array('codFamilia' => 'QUI','grado' => 'G.M.','codCiclo' => 'OPLA2','nombre' => 'Técnico en Operaciones de Laboratorio'),
        array('codFamilia' => 'QUI','grado' => 'G.M.','codCiclo' => 'PLQI2','nombre' => 'Técnico en Planta Química'),
        array('codFamilia' => 'QUI','grado' => 'G.S.','codCiclo' => 'QUIN3','nombre' => 'Técnico Superior en Química Industrial'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'ANPAC3','nombre' => 'Técnico Superior en Anatomía Patológica y Citodiagnóstico'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'AUPR3','nombre' => 'Técnico Superior en Audiología Protésica'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'DADSA3','nombre' => 'Técnico Superior en Documentación y Administración Sanitarias'),
        array('codFamilia' => 'SAN','grado' => 'G.M.','codCiclo' => 'EMSA2','nombre' => 'Técnico en Emergencias Sanitarias'),
        array('codFamilia' => 'SAN','grado' => 'G.M.','codCiclo' => 'FAPA2','nombre' => 'Técnico en Farmacia y Parafarmacia'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'HIGBU3','nombre' => 'Técnico Superior en Higiene Bucodental'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'IDMN3','nombre' => 'Técnico Superior en Imagen para el Diagnóstico y Medicina Nuclear'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'LACB3','nombre' => 'Técnico Superior en Laboratorio Clínico y Biomédico'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'OPAP3','nombre' => 'Técnico Superior en Ortoprótesis y Productos de Apoyo'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'PRDE3','nombre' => 'Técnico Superior en Prótesis Dentales'),
        array('codFamilia' => 'SAN','grado' => 'G.S.','codCiclo' => 'RADO3','nombre' => 'Técnico Superior en Radioterapia y Dosimetría'),
        array('codFamilia' => 'SEA','grado' => 'G.S.','codCiclo' => 'CEPC3','nombre' => 'Técnico Superior en Coordinación de Emergencias y Protección Civil'),
        array('codFamilia' => 'SEA','grado' => 'G.S.','codCiclo' => 'EDCA3','nombre' => 'Técnico Superior en Educación y Control Ambiental'),
        array('codFamilia' => 'SEA','grado' => 'G.M.','codCiclo' => 'EPCI2','nombre' => 'Técnico en Emergencias y Protección Civil'),
        array('codFamilia' => 'SEA','grado' => 'G.S.','codCiclo' => 'QSAM3','nombre' => 'Técnico Superior en Química y Salud Ambiental'),
        array('codFamilia' => 'SSC','grado' => 'BÁSICA','codCiclo' => 'ADLE1','nombre' => 'Profesional Básico en Actividades Domésticas y Limpieza de Edificios'),
        array('codFamilia' => 'SSC','grado' => 'G.S.','codCiclo' => 'ASTU3','nombre' => 'Técnico Superior en Animación Sociocultural y Turística'),
        array('codFamilia' => 'SSC','grado' => 'G.S.','codCiclo' => 'EDIN3','nombre' => 'Técnico Superior en Educación Infantil'),
        array('codFamilia' => 'SSC','grado' => 'G.S.','codCiclo' => 'FMSS3','nombre' => 'Técnico Superior en Formación para la Movilidad Segura y Sostenible'),
        array('codFamilia' => 'SSC','grado' => 'G.S.','codCiclo' => 'INSO3','nombre' => 'Técnico Superior en Integración Social'),
        array('codFamilia' => 'SSC','grado' => 'G.S.','codCiclo' => 'MECO3','nombre' => 'Técnico Superior en Mediación Comunicativa'),
        array('codFamilia' => 'SSC','grado' => 'G.M.','codCiclo' => 'PESD2','nombre' => 'Técnico en Atención a Personas en Situación de Dependencia'),
        array('codFamilia' => 'SSC','grado' => 'G.S.','codCiclo' => 'PIGG3','nombre' => 'Técnico Superior en Promoción de Igualdad de Género'),
        array('codFamilia' => 'TCP','grado' => 'BÁSICA','codCiclo' => 'ARRE1','nombre' => 'Profesional Básico en Arreglo y Reparación de Artículos Textiles y de Piel'),
        array('codFamilia' => 'TCP','grado' => 'G.M.','codCiclo' => 'CACM2','nombre' => 'Técnico en Calzado y Complementos de Moda'),
        array('codFamilia' => 'TCP','grado' => 'G.M.','codCiclo' => 'COMO2','nombre' => 'Técnico en Confección y Moda'),
        array('codFamilia' => 'TCP','grado' => 'G.S.','codCiclo' => 'DPCC3','nombre' => 'Técnico Superior en Diseño y Producción de Calzado y Complementos'),
        array('codFamilia' => 'TCP','grado' => 'G.S.','codCiclo' => 'DTTP3','nombre' => 'Técnico Superior en Diseño Técnico en Textil y Piel'),
        array('codFamilia' => 'TCP','grado' => 'G.M.','codCiclo' => 'FEPT2','nombre' => 'Técnico en Fabricación y Ennoblecimiento de Productos Textiles'),
        array('codFamilia' => 'TCP','grado' => 'G.S.','codCiclo' => 'PAMO3','nombre' => 'Técnico Superior en Patronaje y Moda'),
        array('codFamilia' => 'TCP','grado' => 'BÁSICA','codCiclo' => 'TACO1','nombre' => 'Profesional Básico en Tapicería y Cortinaje'),
        array('codFamilia' => 'TCP','grado' => 'G.S.','codCiclo' => 'VMES3','nombre' => 'Técnico Superior en Vestuario a Medida y de Espectáculos'),
        array('codFamilia' => 'TMV','grado' => 'C.E. (G.S.)','codCiclo' => 'APDR3','nombre' => 'Curso de Especialización en Aeronaves Pilotadas de Forma Remota-Drones'),
        array('codFamilia' => 'TMV','grado' => 'G.S.','codCiclo' => 'AUTO3','nombre' => 'Técnico Superior en Automoción'),
        array('codFamilia' => 'TMV','grado' => 'G.M.','codCiclo' => 'CARR2','nombre' => 'Técnico en Carrocería'),
        array('codFamilia' => 'TMV','grado' => 'G.M.','codCiclo' => 'CVTC2','nombre' => 'Técnico en Conducción de Vehículos de Transporte por Carretera'),
        array('codFamilia' => 'TMV','grado' => 'G.M.','codCiclo' => 'ELMA2','nombre' => 'Técnico en Electromecánica de Maquinaria'),
        array('codFamilia' => 'TMV','grado' => 'G.M.','codCiclo' => 'ELVA2','nombre' => 'Técnico en Electromecánica de Vehículos Automóviles'),
        array('codFamilia' => 'TMV','grado' => 'G.S.','codCiclo' => 'MAAP3','nombre' => 'Técnico Superior en Mantenimiento Aeromecánico de Aviones con Motor de Pistón'),
        array('codFamilia' => 'TMV','grado' => 'G.S.','codCiclo' => 'MAAT3','nombre' => 'Técnico Superior en Mantenimiento Aeromecánico de Aviones con Motor de Turbina'),
        array('codFamilia' => 'TMV','grado' => 'G.M.','codCiclo' => 'MAER2','nombre' => 'Técnico en Mantenimiento de Embarcaciones de Recreo'),
        array('codFamilia' => 'TMV','grado' => 'G.S.','codCiclo' => 'MAHP3','nombre' => 'Técnico Superior en Mantenimiento Aeromecánico de Helicópteros con Motor de Pistón'),
        array('codFamilia' => 'TMV','grado' => 'G.S.','codCiclo' => 'MAHT3','nombre' => 'Técnico Superior en Mantenimiento Aeromecánico de Helicópteros con Motor de Turbina'),
        array('codFamilia' => 'TMV','grado' => 'C.E. (G.S.)','codCiclo' => 'MAMR3','nombre' => 'Curso de Especialización en Mantenimiento Avanzado de Sistemas De Material Rodante Ferroviario'),
        array('codFamilia' => 'TMV','grado' => 'BÁSICA','codCiclo' => 'MAVE1','nombre' => 'Profesional Básico en Mantenimiento de Embarcaciones Deportivas y de Recreo'),
        array('codFamilia' => 'TMV','grado' => 'BÁSICA','codCiclo' => 'MEDR1','nombre' => 'Profesional Básico en Mantenimiento de Vehículos'),
        array('codFamilia' => 'TMV','grado' => 'G.M.','codCiclo' => 'MEME2','nombre' => 'Técnico en Mantenimiento de Estructuras de Madera y Mobiliario de Embarcaciones de Recreo'),
        array('codFamilia' => 'TMV','grado' => 'G.M.','codCiclo' => 'MESA2','nombre' => 'Técnico en Montaje de Estructuras e Instalación de Sistemas Aeronáuticos'),
        array('codFamilia' => 'TMV','grado' => 'G.M.','codCiclo' => 'MMRF2','nombre' => 'Técnico en Mantenimiento de Material Rodante Ferroviario'),
        array('codFamilia' => 'TMV','grado' => 'G.S.','codCiclo' => 'MSEA3','nombre' => 'Técnico Superior en Mantenimiento de Sistemas Electrónicos y Aviónicos en Aeronaves'),
        array('codFamilia' => 'TMV','grado' => 'C.E. (G.M.)','codCiclo' => 'MVHE2','nombre' => 'Curso de Especialización en Mantenimiento de Vehículos Híbridos y Eléctricos'),
        array('codFamilia' => 'TMV','grado' => 'C.E. (G.S.)','codCiclo' => 'SVHE3','nombre' => 'Curso de Especialización en Mantenimiento y Seguridad en Sistemas de Vehículos Híbridos y Eléctricos'),
        array('codFamilia' => 'VIC','grado' => 'G.S.','codCiclo' => 'DFPC3','nombre' => 'Técnico Superior en Desarrollo y Fabricación de Productos Cerámicos'),
        array('codFamilia' => 'VIC','grado' => 'G.M.','codCiclo' => 'FAPC2','nombre' => 'Técnico en Fabricación de Productos Cerámicos'),
        array('codFamilia' => 'VIC','grado' => 'BÁSICA','codCiclo' => 'VIAL1','nombre' => 'Profesional Básico en Vidriería y Alfarería')
      );

}
