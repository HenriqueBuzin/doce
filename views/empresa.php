<div class="row" >
    <form class="col s12 m12 l12" id="empresa" method="POST">
        <?php foreach ($empresa as $info): ?>
            <div class="row">
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix" style="color: black;">mode_edit</i>
                        <textarea id="textarea1" class="materialize-textarea" name="sobre"><?php echo $info['sobre']; ?></textarea>
                        <label for="input_text" class="active">Sobre</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix" style="color: black;">mode_edit</i>
                    <textarea id="textarea2" class="materialize-textarea" name="descricao"><?php echo $info['descricao']; ?></textarea>
                    <label for="input_text" class="active">Descrição</label>
                </div>
            </div>
        <?php endforeach; ?>
        <button class="btn waves-effect waves-light" type="submit">Editar
            <i class="material-icons right">done_all</i>
        </button>
    </form>
</div>