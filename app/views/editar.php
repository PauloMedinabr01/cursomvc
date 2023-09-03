<div class="row container">
    <div class="col s12">
        <h3 class="light">Página de edição de Registros</h3>
    </div>

    <div class="col s12">
        <form action="?router=Site/editar/" method="post">

            <?php foreach ($editarForm as $registro) : ?>

                <div class="input-field col s12 m6">
                    <input type="text" name="nome" id="nome" value="<?php echo $registro['nome'] ?>" required>
                    <label for="nome">Digite seu nome</label>
                </div>

                <div class="input-field col s12 m6">
                    <input type="email" name="email" id="email" value="<?php echo $registro['email'] ?>" required>
                    <label for="email">Digite seu email</label>
                </div>

                <div class="input-field col s12">
                    <input type="submit" value="salvar alterações" class="btn-small">
                    <input type="reset" value="limpar" class="btn-small red">
                </div>

            <?php endforeach; ?>

        </form>
    </div>
</div>