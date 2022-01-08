<template>
  <section id="donation" class="py-20 px-4 md:px-0">
    <div class="container mx-auto md:w-10/12">
      <div class="text-center mb-10">
        <h2 class="mb-5 text-xl md:text-3xl font-bold"><span class="text-black">LATEST</span> <span  class="text-red-500">DONATIONS</span></h2>
        <p>
          Far far away, behind the word mountains, far from the countries <br>
          Vokalia and Consonantia, there live the blind texts.
        </p>
      </div>

      <div class="">
        <carousel :items-to-show="items">
          <slide v-for="slide in 10" :key="slide" class="p-4">
            <div class="shadow-lg w-full rounded-lg h-48 flex bg-white py-2 px-4">
             <div class="flex items-center justify-center">
                <img src="" alt="img" class="h-28 w-28 rounded-full outline" />
             </div>
              <div class="p-5 text-left">
               <p>John Snow</p>
               <small class="text-slate-500">Donated minutes ago</small>
              <p class="mb-4 font-bold">Donated N2000</p>
              <p class="text-red-300">Children Need Food</p>

              </div>
            </div>
          </slide>

          <template #addons>
            <!-- <navigation /> -->
            <pagination />
          </template>
        </carousel>
      </div>
    </div>
  </section>
</template>

<style scoped lang="scss">

</style>

<script>
import BreezeButton from "@/Components/Button.vue";
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

export default {
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
    BreezeButton
  },
  data() {
    return {
items:3
    };
  },
   mounted(){
    if(window.innerWidth < 900){
      this.items=1
    }
  }
};
</script>