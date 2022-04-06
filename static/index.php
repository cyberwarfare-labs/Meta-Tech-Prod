<?php
// ---------------------------------------------------
try {
  $conn = new PDO("pgsql:host=meta-database-c1;dbname=metaverse", "postgres", "pass");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $conn->prepare( "select * from pg_stat_activity");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

  echo "result count: ";
  echo count($stmt->fetchAll());

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="description" />
    <title>Metaverse | CWL</title>
    <link rel="stylesheet" href="/css/index.css"> 
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600&display=swap" rel="stylesheet">
  </head>
  <body>
    <main>
      <img class="hero" src="./images/james-yarema-npTT9rD8wd4-unsplash.jpg" />
      <section>
        <h1>Welcome to metaverse </h1>
      </section>
    </main>
<?

  echo $result;
?>
  </body>
</html>
