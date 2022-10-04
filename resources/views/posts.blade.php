@extends('layouts.app')
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Home</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">    
    <link href="http://dominio.com/hoja-de-estilos.css" rel="stylesheet" type="text/css"/>    
  </head>  
  <body>    
    <header>
    @section('content')  
      <h1>Pagina Para mostrar al estar iniciado</h1>    
      
      @endsection
    </header>    
  </body>  
</html>