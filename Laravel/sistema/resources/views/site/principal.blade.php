<style>
  .logo {
    padding-right: 1em;
  }

  .paragrafo {
    overflow-wrap: break-word;


  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="d-flex flex-column min-vh-100" style="background-color:rgba(216, 216, 216, 0.2);">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg  py-3 " style="background-color:rgb(255, 255, 255);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="Bootstrap" width="200" height="50">
      </a>


      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="{{ route('site.principal') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  fs-5" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('site.tecnico') }}">Cursos Técnicos - Modalidade Presencial</a></li>
              <li><a class="dropdown-item" href="{{ route('site.mtec') }}">Ensino Médio integrado ao técnico (M-Tec)</a></li>
              <li><a class="dropdown-item" href="{{ route('site.ams') }}">Articulação dos Ensinos Médio - Técnico e Superior (AMS)</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  fs-5" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Departamentos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('site.secretaria') }}">Secretaria Acadêmica</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="{{ route('site.contato') }}">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbarnavbar-expand-lg " style="background-color:rgb(128, 38, 38);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      </a>
    </div>
  </nav>
  <br><br>

  <div class="container-fluid text-start pb-5">

    <div class="row justify-content-center">

      <div class="col">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/Frente_Etec.png') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Desenvolvimento de Sistemas AMS </h5>
                <p>O candidato que ingressar no curso técnico de Desenvolvimento de Sistemas, na modalidade AMS, poderá
                  prosseguir os estudos em uma Fatec no curso superior de tecnologia em Análise e Desenvolvimento de
                  Sistemas.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/Alunos.png') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Conheça a nossa infraestrutura </h5>
                <p>Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores,
                  notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante
                  a jornada dos estudantes.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br><br>
        <div class="container-fluid">
          <div class="row justify-content-between">

            <div class="col-12 col-md-4 paragrafo pe-4">
              <div class="container text-start text-justify">
                <div class="row">
                  <div class="col">
                    <h3>Oportunidades</h3>
                  </div>
                  <div class="col">
                    <img class="logo" src="{{ asset('img/oportunidade.png') }}" alt="Bootstrap" width="100" height="85">
                  </div>
                </div>
                <hr class="border-3 opacity-100" style="background-color:rgb(0, 0, 0);">
                <br>
                <h4 class="fw-4" style="color:rgba(156, 10, 10, 0.59);">Concurso Público</h4>
                <h4 class="fw-light">Estão em andamento concursos públicos para contratação de 2,7 mil docentes e
                  servidores administrativos para atuar em</h4>
                <h4 class="fw-light">Etecs, Fatecs e na CPS. Os certames foram autorizados em junho de 2022 e as
                  admissões ocorrem em 2023.</h4>
                <br>
                <div class="col">
                  &nbsp;
                  <br>
                  <img src="{{ asset('img/concurso.png') }}" class="" alt="..." width="250" height="250">
                  <br><br>
                  <a href="https://www.cps.sp.gov.br/concursopublico/" class="btn btn-outline-primary">Saiba +</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 paragrafo">
              <div class="container-fluid text-start">
                <div class="row">
                  <div class="col">
                    <h3>Vestibulinho</h3>
                  </div>
                  <div class="col">
                    <img class="logo" src="{{ asset('img/prova.png') }}" alt="Bootstrap" width="100" height="85">
                  </div>
                </div>
                <hr class="border-3 opacity-100" style="background-color:rgb(65, 17, 17);">
                <br>
                <h4 class="fw-4" style="color:rgba(156, 10, 10, 0.59);">O Vestibulhinho das Escolas Técnicas Estaduais
                  Ocorrem de Forma Semestral</h4>
                <h4 class="fw-light">O processo de vestibulinho na ETEC, segue um padrão definido pelo Centro Paula
                  Souza.</h4>
                <h4 class="fw-light">Primeiramente, é divulgado um edital contendo todas as informações essenciais, como
                  datas, locais de prova, cursos oferecidos, requisitos de inscrição e documentação necessária.</h4>
                <br>
                <a href="https://www.vestibulinhoetec.com.br/home/" class="btn btn-outline-primary">Saiba +</a>
              </div>
            </div>

            <div class="col-12 col-md-4 paragrafo">
              <div class="container text-start text-justify">
                <div class="row">
                  <div class="col">
                    <h3>Eventos</h3>
                  </div>
                  <div class="col">
                    <img class="logo" src="{{ asset('img/evento.png') }}" alt="Bootstrap" width="100" height="85">
                  </div>
                </div>
                <hr class="border-3 opacity-100" style="background-color:rgb(0, 0, 0);">
                <br>
                <div class="container text-start text-justify">
                  <div class="row">
                    <h4 class="fw-4" style="color:rgba(156, 10, 10, 0.59);">Feira Tecnológica</h4>
                    <h4 class="fw-light">Nos dias 29 e 30 de novembro acontecerá a Feira Tecnológica da Etec Zona Leste
                    </h4>
                    <h4 class="fw-light">Evento gratuito e aberto ao público dedicado a apresentação dos projetos dos
                      cursos dos eixos de gestão e tecnologia.</h4>
                    <div class="card mt-2" style="width: 20rem;">
                      <img src="{{ asset('img/feira.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Conta com mais de 80 projetos e TCCs desenvolvidos pelos estudantes</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


    </div>
  </div>
  <br><br>
  <nav class="navbarnavbar-expand-lg mt-auto" style="background-color:rgb(128, 38, 38);">
    <br><br>
    <div class="container-fluid">
      <div class="container text-center">
        <div class="row">
          <div class="col" style="border-right: 2px solid white; padding-right: 20px; margin-right: 20px;">
            <h5 class="fw-4" style="color:rgb(255, 255, 255);">Etec da Zona Leste</h5>
            <h6 class="fw-light" style="color:rgb(255, 255, 255);">Avenida Águia de Haia, 2.633 - Cidade AE Carvalho -
              São Paulo/SP - CEP: 03694-000 </h6>
          </div>

          <div class="col" style="border-right: 2px solid white; padding-right: 20px; margin-right: 20px;">
            <h5 class="fw-4" style="color:rgb(255, 255, 255);">Telefone</h5>
            <h6 class="fw-light" style="color:rgb(255, 255, 255);">(11) 2045-4000 / 2045-4016</h6>
          </div>

          <div class="col">
            <h5 class="fw-4" style="color:rgb(255, 255, 255);">Horário de funcionamento:</h5>
            <h6 class="fw-light" style="color:rgb(255, 255, 255);">Seg. a Sex. das 09h às 21h</h6>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </nav>


  </div>


</body>

</html>