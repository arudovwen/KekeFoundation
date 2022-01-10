<template>
  <section id="causes" class="py-20 bg-slate-100 px-4 md:px-0">
    <div class="container mx-auto md:w-10/12">
      <div class="text-center mb-10">
        <h2 class="mb-5 text-xl md:text-3xl font-bold"><span class="text-black">OUR</span> <span  class="text-red-500">CAUSES</span></h2>
        <p>
         We strive to lend a helping hand towards the care of children in every aspect that we can.
        </p>
      </div>

      <div>
        <carousel :items-to-show="itemscount">
          <slide v-for="slide in items" :key="slide.name" class="p-4">
            <div class="shadow-lg w-full rounded h-100 bg-white">
             <div class="h-40 overflow-hidden">
                <img :src="slide.img" alt="img" class="w-full h-full hover:scale-125 object-cover" />
             </div>
              <div class="p-5 text-left">
               <p class="font-bold">{{slide.name}}</p>
              <p class="mb-4 ">{{ slide.text }}
</p>
              <div class="flex justify-between mb-3 text-sm">
                <span>Raised : NGN{{slide.raised}}</span>
                <span>Goal : NGN{{slide.goal}}</span>
              </div>
              <hr>
              <div class="flex justify-between items-center mt-3">
<BreezeButton>Donate</BreezeButton>
<span class="text-sm">{{ slide.donors }} donors</span>
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
      itemscount:4,
     items:[
       {
         'name':'EDUCATION',
         'text':'Give a child the means to learn and attain good education.',
         'raised':100000,
         'goal':200000,
         'donors':12,
         'img':'/images/main1.jpg'
       },
        {
         'name':'Food',
         'text':'Contribute towards eradicating malnutrition in children.',
         'raised':136000,
         'goal':200000,
          'donors':33,
           'img':'/images/main2.jpg'
       },
        {
         'name':'Clothing',
         'text':'Donate raiment or send an amount to provide clothes for children.',
         'raised':150000,
         'goal':250000,
          'donors':14,
           'img':'/images/main1.jpg'
       },
        {
         'name':'Health',
         'text':'Everyday a child suffers due to a medical condition. Support healthcare today.',
         'raised':80000,
         'goal':120000,
          'donors':18,
           'img':'/images/main2.jpg'
       },
       {
         'name':'Shelter',
         'text':'Contribute to shield a child from the scorching sun and pounding rain.',
         'raised':120000,
         'goal':203000,
          'donors':22,
           'img':'/images/main2.jpg'
       },
     ]
    };
  },
  mounted(){
    if(window.innerWidth < 900){
      this.itemscount=1
    }
  }
};
</script>