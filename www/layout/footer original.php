<!--
 
 El proximo style hace la carga de los botones desde la url indicada.
 Dichos botones son una unica imagen .png de 144px x 58px.
 Dividiendola en dos de 144 px x 29 px, arriba estan los botones grises y abajo los botones verdes de cada red social.
 Cada boton mide 28.8px x 29px.
 Se presenta primero los botones grises y al hacer hover se muestra el verde, dando la sensacion de cambio de color por pasar el mouse encima.
 Los botones se presentan en una lista no ordenada colocada de manera horizontal.

  -->

<style type="text/css">
ul#iconos {
height: auto;
width: 350px

}
ul#iconos li {
list-style: none;
float: left;
list-style-type: none;
width: 20%;
}
#iconos li a{
width: 28.8px;
height: 29px;
background: url(http://www.subirimagenes.com/imagedata.php?url=http://s2.subirimagenes.com/imagen/9591656pepe.png) no-repeat;
display: block;
}
#iconos li#facebook a{
background-position: 0 0;
}
#iconos li#twitter a {
background-position: -28.8px 0;
}
#iconos li#instagram a {
background-position: -57.6px 0;
}
#iconos li#youtube a {
background-position: -86.4px 0;
}
#iconos li#googleplus a {
background-position: -115.2px 0;
}
#iconos li#facebook a:hover{
background-position: 0 -29px;
}
#iconos li#twitter a:hover {
background-position: -28.8px -29px;
}
#iconos li#instagram a:hover {
background-position: -57.6px -29px;
}
#iconos li#youtube a:hover {
background-position: -86.4px -29px;
}
#iconos li#googleplus a:hover {
background-position: -115.2px -29px;
}
</style>


<!--
 
 Estilo del footer, sin nada que aclarar.
 Lista no ordenada con cada uno de los items.
 Texto de copyright.

  -->


<footer style="bottom: 0;

width: 100%;

height: 20px;">


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: rgba(57, 171, 111, 0.58);padding-top: 17px;padding-bottom: 10px;">

        
        <div style="width: 350px; display: inline-block">
            <ul id="iconos" style="list-style-type: none">

            <li id="facebook"> <a href="http://www.facebook.com/AleeMarinIparraguirre" target="_blank" title="¡Nuestro Facebook!"></a> </li>
            <li id="twitter"> <a href="http://www.twitter.com/AleeMarin" target="_blank" title="¡Nuestro Twitter!"></a> </li>
            <li id="instagram"> <a href="http://www.instagram.com/AleeMarinIparraguirre" target="_blank" title="¡Nuestro Instagram!"></a> </li>
            <li id="youtube"> <a href="http://www.youtube.com" target="_blank" title="¡Nuestro Canal de YouTube!"></a> </li>
            <li id="googleplus"> <a href="http://www.plus.google.com/u/0/+AleeMarinIparraguirre" target="_blank" title="¡Nuestro perfil en Google+!"></a> </li>
            
            </ul>
        </div>
        <div style="padding-left: 10%; display: inline-block">
            <p><strong>Desarrollo web: <a class="sinSub" style="text-decoration: none" href="./index.php?seccion=grupocuatro">Grupo Cuatro</a> 2016&copy; <a class="sinSub" style="text-decoration: none" href="http://www.couchinn.com">CouchInn.com</a></strong></p>
        </div>
        <div style="padding-left: 25%; display: inline-block">
            <p><strong><a class="sinSub" style="text-decoration: none" href="./index.php?seccion=terminosycondiciones">Terminos y Condiciones</a></strong></p>
        </div>
        


           
    </div>

</footer>