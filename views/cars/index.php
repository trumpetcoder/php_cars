<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cars Index Page</h1>
    <a href="new">Add A new Car</a>
    <section>
      <ul>
	  <?php while($row = $cars->fetch_object()): ?>
	      <li>
		  Here is a <?php echo $row->car ?> for <?php echo $row->owner?>
	      </li>
	  <?php endwhile; ?>
      </ul>
    </section>
    
</body>
</html>