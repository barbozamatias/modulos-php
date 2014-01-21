function abrirArchivo($_path){
		// Abrir el archivo
		$archivo = $_path;
		$abrir = fopen($archivo,'r+');
		$contenido = fread($abrir,filesize($archivo));
		fclose($abrir);
		return $contenido;
}
	
	
	
	
	echo abrirArchivo('user.txt');
