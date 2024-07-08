<script setup>
</script>
<template>
  <section
    class="shadow-[0_20px_30px_20px_rgba(0,0,0,0.02)] md:py-20 lg:py-36
     bg-white bg-servicesbgmobile md:bg-servicesbgweb  bg-cover bg-top rounded-6xl md:rounded-7xl lg:rounded-8xl -translate-y-10 overflow-x-clip z-10 relative"
    id="services">
    <div class="absolute top-0 left-0 w-3/4 -translate-y-16 -translate-x-20 sm:-translate-x-52 sm:-translate-y-24
    ">
      <img src="../../assets/images/servicescloud1.svg" alt="">
    </div>

    <div class="pb-24 lg:pb-28">

      <div class="container mx-auto px-4 lg:px-10">
        <div class="flex px-8 md:px-0 flex-wrap-reverse justify-center">
          <div class="w-full md:w-1/2 relative flex justify-center lg:justify-start lg:items-center">
            <div class="flex justify-center lg:justify-start ">
              <img class="sm:w-5/6 md:w-full lg:w-5/6" src="../../assets/images/team.svg" alt="">
            </div>
            <div class="absolute top-0 right-0 w-1/2 -translate-y-5 translate-x-10 
            sm:translate-x-16 md:translate-y-10 md:translate-x-10 lg:translate-y-7 lg:translate-x-0
            xl:-translate-y-0">
              <img src="../../assets/images/teamcloud.svg" alt="">
            </div>
          </div>




          <div
            class="w-full mb-10 md:mb-0 mt-16 md:w-1/2 pl-0 md:pl-8 md:mt-0 text-justify leading-relaxed font-hind ">
            <div class="text-center md:text-start  mb-10">
              <h2 class="text-4xl xl:text-5xl font-bold font-montserrat  
                  bg-clip-text text-transparent bg-gradient-to-t from-hcolorbot to-hcolortop">
                What We Do
              </h2>
              <div class="flex justify-center md:justify-start mt-2">
                <div class="h-1 w-16 xl:w-20 bg-blue rounded"></div> <!-- UNDERLINE -->
              </div>
            </div>

            <p class="text-black lg:leading-relaxed mb-4 xl:text-lg xl:leading-loose xl:mb-8">
              At AscendDevs, we're your partners in crafting powerful digital experiences. We turn your ideas into
              reality, whether it's a cutting-edge website, a user-friendly mobile app, or expert project management.
            </p>
            <p class="text-black lg:leading-relaxed mb-4 xl:text-lg xl:leading-loose xl:mb-8">
              Our passionate developers and project managers are dedicated to helping you achieve your goals. We believe
              in clear communication and collaboration, working closely with you to ensure your project's success.
            </p>
            <p class="text-black lg:leading-relaxed mb-4 xl:text-lg xl:leading-loose xl:mb-8">
              Ready to take your business to the next level? Let's ascend together!
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="relative" id="space">
      <div class="absolute right-0 -translate-y-16 translate-x-32 sm:translate-x-96 md:-translate-y-24 ">
        <img class="md:w-5/6" src="../../assets/images/servicescloud2.svg" alt="">
      </div>
    </div>

    <div class="pt-28 pb-16 sm:pt-28 sm:pb-0 ">

      <!-- Our Services Section -->
      <div class="container mx-auto px-9 md:px-auto">

        <!-- HEADING -->
        <h2 class="text-center text-4xl font-bold font-montserrat  xl:text-5xl 
              bg-clip-text text-transparent bg-gradient-to-t from-hcolorbot to-hcolortop">
          Our Services</h2>
        <div class="flex justify-center mt-2">
          <div class="h-1 w-16 xl:w-20 bg-blue rounded"></div> <!-- UNDERLINE -->
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 my-20 lg:mt-20 lg:mb-0">

          <!-- WEBDEV -->
          <div class="text-justify pb-10 md:pb-0">
            <div class="mb-4 flex items-center justify-center">
              <img class="md:h-40" src="../../assets/images/webdev.svg" alt="">
            </div>
            <h3 class="text-2xl text-center font-bold mb-5 mt-10 font-montserrat text-black lg:mt-10">Web Development</h3>
            <p class="font-hind text-gray-500 leading-relaxed md:px-4 lg:px-8 xl:px-14 xl:text-lg xl:leading-loose">
              We create stunning websites with HTML5, CSS3, JavaScript, React, and Angular. Our services 
              include responsive design, API integrations, and robust backend solutions.</p>
          </div>

          <!-- MOBILEDEV -->
          <div class="text-justify pb-10 md:pb-0">
            <div class="mb-4 flex items-center justify-center">
              <img class="md:h-40" src="../../assets/images/mobiledev.svg" alt="">
            </div>
            <h3 class="text-2xl text-center font-bold mb-5 mt-10 font-montserrat text-black">Mobile Development</h3>
            <p class="font-hind text-gray-500 leading-relaxed md:px-4 lg:px-8 xl:px-14 xl:text-lg xl:leading-loose">We specialize in native and cross-platform mobile app development using Swift, Kotlin, and Flutter. Our services are tailored to meet your specific needs with excellence.</p>
          </div>

          <!-- PROJMA -->
          <div class="text-justify">
            <div class="mb-4 flex items-center justify-center">
              <img class="md:h-40" src="../../assets/images/projmanager.svg" alt="">
            </div>
            <h3 class="text-2xl text-center font-bold mb-5 mt-10 font-montserrat text-black">Project Management</h3>
            <p class="font-hind text-gray-500 leading-relaxed md:px-4 lg:px-8 xl:px-14 xl:text-lg xl:leading-loose">We provide expert project management to keep your initiatives on track. Our approach ensures clear communication, efficient resource allocation, and timely delivery, guaranteeing project success.</p>
          </div>

        </div>

      </div>

    </div>
  </section>
</template>