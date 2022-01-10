<template>
  <section id="contact" class="relative">
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
      <div class="hidden md:block md:w-3/6">
        <img src="" alt="" srcset="" />
      </div>
      <div  class="md:w-3/6 bg-white p-5 rounded-xl">
        <div >
          <BreezeValidationErrors class="mb-4" />
          <form @submit.prevent="submit" class="w-full">
            <legend class=" text-xl md:text-3xl font-bold"><span class="text-black">BECOME</span> <span  class="text-red-500">A VOLUNTEER</span></legend>
            <div class="mt-4 mb-3">
              <BreezeLabel class="" for="name" value="Your name" />
              <BreezeInput
                id="name"
                type="text"
                class="mt-1 block w-full"
                v-model="form.name"
                required
                autocomplete="your-name"
              />
            </div>
            <div class="mb-3">
              <BreezeLabel class="" for="email" value="Email" />
              <BreezeInput
                id="email"
                type="email"
                class="mt-1 block w-full"
                v-model="form.email"
                required

                autocomplete="email"
              />
            </div>
            <div class="mb-3">
              <BreezeLabel class="" for="message" value="Message" />
              <BreezeTextarea
                id="message"

                class="mt-1 block w-full"
                v-model="form.message"
                required
                
                autocomplete="message"
              />
            </div>

            <div class="flex items-center justify-end mt-4">
              <BreezeButton
                class="ml-4"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
              >
                Send message
              </BreezeButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>
<style scoped lang="scss">
section {
  min-height: 65vh;
  @media(max-width:768px){
    min-height:80vh;
  }
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
import BreezeInput from "@/Components/Input.vue";
import BreezeTextarea from "@/Components/Textarea.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { PlayIcon } from "@heroicons/vue/solid";
export default {
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
  },
  components: {
    BreezeButton,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors,
    BreezeTextarea,
    PlayIcon,
  },
  data() {
    return {
      form: this.$inertia.form({
        email: "",
        password: "",
        remember: false,
      }),
    };
  },
  methods: {
    submit() {
      this.form.post('/send-mail', {
        onFinish: () => this.form.reset("password"),
      });
    },
  },
};
</script>