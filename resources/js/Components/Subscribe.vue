<template>
  <!--Subscribe-->
  <div
    class="
      container
      font-sans
      bg-green-100
      rounded
      mt-8
      p-4
      md:p-24
      text-center
    "
  >
    <h2 class="font-bold break-normal text-2xl md:text-4xl">
      Subscribe to ZeeNews
    </h2>
    <h3
      class="
        font-bold
        break-normal
        font-normal
        text-gray-600 text-base
        md:text-xl
      "
    >
      Get the latest posts delivered right to your inbox
    </h3>
    <div class="w-full text-center pt-4">
      <form @submit.prevent="submit">
        <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
          <input
          v-model="form.email"
            type="email"
            placeholder="youremail@example.com"
            class="
              flex-1
              appearance-none
              rounded
              shadow
              p-3
              text-gray-600
              mr-2
              focus:outline-none
            "
          />
          <button
            type="submit"
            class="
              flex-1
              mt-4
              md:mt-0
              block
              md:inline-block
              appearance-none
              bg-green-500
              text-white text-base
              font-semibold
              tracking-wider
              uppercase
              py-4
              rounded
              shadow
              hover:bg-green-400
            "
          >
            Subscribe
          </button>
        </div>
      </form>
      <BreezeValidationErrors class="mb-4" />
    </div>
  </div>
  <!-- /Subscribe-->
</template>

<script>
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
export default {
    components:{
        BreezeValidationErrors
    },
  data() {
    return {
      form: this.$inertia.form({
        email: "",
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("subscribe"), {
        onFinish: () => (this.form.email = ""),
      });
    },
  },
};
</script>
