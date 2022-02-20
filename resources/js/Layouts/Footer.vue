<template>
 <section class="bg-black py-20 px-10 md:px-0">
    <div class="container mx-auto flex flex-col-reverse md:flex-row justify-between text-white md:w-10/12">

      <div class="basis-1/2 p-3">
        <h3 class="text-3xl font-bold">About us</h3>
        <p class="text-slate-300 mb-5 text-sm"> Kay's Coterie Care Foundation was founded on the 24 of April 2021
We are an NGO set up primarily for the amelioration of children.
Our sole purpose is to reach out and lend a helping hand towards providing a better life for children.</p>
<small class="text-slate-300"> Copyright &#169;{{new Date().getFullYear()}} All rights reserved | Made by <a href="https://arudovwen.me">Arudovwen.me</a> </small>
      </div>
       <div  class="basis-1/4 p-3">
        <h3>Quick links</h3>
       <ul>

 <Link href="/"> <li class="text-slate-300 text-sm">Home</li></Link>
        <Link href="/#about"> <li class="text-slate-300 text-sm">About</li></Link>
        <Link  href="/#causes">    <li class="text-slate-300 text-sm">Causes</li></Link>
           <Link  href="/#events">    <li class="text-slate-300 text-sm">Events</li></Link>
             <Link  href="/#donations">     <li class="text-slate-300 text-sm">Donations</li></Link>
               <Link  href="/#volunteer">      <li class="text-slate-300 text-sm">Contact</li></Link>
       </ul>
      </div >
        <div  class="basis-1/4 p-3">
        <h3>Contact us</h3>
        <p class="text-slate-300 text-sm">Address : 10,abuja road</p>
        <p class="text-slate-300 text-sm">Email : info@kaysfoundation.com</p>
        <p class="text-slate-300 text-sm">Phone number : 08102974779</p>
      </div>
    </div>
 </section>
</template>
<style scoped lang="scss">

</style>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
components:{
  Link
}
}
</script>