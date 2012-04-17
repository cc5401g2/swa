<!-- File: /app/View/Posts/index.ctp -->
<!-- falta implementar logica de previews de los post -->

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
                <th>Actions</th>
		<th>Preview</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $articulos array, printing out post info -->

    <?php foreach ($articulos as $articulo): ?>
    <tr>
        <td><?php echo $articulo['Articulo']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($articulo['Articulo']['titulo'], array('action' => 'view', $articulo['Articulo']['id']));?>
        </td>
		<td>
			<?php
			if(strlen($articulo['Articulo']['cuerpo']) > 300){
			
			echo substr($articulo['Articulo']['cuerpo'],0,300);
			echo $this->Html->link("ver más...", array('action' => 'view', $articulo['Articulo']['id']));
			}
			else 
				echo $articulo['Articulo']['cuerpo'];
			?>
		</td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $articulo['Articulo']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $articulo['Articulo']['id']));?>
        </td>
        <td>
            <?php echo $articulo['Articulo']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>