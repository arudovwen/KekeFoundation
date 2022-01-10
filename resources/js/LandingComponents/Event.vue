<template>
  <section id="event" class="py-24">
    <div class="container md:w-10/12 mx-auto">
      <h2 class="mb-5 text-xl md:text-3xl font-bold text-center">
        <span class="text-black">UPCOMING</span>
        <span class="text-red-500">EVENTS</span>
      </h2>
      <div>
        <div class="flex flex-wrap flex-col md:flex-row w-full justify-between">
          <div class="md:w-3/6 p-5" v-for="n in options" :key="n.name">
            <div class="flex bg-slate-200">
              <div class="w-1/3 relative overflow-hidden">
                <img :src="n.img" alt="" srcset="" class="hover:scale-125 w-full h-full object-cover" />
                <span
                  class="
                    p-2
                    absolute
                    top-0
                    right-0
                    text-white
                    font-extrabold
                    z-40
                  "
                  style="background-color: rgba(0, 0, 0, 0.6)"
                  >{{ n.date }}</span
                >
              </div>
              <div class="w-4/6 text-left p-6">
                <span class="font-bold text-red-500">{{ n.name }}</span> <br />
                <span class="text-sm">{{ n.desc }}</span> <br />
                <div class="flex justify-between my-4">
                  <span class="pr-4 border-r border-slate-400"
                    ><span class="font-bold">{{ n.day }}</span> <br />
                    <span class="font-thin text-xs">Days</span></span
                  >
                  <span class="pr-4 border-r border-slate-400"
                    ><span class="font-bold">{{ n.hrs }}</span> <br />
                    <span class="font-thin text-xs">Hours</span></span
                  >
                  <span class=""
                    ><span class="font-bold">{{ n.min }}</span> <br />
                    <span class="font-thin text-xs">Minutes </span></span
                  >
                </div>
                <span class="border-b border-slate-400 text-red-400"
                  >Know more</span
                >
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
  data() {
    return {
      options: [
        {
          name: "Orphanage Visit",
          desc: "Visitationof Amazing grace home in warri",
          day: 130,
          hrs: 12,
          min: 40,
          date: "June 8",
          img: "/images/main1.jpg",
        },
        {
          name: "Children Outreach",
          desc: "Reaching out to kids ",
          day: 130,
          hrs: 12,
          min: 40,
          date: "June 8",
          img: "/images/main1.jpg",
        },
        {
          name: "Widows Outreach",
          desc: "Reaching out to the widows of Ekpan",
          day: 130,
          hrs: 12,
          min: 40,
          date: "June 8",
          img: "/images/main1.jpg",
        },
        {
          name: "Help The Needy",
          desc: "Seed the life ipon which you are created",
          day: 130,
          hrs: 12,
          min: 40,
          date: "June 8",
          img: "/images/main1.jpg",
        },
      ],
    };
  },
};
</script>