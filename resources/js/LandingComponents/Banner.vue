<template>
  <section class="static">

    <div
      class="
        container
        mx-auto
        absolute
        inset-0
        z-10
        flex
        justify-center
        items-center
        p-5

      "
    >
       <span class="banner-text text-center">
        <h1 class="text-white text-4xl md:text-6xl">KEKE CIRCLE <span class="text-red-500">FOUNDATION</span></h1>
      <p class="text-white text-xl md:text-4xl mb-5">Towards a better life</p>
     <Link href="/gallery"> <BreezeButton class="  md:py-4 px-2 outline bg-transparent"><PlayIcon class="w-4 h-4 mr-1"/> Watch video</BreezeButton></Link>
     </span>
    </div>
  </section>
</template>
<style scoped lang="scss">
section{
  min-height: 100vh;
  &::before {
    content: "";
    background-image: url(/images/kekeb.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    filter: grayscale(1);
    height: 100%;
    width: 100%;
    position: absolute;
  }
  &::after {
    content: "";
    position: absolute;
    background-color: rgba($color: #000000, $alpha: 0.6);
    width: 100%;
    height: 100%;
  }
}
</style>

<script>
import BreezeButton from "@/Components/Button.vue";
import {PlayIcon} from "@heroicons/vue/solid";
import { Link } from "@inertiajs/inertia-vue3";
export default {

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
  },
  components:{
    BreezeButton,
    PlayIcon,
    Link
  }
};
</script>