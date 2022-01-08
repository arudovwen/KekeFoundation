<template>
  <section class="py-40 w-screen text-center">
      <div class="flex flex-wrap w-full mb-4 ">
        <div v-for="n in 8"  :key="n" class="h-64 bg-black border w-3/12 overflow-hidden">
        <img src="" class="hover:scale-125"/>
        </div>

      </div>
    <div class="text-center"> <Link href="/gallery"> <span class="mx-auto text-red-500 flex justify-center">View more <span> <ChevronRightIcon class="h-6 w-6"/></span></span> </Link></div>
  </section>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import { ChevronRightIcon } from  "@heroicons/vue/solid";
export default {
components:{
  Link,
  ChevronRightIcon
}
}
</script>