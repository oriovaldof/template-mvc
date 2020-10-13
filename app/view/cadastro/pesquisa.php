<form action="<?php echo DIRPAGE . 'cadastro/pesquisa' ?>" class="form" name="form-seleciona" id="form-seleciona" method="POST">
    Nome: <input type="text" name="nome" id="nome" class="form-control"> <br>
    Sexo: <select name="sexo" id="sexo" class="form-control">
        <option value="">Selecione</option>
        <option value="F">Feminino</option>
        <option value="M">Masculino</option>
    </select> <br>
    Cidade: <input type="text" name="cidade" id="cidade" class="form-control"> <br>

    <button type="submit" class="btn btn-primary" id="btn-pesquisa">Pesquisar</button>
</form>
<br><br>
<hr>
<?php
if (!empty($rsData)) :
?>

    <form action="<?php echo DIRPAGE?>cadastro/deletar" method="post" name="form-deletar" id="form-deletar">
    
        <button type="submit" class="btn  btn-danger">Deletar</button>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <td>Ação</td>
                    <td>Nome</td>
                    <td>Sexo</td>
                    <td>Cidade</td>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($rsData as $data) :
                ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="id[]" id="id" value="<?php echo $data['id'] ?>">
                            <img src="<?php echo DIRIMG?>edit.jpg" alt="editar" class="image-edit" rel="<?php echo $data['id'] ?>" style="width:25px; margin-left: 5px; cursor:pointer">
                        </td>
                        <td><?php echo $data['nome'] ?></td>
                        <td><?php echo $data['sexo'] ?></td>
                        <td><?php echo $data['cidade'] ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </form>
<?php

endif;
?>