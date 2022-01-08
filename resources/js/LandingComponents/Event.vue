<template>
 <section id="event" class="py-24">
    <div class="container  md:w-10/12 mx-auto">
      <h2 class="mb-5 text-xl md:text-3xl font-bold text-center"><span class="text-black">UPCOMING</span> <span  class="text-red-500">EVENTS</span></h2>
    <div>

      <div class="flex flex-wrap flex-col md:flex-row w-full justify-between">

       <div class=" md:w-3/6  p-5" v-for="n in 4" :key="n">
          <div class="flex  bg-slate-200 " >
        <div  class="w-3/6 relative overflow-hidden">
            <img src="" alt="" srcset="" class="hover:scale-125">
            <span class="p-2   absolute top-0 right-0 text-white font-extrabold" style="background-color:rgba(0,0,0,.6)">10 June</span>
        </div>
          <div class="text-left p-6">
            <span class="font-bold text-red-500">Working Children</span> <br>
            <span class="text-sm">Seed the life upon you are create</span> <br>
            <div class="flex justify-between my-4">
              <span class=" pr-4 border-r border-slate-400"><span class="font-bold">229</span> <br> <span class="font-thin text-xs">Days</span></span>
               <span class="pr-4 border-r border-slate-400"><span  class="font-bold">22</span> <br> <span class="font-thin text-xs">Hours</span></span>
                <span class=""><span  class="font-bold">29</span> <br> <span class="font-thin text-xs">Minutes </span></span>

            </div>
            <span class="border-b border-slate-400  text-red-400">Know more</span>

          </div>
        </div>
       </div>
      </div>

    </div>
  </div>
 </section>
</template>
<style scoped lang="scss">

</style>

<script>
export default {

}
</script>