<script setup>
import CTAbutton from '../Components/CTAbutton.vue';

</script>
<template>
    <section class="pt-36 pb-64 md:pt-64 md:pb-72 lg:pb-64 xl:pb-72 bg-herobg bg-cover bg-top" id="hero" >

      <div class="container mx-auto px-4 lg:px-10 ">
        <div class="flex flex-wrap items-center">
        <!-- TEXTS -->
          <div class="w-full md:w-1/2 flex flex-col items-center justify-center md:items-start ">
            <h1 class="font-bold text-5xl leading-tight lg:leading-snug xl:text-6xl xl:leading-snug lg:pr-30 mb-4 font-montserrat text-center md:text-start
            bg-clip-text text-transparent bg-gradient-to-t from-hcolorbot to-hcolortop">
                Your Idea, Our Expertise</h1>
            <p class="text-black mb-6 text-center font-hind text-lg xl:text-xl xl:leading-loose leading-relaxed lg:leading-9 md:text-start">
                From Web and Mobile Development to Seamless Project Management, 
                We Help Your Ideas Ascend and Achieve Results.</p>
            <CTAbutton>Let's Talk</CTAbutton>
          </div>
        <!-- IMAGE -->
          <div class="w-full md:w-1/2 mt-24 sm:mt-36 md:mt-0">
            <div class="h-64  flex items-center justify-center
            md:justify-end">
                <img class="sm:w-10/12 md:w-96 lg:w-11/12" src="../../assets/images/heroimg.svg" alt="">
            </div>
          </div>

        </div>
      </div>

    </section>
</template>