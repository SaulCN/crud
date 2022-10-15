<?php
	class crud
    {
        public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into t_Tiket_turno (nombre_tramito,curp,nombre,apellido_P,apellido_M,telefono,celular,correo,nivel,municipio,asunto)
									values ('$datos[0]',
											'$datos[1]',
                                            $datos[2]',
                                            $datos[3]',
                                            $datos[4]',
                                            $datos[5]',
                                            $datos[6]',
                                            $datos[7]',
                                            $datos[8]',
                                            $datos[9]',
											'$datos[10]')";
			return mysqli_query($conexion,$sql);
		}
        public function obtenDatos($id_tiket){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_tiket,
							nombre,
							apellido_P,
							apellido_M,
                            curp
					from t_Tiket_turno
					where id_juego='$id_tiket'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
            $datos=array(
				'id_tiket' => $ver[0],
				'nombre' => $ver[1],
				'apellido_P' => $ver[2],
				'apellido_M' => $ver[3],
                'curp' => $ver[4]
				);
			return $datos;
        }
        public function actualizar($datos)
        {
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_Tiket_turno set nombre='$datos[0]',
										apellido_P='$datos[1]',
										apellido_M='$datos[2]',
                                        telefono='$datos[3]',
                                        celular='$datos[4]',
                                        correo='$datos[5]',
                                        nivel='$datos[6]',
                                        asunto='$datos[7]',
                                        municipio='$datos[8]',
                                        nombre_tramito='$datos[9]',
                                        curp='$datos[10]'
						where id_tiket='$datos[11]'";
			return mysqli_query($conexion,$sql);
		}
        public function eliminar($id_tiket){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_Tiket_turno where id_tiket='$id_tiket'";
			return mysqli_query($conexion,$sql);
		}

    }
?>