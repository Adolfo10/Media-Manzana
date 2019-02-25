<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/highcharts.js"></script>
    <script src="/js/modules/exporting.js"></script>
    <script src="/js/modules/offline-exporting.js"></script>
    <script src="/js/dropzone.js"></script>    
    <link rel="stylesheet" type="text/css" href="css/dropzone.css">

    <script type="text/javascript">
        $(document).ready(function () 
        {            
            $("#success-alert").fadeTo(1500, 500).slideUp(500, function()
            {
            $("#success-alert").slideUp(500);
            });

        });
    </script>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/sidebar1.css">      
        <style>
      #success-alert{
              margin-top: 30px;
              margin-left: 400px;
              width: 420px;
              height: 50px;
                
            }   
      #parr{
                color: #fff;
                margin-bottom: -15px;             
                margin-left: 1000px;
            } 
        #btnall{
                margin-bottom: -15px;             
                margin-left: 1000px;
            } 
             #btnred{
                width: 365px;
                height: 70px;
                margin-bottom: -15px;             
                margin-left: 1000px;
            } 
            body{
                background-image:
                url('img/pareja princial.jpg');
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
                
            }
            #usuario{
                margin-top: 210px
            }
            .titulo{
                margin: auto;
                font-size: 40px;
            }
            @media only screen and (min-width: 800px){
                #abrir{
                    display: none;
                    width: 500px;
                    height: 20px;
                }
                #dismiss{
                    visibility: visible;
                    background-color: yellow;
                }
            }
            
            @media only screen and (max-width: 492px){
                .titulo{
                    font-size: 30px;
                }
            }
            .card{
                background-color: rgb(37, 42, 71);
                max-width: 100%;
            }
            .card-img img{
                max-width: 22rem;
                border-radius: 25px;
            }
        </style>    
    <title>Media Manzana</title>
    
</head>
<body>

<!--
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Media Manzana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      

            <form action="{{ url("/login") }}" method="POST" >
                        {{ csrf_field() }}
                      <div class="form-group">                       
                       <input type=image src="img/Captura.PNG"> 
                      <button class="btn btn-primary" type="submit">Continuar con Facebook</button>
                      </div>
                      <div class="form-group">
                      <input type=image src="img/Captura.PNG">                      
                      </div>
                      <label for="PassUsuario">Nunca publicaremos nada sin tu autorización</label>
                     <button type="submit" class="btn btn-primary form-control" style="padding-left:20px">Iniciar Sesión con tu correo</button>
            </form>       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
-->
                              
<div class="alert alert-success animated shake" role="alert" id="success-alert">
<strong data-caption-animate="fadeInLeftSmall">Te Registraste Correctamente con Facebook</strong>  
</div>                              

<form action="{{ url("/face") }}" method="GET">
<div id="usuario">
<input type=image src="img/btnface.PNG" id="btnall">
</div>
</form>

</body>
</html>

