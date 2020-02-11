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
                                <img src="../img/CE_50per.png">

                            </div>
                            <div class="valor">
                                <span id="name-v">CE</span><br>
                                <span id="value-var">0</span>° %

                            </div>
                            <div class="box-grafico">
                                <canvas id="graph" width="400" height="400"></canvas>

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
$html.="<script src='".DIRPAGE."lib/js/page.js'></script>\n";

echo $html;
?>
<script>
    var ctx = document.getElementById('graph').getContext('2d');
    var chart1 = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [],
            datasets: [{
                label: '',
                borderColor: 'rgb(35, 107, 35)',
                data: []
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<?php \Classes\ClassLayout::setFooter(); ?>