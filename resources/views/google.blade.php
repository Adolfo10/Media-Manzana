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
        <style>
            #input
            {
                margin-top: -450px;
                margin-left: 10px;
                width: 450px;
                height: 60px;                
                
            }
            #imgoo
            {                
               margin-left: 160px;
            } 
            #contorno
            {
                width: 365px;
                height: 500px;
            } 
            #acc
            {                
              font-size: 30px;
              margin-top: 30px;
              margin-left: 170px;  
              margin-bottom: -15px;
            }
            #us
            {                      
              color: #1c0d02;      
              width: 300px;
              height: 500px;                
              margin-left: 100px;  
            } 
            #corr
            {                      
              color: #0A5BFE;      
              width: 350px;
              height: 500px;              
              margin-left: 0px;  
            } 
            #corr2
            {                      
              color: #D3D4D4;      
              margin-top: -490px;
              width: 410px;
              height: 500px;              
              margin-left: 0px;  
            } 
            #corr3
            {                      
              color: #0A5BFE;      
              margin-top: -457px;
              width: 370px;
              height: 500px;              
              margin-left: 72px;  
            }
            #corr4
            {                      
              color: #0A5BFE;      
              margin-top: -457px;
              width: 370px;
              height: 500px;              
              margin-left: -12px;  
            }   
            #btnred
            {                                          
              background-color:#0A5BFE;
              margin-top: -989px;
              width: 120px;
              height: 40px;              
              margin-left: 335px;  
            }

            body
            {
                background-color: #fff;
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

<form action="{{ url("/regoogle") }}" method="GET">
  <div class="modal-dialog" >
    <div class="modal-content">      
      <div class="modal-body" id="contorno">

        <img src="img/logoogle.PNG" id="imgoo">


        <h5 class="modal-title" id="acc">Acceder</h5>
        <p class="modal-body" id="us">Usa tu cucenta de Google</p>

        <input id="input"class="form-control"  placeholder="Escribe tu usuario">
        
        
        <p class="modal-body" id="corr">¿Olvidaste el Correo Electrónico?</p>
        <br>
        <p class="modal-body" id="corr2">¿Esta no es tu computadora? Usa el modo de invitado para navegar de forma Privada.</p>
        <p class="modal-body" id="corr3">Más información</p>        
      
        <p class="modal-body" id="corr4">Crear cuenta</p>

        <button id="btnred" type="submit" class="btn btn-danger">Siguiente</button>
        
                    
      </div>
    </div>
  </div>
</div>
</form>


</body>
</html>