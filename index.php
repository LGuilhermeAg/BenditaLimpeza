<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

    <title>Bendita Limpeza - Serviços e Conservação</title>
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-32x32.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/cssi.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer>
        window.onload = function() {stickyNav()};
        window.onscroll = function() {stickyNav()};

        var header = document.getElementById("header");
        var nav = document.getElementById("Nav");
        var logo = document.getElementById("Logo");
        var sec2 = document.getElementById("section2");
        var sticky = header.offsetTop;

        function stickyNav() {
          //if (window.pageYOffset > sticky) {
            // header.classList.add("navbar1");
            // header.classList.remove("navbar");
            // nav.classList.add("nav1");
            // nav.classList.remove("nav");
            // logo.classList.add("logo1");
            // logo.classList.remove("logo");
            // sec2.style.marginTop = '75vh';
            // header.style.transition= '1s';
          //} else {
            // header.classList.remove("navbar1");
            // header.classList.add("navbar");
            // nav.classList.remove("nav1");
            // nav.classList.add("nav");
            // logo.classList.remove("logo1");
            // logo.classList.add("logo");
            // sec2.style.marginTop = '150vh';
            // header.style.transition= '1.5s';
          //}
        }
        </script>
    
</head>
<body class="bg-placeholder">

    <!--
<button onclick="document.getElementById('id01').style.display='block'"
class="w3-button">Open Modal</button>

<-- The Modal -
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <p>Some text in the Modal..</p>
      <p>Some text in the Modal..</p>
    </div>
  </div>
