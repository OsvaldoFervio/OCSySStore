<?php
if(!function_exists('getRegisterRules')){
function getRegisterRules(){
	return array(
        array(
                'field' => 'curp',
                'label' => 'curp',
                'rules' => 'required|min_length[18]|max_length[18]|alpha_numeric',
                'errors' => array(
                        'required' => 'La %s es requerrida y solo acepta 18 caracteres.',
                ),
            ),        
       );
    }
}