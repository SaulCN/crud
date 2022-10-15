<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <title>Ticket de Turno</title>
        <link rel="stylesheet" href=".a{.css">
        <script src="js.js"></script>
        <script src="sweet/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweet/sweetalert2.css">
    </head>
    <body>
        
        <h1><img src="se.png" class="foto1" /><center>Ticket de Turno</center><img src="cuatro.png" class="foto4" /></h1>

        <form id="frmnuevo">
       <p class="b">Nombre completo de quien realize el tramite: <input type="text" class="tx" id="nombrec" placeholder="Text box">     curp: <input type="text" class="tx" id="curp" placeholder="Text box"> </br>
       Nombre: <input type="text" class="tx"id="nombre" placeholder="Text box">   Paterno: <input type="text" class="tx" id="Paterno" placeholder="Text box">    Materno: <input type="text" class="tx"id="Materno" placeholder="Text box"></br>
       Telefono: <input type="text" class="tx" id="Telefono" placeholder="Text box" size="6">   Celular: <input type="text" class="tx" id="Celular" placeholder="Text box" size="6">    Correo: <input type="text" class="tx" id="Correo" placeholder="Text box" size="50"></br>
       ¿nivel al que desea ingresar o que ya cursa el alumno? <select name="combox"class="bx"  id="nda" > <option></option> <option>Kinder</option> <option>Primaria</option> <option>Secundaria</option></select></br> 
       municipio donde desea que estudie el alumno: <select name="combox" class="bx" id="mda"> <option></option> <option>Abasolo</option><option> Acuña</option><option>Allende</option> <option>Areteaga</option> <option>Candela</option> <option>Castañas</option> <option>Cuantro Cienegas</option> <option>Escobedo</option> <option>Fransisco I. Madero</option> <option>Frontera</option> <option>General Cepeda</option> <option>Guerrero</option> <option>Hidalgo</option><option>Jimenez</option><option>Juares</option><option>Lamadrid</option><option>Matamoros</option><option>Moclova</option><option>Morelos</option><option>Musquiz</option><option>Nadadores</option><option>Nava</option><option>Ocampo</option><option>Parras</option><option>Piedras Negras</option><option>Progreso</option><option>Ramos Arizpe</option><option>Sabinas</option><option>Sacramento</option><option>Saltillo</option><option>San Juan</option> <option>San Buenaaventura </option><option>San Pedro</option><option>Siierra Mojada</option><option>Torreon</option><option>Visca</option><option>Vella Union</option><option>Zaragosa</option></select></br> 
       seleccion el asunto que ba a tratar: <select name="combox" class="bx" id="t"> <option></option> <option>inscripcion</option> <option>reinscripcion</option><option>pagos</option><option>otros</option></select></br> </p>
       <center><button id="btn" onclick="vaildacion()" id="btnAgregarnuevo">Generar Turno</button></center>
        </form>
        <p class="a">
            Se requiere un mecanismo de autentificacion del documento </br> <img src="qr.png" class="foto2" />
            Se requiere indicar un numero de turno</br><img src="codigo.png" class="foto3" />
            Se requiere control de oficiona regional </br>
            Se requiere parametrizar la atencion por dias</br>
            Se requiere fener comprobante pdf al usuario</br>
            Se contempla que la mayoria de usaurios movil
        </p>

    </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregarnuevo').click(function(){
			datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"agregar.php",
				success:function(r){
					if(r==1){
						$('#frmnuevo')[0].reset();
						alertify.success("se agrego");
					}else{
						alertify.error("error");
					}
				}
			});
		});

		
	});
</script>


