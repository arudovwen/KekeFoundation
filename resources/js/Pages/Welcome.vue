<template>
    <Head title="Welcome" />

 <Navigation :canLogin="canLogin" />
    <Banner :canLogin="canLogin"/>
    <Board/>
    <About />
    <Causes />
    <Donation />
    <Gallery/>
    <Event />
    <Volunteer />
     <Footer />
</template>

<style scoped>

</style>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Navigation from "@/Layouts/Navigation";
import Banner from '@/LandingComponents/Banner.vue';
import About from '@/LandingComponents/About.vue';
import Causes from '@/LandingComponents/Causes.vue';
import Volunteer from '@/LandingComponents/Volunteer.vue';
import Event from '@/LandingComponents/Event.vue';
import Donation from '@/LandingComponents/Donation.vue';
import Board from '@/LandingComponents/Board.vue';
import Gallery from '@/LandingComponents/Gallery.vue';
import Footer from '@/Layouts/Footer.vue'
export default {
    components: {
      Head,

    Navigation,

      Link,
      Banner,
      Donation,
      Event,
      Volunteer,
      Causes,
      About,
      Footer,
      Gallery,
      Board
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,

    },
}
</script>
