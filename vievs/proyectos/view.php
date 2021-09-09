<?php require "views/shared/header.php"; ?>

<div class="container">
    <h1 class="texto-center><?php= $data['titulo']; ?></h1>
    
    <div cllas="py-3>
        <p>
            <span class="fw-bold">ID</span>
            <? $data['proyecto']['id']; ?>
        </p>

        <p>
            <span class="fw-bold">Nombre</span>
            <? $data['proyecto']['nombre']; ?>
        </p>

        <p>
            <span class="fw-bold">Duracion</span>
            <? $data['proyecto']['duracion']; ?>
        </p>
        <a href="index.php"></a>

   </div>
</div>

<?php require "views/shared/footer.php"; ?>