
<div class="row" style="margin-bottom: 0px;">
    <div class="col s12" style="float: right;">
        <a class="waves-effect waves-light btn" style="float: right; margin-top: 15px;" href="<?php echo BASE; ?>/doces/cadastrar"><i class="material-icons right">add</i>Cadastrar</a>
    </div>

</div>


<?php if (!empty($doces)): ?>
    <table class="striped centered" >
        <thead>

            <tr>
                <th>Número</th>
                <th>Nome</th>
                <th>Editar/Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $n = 1;
            $total = 0;
            foreach ($doces as $doce):
                ?>
                <tr id="exluirDoce">
                    <td class="nome"><?php
                        echo $n;
                        $n++;
                        ?></td>
                    <td class="nome"><?php echo $doce['nome']; ?></td>
                    <td >
                        <a class="btn-floating btn-small waves-effect waves-light light-green" title="Editar <?php echo $doce['nome'];?>" href="<?php echo BASE; ?>/doces/editar/<?php echo $doce['idDoce']; ?>"><i class="material-icons">mode_edit</i></a>
                        <a class="btn-floating btn-small waves-effect waves-light red lighten-2"  title="Excluir <?php echo $doce['nome'];?>" onclick="excluirDoce('<?php echo $doce['idDoce']; ?>', this)" ><i class="material-icons">trending_down</i></a>
                    </td>
                </tr>

                <?php
                $total++;
            endforeach;
            ?>
        <p>Total: <?php echo $total; ?></p>

    </table>
    </tbody>
 
<?php else: ?>
    <h5>Não existem registros para serem exibidos. Que tal cadastrar um doce agora?</h5>
<?php endif; ?>

