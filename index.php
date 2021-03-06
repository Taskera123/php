<?php
$url = "https://hgateway.startpay.com.br/Transacoes/Nova.php"; 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="_css/estilo.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="_font-awesome/css/font-awesome.min.css">
  </head>
  <body>
      <header>
        <a href="index.html"><img src="_img/logo_final.fw.png"></a>
        <nav id="menu">
          <h1>Menu Principal</h1>
          <ul type="disk">
            <li><a href="index.html">Home</a></li>
            <li><a href="admin.html">Cadastro</a></li>
            <li><a href="#">Fotos</a></li>
            <li><i class="fa fa-facebook" aria-hidden="true"><a href="https://www.facebook.com/Aratur/">acebook</a></i></li>
            <li><a href="#">Fale conosco</a></li>
          </ul>
        </nav>
      </header>
      <main class="principal">
        
          <!-- <div id="dest">
            <h1 style="font-family: 'Racing Sans One', cursive;">Destaque</h1>
          </div> -->

          <figure class="foto-legenda">
            <img src="_img/destaque.fw.png" />
            <figcaption>
              <h3>Sobre nós</h3>
              <p>Empresa Aratur Transportes oferece serviços de qualidade no Mato Grosso. Consciente das exigências do mercado e das expectativas de seus clientes, a Aratur Transportes se compromete com a qualidade, oferecendo atendimento personalizado em todo o processo de locação. Além de oferecer moderna Van de turismo para fretamento no estado.</p>
            </figcaption>
          </figure>

          <!-- <article class="box-destaque">
             <div id="info">
                    <h2 style="color:#fff; font-family: Arial; padding-left:25px;">Sobre nós</h2>
                    <p style="color:#fff; font-family: 'Quicksand', sans-serif; margin:10px;">Empresa Aratur Transportes oferece serviços de qualidade no Mato Grosso. Consciente das exigências do mercado e das expectativas de seus clientes, a Aratur Transportes se compromete com a qualidade, oferecendo atendimento personalizado em todo o processo de locação. Além de oferecer moderna Van de turismo para fretamento no estado.</p>
              </div>
          </article> -->
          <div id="sec">
            <h3 style="font-family: 'Racing Sans One', cursive;">Seções</h3>
          </div>
          <section>
             <div id="caixa-1">
                <p id="one" style="font-family: 'Racing Sans One', cursive;">Viagens</p>
                <img src="_img/caixa1.png">
                <p style="font-family: 'Quicksand', sans-serif; margin:10px;">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
             </div>
             <div id="caixa-2">
                <p id="two" style="font-family: 'Racing Sans One', cursive;">Parceiro</p>
                <img id="partner" src="_img/partner.jpg">
                <p style="font-family: 'Quicksand', sans-serif; margin:10px;">Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes.</p>

             </div>
             <div id="caixa-3">
                <p id="tree" style="font-family: 'Racing Sans One', cursive;">Comunicação</p>
                <p style="font-family: 'Quicksand', sans-serif; margin:10px;">É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação.</p>
             </div>
          </section>
          <footer style="font-family: 'Open Sans', sans-serif; color:white;">
            
          </footer>
      </main>
  </body>
</html>
