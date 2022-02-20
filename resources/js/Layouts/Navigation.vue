<template>
  <div
    class="top-0 w-full z-40 transition ease-in-out duration-300"
    :class="active ? 'bg-black fixed shadow' : 'bg-transparent absolute'"
  >
    <nav
      class="container px-5 mx-auto relative flex justify-between items-center"
    >
      <div class="logo py-5"><Link href="/" class=" flex items-center"><img src="/images/logocolor.png" class="mr-2 logoimg" alt="keke foundation"/> KAY'S COTERIE CARE FOUNDATION</Link></div>
      <MenuAlt3Icon
        @click="toggleMobileNav = !toggleMobileNav"
        class="h-7 w-6 text-white"
        v-if="mobile"
      />
      <ul
        v-if="toggleMobileNav"
        class="
          flex flex-col
          md:flex-row
          items-center
          p-4
          md:p-0
          transition
          ease-in-out
          duration-300
        "
        :class="
          mobile ? 'absolute w-full top-0 left-0 bg-black text-center' : ''
        "
      >
        <span class="p-4 absolute left-0 top-0" v-if="mobile">
          <XIcon
            @click="toggleMobileNav = !toggleMobileNav"
            class="h-5 w-5 text-white"
          />
        </span>
        <li>
          <Link
            href="/"
            :class="{ 'text-red-500': $page.url === '/' }"
            class="hover:text-red-500 text-white"
            >Home</Link
          >
        </li>
        <li>
          <Link
            class="hover:text-red-500 text-white"
            :class="{ 'text-red-500': $page.url.includes('/#about') }"
            href="/#about"
            >About</Link
          >
        </li>
        <li>
          <Link
            class="hover:text-red-500 text-white"
            :class="{ 'text-red-500': $page.url.includes('/#causes') }"
            href="/#causes"
            >Causes</Link
          >
        </li>
        <li>
          <Link
            class="hover:text-red-500 text-white"
            :class="{ 'text-red-500': $page.url.includes('/gallery') }"
            href="/gallery"
            >Gallery</Link
          >
        </li>
        <li>
          <Link
            class="hover:text-red-500 text-white"
            :class="{ 'text-red-500': $page.url.includes('/#donation') }"
            href="/#donation"
            >Donations</Link
          >
        </li>
        <li>
          <Link
            class="hover:text-red-500 text-white"
            :class="{ 'text-red-500': $page.url.includes('/#contact') }"
            href="/#contact"
            >Contact</Link
          >
        </li>
        <li>
          <Link :href="route('login')">

            <button class="login-button  px-5 py-2 nline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red transition ease-in-out duration-150">
Log in
            </button>
          </Link>
        </li>
      </ul>
    </nav>
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import BreezeButton from "@/Components/Button.vue";
import { MenuAlt3Icon, XIcon } from "@heroicons/vue/solid";

export default {
  data() {
    return {
      active: false,
      innerHeight: 0,
      mobile: false,
      toggleMobileNav: true,
      innerWidth: 0,
    };
  },
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
  },
  components: {
    Link,
    BreezeButton,
    MenuAlt3Icon,
    XIcon,
  },
  mounted() {
    if(this.$page.url !== '/'){

        this.active = true
      }
    window.addEventListener("scroll", () => {
      if(this.$page.url === '/'){
        if (window.scrollY > window.innerHeight * 0.5) {
        this.active = true;
      } else {
        this.active = false;
      }

      }else{
        this.active = true
      }
       if (this.mobile) {
        this.toggleMobileNav = false;
      }
    });

    window.addEventListener("resize", () => {

      this.innerWidth = window.innerWidth;
      this.handleScreen();
    });
    this.handleScreen();
  },
  methods: {
    handleScreen() {
      if (window.innerWidth < 768) {
        this.mobile = true;
        this.toggleMobileNav = false;
      } else {
        this.mobile = false;
        this.toggleMobileNav = true;
      }
    },
  },
};
</script>
<style scoped lang="scss">
nav {
  .logo {
    color: rgba($color: #fff, $alpha: 1);
    font-weight: bold;
  }
  ul {
    li {
      text-align: center;
      padding: 5px 15px;
      font-size: 0.89rem;
      a {
        font-weight: bold;
      }

      .login-button {
        border: 1px solid;
        margin-left: 4rem;
        border-radius: 1.7rem 3px 1.7rem 3px;
        font-size: 0.8rem;
        @media (max-width: 767px) {
          margin-left: 0;
        }
      }
    }
  }
}
.logoimg{
  width:40px;
  height:auto;
   @media (max-width: 767px) {
          width:30px;
        }
}
</style>