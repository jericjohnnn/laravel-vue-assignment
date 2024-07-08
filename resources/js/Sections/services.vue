<script setup>
</script>
<template>
  <!-- What We Do Section -->
  <section
    class="shadow-[0_20px_30px_20px_rgba(0,0,0,0.02)] md:py-20 lg:py-36
     bg-white bg-servicesbgmobile md:bg-servicesbgweb  bg-cover bg-top rounded-6xl md:rounded-7xl lg:rounded-8xl -translate-y-10 overflow-x-clip z-10 relative"
    id="services">
    <div class="absolute top-0 left-0 w-3/4 -translate-y-16 -translate-x-20 sm:-translate-x-52 sm:-translate-y-24">
      <img src="../../assets/images/servicescloud1.svg" alt="">
    </div>

    <div class="pb-24 lg:pb-28">

      <div class="container mx-auto px-4 lg:px-10">
        <div class="flex px-8 md:px-0 flex-wrap-reverse justify-center border-2 border-red-400">
          <div class="w-full md:w-1/2 relative flex justify-center lg:justify-start lg:items-center">
            <!-- Image placeholder -->
            <div class="flex justify-center lg:justify-start border-2 border-red-700">
              <img class="sm:w-5/6 md:w-full lg:w-5/6" src="../../assets/images/team.svg" alt="">
              <!-- Replace with actual image of people in a meeting -->
            </div>
            <div class="absolute top-0 right-0 w-1/2 -translate-y-5 translate-x-10 
            sm:translate-x-16 md:translate-y-10 md:translate-x-10 lg:translate-y-7 lg:translate-x-0">
              <img src="../../assets/images/teamcloud.svg" alt="">
            </div>
          </div>





          <div
            class="w-full mb-10 md:mb-0 mt-16 md:w-1/2 pl-0 md:pl-8 md:mt-0 text-justify leading-relaxed font-hind border-2 border-red-500">
            <div class="text-center md:text-start border-2 border-blue mb-10">
              <h2 class="text-4xl  font-bold font-montserrat border-2 border-blue 
                  bg-clip-text text-transparent bg-gradient-to-t from-hcolorbot to-hcolortop">
                What We Do
              </h2>
              <div class="flex justify-center md:justify-start mt-2">
                <div class="h-1 w-16 bg-blue rounded"></div> <!-- UNDERLINE -->
              </div>
            </div>

            <p class="text-black lg:text-lg mb-4 ">
              At AscendDevs, we're your partners in crafting powerful digital experiences. We turn your ideas into
              reality, whether it's a cutting-edge website, a user-friendly mobile app, or expert project management.
            </p>
            <p class="text-black lg:text-lg mb-4">
              Our passionate developers and project managers are dedicated to helping you achieve your goals. We believe
              in clear communication and collaboration, working closely with you to ensure your project's success.
            </p>
            <p class="text-black lg:text-lg mb-4">
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

    <div class="pt-28 pb-16 sm:pt-28 sm:pb-0 border-2 border-blue">

      <!-- Our Services Section -->
      <div class="container mx-auto px-9 md:px-auto">

        <!-- HEADING -->
        <h2 class="text-center text-4xl font-bold font-montserrat border-2 border-blue
              bg-clip-text text-transparent bg-gradient-to-t from-hcolorbot to-hcolortop">
          Our Services</h2>
        <div class="flex justify-center mt-2">
          <div class="h-1 w-16 bg-blue rounded"></div> <!-- UNDERLINE -->
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 my-20 lg:mt-20 lg:mb-0">

          <!-- Web Development -->
          <div class="text-justify pb-10 md:pb-0">
            <div class="mb-4 flex items-center justify-center">
              <img class="md:h-40" src="../../assets/images/webdev.svg" alt="">
            </div>
            <h3 class="text-2xl text-center font-bold mb-5 mt-10 font-montserrat text-black lg:mt-10">Web Development</h3>
            <p class="font-hind text-black leading-relaxed lg:text-lg lg:px-5">We create stunning websites with HTML5, CSS3, JavaScript,
              React,
              and Angular. Our services include responsive design, seamless API integrations, and robust
              backend solutions for top-notch performance.</p>
          </div>

          <!-- Mobile Development -->
          <div class="text-justify pb-10 md:pb-0">
            <div class="mb-4 flex items-center justify-center">
              <img class="md:h-40" src="../../assets/images/mobiledev.svg" alt="">
            </div>
            <h3 class="text-2xl text-center font-bold mb-5 mt-10 font-montserrat text-black">Mobile Development</h3>
            <p class="font-hind text-black leading-relaxed lg:text-lg lg:px-5">We specialize in native and cross-platform mobile app
              development, using
              technologies like Swift, Kotlin, and Flutter. Our services are tailored to meet your specific needs with
              precision and excellence.</p>
          </div>

          <!-- Project Management -->
          <div class="text-justify">
            <div class="mb-4 flex items-center justify-center">
              <img class="md:h-40" src="../../assets/images/projmanager.svg" alt="">
            </div>
            <h3 class="text-2xl text-center font-bold mb-5 mt-10 font-montserrat text-black">Project Management</h3>
            <p class="font-hind text-black leading-relaxed lg:text-lg lg:px-5">We provide expert project management to keep your
              initiatives on track and
              successful. Our approach ensures clear communication, efficient resource allocation, and timely delivery
              of milestones, guaranteeing your project's success.</p>
          </div>

        </div>

      </div>

    </div>
  </section>
</template>