<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
</head>

<body class="bg-black">
  @include('home.header')



  <section class="pt-30 contact-section p-15 pt-6 md:flex md:flex-row-reverse  md:justify-between md:gap-8 text-justify  flex  flex-col-reverse">
    <div class="md:w-1/2 w-full flex flex-col justify-center">
      <h2 class="text-green-500 text-4xl font-bold pt-7 md:text-5xl after-[''] after:w-38 md:after:w-52 after:h-2 after:block after:bg-green-500 after:m-left after:mt-4">Get in Touch</h2>
      <p class="text-white md:text-xl  text-semibold mt-2  ">Have any questions about our system? Feel free to contact us — we’re happy to help and improve your experience.</p>

    </div>
    <div class="md:w-1/2 w-full">
      <img src="./home/images/why.jpg" class="rounded-2xl" alt="">
    </div>

  </section>


  <section class=" p-15 pt-6  ">
    <div class=" flex flex-col justify-center items-center">
      <h2 class="text-green-500 text-4xl font-bold pt-7 md:text-5xl after-[''] after:w-28 md:after:w-42 after:h-2 after:block after:bg-green-500 after:m-auto after:mt-4">Contact Us</h2>
      <p class="text-white md:text-xl text-center text-semibold mt-2  ">We’d love to hear from you! Whether you want to reserve a table, ask about our menu, or share your feedback — we’re always happy to connect.</p>

    </div>

    <div class="bg-[#1b1917] p-7 rounded-2xl text-white min-h-[15rem] flex justify-center items-center">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-6xl">

        <div class="flex flex-col gap-6 md:mt-30">

          <div class="contact flex flex-col sm:flex-row gap-4 sm:justify-around text-center">
            <a href="tel:+94766066676" class="flex items-center gap-2 hover:text-[#d2b475] transition">
              <i class="ri-phone-fill text-xl"></i>
              <span>076 606 6676</span>
            </a>

            <a href="mailto:info@fabriodine.com" class="flex items-center gap-2 hover:text-[#d2b475] transition">
              <i class="ri-mail-fill text-xl"></i>
              <span>info@fabriodine.com</span>
            </a>
          </div>

          <div class="w-full ">
            <div class="relative w-full aspect-[16/9] rounded-xl overflow-hidden shadow-md">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31604.362979830952!2d80.57377309519616!3d8.045716134657152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afc964d8addeb71%3A0x736771308cb6e49c!2sKekirawa!5e0!3m2!1sen!2slk!4v1766856275268!5m2!1sen!2slk"
                class="absolute inset-0 w-full h-full border-0"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen></iframe>
            </div>
          </div>

        </div>

        <div class="bg-[#24211e] rounded-xl p-6 shadow-lg">

          <h1 class="text-center text-xl font-semibold mb-4">Your Details</h1>

          <form action="" method="post" class="flex flex-col gap-5">

            <div class="flex flex-col">
              <label class="mb-1">Name</label>
              <input
                type="text"
                name="name"
                placeholder="Your name"
                class="bg-[#d2b475] text-black p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#c3a760]">
            </div>

            <div class="flex flex-col">
              <label class="mb-1">Email</label>
              <input
                type="email"
                name="email"
                placeholder="Your email"
                class="bg-[#d2b475] text-black p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#c3a760]">
            </div>

            <div class="flex flex-col">
              <label class="mb-1">Phone</label>
              <input
                type="text"
                name="phone"
                placeholder="Your phone number"
                class="bg-[#d2b475] text-black p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#c3a760]">
            </div>

            <div class="flex flex-col">
              <label class="mb-1">Comments</label>
              <textarea
                name="comments"
                rows="4"
                placeholder="Your message"
                class="bg-[#d2b475] text-black p-3 rounded-md resize-none focus:outline-none focus:ring-2 focus:ring-[#c3a760]"></textarea>
            </div>

            <button
              type="submit"
              class="bg-[#d2b475] text-black font-semibold py-3 rounded-lg hover:bg-green-500 hover:text-white transition duration-150 hover:cursor-pointer">
              SUBMIT
            </button>

          </form>

        </div>

      </div>

    </div>


  </section>

  <section class=" p-15 pt-6  ">
    <div class="text bg-green-500 p-7 rounded-2xl text-white  min-h-60 flex flex-col justify-center items-center">
      <h1 class="text-xl md:text-2xl font-bold text-center">Stay Updated </h1>
      <p class="mt-4 text-center md:text-lg">Subscribe to our newsletter for exclusive deals, new restaurant partners, and food delivery tips.</p>
      <div class="buttons mt-4 flex flex-row justify-center items-center gap-5">
        <input
          type="text"
          name="phone"
          placeholder="Your phone number"
          class="bg-white text-black p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#c3a760]">

        <a href="" class="bg-white text-green-500 rounded-xl  p-3 pl-2 pr-2 md:p-3 md:pl-2 md:pr-2 font-medium text-medium hover:text-pink-950 transition duration-150 ">Subscribe</a>
      </div>
    </div>

  </section>


  @include('home.footer')
  <script src="home/js/all.js"></script>
</body>

</html>