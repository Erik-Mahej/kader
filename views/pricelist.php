<html lang="cs">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Kadeřnictví - Ceník
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
   body, html {
     height: 100%;
     margin: 0;
   }
   .content-wrapper {
     display: flex;
     flex-direction: column;
     min-height: 100vh;
   }
   .content {
     flex: 1;
   }
  </style>
 </head>
 <body class="font-roboto bg-gray-100">
  <div class="content-wrapper">
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
      <a class="mt-6 inline-block bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600" href="#">
       Rezervovat
      </a>
     </div>
    </div>
   </section>
   <!-- Sekce ceníku -->
   <section class="py-12 content">
    <div class="container mx-auto px-4">
     <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
      Ceník
     </h2>
     <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Přeliv
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Krátké vlasy
         </span>
         <span>
          300 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Středně dlouhé vlasy
         </span>
         <span>
          600 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Dlouhé vlasy
         </span>
         <span>
          800 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Rekonstrukce vlasů Dr. Sorbie, KISS
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Středně dlouhé vlasy
         </span>
         <span>
          1200 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Dlouhé vlasy
         </span>
         <span>
          1500 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Keratin
         </span>
         <span>
          2500 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Dámské stříhání
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Kratké vlasy
         </span>
         <span>
          550 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Středně dlouhé vlasy
         </span>
         <span>
          650 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Dlouhé Vlasy
         </span>
         <span>
          750 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Pánské stříhání
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Stříhání strojkem s mytím
         </span>
         <span>
          300 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
         Stříhání nůžkami s mytím
         </span>
         <span>
          400 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Dětské stříhání
         </span>
         <span>
          250 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Barvení vlasů
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Barva krátké vlasy
         </span>
         <span>
          800 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
         Barva středně dlouhé vlasy
         </span>
         <span>
          1200 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Barva dlouhé vlasy
         </span>
         <span>
          1600 - 1800 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Melíry
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Melír krátké vlasy
         </span>
         <span>
          1200 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
         Melír středně dlouhé vlasy
         </span>
         <span>
          1600 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Melír dlouhé vlasy
         </span>
         <span>
          1800 - 2000 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Balayage, Aertouch, Ombre
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Středně dlouhé vlasy
         </span>
         <span>
          2400 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
         Dlouhé vlasy
         </span>
         <span>
          2800 - 3000 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Mytí hlavy a foukání
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Krátké vlasy
         </span>
         <span>
          300 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
         Středně dlouhé vlasy
         </span>
         <span>
          400 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Dlouhé vlasy
         </span>
         <span>
          500 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Ostatní služby
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Svatební účes
         </span>
         <span>
          1300 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
         Zkouška svatebního účesu
         </span>
         <span>
          600 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Společenský účes
         </span>
         <span>
          800 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Žehlení vlasů, kulmování
         </span>
         <span>
          200 Kč
         </span>
        </li>
       </ul>
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
  </div>
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
