<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_AlterClinicalStudiesAddColumns extends CI_Migration {
        public function up(){
         ## Add age column
         $addfields = [
              'Bill' => [
                    'type' => 'VARCHAR',
                    'constraint' => '25',
                    'null' => TRUE,
                    'after' => 'Tax'
              ],
              'PaymentDate' => [
                    'type' => 'DATETIME',                    
                    'null' => TRUE,                    
                    'after' => 'Bill'
              ],
              'PartialPayment' => [
                    'type' => 'decimal(10,2)',
                    'null' => FALSE,
                    'after' => 'PaymentDate'
              ],
         ];
         $this->dbforge->add_column('ClinicalStudies', $addfields);
     }

     public function down(){
         
         ## Delete 'age' column
         $this->dbforge->drop_column('ClinicalStudies', 'Bill');
         $this->dbforge->drop_column('ClinicalStudies', 'PaymentDate');
         $this->dbforge->drop_column('ClinicalStudies', 'PartialPayment');
     }
}


