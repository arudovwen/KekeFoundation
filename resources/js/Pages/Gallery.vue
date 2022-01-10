<template>
  <Navigation />
  <section class="min-h-screen py-20 mt-10">
    <div class="container mx-auto md:w-10/12">
       <h2 class="mb-5 text-xl md:text-3xl font-bold text-center"><span class="text-black">Our</span> <span  class="text-red-500">Gallery</span></h2>
      <vue-picture-swipe :items="items"></vue-picture-swipe>
    </div>
  </section>
  <Footer />
</template>
<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Navigation from "@/Layouts/Navigation";
import Footer from "@/Layouts/Footer.vue";
 import VuePictureSwipe from 'vue3-picture-swipe';
export default {
  components: {
    Head,
    Link,
    Navigation,
    Footer,
    VuePictureSwipe
  },
  data: function () {
    return {
      items: [
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },

         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },

         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },

         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
         {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 600,
          h: 400,
          alt: "some numbers on a grey background", // optional alt attribute for thumbnail image
        },
        {
          src: "/images/main1.jpg",
          thumbnail: "/images/main1-mini.jpg",
          w: 1200,
          h: 900,

        },
      ],
    };
  },
};
</script>
<style scoped>

</style>