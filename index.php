<?php
// Le fichier header.php est inclus sur la page
require_once(__DIR__.'/partials/header.php');

// Récupérer la liste des films
// $query = $db->query('SELECT * FROM movie');
$query_cat = $db->query('SELECT * FROM category');
$categories = $query_cat->fetchAll();
// $movies = $query->fetchAll();
?>
<!-- Begin page content -->
<main class="container">
    <h1 class="text-center">Bienvenue sur Webflix</h1>

    <div class="row">
    <?php
    foreach($categories as $category) { ?>
        <h2><?= $category['name'] ;?></h2>
        <?php $query = $db->query('SELECT * FROM movie WHERE id = ' . $category['id']);
        $movies = $query->fetchAll();
        ?>
    <?php } ?>
    </div>
    
    <div class="row">
    <?php
    foreach($movies as $movie) { ?>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-img-top-container">
                    <div class="card-img-top">
                        <img src="<?= 'assets/'.$movie['cover'];?>">
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
    </div>
</main>

<?php 
// Le fichier footer.php est inclus sur la page
require_once(__DIR__.'/partials/footer.php'); ?>