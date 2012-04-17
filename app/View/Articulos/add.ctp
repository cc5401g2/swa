<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Articulo');
echo $this->Form->input('titulo');
echo $this->Form->input('cuerpo', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>