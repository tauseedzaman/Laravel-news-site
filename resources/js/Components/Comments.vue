<template>
    <h3
      class="
        font-bold
        break-normal
        font-normal
        text-gray-600
        md:text-xl
      "
    >
    Leave a comments
    </h3>

  <div
    class="
      container
      font-sans
      bg-green-100
      rounded
      mt-1
      p-2
      w-full
      md:p-4
      text-center
    "
  >
        <BreezeValidationErrors class="mb-4" />
    <div class="w-full text-center pt-4">
      <form @submit.prevent="submit">
        <div class=" mx-auto p-1 pr-0 flex  items-center">

          <textarea
          v-model="form.comment"
          placeholder="Enter Your Message"
          id="comment"
          cols="120" rows="10"
            class="
              rounded
              shadow
              w-full
              text-gray-600
              mr-2
              focus:outline-none
            "
          ></textarea>
        </div>
          <button
            type="submit"
            class="
              mt-4
              md:mt-0
              ml-auto
              block
              px-12
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
            Comment
          </button>
      </form>
    </div>
  </div>
</template>

<script>
    import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
export default {
    components:{
        BreezeValidationErrors
    },
    props:{
        post_id: Number
    },
     data() {
        return {
            form: this.$inertia.form({
                comment: '',
                post_id: this.post_id ,
            })
        }
    },

    methods: {
        submit() {
            this.form.post(this.route('comment'), {
                onFinish: () => this.form.comment="",
            })
        }
    }
};
</script>
