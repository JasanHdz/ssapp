@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto md:grid md:grid-cols-3">
  <div class="md:col-start-1 md:col-end-2 my-5">
    <img class="md:h-auto object-cover" src="{{ $user->get_image }}" alt="{{ $user->name }}" width="350" height="350">
  </div>
  <form class="md:col-start-2 md:col-end-4" method="POST" action="{{ route('register') }}">
    @csrf
    
    <div class="md:my-5 grid grid-flow-row md:grid-cols-2 md:col-gap-4">

      <div class="space-y-6">

        {{-- Nombre(s) --}}
        <div class="flex flex-wrap">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
              Nombre(s):
          </label>

          <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
              name="name" value="{{ $user->name }}" disabled autocomplete="name">
          
          <p class="text-red-500 text-sm italic mt-4 hidden">@error('name') {{ $message }} @enderror </p>
        </div>

        {{-- Telefono --}}
        <div class="flex flex-wrap">
          <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            Telefono:
          </label>
  
          <input id="phone" type="text"
            class="form-input w-full @error('phone') border-red-500 @enderror" 
            name="phone"
            value="{{ $user->phone }}"
            required
          >
  
            <p class="text-red-500 text-sm italic mt-4 hidden">@error('phone')  {{ $message }} @enderror </p>
        </div>

        {{-- Claves --}}
        <div class="grid grid-cols-2 col-gap-2">
          <div>
            <label for="key-one" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Clave 1</label>
            <div>
              <input 
                id="key-one" 
                type="text"
                class="form-input w-full 
                @error('key-one') border-red-500 @enderror" name="keyOne"
                value="{{ $user->key_one }}"
                required
              >
              <p class="text-red-500 text-sm italic mt-4 hidden">@error('key-one')  {{ $message }} @enderror </p>
            </div>
          </div>
          
          <div>
            <label for="key-two" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Clave 2</label>
            <div>
              <input 
                id="key-two" 
                type="text"
                class="form-input w-full 
                @error('key-two') border-red-500 @enderror" 
                name="keyTwo"
                value="{{ $user->key_two }}"
                required
              >
              <p class="text-red-500 text-sm italic mt-4 hidden">@error('key-two')  {{ $message }} @enderror </p>
            </div>
          </div>
        </div>

        {{-- Correo --}}
        <div class="flex flex-wrap">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            Correo:
          </label>
  
          <input id="email" type="email"
            class="form-input w-full @error('email') border-red-500 @enderror" 
            name="email"
            value="{{ $user->email}}"  
            disabled
          >
          
          <p class="text-red-500 text-sm italic mt-4 hidden">@error('email')  {{ $message }} @enderror </p>
        </div>

      </div>

      <div class="mt-6 sm:mt-0 space-y-6">

        {{-- Apellidos --}}
        <div class="grid grid-cols-2 col-gap-2">
          <div class="">
            <label for="last-name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Apellido Paterno</label>
            <div>
              <input 
                id="last-name" 
                type="text"
                class="form-input w-full 
                @error('last-name') border-red-500 @enderror" name="lastName"
                value="{{ $user->last_name }}"
                disabled
              >
              <p class="text-red-500 text-sm italic mt-4 hidden">@error('last-name') {{ $message }} @enderror </p>
            </div>
          </div>
          
          <div class="">
            <label for="second-last-name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Apellido Materno</label>
            <div>
              <input 
                id="second-last-name" 
                type="text"
                class="form-input w-full 
                @error('second-last-name') border-red-500 @enderror" name="secondLastName"
                value="{{ $user->second_last_name }}"
                disabled
              >
              <p class="text-red-500 text-sm italic mt-4 hidden">@error('second-last-name')  {{ $message }} @enderror </p>
            </div>
          </div>
        </div>

        {{-- Calle --}}
        <div class="flex flex-wrap">
          <label for="street" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            Calle:
          </label>
  
          <input id="street" type="text"
            class="form-input w-full @error('street') border-red-500 @enderror" 
            name="street"
            value="{{ $user->street }}"
            required>

          <p class="text-red-500 text-sm italic mt-4 hidden">@error('street')  {{ $message }} @enderror </p>
        </div>
        
        {{-- Números --}}
        <div class="grid grid-cols-2 col-gap-2">
          <div>
            <label for="outdoor" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Exterior</label>
            <div>
              <input 
                id="outdoor" 
                type="text"
                class="form-input w-full 
                @error('outdoor') border-red-500 @enderror" 
                name="outdoor"
                value="{{ $user->outdoor_number }}"
                required
              >
              <p class="text-red-500 text-sm italic mt-4 hidden">@error('outdoor')  {{ $message }} @enderror </p>
            </div>
          </div>
          
          <div>
            <label for="interior" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Interior</label>
            <div>
              <input 
                id="interior" 
                type="text"
                class="form-input w-full 
                @error('interior') border-red-500 @enderror" 
                name="interior"
                value="{{ $user->interior_number }}"
              >
              <p class="text-red-500 text-sm italic mt-4 hidden">@error('interior')  {{ $message }} @enderror </p>
            </div>
          </div>
        </div>

        {{-- ciudad --}}
        <div class="flex flex-wrap">
          <label for="suburb" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
            Colonia:
          </label>
  
          <input id="suburb" type="text"
            class="form-input w-full @error('suburb') border-red-500 @enderror" 
            name="suburb"
            value="{{ $user->suburb }}"
            required
          >
  
          <p class="text-red-500 text-sm italic mt-4 hidden">@error('suburb')  {{ $message }} @enderror </p>
        </div>      
      
    </div>
    {{-- Submit --}}
    <div class="md:col-start-1 md:col-end-3 flex flex-wrap my-6">
        <button type="submit"
        class="w-full select-none font-bold whitespace-no-wrap rounded py-3 px-7 uppercase text-base leading-normal no-underline text-gray-100 bg-primary hover:bg-cool-gray-900">
            Actualizar
        </button>

    </div>
  </form>
</main>
@endsection