</div>


    -->
    <div class="navbar1" id="header" style="z-index:12">
        <a class="logo1" href="#" id="Logo">Bendita Limpeza</a>
        <ul class="nav1" id="Nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#section2">About</a></li>
            <li><a href="#section4">Portfolio</a></li>
            <li><a href="#section3">Service</a></li>
            <li><a href="#contact" onclick="document.getElementById('id01').style.display='block'">Contact</a></li>
        </ul>
    </div>
     <!-- <div class="navbar" id="header">
        <a class="logo" href="#" id="Logo">Bendita Limpeza</a>
        <ul class="nav" id="Nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#section2">About</a></li>
            <li><a href="#section4">Portfolio</a></li>
            <li><a href="#section3">Service</a></li>
            <li><a href="#contact" onclick="document.getElementById('id01').style.display='block'">Contact</a></li>
        </ul>
    </div>  -->

    


    <!-- The Modal -->
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <span onclick="document.getElementById('id01').style.display='none'"
          class="w3-button w3-display-topright">&times;</span>
        <div class="container" style="margin: 15vh 0 15vh">
        
                            <center>
                                <h2>Alguma dúvida que não conseguiu encontrar?</h2>
                                <h4>Entre em contato conosco!</h4>
                                <hr style="margin: 5px 0px 0px 0px">
                                <form class="form-group" style="max-width: 70%">
                                    <div class="row" style="margin-top: 15px">
                                        <div class="col-sm-6">
                                            <input type="name" name="nome" class="form-control" placeholder="Nome...">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" name="email" class="form-control" placeholder="e-mail">
                                        </div>
                                    </div>                        
                                    <input type="text" name="assunto" class="form-control" placeholder="Assunto..." style="margin-top: 15px">
                                    <textarea id="conteudo" name="conteudo" rows="5" cols="50" class="form-control" placeholder="Escreva sua mensagem..." style="margin-top: 15px"></textarea>
                                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 15px">Enviar para o e-mail</button>
                                </form>  
                            </center>
                        </div> </div>                   
                
            </div> 
        </div>
      </div>
    </div>
    

    <!-- <section id="section1">
        <div style="background-image: linear-gradient(to bottom right,rgba(0,0,0,0),rgba(0,0,0,0),white,white);margin-top: -25vh;padding-top: 25vh">
            <div class="container" style="padding: 5vh 0 5vh 0">
                <div class="row">
                    <div class="col-md-8">
                        
                    </div>
                    <div class="col-md-4">
                        <h1>BENDITA LIMPEZA</h1>
                        <h2>João Monlevade</h2>
                        <h3>Serviços e Conservação</h3><br>
                        <p>🧹 Limpeza e Higienização residencial</p>
                        <p>🏪 Limpeza comercial</p>
                        <p>🏗️ Limpeza pós obra</p>
                        <p>👕 Serviços de passadoria</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <div class="top-container">
      <h1>Scroll Down</h1>
      <p>Scroll down to see the sticky effect.</p>
    </div> -->

    <section id="section1">
        <div class="" id="" style="display: none;align-items: center;justify-content: center;align-self: center;">
            <h1 class="" href="" id="" style="">Bendita Limpeza</h1>
            <ul class="" id="">
                <li><a href="#home">Home</a></li>
                <li><a href="#section2">About</a></li>
                <li><a href="#section4">Portfolio</a></li>
                <li><a href="#section3">Service</a></li>
                <li><a href="#contact" onclick="document.getElementById('id01').style.display='block'">Contact</a></li>
            </ul>
        </div>
        <!-- <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4" style="padding-top: 20vh;text-align: right;">
                <h1 style="font-weight: bolder;color: white;font-size: 5em;margin-right: 20%;">Bendita<br>Limpeza</h1>
            </div>
        </div> -->
        <div class="waveSpacer layer1"></div>
    </section>

    <section id="section2">

        <div class="container" style="padding: 20vh 20vh 20vh 20vh;">
            <div class="row" style="">
                <div class="col-md-3">
                    <center>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                        <h3>
                            Limpeza e Higienização Residencial
                        </h3>
                        <p>Limpeza e higiene gerais da sua casa ou apartamento!</p> -->
                        <div class="card1">
                            <div class="imgBx">
                                <img src="https://unsplash.it/200/200">
                            </div>
                            <div class="content">
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                </p>
                                <a href="">Saiba Mais</a>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-3">
                    <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        <h3>
                            Limpeza <br>Comercial
                        </h3>
                        <p>Atenderemos a todas as necessidades da sua instalação!</p>
                    </center>
                </div>
                <div class="col-md-3">
                    <!-- <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
                            <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
                        </svg>
                        <h3>
                            Limpeza <br>Pós-Obra
                        </h3>
                        <p>Realizando uma reforma ou construção? Conte com a gente para deixar o local perfeito para funcionamento!</p>
                    </center> -->

                    <div class="card-novo"> 
                        <div class="cont"> 
                            <h2>Limpeza Pós Obra</h2>
                            <p>Realizando uma reforma ou construção? Conte com a gente para deixar o local perfeito para funcionamento!</p>
                            <a class="btn-card">Saiba Mais</a>
                        </div>  
                    </div> 
                    
                </div>
                <div class="col-md-3" id="card">
                    <center>
                        <svg id="passadoria" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-inboxes" viewBox="0 0 16 16">
                            <path d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562A.5.5 0 0 0 1.884 9h12.234a.5.5 0 0 0 .496-.438L14.933 6zM3.809.563A1.5 1.5 0 0 1 4.981 0h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438l.32-2.562H10.45a2.5 2.5 0 0 1-4.9 0H1.066z"/>
                        </svg>
                        <h3>
                            Serviços de <br>Passadoria
                        </h3>
                        <p>Nossa passadoria garante que qualquer tecido fique impecável a tempo do próximo uso!</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="waveSpacer layer2"></div>
    </section>
    
    <section id="section4">
        <div class="faq" style="">
            <div>
                <center>
                    <h1>Perguntas Frequentes</h1>
                    <hr style="width: 25%">
                </center>
            </div>
            <!-- <div id="accordion">
                <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Pergunta 1
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                </div>
                <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Pergunta 2
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                </div>
                <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Pergunta 3
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading5">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                          Pergunta 5
                        </button>
                      </h5>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading6">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                          Pergunta 6
                        </button>
                      </h5>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading7">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                          Pergunta 7
                        </button>
                      </h5>
                    </div>
                    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading8">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                          Pergunta 8
                        </button>
                      </h5>
                    </div>
                    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading9">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree">
                          Pergunta 9
                        </button>
                      </h5>
                    </div>
                    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading10">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseThree">
                          Pergunta 10
                        </button>
                      </h5>
                    </div>
                    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                </div>
                </div> -->

                <button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align" style="box-shadow: 0px 0 5px  lightgrey; text-align: center !important; background-color: white !important; color: black !important">Os produtos são de procedência?</button>
                <div id="Demo1" class="w3-hide">
                  <div class="w3-container">
                    <p>Oferecemos produtos das melhores fábricas da industria de limpeza, pelo melhor preço!</p>
                  </div>
                </div>
                <button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align"  style="text-align: center !important; box-shadow: 0px 0 5px  lightgrey;background-color: white !important; color: black !important">Os produtos são de fabricação própria ou revenda?</button>
                <div id="Demo2" class="w3-hide">
                  <a href="#" class="w3-button w3-block w3-left-align">Link 1</a>
                  <a href="#" class="w3-button w3-block w3-left-align">Link 2</a>
                  <a href="#" class="w3-button w3-block w3-left-align">Link 3</a>
                </div>
                <button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align" style="text-align: center !important; box-shadow: 0px 0 5px  lightgrey;background-color: white !important; color: black !important">Em que região a Apuro Limpeza atende?</button>
                <div id="Demo3" class="w3-hide w3-black">
                  <div class="w3-container">
                    <p>Accordion with Images:</p>
                    <img src="img_snowtops.jpg" style="width:30%;" class="w3-animate-zoom">
                    <p>French Alps</p>
                  </div>
                </div>
                <center><button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style="background-image: linear-gradient(to bottom right, pink, violet) !important; font-weight: 100;padding: 5px 25px 5px 25px;margin-top: 50px">Ver Mais</button></center>



            <!-- <div class="row">
                <div class="col-md-7">
                    <div id="l1">
                        <h3><b>Pergunta 1</b></h3>
                        <hr style="width: 10vw;text-align:left;margin: 10px 0 20px 0">
                        <button class="btn btn-secondary" style="margin:0">Ver mais</button>
                        <p style="display: none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div id="l2">
                        <h3><b>Pergunta 2</b></h3>
                        <hr style="width: 10vw;text-align:left;margin: 10px 0 20px 0">
                        <button class="btn btn-secondary" style="margin:0">Ver mais</button>
                        <p style="display: none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div id="l3">
                        <h3><b>Pergunta 3</b></h3>
                        <hr style="width: 10vw;text-align:left;margin: 10px 0 20px 0">
                        <button class="btn btn-secondary" style="margin:0">Ver mais</button>
                        <p style="display: none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div id="l4">
                        <h3><b>Pergunta 4</b></h3>
                        <hr style="width: 10vw;text-align:left;margin: 10px 0 20px 0">
                        <button class="btn btn-secondary" style="margin:0">Ver mais</button>
                        <p style="display: none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                    <div id="l5">
                        <h3><b>Pergunta 5</b></h3>
                        <hr style="width: 10vw;text-align:left;margin: 10px 0 20px 0">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <center>
                        <h2>Alguma dúvida que não conseguiu encontrar?</h2>
                        <h4>Entre em contato conosco!</h4>
                        <hr style="margin: 5px 0px 0px 0px">
                        <form class="form-group">
                            <div class="row" style="margin-top: 15px">
                                <div class="col-sm-6">
                                    <input type="name" name="nome" class="form-control" placeholder="Nome...">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control" placeholder="e-mail">
                                </div>
                            </div>                        
                            <input type="text" name="assunto" class="form-control" placeholder="Assunto..." style="margin-top: 15px">
                            <textarea id="conteudo" name="conteudo" rows="5" cols="50" class="form-control" placeholder="Escreva sua mensagem..." style="margin-top: 15px"></textarea>
                            <button type="submit" class="btn btn-primary btn-block" style="margin-top: 15px">Enviar para o e-mail</button>
                        </form> 
                        <hr>  
                    </center>
                    <div class="row">
                        <div class="col-sm-6">
                            <div style="text-align: right;">
                                <h5>Telefone:</h5>
                                <h5 style="margin-bottom: 25px">Endereço:</h5>
                                <h5>Horário de funcionamento:</h5>
                                <h5>email:</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div style="text-align: left;">
                                <h5>(31) 99457-6780</h5>
                                <h5>R. Doná Guiguita, 127 - B. Sta. Bárbara | João Monlevade</h5>
                                <h5>Seg. - Sex. | 07:00 - 18:00</h5>
                                <h5>benditalimpeza@gmail.com</h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div> -->


        </div>
        <div class="sidebar">
            <h1>Alguma dúvida restante?</h1>
            <a>Veja mais respostas</a>
            <h2> ou </h2>
            <button class="btn-block"  onclick="document.getElementById('id01').style.display='block'"> Entre em contato"</button>
        </div>
        <!-- <a href="faq.php"><button class="btnsimor">Clique para ver mais</button></a> -->
