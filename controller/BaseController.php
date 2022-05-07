<?php
$config = parse_ini_file("../config.ini");
require_once('../TCPDF/tcpdf_include.php');

/* * GERA O ARQUIVO PDF
* @param String $firstName, Primeiro nome do usuário
* @param String $lastName, Sobrenome do usuário
* @param String $email, Email de contato
* @param String $profile, Breve descrição do usuário
* @param String $company, Nome da empresa que o usuário trabalhou
* @param String $startCompany, Data em que iniciou suas atividades
* @param String $endCompany, Data em que encerrou suas atividades
* @return Document, Download do documento em formato PDF
*/
function buildPDF($firstName, $lastName, $email, $profile, $company, $startCompany, $endCompany){
    global $config;
    // cria uma nova instância da biblioteca com suas configurações iniciais
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // define algumas informações sobre o documento
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor($config['SITE_AUTHOR']);
    $pdf->SetTitle($config['SITE_NAME'].' - Curriculum Vitae');

    // set default header data
    $pdf->SetHeaderData('', 0, PDF_HEADER_TITLE.' '.$firstName, PDF_HEADER_STRING);

    // define algumas propriedades relacionadas a fonte usadas no PDF
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // define as margens e algumas configurações adicionais
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // adiciona uma página
    $pdf->AddPage();

    $html = '<p>
                <h4>Perfil Profissional</h4><br>
                Nome completo: '.$firstName.' '.$lastName.'<br>
                E-mail: '.$email.'<br>
            </p>
            <p>
                <h4>Dados Pessoais</h4><br>
                '.$profile.'
                <br>
            </p>
            <p>
                <h4>Formação Profissional</h4><br>
                Nome da empresa: '.$company.'<br>
                Início: '.$startCompany.' | Saída: '.$endCompany.'<br>
            </p>';
    
    $pdf->writeHTML($html, true, false, true, false, '');

    // define a última página juntamente ao nome do arquivo
    $pdf->lastPage();
    $pdf->Output('PDF_MAKER-'.$firstName.'_'.$lastName.'.pdf', 'I');
}

/* * REMOVE OS CARACTERES DE UMA PALAVRA
* @param String $text, Palavra que será tratada os caracteres especiais
* @return String, Palavra tratada sem acentuação
*/
function cleanString($text) {
    $utf8 = array(
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E',
        '/[óòôõºö]/u'   =>   'o',
        '/[ÓÒÔÕÖ]/u'    =>   'O',
        '/[úùûü]/u'     =>   'u',
        '/[ÚÙÛÜ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/–/'           =>   '-',
        '/[’‘‹›‚]/u'    =>   ' ',
        '/[“”«»„]/u'    =>   ' ',
        '/ /'           =>   ' ',
    );
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
}
?>