@extends('layouts.app')

@section('content')
<main class="sm:vh-header sm:flex sm:items-center sm:container sm:mx-auto sm:max-w-3xl">
	<section class="lg:my-4 py-4 w-full flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm xl:shadow-lg">
		
		<header class="-mt-4 mb-3 bg-gray-400 rounded-t-sm">
			<h2 class="py-3 font-bold text-xl sm:text-2xl sm:text-center px-6 sm:px-8">
				Registro
			</h2>
		</header>
		

		<form id="login" class="px-6 sm:px-10" method="POST" action="{{ route('register') }}">
			@csrf
			
			<div class="md:my-5 grid grid-flow-row md:grid-cols-2 md:col-gap-4">

				<div class="space-y-6">

					{{-- Nombre(s) --}}
					<div class="flex flex-wrap">
						<label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
								Nombre(s):
						</label>
	
						<input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
								name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						
						<p class="text-red-500 text-sm italic mt-4 hidden">@error('name') {{ $message }} @enderror </p>
					</div>
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
									required
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
									required
								>
								<p class="text-red-500 text-sm italic mt-4 hidden">@error('second-last-name')  {{ $message }} @enderror </p>
							</div>
						</div>
					</div>

					{{-- Telefono --}}
					<div class="flex flex-wrap">
						<label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
							Telefono:
						</label>
		
						<input id="phone" type="text"
							class="form-input w-full @error('phone') border-red-500 @enderror" name="phone"
							required>
		
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
									@error('key-two') border-red-500 @enderror" name="keyTwo"
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
							class="form-input w-full @error('email') border-red-500 @enderror" name="email"
							value="{{ old('email') }}" required autocomplete="email" autofocus>
						
						<p class="text-red-500 text-sm italic mt-4 hidden">@error('email')  {{ $message }} @enderror </p>
					</div>
	
				</div>

				<div class="mt-6 sm:mt-0 space-y-6">
	
					{{-- Calle --}}
					<div class="flex flex-wrap">
						<label for="street" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
							Calle:
						</label>
		
						<input id="street" type="text"
							class="form-input w-full @error('street') border-red-500 @enderror" name="street"
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
							required>
		
						<p class="text-red-500 text-sm italic mt-4 hidden">@error('suburb')  {{ $message }} @enderror </p>
					</div>
	
					{{-- contraseña --}}
					<div class="flex flex-wrap">
						<label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
							Contraseña:
						</label>
		
						<input id="password" type="password"
							class="form-input w-full @error('password') border-red-500 @enderror" 
							name="password"
							required autocomplete="new-password">
		
						<p class="text-red-500 text-sm italic mt-4 hidden">@error('password')  {{ $message }} @enderror </p>
					</div>
					
					{{-- confirmar contraseña --}}
					<div class="flex flex-wrap">
						<label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
								Confirmar contraseña:
						</label>
	
						<input id="password-confirm" type="password" class="form-input w-full"
							name="password_confirmation" required autocomplete="new-password">

						<p class="text-red-500 text-sm italic mt-4 hidden"></p>
				</div>	
				
				
			</div>
			{{-- Submit --}}
			<div class="md:col-start-1 md:col-end-3 flex flex-wrap my-6">
					<button type="submit"
					class="w-full select-none font-bold whitespace-no-wrap rounded py-3 px-7 uppercase text-base leading-normal no-underline text-gray-100 bg-primary hover:bg-cool-gray-900">
							registrarse
					</button>

			</div>

			<div class="md:col-start-1 md:col-end-3 flex flex-wrap mt-4">
				@if (Route::has('login'))
				<p class="text-center mb-4 font-semibold w-full">¿Ya tienes cuenta?</p>
				<p class="text-center cursor-pointer w-full uppercase border rounded py-3 px-7 border-blue-500 bg-white text-blue-500 hover:text-blue-700">
					<a href="{{ route('login') }}" >Iniciar sesión</a>
				</p> 
				@endif
			</div>
		</form>

	</section>
</main>
@endsection

@section('scripts')
	<script type="module" src="{{ asset('js/forms.js') }}"></script>
@endsection