<template>
  <div class="board flex flex-col md:flex-row md:w-10/12 mx-auto relative z-10 md:-mt-20  rounded">
      <div class="basis-1/2 p-7 bg-red-400 text-left">
      <span class="text-xl md:text-3xl">Served Over</span>  <br>
        <span class="text-3xl md:text-5xl">120</span> <br>
<span class="text-lg md:text-xl">Children in 3 states in Nigeria</span>
      </div>
        <div class="basis-1/4 p-5 bg-red-300">    <a href="/#donate"><span class="text-xl md:text-3xl">Donate Money</span> </a> <br>
<p class="mb-4">Contribute an amount towards providing a better life for children</p>
<BreezeButton class="bg-white">Donate now</BreezeButton>
</div>
          <div class="basis-1/4 p-5 bg-red-200">  <a href="/#contact"><span class="text-xl md:text-3xl">Be a Volunteer</span></a>  <br>
<p class="mb-4">Support physically during outreaches and visitations.</p>
<BreezeButton class="bg-white">Volunteer now</BreezeButton></div>
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