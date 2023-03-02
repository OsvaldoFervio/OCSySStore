<?php
if(!function_exists('getCitasRules')){
function getCitasRules(){
	return array(
        array(
                'field' => 'Nombre',
                'label' => 'Nombre',
                'rules' => 'required|max_length[100]',
                'errors' => array(
                        'required' => 'El %s es requerrido.',
                ),
        ),
        array(               
                'field' => 'Telefono',
                'label' => 'Teléfono',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => 'El %s es requerrido.',
                        ),
        ),
        
        
	       );
        }

        function updateModelsRules(){
        return array(
        array(
                'field' => 'name',
                'label' => 'Nombre',
                'rules' => 'required|max_length[100]',
                'errors' => array(
                        'required' => 'El %s es requerrido.',
                ),
        ),
        array(               
                'field' => 'phone',
                'label' => 'Teléfono',
                'rules' => 'required|trim',
                'errors' => array(
                        'required' => 'El %s es requerrido.',
                        ),
        ),
        
        
               );
        }

}