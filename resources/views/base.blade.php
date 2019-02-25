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
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/sidebar1.css">
    @yield('cssextra')
    @section('cssfondo')
        <style>
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
              margin-top: 180px;
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


        #button 
        {
        font: 700 1em Tahoma, Arial, Verdana, sans-serif;
        color: #59B0E5; background-color: #fff;
        border: 1px solid #0074a5;
        border-top: 1px solid #004370;
        border-left: 1px solid #004370;
        width: 400px;
        height: 70px;
        margin-bottom: -15px;            
        margin-top: 20px; 
        margin-left: 1067px;
        border-radius:10px;
        cursor: pointer;
        }

        #button 
        {
        width: auto; /* ie */
        overflow: visible; /* ie */
        padding: 3px 8px 2px 6px; /* ie */
        }   

        #button[type] 
        {
        padding: 2px 8px 4px 6px; /* firefox */
        }



        #buttonface
        {
        font: 700 1em Tahoma, Arial, Verdana, sans-serif;
        color: #fff; background-color: #3C5AA9;
        border: 1px solid #0074a5;
        border-top: 1px solid #004370;
        border-left: 1px solid #004370;
        width: 380px;
        height: 70px;
        margin-bottom: -15px;             
        margin-left: 1055px;
        border-radius:10px;
        cursor: pointer;
        }

        #buttonface 
        {
        width: auto; /* ie */
        overflow: visible; /* ie */
        padding: -1px -1px -1px -1px; /* ie */
        }   

        #buttonface[type] 
        {
        padding: 4px 8px 4px 6px; /* firefox */
        }
        </style>
    @show
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

<!--
<form action="{{ url("/face") }}" method="GET">
<div id="usuario">
<input type=image src="img/btnface.PNG" id="btnall">
</div>
</form>
-->
<!--
<form action="{{ url("/contacto") }}" method="GET">
<div>
<input type=image src="img/btngoogle.gif" id="btnall" >  
<br><br>
<p id="parr">No publicaremos nada sin tu autorización</p>
<br>
</div>
</form>
-->



<form action="{{ url("/face") }}" method="GET">
<button type="submit" class="btn" id="buttonface"><img src="img/face.PNG" alt="x" />Iniciar Sesión con Facebook</button>
</form>


<form action="{{ url("/google") }}" method="GET">
<button type="submit" class="btn" id="button"><img src="img/btngoogle - copia.PNG" alt="x" />   Iniciar Sesión con Google</button>
<br><br>
<p id="parr">No publicaremos nada sin tu autorización</p>
</form>

<br>

<form action="{{ url("/contacto") }}" method="GET">
<div>
  <button id="btnred" type="button" class="btn btn-danger">Inicia Sesión con tu correo</button>
</div>
</form>



</body>
</html>