<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Articulo', array('action' => 'edit'));
    echo $this->Form->input('titulo');
    echo $this->Form->input('cuerpo', array('rows' => '3'));
    echo $this->Form->input('idArticulo', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');?>