<div class="row container">
    <div class="col s12">
        <h3 class="light">Página Consulta</h3>
    </div>
    <div class="col s12">
        <?php foreach ($consulta as $registro) : ?>

            <p>
                Nome: <?php echo $registro['nome'] ?> <br>
                E-mail: <?php echo $registro['email'] ?> <br>
            </p>

        <?php endforeach; ?>
    </div>
</div>