<html lang="cs">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Kadeřnictví - Kontakt
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
     <a class="mt-6 inline-block bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600" href="#">
      Rezervovat
     </a>
    </div>
   </div>
  </section>
  <!-- Sekce kontakt -->
  <section class="py-12">
   <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
     Kontaktujte nás
    </h2>
    <div class="flex flex-col md:flex-row">
     <div class="md:w-1/2 md:pr-8">
      <h3 class="text-xl font-bold text-gray-800">
       Spojte se s námi
      </h3>
      <p class="mt-4 text-gray-600">
       Neváhejte nás kontaktovat s jakýmikoli dotazy nebo pro rezervaci termínu. Jsme tu, abychom vám pomohli se všemi vašimi potřebami péče o vlasy.
      </p>
      <p class="mt-4 text-gray-600">
       <i class="fas fa-phone-alt">
       </i>
       +420 776 602 642
      </p>
      <p class="mt-2 text-gray-600">
       <i class="fas fa-envelope">
       </i>
       info@kadernictvi.com
      </p>
      <p class="mt-2 text-gray-600">
       <i class="fas fa-map-marker-alt">
       </i>
       123 Kadeřnictví St, Město, Země
      </p>
      <h3 class="text-xl font-bold text-gray-800 mt-8">
       Otevírací doba
      </h3>
      <ul class="mt-4 text-gray-600">
       <li>
        Pondělí - Pátek: 9:00 - 18:00
       </li>
       <li>
        Sobota: 9:00 - 14:00
       </li>
       <li>
        Neděle: Zavřeno
       </li>
      </ul>
     </div>
     <!--
     <div class="md:w-1/2 mt-8 md:mt-0">
      <form action="#" class="bg-white p-6 rounded-lg shadow-md" method="POST">
       <div class="mb-4">
        <label class="block text-gray-700" for="name">
         Jméno
        </label>
        <input class="w-full mt-2 p-2 border border-gray-300 rounded-lg" id="name" name="name" required="" type="text"/>
       </div>
       <div class="mb-4">
        <label class="block text-gray-700" for="email">
         Email
        </label>
        <input class="w-full mt-2 p-2 border border-gray-300 rounded-lg" id="email" name="email" required="" type="email"/>
       </div>
       <div class="mb-4">
        <label class="block text-gray-700" for="message">
         Zpráva
        </label>
        <textarea class="w-full mt-2 p-2 border border-gray-300 rounded-lg" id="message" name="message" required="" rows="4">
        </textarea>
       </div>
       <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600" type="submit">
        Odeslat zprávu
       </button>
      </form>
     </div>
     -->
    </div>
    <div class="mt-12">
     <h3 class="text-3xl font-bold text-center text-gray-800 mb-8">
      Naše poloha
     </h3>
     <div class="flex justify-center">
      <iframe allowfullscreen="" class="w-full h-96 rounded-lg shadow-md" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019287509634!2d144.9630579153169!3d-37.8141079797517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d1f9f1b1a1b!2s123%20Kade%C5%99nictv%C3%AD%20St%2C%20M%C4%9Bsto%2C%20Zem%C4%9B!5e0!3m2!1sen!2sus!4v1633072800000!5m2!1sen!2sus">
      </iframe>
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
