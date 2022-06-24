<?php $render('header'); ?>


<h2>Adicionar Novo Usuário</h2>

    <form method="POST" action="<?=$base;?>/novo">
        <fieldset>
            <legend>Cadastro</legend>
                <label for="">
                    Nome:<br>
                    <input type="text" name="name" require/>
                </label>
                <br>
                <label for="">
                    E-mail:<br>
                    <input type="email" name="email" require/>
                </label>
                <br><br>
                <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>

<?php $render('footer'); ?>