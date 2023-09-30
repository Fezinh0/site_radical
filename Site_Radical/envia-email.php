<?php
    // Montar conteudo do email em uma única variavel (concatenando)
    $conteudo ="<p><b>Nome: </b> $nome </p>";
    $conteudo .="<p><b>E-mail: </b> $email </p>";
    $conteudo .="<p><b>Telefone: </b> $telefone </p>";
    $conteudo .="<p><b>Assunto: </b> $assunto </p>";
    $conteudo .="<p><b>Mensagem: </b> $mensagem </p>";

    // Define o que deverá aparecer no assunto
    $subject = "Contato site  - $assunto"; // (PODE ALTERAR)

    // Email do dominio, é responsável por enviar (DEVE ALTERAR)
    $from = "fernando.oliver0216@gmail.com";   

    // Email de quem será o responsável por receber os contatos (DEVE ALTERAR)
    $to = "fernando.oliver0216@gmail.com";    
       

    // Esconder endereços de e-mails (NÃO ALTERAR)
    $bcc = null;

    // Qualquer destinatário pode ver os endereços de e-mail especificados nos campos To e Cc. (NÃO ALTERAR)
    $cc = ""; 

    // Configurações do cabeçalho da mensagem (NÃO ALTERAR)
    $headers = sprintf( 'Date: %s%s', date( "D, d M Y H:i:s O" ), PHP_EOL );
    $headers .= sprintf( 'Return-Path: %s%s', $from, PHP_EOL );
    $headers .= sprintf( 'To: %s%s', $to, PHP_EOL );
    $headers .= sprintf( 'Cc: %s%s', $cc, PHP_EOL );
    $headers .= sprintf( 'Bcc: %s%s', $bcc, PHP_EOL );
    //$headers .= sprintf( 'From: %s%s', $from, PHP_EOL );
    $headers .= sprintf( 'From: %s%s', $nome."<".$email.">", PHP_EOL );
    //$headers .= sprintf( 'Reply-To: %s%s', $from, PHP_EOL );
    $headers .= sprintf( 'Reply-To: %s%s', $email, PHP_EOL );
    $headers .= sprintf( 'Message-ID: <%s@%s>%s', md5( uniqid( rand( ), true ) ), $_SERVER[ 'HTTP_HOST' ], PHP_EOL );
    $headers .= sprintf( 'X-Priority: %d%s', 3, PHP_EOL );
    $headers .= sprintf( 'X-Mailer: PHP/%s%s', phpversion( ), PHP_EOL );
    $headers .= sprintf( 'Disposition-Notification-To: %s%s', $from, PHP_EOL );
    $headers .= sprintf( 'MIME-Version: 1.0%s', PHP_EOL );
    $headers .= sprintf( 'Content-Transfer-Encoding: 8bit%s', PHP_EOL );
    $headers .= sprintf( 'Content-Type: text/html; charset="utf-8"%s', PHP_EOL );

    // Enviar o e-mail (NÃO ALTERAR)
    mail( null, $subject, $conteudo, $headers );
?>