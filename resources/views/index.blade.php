@extends('layouts.app')

@section('content')
  <div id="wrapper" class="px-4 py-4 xl:px-8">
    <h1 class="text-3xl font-bold">Usuarios</h1>
    <form class="flex my-3" action="{{ route('search') }}" method="GET">
      <input required name="search" value="{{ request()->input('search', old('search')) }}" type="text" class="form-input w-full pr-13" placeholder="Buscar usuario">
      <button type="submit" class="-ml-14 rounded-md px-2 cursor-pointer text-white bg-blue-700">Buscar</button>
      <select name="option" class="form-select cursor-pointer w-28 ml-2">
        <option value="name" {{ request()->input('option') == 'name' ? 'selected' : '' }} >Nombre</option>
        <option value="key" {{ request()->input('option') == 'key' ? 'selected' : '' }}>Clave</option>
      </select>
    </form>
  
  <section class="grid grid-cols-1 row-gap-3 lg:grid-cols-2 lg:col-gap-5">

    <article class="md:flex md:p-0 bg-gray-200 shadow-md py-2 px-2 rounded-xl overflow-hidden">
      <img class="w-32 h-32 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" " width="384" height="512" src="https://res.cloudinary.com/dsqonpjii/image/upload/v1616189134/rbfgrhbocj2lxaloypmz.jpg" alt="avatar">
      <div class="p-3 text-cyan-600 w-full md:text-lg md:flex md:flex-col">
        <p><strong class="md:text-lg italic">Nombre:</strong> Jasan Hernández Bautista</p>
        <p><strong class="md:text-lg italic">Clave 1:</strong> 202509844</p>
        <p><strong class="md:text-lg italic">Clave 2:</strong> HT05M040L05MFK0</p>
        <p><strong class="md:text-lg italic">Dirección:</strong> Avenida 12 sur, Los Heroes de Puebla, Puebla </p>
        <p><strong class="md:text-lg italic">Teléfono:</strong> 2334</p>
      </div>
    </article>
   
    {{-- <article class="md:flex md:p-0 bg-gray-200 shadow-md py-2 px-2 rounded-xl overflow-hidden">
      <img class="w-32 h-32 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" " width="384" height="512" src="https://res.cloudinary.com/dsqonpjii/image/upload/v1616189134/rbfgrhbocj2lxaloypmz.jpg" alt="avatar">
      <div class="p-3 text-cyan-600 w-full md:text-lg md:flex md:flex-col">
        <p><strong class="md:text-lg italic">Nombre:</strong> Jasan Hernández Bautista</p>
        <p><strong class="md:text-lg italic">Clave 1:</strong> 202509844</p>
        <p><strong class="md:text-lg italic">Clave 2:</strong> HT05M040L05MFK0</p>
        <p><strong class="md:text-lg italic">Dirección:</strong> Avenida 12 sur, Los Heroes de Puebla, Puebla </p>
        <p><strong class="md:text-lg italic">Teléfono:</strong> 2224365860</p>
      </div>
    </article> --}}
   
    {{-- <article class="flex bg-gray-200 shadow-md py-2 px-2 rounded-md">
      <figure class="rounded-full bg-blue-700 min-w-max-content w-14 h-14">
        <img class="rounded-full object-cover w-14 h-14" src="https://res.cloudinary.com/dsqonpjii/image/upload/v1616189134/rbfgrhbocj2lxaloypmz.jpg" alt="avatar">
      </figure>
      <div class="p-2">
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
    </article> --}}

    @foreach ($users as $user)
      <article class="md:flex md:p-0 bg-gray-200 shadow-md py-2 px-2 rounded-xl overflow-hidden">
        <img class="w-32 h-32 md:w-48 md:h-48 md:rounded-none rounded-full mx-auto object-fill" " width="384" height="512" src="{{ $user->get_image }}" alt="avatar">
        <div class="p-3 text-cyan-600 w-full md:text-lg md:flex md:flex-col">
          <p><strong class="md:text-lg italic">Nombre:</strong>  {{ $user->name}}, {{ $user->last_name }}, {{ $user->second_last_name }} </p>
          <p><strong class="md:text-lg italic">Clave 1:</strong> {{ $user->key_one }}</p>
          <p><strong class="md:text-lg italic">Clave 2:</strong> {{ $user->key_two }}</p>
          <p><strong class="md:text-lg italic">Dirección:</strong> {{ $user->street }}, {{ $user->outdoor_number }}, {{ $user->interior_number }}, {{ $user->suburb }}</p>
          <p><strong class="md:text-lg italic">Teléfono:</strong> {{ $user->phone }}</p>
        </div>
      </article>
    @endforeach
    {{ $users->links() }}

  </section>
  </div>
@endsection