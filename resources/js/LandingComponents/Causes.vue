<template>
  <section id="causes" class="py-20 bg-slate-100 px-4 md:px-0">
    <div class="container mx-auto md:w-10/12">
      <div class="text-center mb-10">
        <h2 class="mb-5 text-xl md:text-3xl font-bold"><span class="text-black">OUR</span> <span  class="text-red-500">CAUSES</span></h2>
        <p>
          Far far away, behind the word mountains, far from the countries <br>
          Vokalia and Consonantia, there live the blind texts.
        </p>
      </div>

      <div>
        <carousel :items-to-show="items">
          <slide v-for="slide in 10" :key="slide" class="p-4">
            <div class="shadow-lg w-full rounded h-96 bg-white">
             <div class="h-40 overflow-hidden">
                <img src="" alt="img" class="h-full hover:scale-125" />
             </div>
              <div class="p-5 text-left">
               <p>EDUCATION</p>
              <p class="mb-4 font-bold">Above Hath Fifth Of Open Meat fourth shall meat cattle.</p>
              <div class="flex justify-between mb-3 text-sm">
                <span>Raised : N20000</span>
                <span>Goal : N30000</span>
              </div>
              <hr>
              <div class="flex justify-between items-center mt-3">
<BreezeButton>Donate</BreezeButton>
<span class="text-sm">89 donors</span>
              </div>
              </div>
            </div>
          </slide>

          <template #addons>
            <navigation />

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
     items:4
    };
  },
  mounted(){
    if(window.innerWidth < 900){
      this.items=1
    }
  }
};
</script>