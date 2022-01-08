<template>
  <div class="board flex flex-col md:flex-row md:w-10/12 mx-auto relative z-10 md:-mt-20  rounded">
      <div class="basis-1/2 p-7 bg-red-400 text-left">
      <span class="text-xl md:text-3xl">Served Over</span>  <br>
        <span class="text-3xl md:text-5xl">1,432,805</span> <br>
<span class="text-lg md:text-xl">Children in 190 countries in the world</span>
      </div>
        <div class="basis-1/4 p-5 bg-red-300">   <span class="text-xl md:text-3xl">Donate Money</span>  <br> 
<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts.</p>
<BreezeButton class="bg-white">Donate now</BreezeButton>
</div>
          <div class="basis-1/4 p-5 bg-red-200">  <span class="text-xl md:text-3xl">Be a Volunteer</span>  <br>
<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts.</p>
<BreezeButton class="bg-white">Donate now</BreezeButton></div>
  </div>
</template>
<script>
import BreezeButton from "@/Components/Button.vue";
export default {
  name:"Board",
  components:{
    BreezeButton
  }
}
</script>
<style scoped>
.board{

}
</style>