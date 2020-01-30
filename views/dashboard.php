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
            <p>DASHBOARD</p>


            <div class="dashboard-content">
                <div class="dashboard-flex-parent">


                    <div class="dashboard-box">
                        <div class="dashboard-box-wrapper">
                            <div class="box-icon">
                                <img src="../img/temp_50per.png">

                            </div>
                            <div class="valor">
                                TEMPERATURA<br>
                                30° C

                            </div>
                            <div class="box-grafico">
                                <canvas id="temp" width="100" height="100"></canvas>

                            </div>
                        </div>
                    </div>

                    <div class="dashboard-box">
                        <div class="dashboard-box-wrapper">
                            <div class="box-icon">
                                <img src="../img/Humidade_50per.png">

                            </div>
                            <div class="valor">
                                UMIDADE<br>
                                30° %

                            </div>
                            <div class="box-grafico">
                                <canvas id="humild" width="400" height="400"></canvas>

                            </div>
                        </div>
                    </div>

                    <div class="dashboard-box">
                        <div class="dashboard-box-wrapper">
                            <div class="box-icon">
                                <img src="../img/Luminosidade_50per.png">

                            </div>
                            <div class="valor">
                                LUMINOSIDADE<br>
                                20%

                            </div>
                            <div class="box-grafico">
                                <canvas id="lumino" width="400" height="400"></canvas>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
</div>
<?php
$html="<script src='".DIRPAGE."plugins/bootstrap-4.4.1-dist/js/bootstrap.min.js'></script>\n";
$html.="<script src='".DIRPAGE."lib/js/menu.js'></script>\n";
$html.="<script src='".DIRPAGE."lib/js/grafico1.js'></script>\n";
$html.="<script src='".DIRPAGE."lib/js/grafico2.js'></script>\n";
$html.="<script src='".DIRPAGE."lib/js/grafico3.js'></script>\n";
echo $html;
?>
<?php \Classes\ClassLayout::setFooter(); ?>