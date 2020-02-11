<?php \Classes\ClassLayout::setHeadRestrito(); ?>

<?php \Classes\ClassLayout::setHeadDashboard('Dashboard','Acompanhe as variáveis do sistema'); ?>

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
                <li>
                    <button style="color: white; background-color:red;" id="parada-total">PARADA TOTAL</button>
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
            <a href="<?php echo DIRPAGE.'controllers/controllerLogout'; ?>"><img src="../img/seta_voltar.png"class="sair">SAIR</a>
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
                                <span id="v-temp">0</span>° C

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
                                <span id="v-humi">0</span>° %

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
                                <span id="v-lumi">0</span>%

                            </div>
                            <div class="box-grafico">
                                <canvas id="lumino" width="400" height="400"></canvas>

                            </div>
                        </div>
                    </div>

                    <div class="dashboard-box">
                        <div class="dashboard-box-wrapper">
                            <div class="box-icon">
                                <img src="../img/ph_50per.png">

                            </div>
                            <div class="valor">
                                POTENCIAL DE HIDROGENIO<br>
                                <span id="v-pote">0</span>° %

                            </div>
                            <div class="box-grafico">
                                <canvas id="poten" width="400" height="400"></canvas>

                            </div>
                        </div>
                    </div>
                    <div class="dashboard-box">
                        <div class="dashboard-box-wrapper">
                            <div class="box-icon">
                                <img src="../img/Os2_50per.png">

                            </div>
                            <div class="valor">
                                O2<br>
                                <span id="v-o2">0</span>° %

                            </div>
                            <div class="box-grafico">
                                <canvas id="o2" width="400" height="400"></canvas>

                            </div>
                        </div>
                    </div>

                    <div class="dashboard-box">
                        <div class="dashboard-box-wrapper">
                            <div class="box-icon">
                                <img src="../img/CE_50per.png">

                            </div>
                            <div class="valor">
                                CE<br>
                                <span id="v-ce">0</span>° %

                            </div>
                            <div class="box-grafico">
                                <canvas id="ce" width="400" height="400"></canvas>

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
$html.="<script src='https://canvasjs.com/assets/script/jquery-1.11.1.min.js'></script>";
$html.="<script src='https://canvasjs.com/assets/script/jquery.canvasjs.min.js'></script>";
$html.="<script src='".DIRPAGE."lib/js/menu.js'></script>\n";
$html.="<script src='".DIRPAGE."lib/js/graficos.js'></script>\n";
$html.="<script src='".DIRPAGE."lib/js/guigoweb.js'></script>\n";

$html.="<script src='".DIRPAGE."lib/js/grafico1.js'></script>\n";
$html.="<script src='".DIRPAGE."lib/js/grafico2.js'></script>\n";
$html.="<script src='".DIRPAGE."lib/js/grafico3.js'></script>\n";
echo $html;
?>

<?php \Classes\ClassLayout::setFooter(); ?>