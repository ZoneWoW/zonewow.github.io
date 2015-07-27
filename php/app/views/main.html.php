<?php foreach($posts as $p):?>
	<div class="entrada">
		<div class="entrada-tit"><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></div>

		<div class="date"><?php echo date('d F Y', $p->date)?></div>
		<div class="entrada-cont">
			<?php echo $p->body?>
		</div>

	</div>
<?php endforeach;?>

<?php if ($has_pagination['prev']):?>
	<a href="?page=<?php echo $page-1?>" class="pagination-arrow newer">Entradas mas recientes</a>
<?php endif;?>

<?php if ($has_pagination['next']):?>
	<a href="?page=<?php echo $page+1?>" class="pagination-arrow older">Entradas anteriores</a>
<?php endif;?>