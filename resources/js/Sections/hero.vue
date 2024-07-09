<script setup>
import CTAbutton from '../Components/CTAbutton.vue';


</script>
<template>
  <section class="pt-36 pb-64 md:pt-64 md:pb-72 lg:pb-64 xl:pb-72 bg-herobg bg-cover bg-top relative overflow-hidden"
    id="hero">

    <div class="container mx-auto px-4 lg:px-10 ">
      <div class="flex flex-wrap items-center">
        <!-- TEXTS -->
        <div v-motion-slide-visible-once-left
          class="w-full md:w-1/2 flex flex-col items-center justify-center md:items-start ">
          <h1 class="font-bold text-5xl leading-tight lg:text-6xl lg:leading-snug xl:text-7xl xl:leading-snug lg:pr-10 xl:pr-20 mb-4 font-montserrat text-center md:text-start
            bg-clip-text text-transparent bg-gradient-to-t from-hcolorbot to-hcolortop">
            Your Idea, Our Expertise</h1>
          <p
            class="text-black mb-6 text-center font-hind text-lg xl:text-xl xl:leading-loose leading-relaxed lg:leading-9 md:text-start">
            From Web and Mobile Development to Seamless Project Management,
            We Help Your Ideas Ascend and Achieve Results.</p>
          <CTAbutton>Let's Talk</CTAbutton>
        </div>
        <!-- IMAGE -->
        <div v-motion-slide-visible-once-right class="w-full md:w-1/2 mt-24 sm:mt-36 md:mt-0 z-50">
          <div class="h-64  flex items-center justify-center
            md:justify-end">
            <img class="sm:w-10/12 md:w-96 lg:w-11/12 z-50" src="../../assets/images/heroimg.svg" alt="">
          </div>
        </div>

      </div>
    </div>
    <div class=" hidden lg:block absolute inset-0 pointer-events-none overflow-hidden z-0">
      <div class="absolute right-0 animate-slide z-0">
        <img class="h-72 z-0" src="../../assets/images/servicescloud2.svg" alt="">
      </div>
    </div>
    <div class="hidden lg:block absolute inset-0 pointer-events-none overflow-hidden z-50">
      <div class="absolute left-0 bottom-10 animate-slide-right z-20">
        <img class="h-72 z-20" src="../../assets/images/servicescloud2.svg" alt="">
      </div>
    </div>

  </section>

</template>