
//pega os elementos do icone do menu, do sidebar e do main conntent e atribui a variaveis para poder manipulalas
let icon_menu = document.getElementById('icon_menu');
let sidebar = document.getElementById('sidebar');
let mainContent = document.getElementById('mainContent')

let w = window.innerWidth;

//mostra o tamanho da tela no console do navegador
window.addEventListener("resize", () =>{
    w = window.innerWidth;
    console.log(w);
})

/*verifica se o tamanho da tela é menor que 768 para poder ou não colocar o main atras do sidebar,
caso contrario ele verifica se o sidebar está ou não aberto,
se estiver aberto poder fechar e se estiver fechado poder abrir
*/
function resposivesidebar(){
    if(w <= 768){
        if(sidebar.style.left == '-300px'){
            sidebar.style.left ='0px';
        }else{
            sidebar.style.left ='-300px';
        }
    }else{
        if(sidebar.style.display == 'none'){
            sidebar.style.display= 'block'; 
            mainContent.style.width = 'calc(100% - 300px)';
        }else{
            sidebar.style.display= 'none';
            mainContent.style.width = '100%';

        }
        
    }
}