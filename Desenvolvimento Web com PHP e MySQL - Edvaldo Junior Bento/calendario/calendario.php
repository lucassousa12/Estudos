<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calendário</title>
</head>
<body>
    <section class="corpo">
        <div class="cumprimento">
            <h1>
                Olá
                <?php
                    $hora_atual = date('G');
                    if ( ($hora_atual > 6) && ($hora_atual < 12 )) {
                        echo "Bom Dia,";
                    }   elseif (($hora_atual > 12 ) && ($hora_atual < 18 )) {
                            echo "Boa Tarde,";
                        }   elseif(($hora_atual > 18) || ($hora_atual < 6 )){
                                echo "Boa Noite,";
                            }
                ?>
                Tudo Bem?
            </h1>
            <h2>
                São exatamente 
                <?php echo date('H'); ?>
                horas
                <?php echo date('i'); ?>
                minutos.
            </h2>
        </div>
        <section class="calendarios">
            <?php
        
                $mes_atual = date('n');
                $dia_atual = date('j');
                $compara_mes;
                $mes = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
                function tabela($i){
                    global $mes_atual, $mes, $compara_mes;
        
                    echo "
                        <section class='tabelas'>
                        ";
                    if ($mes_atual == ($i+1)) {
                        echo "<div class = 'meses atual'>";
                        $compara_mes = true;
                    } else {
                        echo "<div class = 'meses'>";
                        $compara_mes = false;
                    }
                    echo "
                            {$mes[$i]}
                            </div>
                            <table class='table'>
                            <tr>
                                <th class='cedula'>Seg</th>
                                <th class='cedula'>Ter</th>
                                <th class='cedula'>Qua</th>
                                <th class='cedula'>Qui</th>
                                <th class='cedula'>Sex</th>
                                <th class='cedula'>Sáb</th>
                                <th class='cedula'>Dom</th>
                            </tr>
                    ";
                    calendario();
                    echo "
                            </table>
                        </section>
                    ";
                }
                function linha($semana) {
                    global $compara_mes, $dia_atual;
                    echo "<tr>";
                    for($i = 0; $i <= 6; $i++) {
                        if(isset($semana[$i])){
                        //Verifica se dia atual e o mês atual corresponde à tabela.
                            if(($dia_atual == $semana[$i]) && $compara_mes){
                                echo "<td class = 'cedula atual'>{$semana[$i]}</td>";
                            } else {
                            echo "<td class = 'cedula ";
                        // Adiciona uma classe domingo à cédulas da coluna de Domingo.
                            if($semana[$i]%7 == 0){
                                echo "domingo";
                            }
                            echo " '>{$semana[$i]}</td>";
                            }
                        } else {
                            echo "<td class = 'cedula'></td>";
                        }
                    }
                    echo "</td>";
                }
                function calendario() {
                    $dia = 1;
                    $semana = array();
                    while($dia <=31){
                        array_push($semana,$dia);
        
                        if(count($semana) == 7){
                            linha($semana);
                            $semana = array();
                        }
                        $dia++;
                    }
                    linha($semana);
                }
                for($i = 0; $i <= 11; $i++){
                    tabela($i);
                }
        
            ?>
        </section>
    </section>
</body>
</html>