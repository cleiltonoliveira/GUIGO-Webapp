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
                    <a href="<?php echo DIRPAGE.'views/perfil'; ?>">PERFIL</a>
                </li>
                <li>
                    <img src="../img/CE.png">
                    <a href="#">VARIAVEIS</a>
                </li>
                <li>
                    <img src="../img/temp_50per.png">
                    <a href="#">TEMPERATURA</a>
                </li>
                <li>
                    <img src="../img/Humidade_50per.png">
                    <a href="#">UMIDADE</a>
                </li>
                <li>
                    <img src="../img/Luminosidade_50per.png">
                    <a href="#">LUMINOSIDADE</a>
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
            <a href="<?php echo DIRPAGE.'controllers/controllerLogout'; ?>"><img src="../img/seta_voltar.png"
                    class="sair">SAIR</a>

        </header>
        <div class="main-content">
            <p>PERFIL</p>

            <div class="dashboard-content">
                <form name="formAlterarPerfil" id="formAlterarPerfil"
                    action="<?php echo DIRPAGE.'controllers/controllerPerfil'; ?>" method="post">
                    <div class="retornoAltPerfil"></div>
                    <div class="cadastro float center">
                        Nome do Usuário:<br>
                        <input class="float w100 h40" type="text" id="nome" name="nome" placeholder="Nome:"
                            value="<?php echo $_SESSION["name"]; ?>" required>
                        Email:<br>
                        <input class="float w100 h40" type="email" id="novoEmail" name="novoEmail" placeholder="Email:"
                            value="<?php echo $_SESSION["email"]; ?>" required>
                        <input class="float w100 h40" type="hidden" id="email" name="email"
                            value="<?php echo $_SESSION["email"]; ?>" required>
                        <input class="inlineBlock h40" type="submit" value="Alterar">
                    </div>
                </form>
                <br><a href="<?php echo DIRPAGE.'views/alterarSenha'; ?>">Alterar a senha</a>
            </div>
        </div>
    </main>
</div>

<?php \Classes\ClassLayout::setFooter(); ?>