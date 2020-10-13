<a href="<?php echo DIRPAGE . 'cadastro/pesquisa' ?>"   class="btn btn-primary" >Pesquisar</a>
<form action="<?php echo DIRPAGE . 'cadastro/cadastrar' ?>" class="form" name="form-cadastro" id="form-cadastro" method="POST">
    Nome: <input type="text" name="nome" id="nome" class="form-control"> <br>
    Sexo: <select name="sexo" id="sexo" class="form-control">
        <option value="">Selecione</option>
        <option value="F">Feminino</option>
        <option value="M">Masculino</option>
    </select> <br>
    Cidade: <input type="text" name="cidade" id="cidade" class="form-control"> <br>

    <button type="submit"  class="btn btn-success">Cadastrar</button>
</form>
<br><br>
<hr>
