<template>
  <section id="about" class="">
    <div class="container flex  flex-col md:flex-row md:w-10/12 md:justify-between mx-auto py-24">
      <span class="flex p-3">
      <HeartIcon  class="h-28 w-28 text-red-500 mr-1"/>
         <span class="p-3">
          <h4 class="font-bold">Make Donation</h4>
          <p class="text-slate-500">Charity is measured not only in substance but by the heart that offers it. Join us to support a child today.</p>
       </span>
      </span>
        <span class="flex p-3">
       <HandIcon class="h-28 w-28 text-red-500 mr-1"/>
         <span class="p-3">
          <h4 class="font-bold">Become A Volunteer</h4>
          <p class="text-slate-500">There's never too many warriors at the battlefield. More people means easier and quicker victory. You too can be a soldier in our army.</p>
       </span>
      </span>
         <span class="flex p-3">
       <BriefcaseIcon class="h-28 w-28 text-red-500" mr-1/>
         <span class="p-3">
          <h4 class="font-bold">Sponsorship</h4>
          <p class="text-slate-500">For Sponsorship please send us an email. Support a child towards a better life.</p>
       </span>
      </span>
    </div>
  </section>
</template>
<style scoped lang="scss">
section{

  }
</style>

<script>
import { HeartIcon, HandIcon,BriefcaseIcon } from "@heroicons/vue/solid";
export default {
  components:{
HandIcon,
HeartIcon,
BriefcaseIcon
  }
};
</script>