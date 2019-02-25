<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/js/highcharts.js"></script>
    <script src="/js/modules/exporting.js"></script>
    <script src="/js/modules/offline-exporting.js"></script>
    <script src="/js/dropzone.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/sidebar1.css">    

<script type="text/javascript">
$(document).ready(function () {
  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#contrasena').attr('type', 'text');
    } else {
      $('#contrasena').attr('type', 'password');
    }
  });
});
</script>

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
            #imgoo2
            {                
               margin-left: 80px;
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
              width: 490px;
              height: 500px;                
              margin-left: 5px;  
              margin-top:10px;
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
            #button 
        {
        font: 700 1em Tahoma, Arial, Verdana, sans-serif;
        color: #59B0E5; background-color: #fff;        
        width: 300px;
        height: 50px;
        margin-bottom: 1000px;  
        margin-left: 197px;
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
        </style>
    
    <title>Media Manzana2</title>
    
</head>
<body>


  <div class="modal-dialog" >
    <div class="modal-content">      
      <div class="modal-body" id="contorno">

        <img src="img/logoogle.PNG" id="imgoo">


        <img src="img/cuenta.PNG" id="imgoo2">
        <p class="modal-body" id="us">Para continuar, primero debes verificar que eres tú</p>

        <!--<input id="input"class="form-control"  placeholder="Escribe tu usuario">-->
        <form action="" method="post" id="frmLogin">  
  <div class="form-group">
    <div class="form-row">
      <div class="col">        
        <input name="usuario_password" type="password" value="" class="form-control" id="contrasena">
      </div>
      <div class="col">
        <label for="password"></label>
        <!-- checkbox que nos permite activar o desactivar la opcion -->
        <div style="margin-top:15px;">
          <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
          &nbsp;&nbsp;Mostrar Contraseña</div>
      </div>
    </div>
  </div>
  <button type="submit" class="btn" id="button"><img src="img/verpass.PNG" alt="x" /></button>
  <!--
  <div class="form-check">
    <input type="checkbox" name="remember" id="remember" class="form-check-input"/>
    <label for="remember-me">Recordarme</label>
  </div>
  <div class="form-group">
    <input type="submit" name="login" value="Iniciar Sesión"
          class="btn btn-primary">
  </div>
  -->
</form>      
        <p class="modal-body" id="corr">¿Olvidaste la contraseña?</p>
        <br>        
        <button id="btnred" type="button" class="btn btn-danger">Siguiente</button>
        
                    
      </div>
    </div>
  </div>
</div>



</body>
</html>