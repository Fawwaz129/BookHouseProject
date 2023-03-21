<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-[#D9D9D9] w-full justify-between flex fixed">
        <img class=" top-0 w-40 ml-5 mt-5" src="{{ asset('image/1.svg')}}" alt="">
        <div class="flex justify-center items-center mr-5 gap-3 my-5">
        <a class="bg-[#8F5F5F] px-10 text-white font-semibold py-2 rounded-full" href="">Sign In</a>
        <a class="bg-[#1BAD04] px-10 text-white font-semibold py-2 rounded-full" href="">Sign Up</a>
    </div>
    </div>
    <section class="h-screen py-[18rem] w-full bg-[#D9D9D9]">
        <div class="text-center">
        <h1 class="text-5xl text-center text-[#8F5F5F] font-bold uppercase">Book House</h1>
        <p class="text-center font-serif font-medium mt-3 text-2xl text-[#49413F]">You can find your favorite book here</p>
    </div>

    </section>
</body> 
</html>