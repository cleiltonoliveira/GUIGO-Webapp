<?php
namespace Traits;

trait TraitParseUrl{

    #Criar um array com a url digitada pelo usuário
    public static function parseUrl($par=null)
    {
        #explode — Divide uma string em strings
        #o primeiro argumento é o caractere divisor
        #o segundo argumento é justamente a string que a função exploda vai dividir e formar um array
        #rtrim — Retira espaço em branco (ou outros caracteres) do final da string
        #o $_GET["url"] vem do .HTACCESS, é o primeiro parâmetro da função rtrim, uma string que foi digitada depois da barra
        #o segundo parâmetro é o charlist, onde você pode especificar os caracteres que você deseja retirar
        #simplesmente liste todos os caracteres que você quer ver retirados. 
        #o segundo parãmetro tem o FILTER_SANITIZE_URL, é um filtro que tira todos os caracteres não permitidos em urls 
        $url=explode("/",rtrim($_GET['url'],FILTER_SANITIZE_URL));
        #se o parâmetro for nulo, retorna o array inteiro, mas se for especificado um parâmetro, a função vai retornar a string daquele ìndice específico que foi solicitado
        return($par == null)?$url:$url[$par];
    }
}