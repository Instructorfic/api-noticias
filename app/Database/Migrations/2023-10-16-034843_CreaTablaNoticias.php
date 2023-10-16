<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaTablaNoticias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_noticia' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' =>true
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'descripcion' => [
                'type' => 'TEXT'
            ],
            'autor' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'categoria' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ],
            'fecha_publicacion' => [
                'type' => 'DATE'
            ],
            'enlace_imagen' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'enlace_noticia' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'etiquetas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
            
        ]);

                
        $this->forge->addKey('id_noticia',true);//Identificar la llave primaria
        $this->forge->addForeignKey('categoria','categorias2','id_categoria','CASCADE','SET NULL');
        $this->forge->createTable('noticias2');//Crear la tabla 
    }

    public function down()
    {
        $this->forge->dropTable('noticias2');
    }
}
