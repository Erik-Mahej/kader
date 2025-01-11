<html lang="cs">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Kadeřnictví - Služby
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body::before {
     content: '';
     background-image: url('/img/mrblbg.png');
     background-size: cover;
     background-attachment: fixed;
     position: fixed;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     z-index: -1;
     opacity: 0.5;
   }
  </style>
 </head>
 <body class="font-roboto bg-gray-100">
  <!-- Navigační lišta -->
  <nav class="bg-white shadow-md">
   <div class="container mx-auto px-4 py-4 flex justify-between items-center">
   <a class="flex items-center text-2xl font-bold text-gray-800" href="/">
     <img alt="Logo kadeřnictví, pár nůžek zkřížených přes hřeben" class="h-12 w-160 mr-2" src="/img/logo1.jpg"/>
     
    </a>
    <div class="md:hidden">
     <button class="text-gray-800 focus:outline-none" id="menu-toggle">
      <i class="fas fa-bars">
      </i>
     </button>
    </div>
    <ul class="hidden md:flex space-x-4" id="menu">
     <li>
      <a class="text-gray-600 hover:text-gray-800" href="/">
       Domů
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-gray-800" href="/sluzby/">
       Služby
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-gray-800" href="/cenik/">
       Ceník
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-gray-800" href="/kontakt/">
       Kontakt
      </a>
     </li>
    </ul>
   </div>
   <div class="md:hidden" id="mobile-menu" style="display: none;">
    <ul class="flex flex-col space-y-2 px-4 py-2">
     <li>
      <a class="text-gray-600 hover:text-gray-800" href="/">
       Domů
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-gray-800" href="/sluzby/">
       Služby
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-gray-800" href="/cenik/">
       Ceník
      </a>
     </li>
     <li>
      <a class="text-gray-600 hover:text-gray-800" href="/kontakt/">
       Kontakt
      </a>
     </li>
    </ul>
   </div>
  </nav>
  <!-- Hlavní sekce -->
  <section class="relative">
   <img alt="Stylový interiér kadeřnictví s moderním dekorem a pohodlným sezením" class="w-full h-96 object-cover" src="/img/pic2.png"/>
   <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="text-center text-white">
     <h1 class="text-4xl font-bold">
      Vítejte v našem kadeřnictví
     </h1>
     <p class="mt-4 text-lg">
      Zažijte nejlepší střihy a styling ve městě
     </p>
     <!--
     <a class="mt-6 inline-block bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600" href="#">
      Rezervovat
     </a>
      -->
    </div>
   </div>
  </section>
  <!-- Sekce služeb -->
  <section class="py-12">
   <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
     Naše služby
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-6 rounded-lg shadow-md">
      <img alt="Osoba dostává stylový střih" class="w-full h-60 object-cover rounded-t-lg" src="https://placehold.co/300x300"/>
      <h3 class="text-xl font-bold mt-4">
       Střih vlasů
      </h3>
      <p class="mt-2 text-gray-600">
       Získejte stylový střih od našich odborných kadeřníků. Naše střihy jsou přizpůsobeny vašim individuálním potřebám a stylu.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <img alt="Osoba dostává barvení vlasů" class="w-full h-60 object-cover rounded-t-lg" src="https://placehold.co/300x300"/>
      <h3 class="text-xl font-bold mt-4">
       Barvení vlasů
      </h3>
      <p class="mt-2 text-gray-600">
       Vyberte si z různých barev a stylů. Naši odborníci vám pomohou najít ten nejlepší odstín pro váš vzhled.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <img alt="Osoba dostává ošetření vlasů" class="w-full h-60 object-cover rounded-t-lg" src="https://placehold.co/300x300"/>
      <h3 class="text-xl font-bold mt-4">
       Ošetření vlasů
      </h3>
      <p class="mt-2 text-gray-600">
       Oživte své vlasy našimi speciálními ošetřeními. Nabízíme keratinové ošetření, hloubkovou hydrataci a regenerační masky.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <img alt="Osoba dostává styling vlasů" class="w-full h-60 object-cover rounded-t-lg" src="https://placehold.co/300x300"/>
      <h3 class="text-xl font-bold mt-4">
       Styling vlasů
      </h3>
      <p class="mt-2 text-gray-600">
       Naši stylisté vám pomohou dosáhnout dokonalého vzhledu pro každou příležitost. Nabízíme foukání, žehlení a kulmování.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <img alt="Osoba dostává péči o vousy" class="w-full h-60 object-cover rounded-t-lg" src="https://placehold.co/300x300"/>
      <h3 class="text-xl font-bold mt-4">
       Péče o vousy
      </h3>
      <p class="mt-2 text-gray-600">
       Nabízíme profesionální péči o vousy, včetně stříhání, tvarování a úpravy. Naši odborníci vám pomohou dosáhnout dokonalého vzhledu.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
      <img alt="Osoba dostává masáž hlavy" class="w-full h-60 object-cover rounded-t-lg" src="https://placehold.co/300x300"/>
      <h3 class="text-xl font-bold mt-4">
       Masáž hlavy
      </h3>
      <p class="mt-2 text-gray-600">
       Relaxujte a uvolněte se s naší masáží hlavy. Naši odborníci vám pomohou zmírnit stres a napětí.
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- Patička -->
  <footer class="bg-gray-800 text-white py-6">
   <div class="container mx-auto px-4 text-center">
    <p>
      Made By EM. © 2025 Salon AM Beauty.
    </p>
    <div class="mt-4">
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a class="text-gray-400 hover:text-white mx-2" href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
    </div>
   </div>
  </footer>
  <script>
   document.getElementById('menu-toggle').addEventListener('click', function() {
     var menu = document.getElementById('mobile-menu');
     if (menu.style.display === 'none' || menu.style.display === '') {
       menu.style.display = 'block';
     } else {
       menu.style.display = 'none';
     }
   });
  </script>
 </body>
</html>
