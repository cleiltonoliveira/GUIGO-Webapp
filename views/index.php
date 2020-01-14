<?php \Classes\ClassLayout::setHead("Homepage","Página inicial do site contendo os links para cadastro e login") ?>
    
    <h1>Homepage</h1>
    <a href="<?php echo DIRPAGE.'cadastro'; ?>">Cadastro</a><br>
    <a href="<?php echo DIRPAGE.'login'; ?>">Login</a><br>

<?php \Classes\ClassLayout::setFooter() ?>
<?php
    $teste=new Models\ClassConexao();
    var_dump($teste->conectaDB());
?>
