<?php $render('header'); ?>



<table border="1" width="100%">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach($usuarios as $usuarios): ?>
        <tr>
            <td> <?=$usuarios['id']; ?> </td>
            <td> <?=$usuarios['nome']; ?> </td>
            <td> <?=$usuarios['email']; ?> </td>
            <td>  
                <a href="<?=$base;?>/usuario/<?=$usuarios['id'];?>/update">
                 <img src="<?=$base;?>/assets/images/document.png" alt="">
                </a>
                <a href="<?=$base;?>/usuario/<?=$usuarios['id'];?>/delete" onclick= "return confirm('Deseja excluir ?');">
                    <img src="<?=$base;?>/assets/images/trash.png" alt="">
                </a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>


</body>
</html>

<?php $render('footer'); ?>