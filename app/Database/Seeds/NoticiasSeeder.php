<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    public function run()
    {
        $noticias = [
            [
                'titulo' => 'En el 62 aniversario de la Facultad de Agronomía, el Rector entrega 52 titularidades, firma 84 convenios y llama a defender la Autonomía Universitaria',
                'descripcion' => 'De manteles largos la Facultad de Agronomía de la Universidad Autónoma de Sinaloa (UAS) festejó su 62 Aniversario de fundación con la entrega de 52 titularidades, la firma simbólica de 84 convenios con empresas receptoras de prácticas profesionales y la asistencia del Rector, doctor Jesús Madueña Molina, quien hizo un llamado a defender a la institución.',
                'categoria' => '4',
                'autor' => 'UAS',
                'fecha_publicacion' => '2023-09-23',
                'enlace_imagen' => 'http://www.uas.edu.mx/multimedia/galerias/2023/09/grande_138390001695474185.jpg',
                'enlace_noticia' => 'https://dcs.uas.edu.mx/noticias/7535/en-el-62-aniversario-de-la-facultad-de-agronomia-el-rector-entrega-52-titularidades-firma-84-convenios-y-llama-a-defender-la-autonomia-universitaria',
                'etiquetas' => 'agronomía, titularidades'
            ],
            [
                'titulo' => 'El Times Higher Education coloca a la UAS en el tercer lugar entre las mejores universidades del país, informa el Rector al Consejo Universitario',
                'descripcion' => 'En una muestra evidente de reconocimiento a su calidad, la Universidad Autónoma de Sinaloa (UAS) se colocó en el tercer lugar entre las mejores universidades mexicanas y en el primer lugar entre las universidades públicas estatales en el Ranking Mundial de Universidades (The World University Ranking) elaborado y difundido por el Times Higher Education, instrumento de medición más grande y diverso en el sector académico del mundo.',
                'categoria' => '6',
                'autor' => 'UAS',
                'fecha_publicacion' => '2023-09-28',
                'enlace_imagen' => 'http://www.uas.edu.mx/multimedia/galerias/2023/09/grande_240470001695949592.jpg',
                'enlace_noticia' => 'https://dcs.uas.edu.mx/noticias/7567/el-times-higher-education-coloca-a-la-uas-en-el-tercer-lugar-entre-las-mejores-universidades-del-pais-informa-el-rector-al-consejo-universitario',
                'etiquetas' => 'UAS, mejores universidades'
            ],
            [
                'titulo' => 'Integran investigadores de la UAS técnicas de inteligencia artificial para analizar indicadores que definen la calidad en el servicio',
                'descripcion' => 'Con el objetivo de mejorar la calidad en el servicio a partir del uso de técnicas de inteligencia artificial, es la propuesta de metodología que desarrolla un grupo multidisciplinar de investigadores de la Universidad Autónoma de Sinaloa (UAS), quienes lograron la publicación del artículo “Calidad en el servicio hotelero: Propuesta de metodología experimental”, en la revista de alto impacto internacional Revista Venezolana de Gerencia (RVG).El docente de la Facultad de Informática, doctor Arturo Yee Rendón, expuso la importancia de dicha publicación, pues señaló se trata de una revista indexada por Scopus, lo cual habla de la calidad del trabajo que se realiza en la nueva universidad.  “Es un índice de alto impacto, de hecho, es uno de los índices que nos evalúan a nosotros los investigadores que estamos en el Sistema Nacional de Investigadores. Lo importante aquí es cómo, en este caso desde el punto de vista computacional, cómo técnicas computacionales están sirviendo para dar solución a problemas en otras áreas, en este caso a un área administrativa”, indicó.El especialista en ciencias en computación, explicó que esta técnica de aprendizaje de máquinas desarrollada, permite analizar, evaluar y determinar a partir de un conjunto indicadores que definen a un usuario tener una buena calidad en el servicio, en este caso del giro hotelero y, conocer cuáles son los que realmente aportan a la calidad, lo cual contribuye a que administradores de hoteles puedan definir qué es lo importante para los usuarios y con ello mejorar la calidad en su servicio.“Este tema de integrar técnicas de inteligencia artificial para definir cuáles son los indicadores en la calidad en el servicio no existen, está muy poco explorado en la actualidad, en el estado del arte; entonces este trabajo va a ser la base para futuros trabajos donde se pueda aplicar, por ejemplo, la inteligencia artificial para identificar algunas otras problemáticas que hay en este sector administrativo”, declaró.A su vez, el alumno del Doctorado en Administración Estratégica de la Facultad de Contaduría y Administración (FCA), Jaime Morales Morales, detalló que se trata de un trabajo multidisciplinar entre las áreas ciencias económicas administrativas y las ciencias computacionales, donde a partir de dicha metodología experimental, donde utilizaron alrededor de 15 indicadores para determinar qué los clientes usuarios del servicio de los hoteles de 4 estrellas de Mazatlán determinan su satisfacción.“Determinamos que tanto el conocimiento y habilidad que depende del capital humano es muy importante, por ello una vez teniendo estos resultados los gerentes o las partes interesadas pudieran acceder o atender estas aristas que nacieron de este artículo”, indicó. Asimismo, mencionó que en su momento buscarán un acercamiento con la Secretaría de Turismo y con el propio giro hotelero, en la idea de que puedan conocer de la implementación de esta metodología y puedan focalizar cuáles son las oportunidades que tienen para reforzar los indicadores y que el usuario final tenga una mejor calidad en el servicio y se refleje en una mayor ganancia.',
                'categoria' => '4',
                'autor' => 'UAS',
                'fecha_publicacion' => '2023-10-07',
                'enlace_imagen' => 'http://www.uas.edu.mx/multimedia/galerias/2023/10/grande_564638001696693823.jpg',
                'enlace_noticia' => 'https://dcs.uas.edu.mx/noticias/7639/integran-investigadores-de-la-uas-tecnicas-de-inteligencia-artificial-para-analizar-indicadores-que-definen-la-calidad-en-el-servicio',
                'etiquetas' => 'innovación, machine learning, inteligencia artificial'
            ]
         
        ];

        $this->db->table('noticias2')->insertBatch($noticias);
    }
}
