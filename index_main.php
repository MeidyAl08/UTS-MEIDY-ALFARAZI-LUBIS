<?php 
require_once "app/index.php";


$ind = new App\Index();
$rows = $ind->Photos();

?>

<h2>Post Your Best Photo</h2>

<div class="grid-music">
	<?php foreach ($rows as $row) { ?>
		<?php if (!empty($row['gambar'])) { ?>

			<div>
				<p>
					<img class="foto" src="layout/assets/images/album/<?php echo $row['gambar']; ?>">	
				</p>
				<p class="tulisan"><b><?php echo $row['ALB'] . " - " . $row['PST']; ?></b>
				</p>
				</div>

			<?php } ?>
		<?php } ?>
	</div>