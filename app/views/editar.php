<div class="row container">
    <div class="col s12">
        <h3 class="light">Página de edição de Registros</h3>
    </div>

    <div class="col s12">

        <?php foreach ($editarForm as $registro) : ?>

            <p><?php echo $registro['nome'] ?> </p>

        <?php endforeach; ?>

    </div>
</div>