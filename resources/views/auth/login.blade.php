@extends('layouts.app')

@section('content')
<main class="sm:vh-header sm:flex sm:items-center sm:container sm:mx-auto sm:max-w-lg">
	<section class="py-4 w-full flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm xl:shadow-lg">
		
		<header class="-mt-4 mb-3 bg-gray-400 rounded-t-sm">
			<h2 class="py-3 font-bold text-xl sm:text-2xl sm:text-center px-6 sm:px-8">
				Iniciar sesión
			</h2>
		</header>

		<form id="login" class="px-6 space-y-6 sm:px-10" method="POST" action="{{ route('login') }}">
			@csrf
			
			<div class="space-y-6 sm:space-y-8">
				<div class="flex flex-wrap">
					<label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
						Correo:
					</label>
	
					<input id="email" type="email"
						class="form-input w-full @error('email') border-red-500 @enderror" name="email"
						value="{{ old('email') }}" required autocomplete="email" autofocus>
	
					@error('email')
					<p class="text-red-500 text-xs italic mt-4">
						{{ $message }}
					</p>
					@enderror
				</div>
	
				<div class="flex flex-wrap">
					<label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
						Contraseña:
					</label>
	
					<input id="password" type="password"
						class="form-input w-full @error('password') border-red-500 @enderror" name="password"
						required>
	
					@error('password')
					<p class="text-red-500 text-xs italic mt-4">
						{{ $message }}
					</p>
					@enderror
				</div>
	
				<div class="flex items-center">
					<label class="inline-flex items-center text-sm text-gray-700" for="remember">
						<input type="checkbox" name="remember" id="remember" class="form-checkbox"
							{{ old('remember') ? 'checked' : '' }}>
						<span class="ml-2 select-none cursor-pointer">Recuerdame</span>
					</label>
	
				</div>
	
				<div class="flex flex-wrap">
						<button type="submit"
						class="w-full select-none font-bold whitespace-no-wrap rounded py-3 px-7 uppercase text-base leading-normal no-underline text-gray-100 bg-primary hover:bg-cool-gray-900">
								ingresar
						</button>
	
						@if (Route::has('register'))
						<p class="my-5 w-full cursor-pointer text-center text-blue-500 capitalize">
							<a href="{{ route('password.request') }}">
								¿olvidaste tu contraseña?
							</a>
						</p>
						@endif
				</div>
			</div>

			<div class="flex flex-wrap">
				@if (Route::has('register'))
				<p class="text-center mb-4 font-semibold w-full">¿Aún no tienes una cuenta?</p>
				<p class="text-center cursor-pointer w-full uppercase border rounded py-3 px-7 border-blue-500 bg-white text-blue-500 hover:text-blue-700">
					<a href="{{ route('register') }}" >registrarme</a>
				</p> 
				@endif
			</div>
		</form>

	</section>
</main>
@endsection
