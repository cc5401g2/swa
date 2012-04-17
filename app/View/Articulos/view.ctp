<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($articulo['Articulo']['titulo'])?></h1>
<p><small>User: <?php echo $articulo['Articulo']['idAutor']?></small></p>
<p><small>Created: <?php echo $articulo['Articulo']['created']?></small></p>

<p><?php echo h($articulo['Articulo']['cuerpo'])?></p>