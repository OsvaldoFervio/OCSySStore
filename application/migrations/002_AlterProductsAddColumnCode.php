<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_AlterProductsAddColumnCode extends CI_Migration {
        public function up(){
         ## Add age column
         $addfields = [
              'Code' => [
                    'type' => 'INT',
                    'constraint' => 10,
                    'null' => FALSE,
                    'after' => 'ProductId'
              ],
         ];
         $this->dbforge->add_column('Products', $addfields);
     }

     public function down(){
         
         ## Delete 'age' column
         $this->dbforge->drop_column('Products', 'Code');         
     }
}


