<div class="row">
    <?php foreach ($contato as $info)
        
        ?>
    <form class="col s12 m12 l12" id="empresa" method="POST">
        <div class="row">
            <div class="input-field col s4 m4 l4">
                <input id="rua" type="text" class="validate" name="rua" value="<?php echo $info['rua']; ?>"/>
                <label for="rua" class="active">Rua</label>
            </div>
            <div class="input-field col s4 m4 l4">
                <input id="cidade" type="tel" class="validate" name="cidade" value="<?php echo $info['cidade']; ?>">
                <label for="cidade" class="active">Cidade/Estado</label>
            </div>
            <div class="input-field col s4 m4 l4">
                <input id="complemento" type="tel" class="validate" name="complemento" value="<?php echo $info['complemento']; ?>">
                <label for="complemento" class="active">Complemento</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4 m4 l4 offset-s4 offset-m4 offset-l4" style="margin-top: 28px !important;"> 
                <input id="telefone" type="text" class="validate" name="telefone" value="<?php echo $info['telefone']; ?>">
                <label for="telefone" class="active">Telefone</label>   
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit">Editar
            <i class="material-icons right">done_all</i>
        </button>
    </form>
</div>