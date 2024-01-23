<?php 

// Com esse Função substitui todos os requires
spl_autoload_register(function (string $nomeCompletoDaClasse){
    //Alura\Banco\Modelo\Endereco ($nomeCompletoDaClasse)
    //src/Modelo/Endereco.php tem que transformar
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    // Assim serve tanto pra windows como Linux
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    // Se esse arquivo existir vai da um require nele
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});