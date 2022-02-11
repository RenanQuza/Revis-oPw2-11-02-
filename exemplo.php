<?php
    session_start();
    if(isset($_SESSION['exemplo'])){
        print '<p>Exemplo salvo em sessão: ' . $_SESSION['exemplo'] . '</p>';
    }else{?>
        <p>Não existe exemplo na sessão</p>
<?php
    }
    if(isset($_REQUEST['exemplo']))
        $exemplo = $_REQUEST['exemplo'];
    else
        $exemplo = 'Matheus';
    $_SESSION['exemplo'] = $exemplo;
?>
    <p>Novo exemplo recebido pela requisição: <?php echo $exemplo?></p>


<?php
    if(isset($_SESSION['numero'])){
        print '<p>Numero salvo em sessão: ' . $_SESSION['numero'] . '</p>';
    }else{?>
        <p>Não existe numero na sessão</p>
<?php
    }
    if(isset($_REQUEST['numero']))
        $numero = $_REQUEST['numero'];
    else
        $numero = '16';
    $_SESSION['numero'] = $numero;
?>
     <p>Novo numero recebido pela requisição: <?php echo $numero?></p>
