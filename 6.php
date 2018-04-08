<?php include 'koneksi.php'; 
$sql = 'SELECT * FROM posts p , comments c , users u WHERE u.id_user=p.id_user AND p.id_post=c.id_post;';
$tampil = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Kumpulan Comments</h2>   
  <table class="table table-condensed table-hover table-responsive">
    <thead>
      <tr>
      	<th>Nomor</th>
        <th>Post Title</th>
        <th>Post User</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>
    <?php  
			$no = 1;
			while ($data = mysqli_fetch_array($tampil))
			{
			
	?>
      <tr>
      	<td><?php echo $no ?></td>
        <td><?php echo $data['title'] ?></td>
        <td><?php echo $data['username'] ?></td>
        <td><?php echo $data['comment'] ?></td>
      </tr>
      <?php  $no++; } ?>
    </tbody>
  </table>
</div>
<div class="footer-copyright py-3 text-center">
        © 2018 Copyright <strong>Alhamdi Ferdiawan Bahri</strong>
    </div>
</body>
</html>
