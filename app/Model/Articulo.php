<?php
	class Articulo extends AppModel{
	 public $validate = array(
        'titulo' => array(
            'rule' => 'notEmpty'
        ),
        'cuerpo' => array(
            'rule' => 'notEmpty'
        )
    );
	}
?>