function crearDirectorio($ruta){
	if(!file_exists($ruta))
	{
	mkdir ($ruta);
	} 
}