<div class="waveSpacer layer1" style="z-index:1"></div>
    </section>

    <section id="section3">
        <div class="container">
            <center>
                <h1>Siga-nos</h1>
                <h3>E acompanhe todos os nossos conteúdos!</h3>
                <hr style="width: 15%">
                <div class="row">
                    <div class="col-md-4" id="insta1">
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CK9zlNrr4fP/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);max-height: 75vh">
                            <div style="padding:8px;"> 
                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> 
                                    <div style=" display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                        
                                    </div>
                                </div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicaÃ§Ã£o compartilhada por </a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime=""></time></p>
                            </div>
                        </blockquote> 
                        <script async defer src="//www.instagram.com/embed.js"></script>
                    </div>
                    <div class="col-md-4" id="insta2">
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CKRR4zeLQge/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);max-height: 75vh">
                            <div style="padding:8px;"> 
                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> 
                                    <div style=" display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                        
                                    </div>
                                </div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicaÃ§Ã£o compartilhada por </a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime=""></time></p>
                            </div>
                        </blockquote> 
                        <script async defer src="//www.i nstagram.com/embed.js"></script>
                    </div>
                    <div class="col-md-4" id="insta3">
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instag ram.com/p/CKMUqJpLhpB/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);max-height: 75vh">
                            <div style="padding:8px;"> 
                                <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> 
                                    <div style=" display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                                        
                                    </div>
                                </div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicaÃ§Ã£o compartilhada por </a> em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime=""></time></p>
                            </div>
                        </blockquote> 
                        <script async defer src="//www.inst agram.com/embed.js"></script>
                    </div>
                </div>
            </center>
        </div>
    </section>
















    <!-- <footer id="footer" class="">
    <div class="containerr">
      
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <a class="color_red subir" href="#home"><img src="lib/img/Cima.png" style="border-radius:15%;float:right;" height="45px"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 final_text" text-align="left">
          <img src="img/bendita.jpg" height="168" class="image image-responsive" style="position: relative;margin-left:25%">
        </div>
        <div class="col-sm-4 final_text" text-align="left">
          <p class="p2 p_margin">endereco</p>
          <p class="rodapefone">31 9 9999 9999</p>
          <hr>

        </div>
        <div class="col-sm-4 final_text" text-align="left">
          <p class="p2 p_margin" ><span id="maior_fonte">Siga-nos</span><br>E fique por dentro de tudo que acontece:</p>
          <a href="" target="_blank"><img src="lib/img/inst.png" class="rodape_social image image-responsive img_rodape_social" alt="Siga-nos no Instagram"></a>
          <a href="" target="_blank"><img src="lib/img/face.png" class="image image-responsive img_rodape_social" alt="Siga-nos no Facebook!"></a>
          
        </div>
      </div>
      <hr>
      <div class="contornada">
      <div class="container">
        <center>
          <p class="lastline lastbr">&copy Todos os direitos reservados |&nbsp&nbsp </a></p> 
        </center>
      </div>
    </div>
    </div>
    
  </footer> -->

  




<div style="background-color: #f0f0f0;">
    <h2 class="w3-center">Nos Acompanhe!</h2>
    <div class="w3-center">
      <br>
      <a class="w3-button " style="border-bottom: 2px solid lightblue;">Facebook</a>
      <a class="w3-button" href="https://instagram.com/apurolimpeza" target="_blank" style="border-bottom: 2px solid violet;">Instagram</a>
      <br><br>
      </div>
    <br>
</div>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16" style="background-image: linear-gradient(to top right, var(--azulEscuro), var(--azulClaro));color: black !important;">
    <center><h3>Bendita Limpeza</h3></center>
  <center><p>A Escolha de Quem Entende de Limpeza.<a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p></center>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    
    <a class="w3-text-white" href="#section1"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <center><a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank" style="margin-right: -2.25%">Faça um Pedido Agora</a></center>
</footer>






<script>

function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}




var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();


function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}


</script>


</body>
</html>