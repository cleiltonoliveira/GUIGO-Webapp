<?php \Classes\ClassLayout::setHead("Homepage","Página inicial do site contendo os links para cadastro e login") ?>
    
    <body class="bodyHomepage">
        <main class="mainHomepage">
            <div class="logo">
                
                <a href="<?php echo DIRPAGE.'login'; ?>"><button>Login</button></a>
                <a href="<?php echo DIRPAGE.'cadastro'; ?>"><button>Cadastro</button></a>
               
                <img src ="img/logopequenaguigo.png" alt="Imagem da logo " height="550" >
               
            </div>
           
        </main>
       
    </body>

<?php \Classes\ClassLayout::setFooter() ?>

