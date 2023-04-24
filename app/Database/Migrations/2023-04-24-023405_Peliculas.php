<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peliculas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5, // longitud
                'unigned' => TRUE, // solo valores positivos
                'auto_increment' => TRUE // autoincremental     
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => 60     
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => TRUE // puede ser nulo    
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('peliculas');
    }

    public function down()
    {
        //
    }
}
