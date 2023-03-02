<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_CreateSchema extends CI_Migration {
        public function up()
        {

                $this->dbforge->add_field(array(
                        'ProductId' => array(
                                'type' => 'INT',                                
                                'auto_increment' => TRUE
                        ),
                        'Description' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '250',
                                'null' => TRUE,
                        ),
                        'Status' => array(
                                'type' => 'BIT',      
                                'constraint' => '1',                          
                                'default' => 1,
                        ),
                        'Created datetime default current_timestamp',                        
                        'Updated datetime default current_timestamp on update current_timestamp',
                        'Cost' => array(
                                'type' => 'decimal(10,2)',
                                'null' => FALSE,
                        ),
                        'Tax' => array(
                                'type' => 'decimal(10,2)',
                                'null' => FALSE,
                        ),                                                
                ));

                $this->dbforge->add_key('ProductId', TRUE);
                $this->dbforge->create_table('Products');

                $this->dbforge->add_field(array(
                        'RoleId' => array(
                                'type' => 'SMALLINT',                                
                                'auto_increment' => TRUE
                        ),
                        'Description' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '250',
                                'null' => TRUE,
                        ),
                        'Status' => array(
                                'type' => 'BIT',      
                                'constraint' => '1',                          
                                'default' => 1,                               
                        ),                        
                ));

                $this->dbforge->add_key('RoleId', TRUE);
                $this->dbforge->create_table('Roles');

                $this->dbforge->add_field(array(
                        'UserId' => array(
                                'type' => 'INT',                                
                                'auto_increment' => TRUE
                        ),
                        'Name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '250',
                                'null' => TRUE,
                        ),
                        'UserName' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE,
                        ),
                        'Password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'Status' => array(
                                'type' => 'BIT',      
                                'constraint' => '1',                          
                                'default' => 1,                                
                        ),
                        'RoleId' => array(
                                'type' => 'SMALLINT',      
                                'null' => FALSE,
                        ),
                        'Created datetime default current_timestamp',
                        'Updated datetime default current_timestamp on update current_timestamp',
                ));

                // insert into Users values('admin','admin','admin',1,1)

                $this->dbforge->add_key('UserId', TRUE);
                $this->dbforge->add_field('CONSTRAINT FK_Users_RoleId FOREIGN KEY (RoleId) REFERENCES Roles(RoleId)');
                $this->dbforge->create_table('Users');

                

                $this->dbforge->add_field(array(
                        'PatientId' => array(
                                'type' => 'INT',                        
                                'auto_increment' => TRUE
                        ),
                        'Name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '250',
                                'null' => TRUE,
                        ),
                        'Age' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'null' => TRUE,
                        ),
                        'Status' => array(
                                'type' => 'BIT',      
                                'constraint' => '1',                          
                                'default' => 1,                                
                        ),                        
                        'Created datetime default current_timestamp',
                        'Updated datetime default current_timestamp on update current_timestamp',                   
                        
                ));

                $this->dbforge->add_key('PatientId', TRUE);
                $this->dbforge->create_table('Patients');

                $this->dbforge->add_field(array(
                        'DoctorId' => array(
                                'type' => 'INT',
                                'auto_increment' => TRUE,
                        ),
                        'Name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '250',
                                'null' => TRUE,
                        ),                        
                        'Status' => array(
                                'type' => 'BIT',      
                                'constraint' => '1',                          
                                'default' => 1,                                
                        ),                        
                        'Created datetime default current_timestamp',
                        'Updated datetime default current_timestamp on update current_timestamp',
                        
                ));

                $this->dbforge->add_key('DoctorId', TRUE);
                $this->dbforge->create_table('Doctors');

                $this->dbforge->add_field(array(
                        'ClinicalStudiesId' => array(
                                'type' => 'INT',
                                'auto_increment' => TRUE
                        ),
                        'Invoice' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => FALSE,
                        ),
                        'InvoiceDate' => array(
                                'type' => 'DATETIME',
                                'null' => FALSE,                                
                        ),
                        'PatentNumber' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => FALSE,
                        ),
                        'StudyDate' => array(
                                'type' => 'DATETIME',
                                'null' => FALSE,                                
                        ),
                        'Unimef' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                                'null' => FALSE,
                        ),
                        'DoctorId' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'null' => FALSE,
                        ),
                        'PatientId' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'null' => FALSE,
                        ),
                        'ProductId' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'null' => FALSE,
                        ),
                        'Cost' => array(
                                'type' => 'decimal(10,2)',
                                'null' => FALSE,
                        ),
                        'Tax' => array(
                                'type' => 'decimal(10,2)',
                                'null' => FALSE,
                        ),
                        'Comments' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                                'null' => FALSE,
                        ),
                        'Created datetime default current_timestamp',
                        'Updated datetime default current_timestamp on update current_timestamp',
                ));

                $this->dbforge->add_key('ClinicalStudiesId', TRUE);
                $this->dbforge->add_field('CONSTRAINT FK_Doctors_DoctorId FOREIGN KEY (DoctorId) REFERENCES Doctors(DoctorId)');
                $this->dbforge->add_field('CONSTRAINT FK_Patients_PatientId FOREIGN KEY (PatientId) REFERENCES Patients(PatientId)');
                $this->dbforge->add_field('CONSTRAINT FK_Products_ProductId FOREIGN KEY (ProductId) REFERENCES Products(ProductId)');
                $this->dbforge->create_table('ClinicalStudies');
        }

        public function down()
        {
                $this->dbforge->drop_table('ClinicalStudies');
                $this->dbforge->drop_table('Products');
                $this->dbforge->drop_table('Doctors');
                $this->dbforge->drop_table('Patients');
                $this->dbforge->drop_table('Users');
                $this->dbforge->drop_table('Roles');                
        }
}