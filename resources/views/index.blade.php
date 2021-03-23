@extends('layouts.app')

@section('content')
  <div class="px-4 py-4">
    <h1 class="text-3xl font-bold">Usuarios</h1>
    <form class="flex my-3" action="" method="GET">
      <input type="text" class="form-input w-full" placeholder="Buscar usuario">
      <button type="submit" class="ml-2 py-3 px-4 cursor-pointer rounded-lg text-white bg-blue-700">Buscar</button>
    </form>
  
  <section class="grid grid-cols-1 row-gap-3">

    <article class="flex bg-gray-200 shadow-md py-2 px-2 rounded-md">
      <figure class="rounded-full bg-blue-700 min-w-max-content w-12 h-12">
        <img class="rounded-full object-cover w-12 h-12" src="https://res.cloudinary.com/dsqonpjii/image/upload/v1616189134/rbfgrhbocj2lxaloypmz.jpg" alt="avatar">
      </figure>
      <div class="ml-1">
        <p><strong>Nombre:</strong> Jasan Hernández Bautista</p>
        <div class="grid col-gap-3 grid-flow-col">
          <p><strong>Clave 1:</strong> 202509844</p>
          <p><strong>Clave 2:</strong> HT05M040L05MFK0</p>
        </div>
        <p><strong>Calle:</strong> Avenida 12 sur</p>
        <p><strong>Colonia:</strong> Los Heroes de Puebla</p>
        <p><strong>Ciudad:</strong> Puebla de Zaragoza</p>
        <p><strong>Telefono:</strong> 2224365860</p>
      </div>
    </article>
    
    <article class="flex bg-gray-200 shadow-md py-2 px-2 rounded-md">
      <figure class="rounded-full bg-blue-700 min-w-max-content w-12 h-12">
        <img class="rounded-full object-cover w-12 h-12" src="https://res.cloudinary.com/dsqonpjii/image/upload/v1616189134/rbfgrhbocj2lxaloypmz.jpg" alt="avatar">
      </figure>
      <div class="ml-1">
        <p><strong>Nombre:</strong> Jasan Hernández Bautista</p>
        <div class="grid col-gap-3 grid-flow-col">
          <p><strong>Clave 1:</strong> 202509844</p>
          <p><strong>Clave 2:</strong> HT05M040L05MFK0</p>
        </div>
        <p><strong>Calle:</strong> Avenida 12 sur</p>
        <p><strong>Colonia:</strong> Los Heroes de Puebla</p>
        <p><strong>Ciudad:</strong> Puebla de Zaragoza</p>
        <p><strong>Telefono:</strong> 2224365860</p>
      </div>
    </article>

  </section>
  </div>
@endsection