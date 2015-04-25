<?php



$fp = fopen('arquivo.txt', 'w');
$quebraLinha =   "\r\n";
fwrite($fp, "Nome Arquivo: " . $_POST['nome_arquivo'] . $quebraLinha );
fwrite($fp, "Tipo: " . $_POST['tipo'] . $quebraLinha );
fwrite($fp, "URL: " . $_POST['url_arquivo'] . $quebraLinha );
fclose($fp);

 header("location: index.html");
exit;





