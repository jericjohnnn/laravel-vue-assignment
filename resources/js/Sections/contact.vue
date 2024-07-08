<script setup>
import CTAbutton from '../Components/CTAbutton.vue';
</script>

<template>
     <section class="bg-contactbg bg-cover bg-center text-white pt-56 pb-40 -mt-48 z-0" id="contact">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold font-montserrat pt-5 pb-6 lg:text-4xl
              bg-clip-text text-transparent bg-gradient-to-t from-hcolorbot to-hcolortop">
              Let Your Ideas Ascend! Talk to our experts</h2>
              <CTAbutton class="px-12">Contact Us</CTAbutton>

        <!-- SOCIAL MEDIA LINKS -->
        <div class="flex justify-center space-x-1 xl:space-x-4 mt-14">
          <a href="https://www.facebook.com/jericjohnnn/" target="_blank" class=" flex items-center justify-center">
            <img class="w-5/6 xl:w-full shadow-[0_0_20px_rgba(0,0,0,0.05)] rounded-full" src="../../assets/icons/fb.svg" alt="">
          </a>
          <a href="https://github.com/jericjohnnn" target="_blank" class=" flex items-center justify-center">
            <img class="w-5/6 xl:w-full shadow-[0_0_20px_rgba(0,0,0,0.05)] rounded-full" src="../../assets/icons/github.svg" alt="">
          </a>
          <a href="https://www.instagram.com/jeric_jhnnn/" target="_blank" class="  flex items-center justify-center">
            <img class="w-5/6 xl:w-full shadow-[0_0_20px_rgba(0,0,0,0.05)] rounded-full" src="../../assets/icons/ig.svg" alt="">
          </a>
          <a href="https://www.linkedin.com/in/jericjohnaligato/" target="_blank" class=" flex items-center justify-center">
            <img class="w-5/6 xl:w-full shadow-[0_0_20px_rgba(0,0,0,0.05)] rounded-full" src="../../assets/icons/linkedin.svg" alt="">
          </a>
          <a href="https://www.tiktok.com/@anthonysistilli" target="_blank" class=" flex items-center justify-center">
            <img class="w-5/6 xl:w-full shadow-[0_0_20px_rgba(0,0,0,0.05)] rounded-full" src="../../assets/icons/tiktok.svg" alt="">
          </a>
        </div>
      </div>
    </section>

</template>