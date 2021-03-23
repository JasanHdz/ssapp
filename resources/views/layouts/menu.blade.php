<section class="sticky top-0 right-0 left-0 bg-primary text-white">
  <div class="px-4 py-4 flex justify-between items-center">
    <div class="uppercase bg-gray-400 py-2 px-5">
      <a href="{{ url('/') }}">logo</a>
    </div>
    <input class="hidden" type="checkbox" id="toogle-button" name="active">
    <label for="toogle-button" class="z-10">
      <span id="open" class="select-none z-10 text-2xl">&equiv;</span>
      <span id="close" class="hidden select-none z-10 text-2xl text-primary">x</span>
    </label>
    <div id="overlay" class="hidden z-4 fixed left-0 right-0 top-0 bottom-0 bg-black opacity-50"></div>
    
    <nav
      id="navigation" 
      class="z-5 box-border pt-4 pr-4 pb-5 pl-4 bg-white absolute top-0 right-0 bottom-0 w-72 h-screen flex flex-col justify-between hidden transform translate-x-72"
    >
      <div class="uppercase w-min-content bg-primary py-2 px-5">
        logo
      </div>
      <ul class="">
        <li class="text-cool-gray-900 hover:bg-gray-300">
          <a class="flex items-center" href="">
            <span class="-ml-2">Dashboard</span>
          </a>
        </li>
        <li class="text-cool-gray-900 hover:bg-gray-300">
          <a href="">
            <span class="-ml-2">Perfil</span>
          </a>
        </li>
      </ul>
    </nav>
  
  </div>
</section>
