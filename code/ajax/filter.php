<?php 
	require_once('../Db.php');

	$movie_name = $_GET['movie_name'];
	$select_branch = $_GET['select_branch'];
	$select_status = $_GET['select_status'];

	$sql = 'SELECT * FROM product WHERE 1';
	if (!empty($movie_name)) {
		$sql.=' AND pr_name LIKE"'.$movie_name.'%"';
	}
	if ($select_branch !='all') {
		$sql.=' AND pr_style LIKE"%'.$select_branch.'%"';
	}
	// if ($select_status !='all') {
	// 	$sql.=' AND concert_born LIKE"%'.$select_status.'%"';
	// }
	$Db = new Db;
	$result = $Db->select($sql);

	if (!empty($result['items'])) {
		foreach ($result['items'] as $value) {
?>
							<div class="tattoo-box">
							<img src="img/<?php echo $value["pr_photo"];?>">
								<div class="tattoo-detil"> 
									<?php echo $value["pr_name"];?>,<br><?php echo $value["pr_style"];?>
								</div><!-- tattoo-detil -->
							</div >
<?php
		}
	}

?>