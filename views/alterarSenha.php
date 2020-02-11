<?php \Classes\ClassLayout::setHeadRestrito(); ?>

<?php \Classes\ClassLayout::setHead('Dashboard','Acompanhe as variáveis do sistema'); 
$html=" <link rel='stylesheet' href='".DIRPAGE."lib/css/all.css'>\n";
$html.=" <link rel='stylesheet' href='".DIRPAGE."plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css'>\n";
$html.=" <script src='https://cdn.jsdelivr.net/npm/chart.js@2.8.0'></script>\n";
echo $html;
?>

<div class="flex-dashboard">
    <sidebar id="sidebar">
        <div class="sidebar-title">
            <img src="../img/Desktop_Guigó_400px.png">
            <h2>GUIGÓ HYDROPONICS</h2>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <img src="../img/Desktop_Guigó_400px.png">
                    <a href="<?php echo DIRPAGE.'perfil'; ?>">PERFIL</a>
                </li>
                <li>
                    <img src="../img/CE.png">
                    <a href="<?php echo DIRPAGE.'dashboard'; ?>">VARIAVEIS</a>
                </li>
                <li>
                    <img src="../img/temp_50per.png">
                    <a href="<?php echo DIRPAGE.'temperatura'; ?>">TEMPERATURA</a>
                </li>
                <li>
                    <img src="../img/Humidade_50per.png">
                    <a href="<?php echo DIRPAGE.'umidade'; ?>">UMIDADE</a>
                </li>
                <li>
                    <img src="../img/Luminosidade_50per.png">
                    <a href="<?php echo DIRPAGE.'luminosidade'; ?>">LUMINOSIDADE</a>
                </li>
                <li>
                    <img src="../img/ph_50per.png">
                    <a href="<?php echo DIRPAGE.'ph'; ?>">PH</a>
                </li>
                <li>
                    <img src="../img/Os2_50per.png">
                    <a href="<?php echo DIRPAGE.'o2'; ?>">O2</a>
                </li>
                <li>
                    <img src="../img/CE_50per.png">
                    <a href="<?php echo DIRPAGE.'ce'; ?>">CE</a>
                </li>
                <li class="sidebar_logout">
                    <img src="../img/seta_voltar.png">
                    <a href="<?php echo DIRPAGE.'controllers/controllerLogout'; ?>">SAIR</a>
                </li>
            </ul>
        </div>
    </sidebar>
    <main id="mainContent">
        <header>
            <img src="../img/menu_icon.png" class="icon_menu" id="icon_menu" onclick="resposivesidebar()">
            <a href="<?php echo DIRPAGE.'controllers/controllerLogout'; ?>"><img src="../img/seta_voltar.png" class="sair">SAIR</a>                
        </header>
        <div class="main-content">
            <p>ALTERAR SENHA</p>

            <div class="dashboard-content">
                <form name="formAlterarSenha" id="formAlterarSenha" action="<?php echo DIRPAGE.'controllers/controllerAlterarSenha'; ?>" method="post">
                <div class="retornoAltSenha"></div>
                <div class="cadastro float center">
                    Senha atual:<br>
                    <input class="float w100 h40" type="password" id="senha" name="senha" placeholder="Senha atual:" required>
                    <input class="float w100 h40" type="hidden" id="email" name="email" value="<?php echo $_SESSION["email"]; ?>" required>
                    Nova senha:<br>
                    <input class="float w100 h40" type="password" id="novaSenha" name="novaSenha" placeholder="Nova Senha:" required>
                    Confirmação da nova senha:<br>
                    <input class="float w100 h40" type="password" id="novaSenhaConf" name="novaSenhaConf" placeholder="Digite sua nova senha mais uma vez:" required>
                    <input class="inlineBlock h40" type="submit" value="Alterar">
                </div>
            </form>
            <br><a href="<?php echo DIRPAGE.'views/perfil'; ?>">Voltar para o perfil</a>
            </div>
        </div>
    </main>
</div>

<?php \Classes\ClassLayout::setFooter(); ?>