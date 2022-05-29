<?php
$filePath = 'config.ini';
$newParams = ['ENVIRONMENT' => 'development'];

/** UPDATE THE .INI FILE
 * @param Array $params * Um array com os dados a serem inseridos/atualizados
 * @param String $filePath * Uma string do arquivo e diretorio do .ini
**/
function update_ini_file($params, $filePath) {
    // verifica se o arquivo .ini existe, se não é criado com base no "example"
    if (!file_exists($filePath)){
        $content = "";
        $example = parse_ini_file('config_example.ini');
        foreach($example as $key => $values){
            $content .= $key ."=". $values . "\n";
        }
        file_put_contents($filePath, $content);
    }
    
    $content = "";
    $config = parse_ini_file($filePath);
    
    // recupera cada parametro passado pelo usuário e atribui ao array para "Nova Configuração"
    foreach($params as $key => $values){
        $config[$key] = $values;
    }
    // transforma o array em uma string para ser atribuida ao documento
    foreach($config as $key => $values){
        $content .= $key ."=". $values . "\n";
    }

    // abre o arquivo e com a variavel verifica se foi possível executar a ação
    if (!$handle = fopen($filePath, 'w')) {
        return false;
    }
    // finalmente atribui o novo conteúdo e exibi o status da operação
    echo '<title>Contruindo arquivo de configuração</title><style>.center{text-align:center;}.marginT{margin-top:50px;}.link{text-decoration:none;color:inherit}.link:hover{color:#DC4955}</style>';
    if (fwrite($handle, $content)){
        echo '<h4 class="center marginT">O arquivo "<i>'.$filePath.'</i>" foi configurado com sucesso!</h4><h4 class="center"><a class="link" href="./">Página Inicial</a></h4>'; 
    } else {
        echo '<h4 class="center marginT">Houve um erro ao configurar "<i>'.$filePath.'</i>"!<br>Tente executar a rotina novamente <a class="link" href="./build_ini_file.php">aqui</a>!</h4>'; 
    }
    fclose($handle);
}

update_ini_file($newParams, $filePath);