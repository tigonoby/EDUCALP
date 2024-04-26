<!DOCTYPE html>
<html lang="es">
<head>
  <title>EducALP</title>
  <meta charset="utf-8">
    
    <link rel="stylesheet" href="css2/estilos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/anim.js"></script>
    
</head>
<body>
    

<?php include('header.php') ?>

                <!--- \\\\\\\Post-->
                  <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Hacer una Punblicación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Subir Archivo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">Enviar</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Subir imagen</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">Compartir</button>
                            </div>
                            <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Publico</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Amigos</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Privado</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@Anita</div>
                                    <div class="h7 text-muted">Competitiva</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuracion</div>
                                        <a class="dropdown-item" href="#">Guardar</a>
                        
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Trabajo en Equipo grado 11</h5>
                        </a>

                        <p class="card-text">
                            neccesito un equipo para mi trabajo de ciencias, ¿alguien se apunta?.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> A punto</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Commentar</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                    </div>
                </div>
                <!-- Post /////-->


                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@Pepe</div>
                                    <div class="h7 text-muted">Compañerista</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuracion</div>
                                        <a class="dropdown-item" href="#">guardar</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 20 min ago</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title"> Trabajo de mateticas</h5>
                        </a>

                        <p class="card-text">
                          las guias de mateticas que pusieron la semana pasada, por si a alguien se le perdio. Puntuame :).
                        <div>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                            <span class="badge badge-primary">imagen.jpg</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> A punto</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Commentar</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                    </div>
                </div>
                <!-- Post /////-->


                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@Carlos</div>
                                    <div class="h7 text-muted">Profesor</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuracion</div>
                                        <a class="dropdown-item" href="#">Guardar</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 40 min</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Guias semana de refuerzo</h5>
                        </a>

                        <p class="card-text">
                          Buenas tardes muchachos, les envio el link para que puedan descargar las presentes
                            guias de la semana 22, si alguien tiene problemas me comenta. OK
                            <a href="https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU" target="_blank">https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> A punto</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Commentar</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                    </div>
                </div>
                <!-- Post /////-->

                

            </div>
            
            
            <div class="col-md-3">
               
          
              
              
                <div class="card gedf-card">
                        <div class="card-body">
                            <div class="modal-meta-top">
              <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <div class="img-poster clearfix">
                  
                <a href=""><img class="img-circle" src="https://s-media-cache-ak0.pinimg.com/736x/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.jpg"/ alt=" 24px" width="20px"></a>
                 
                <strong><a href="">ADRIANA  HERNANDEZ</a></strong>
                
                   <img src="img/seleccionar.png" alt="26px" width="20px">
              </div>
                        </div>
                    </div>
            </div>
                
                
                
          
                <div class="card gedf-card">
                        <div class="card-body">
                            <div class="modal-meta-top">
              <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <div class="img-poster clearfix">
                  
                <a href=""><img class="img-circle" src="https://s-media-cache-ak0.pinimg.com/736x/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.jpg"/ alt=" 24px" width="20px"></a>
                  
                <strong><a href="">ALEXANDER CARVAJAL</a></strong>
                    <img src="img/seleccionar.png" alt="26px" width="20px">
                  
              </div>
                        </div>
                    </div>
            </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <div class="modal-meta-top">
              <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <div class="img-poster clearfix">
                  
                <a href=""><img class="img-circle" src="https://s-media-cache-ak0.pinimg.com/736x/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.jpg"/ alt=" 24px" width="20px"></a>
                  
                <strong><a href="">CAMILO VILLAMIZAR</a></strong>
                <span>2 hace minutos</span>
                  
              </div>
                        </div>
                    </div>
            </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <div class="modal-meta-top">
              <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <div class="img-poster clearfix">
                  
                <a href=""><img class="img-circle" src="https://s-media-cache-ak0.pinimg.com/736x/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.jpg"/ alt=" 24px" width="20px"></a>
                  
                <strong><a href="">CAROL RUCHINA GOMEZ </a></strong>
                           <img src="img/seleccionar.png" alt="26px" width="20px">
                  
              </div>
                        </div>
                    </div>
            </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <div class="modal-meta-top">
              <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <div class="img-poster clearfix">
                  
                <a href=""><img class="img-circle" src="https://s-media-cache-ak0.pinimg.com/736x/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.jpg"/ alt=" 24px" width="20px"></a>
                  
                <strong><a href="">GABRIEL FELIPE  MORENO</a></strong>
                       <img src="img/seleccionar.png" alt="26px" width="20px">
                  
              </div>
                        </div>
                    </div>
            </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <div class="modal-meta-top">
              <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <div class="img-poster clearfix">
                  
                <a href=""><img class="img-circle" src="https://s-media-cache-ak0.pinimg.com/736x/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.jpg"/ alt=" 24px" width="20px"></a>
                  
                <strong><a href="">HUGO ANDRÉS VARGAS</a></strong>
                <span>20 Hace Minutos</span>
                  
              </div>
                        </div>
                    </div>
            </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <div class="modal-meta-top">
              <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <div class="img-poster clearfix">
                  
                <a href=""><img class="img-circle" src="https://s-media-cache-ak0.pinimg.com/736x/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.jpg"/ alt=" 24px" width="20px"></a>
                  
                <strong><a href="">IVÁN DAVID BURBANO</a></strong>
                       <img src="img/seleccionar.png" alt="26px" width="20px">
                  
              </div>
                        </div>
                    </div>
            </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <div class="modal-meta-top">
              <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <div class="img-poster clearfix">
                  
                <a href=""><img class="img-circle" src="https://s-media-cache-ak0.pinimg.com/736x/3b/7d/6f/3b7d6f60e2d450b899c322266fc6edfd.jpg"/ alt=" 24px" width="20px"></a>
                  
                <strong><a href="">JENNY VIVIANA MONCALEANO</a></strong>
                <span>12 minutes ago</span>
                  
                  
                  
              </div>
                                
                                
                        </div>
                    </div>
            </div>
                
        </div>
            
    </div>
        
input tupue texto si eno es tpue silueta im ma
           
        
        
 
    
   

</nav>

</body>
</html>

  

  