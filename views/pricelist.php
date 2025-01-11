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
     background-image: url('https://placehold.co/1920x1080');
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
     <a class="flex items-center text-2xl font-bold text-gray-800" href="#">
      <img alt="Logo kadeřnictví, pár nůžek zkřížených přes hřeben" class="h-8 w-8 mr-2" src="https://placehold.co/32x32"/>
      Kadeřnictví
     </a>
     <div class="md:hidden">
      <button class="text-gray-800 focus:outline-none" id="menu-toggle">
       <i class="fas fa-bars">
       </i>
      </button>
     </div>
     <ul class="hidden md:flex space-x-4" id="menu">
      <li>
       <a class="text-gray-600 hover:text-gray-800" href="#">
        Domů
       </a>
      </li>
      <li>
       <a class="text-gray-600 hover:text-gray-800" href="#">
        Služby
       </a>
      </li>
      <li>
       <a class="text-gray-600 hover:text-gray-800" href="#">
        O nás
       </a>
      </li>
      <li>
       <a class="text-gray-600 hover:text-gray-800" href="#">
        Kontakt
       </a>
      </li>
     </ul>
    </div>
    <div class="md:hidden" id="mobile-menu" style="display: none;">
     <ul class="flex flex-col space-y-2 px-4 py-2">
      <li>
       <a class="text-gray-600 hover:text-gray-800" href="#">
        Domů
       </a>
      </li>
      <li>
       <a class="text-gray-600 hover:text-gray-800" href="#">
        Služby
       </a>
      </li>
      <li>
       <a class="text-gray-600 hover:text-gray-800" href="#">
        O nás
       </a>
      </li>
      <li>
       <a class="text-gray-600 hover:text-gray-800" href="#">
        Kontakt
       </a>
      </li>
     </ul>
    </div>
   </nav>
   <!-- Hlavní sekce -->
   <section class="relative">
    <img alt="Stylový interiér kadeřnictví s moderním dekorem a pohodlným sezením" class="w-full h-96 object-cover" src="https://placehold.co/1920x600"/>
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
        Střihy
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Dámský střih
         </span>
         <span>
          500 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Pánský střih
         </span>
         <span>
          300 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Dětský střih
         </span>
         <span>
          200 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Barvení
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Celoplošné barvení
         </span>
         <span>
          1000 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Melír
         </span>
         <span>
          800 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Ombre
         </span>
         <span>
          1200 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Ošetření
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Keratinové ošetření
         </span>
         <span>
          1500 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Hloubková hydratace
         </span>
         <span>
          700 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Regenerační maska
         </span>
         <span>
          600 Kč
         </span>
        </li>
       </ul>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
       <h3 class="text-xl font-bold mb-4">
        Styling
       </h3>
       <ul class="space-y-2">
        <li class="flex justify-between">
         <span>
          Foukání
         </span>
         <span>
          400 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Žehlení
         </span>
         <span>
          300 Kč
         </span>
        </li>
        <li class="flex justify-between">
         <span>
          Kulmování
         </span>
         <span>
          350 Kč
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
      © 2023 Kadeřnictví. Všechna práva vyhrazena.
     </p>
     <div class="mt-4">
      <a class="text-gray-400 hover:text-white mx-2" href="#">
       <i class="fab fa-facebook-f">
       </i>
      </a>
      <a class="text-gray-400 hover:text-white mx-2" href="#">
       <i class="fab fa-twitter">
       </i>
      </a>
      <a class="text-gray-400 hover:text-white mx-2" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a class="text-gray-400 hover:text-white mx-2" href="#">
       <i class="fab fa-linkedin-in">
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
