//Renombrar un archivo o directorio

rename("/tmp/archivo_tmp.txt", "/home/user/login/docs/mi_archivo.txt");

//Guarda en el archivo indicado por un path el contenido $_content

function guardar_archivo($archivo, $_content){
		$abrir = fopen($archivo,'w');
		fwrite($abrir,$_content);
		fclose($abrir);
}
