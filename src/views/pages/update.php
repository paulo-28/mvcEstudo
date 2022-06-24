<?php $render('header'); ?>


<h2>Editar Usuário</h2>

    <form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id']?>/update">
        <fieldset>
            <legend>Cadastro</legend>
                <label for="">
                    Nome:<br>
                    <input type="text" name="name" value="<?=$usuario['nome']?>" require/>
                </label>
                <br>
                <label for="">
                    E-mail:<br>
                    <input type="email" name="email" value="<?=$usuario['email']?>"  require/>
                </label>
                <br><br>
                <input type="submit" value="Salvar" />
        </fieldset>
    </form>

<?php $render('footer'); ?>