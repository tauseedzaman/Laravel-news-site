<template>
  <Head title="Contact Us" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Contact Us
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <BreezeValidationErrors class="mb-4" />

            <form @submit.prevent="submit">
              <div>
                <BreezeLabel for="name" value="Name" />
                <BreezeInput
                  id="name"
                  type="text"
                  class="block w-full mt-1"
                  placeholder="Enter Your Name"
                  v-model="form.name"
                  required
                  autofocus
                  autocomplete="name"
                />
              </div>
              <div class="mt-4">
                <BreezeLabel for="email" value="Email" />
                <BreezeInput
                  id="email"
                  type="email"
                  class="block w-full mt-1"
                  placeholder="Enter Your Email"
                  v-model="form.email"
                  required
                  autocomplete="username"
                />
              </div>

              <div class="mt-4">
                <BreezeLabel for="message" value="Message" />
                <textarea
                  rows="10"
                  id="message"
                  type="message"
                  placeholder="Enter Your Message"
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  v-model="form.message"
                  required
                  autocomplete="message"
                >
                </textarea>
              </div>

              <div class="flex items-center justify-end mt-4">
                <BreezeButton
                  class="ml-4"
                  :class="{ 'opacity-25': form.processing }"
                  :disabled="form.processing"
                >
                  Submit
                </BreezeButton>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeButton from "@/Components/Button.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {

  components: {
    BreezeButton,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors,
    Head,
    BreezeAuthenticatedLayout,
    Link,
  },

  data() {
    return {
      form: this.$inertia.form({
        name: "",
        message: "",
        email: "",
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("contactus.store"), {
        onFinish: () => {
            this.form.reset()
            alert("Thanks for Contacting Us");
            },
      });
    },
  },
};
</script>
