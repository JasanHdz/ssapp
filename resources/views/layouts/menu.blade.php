<section class="sticky top-0 right-0 left-0 bg-primary text-white">
  <div class="px-4 py-4 xl:px-8 flex justify-between items-center">
    <div class="uppercase bg-gray-400 py-2 px-5">
      <a href="{{ url('/') }}">logo</a>
    </div>
    <input class="hidden" type="checkbox" id="toogle-button" name="active">
    <label for="toogle-button" class="cursor-pointer select-none z-10" id="toogle">
      <svg id="open" class="fill-current" xmlns="http://www.w3.org/2000/svg" height="27" viewBox="0 0 24 24" width="27"><path d="M0 0h24v24H0z" fill="none" /><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" /></svg>
      <svg id="close" class="hidden fill-current text-cool-gray-800" xmlns="http://www.w3.org/2000/svg" height="27" viewBox="0 0 24 24" width="27"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>
    </label>
    <div id="overlay" class="invisible z-4 fixed left-0 right-0 top-0 bottom-0 bg-black opacity-50"></div>
    
    <nav
      id="navigation" 
      class="z-5 box-border pt-4 pr-4 pb-12 pl-4 bg-white absolute top-0 right-0 bottom-0 w-72 h-screen flex flex-col justify-between transform translate-x-72"
    >
      <ul>
        <div class="mb-4 uppercase w-min-content bg-primary py-2 px-5">logo</div>
        <div class="-mx-4">
          <li class="{{ Request::is('/') ? 'text-blue-500' : '' }} cursor-pointer p-4 text-cool-gray-900 hover:bg-gray-300">
            <a class="flex items-center" href="">
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg>
              <span class="ml-2 uppercase">Dashboard</span>
            </a>
          </li>
          <li class="{{ Request::is('/perfil') ? 'text-blue-500' : '' }}cursor-pointer p-4 text-cool-gray-900 hover:bg-gray-300">
            <a href="" class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
              <span class="ml-2 uppercase">Perfil</span>
            </a>
          </li>
        </div>
      </ul>

      <div class="grid row-gap-4">
        <a href="{{ route('login') }}" class="text-center cursor-pointer rounded bg-primary text-cool-white py-3 px-16">Iniciar sesión</a>
        <a href="{{ route('logout') }}" class="text-center cursor-pointer rounded border border-blue-500 text-blue-500 text-cool-white py-3 px-16">Registrarse</a>
      </div>

    </nav>

  </div>
</section>
