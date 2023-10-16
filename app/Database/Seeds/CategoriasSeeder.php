<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $categorias = [
            [
                'titulo' => 'Salud',
                'descripcion' => 'Categoría de salud'
            ],
            [
                'titulo' => 'Cultura',
                'descripcion' => 'Categoría de cultura'
            ],
            [
                'titulo' => 'Deportes',
                'descripcion' => 'Categoría de deportes'
            ],
            [
                'titulo' => 'Académica',
                'descripcion' => 'Categoría académica'
            ],
            [
                'titulo' => 'Investigación',
                'descripcion' => 'Categoría de investigación'
            ],
            [
                'titulo' => 'Desarrollo',
                'descripcion' => 'Categoría de desarrollo'
            ]
        ];

        $this->db->table('categorias2')->insertBatch($categorias);
    }
}
