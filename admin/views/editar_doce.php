<div class="row" id="empresa">
    <?php if (!empty($mensagem)): ?>
        <div class="row">
            <div id="card-alert" class="card red lighten-5">
                <div class="card-content red-text">
                    <p>Atenção : <?php echo $mensagem; ?></p>
                </div>
            </div>
        </div>

    <?php endif; ?>


    <form class="col s12 m12 l12" method="POST">
        <div class="row">
            <div class="input-field col s12 m12 l12">
                <input id="nomeDoce" type="text" class="validate" name="nomeDoce" value="<?php echo $doces['nome']; ?>">
                <label class="active" for="nomeDoce">Nome do Doce</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="descricao" class="materialize-textarea" name="descricao" ><?php echo $doces['descricao']; ?></textarea>
                <label for="descricao">Descrição</label>
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Foto</span>
                    <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Escolha a foto do doce." name="foto">
                </div>
            </div>
        </div>

        <div class="center-align" >
            <button class="btn waves-effect waves-light " type="submit">Confirmar
                <i class="material-icons right">done_all</i>
            </button>
        </div>

    </form>

</div>