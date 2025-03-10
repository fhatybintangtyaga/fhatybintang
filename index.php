<?php include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Fhaty Bintang Tyaga</title>
</head>
<body>
 <header class="container">
    <div>
        <h1>Fhaty Bintang Tyaga</h1>
        <p>Pelajar | SMK TELKOM PURWOKERTO</p>
    </div>
 </header>
<main>
    <section id="project">
        <h2>Proyek</h2>
        <ul>
            <?php
            $query = "SELECT"  * FROM projects";
            $result =$conn->query($query);
            if  ($result->num_rows > 0){
            while   ($row = results->fetch_assoc()){
            echo "<li><a href='{$row['link'}'>{row['title']}</a><li";
}
}else {
echo "<li>Tidak ada proyek.</li>";
}
?>
        </ul>
    </section>
</main>
<footer>
<p>&copy; 2025 Fhaty Bintang Tyaga</p>
</footer>
</body>
</html>