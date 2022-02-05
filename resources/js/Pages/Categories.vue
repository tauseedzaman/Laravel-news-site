<template>
  <Head title="Categories" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Categories
      </h2>
    </template>

    <div class="py-8">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <ul class="">
              <li
                class="p-4 my-4 bg-green-400 shadow cursor-pointer"
                v-for="category in categories"
                :key="category.id"
              >
                <Link :href="route('category_posts', category.id)">
                  {{ category.name }}
                  <span class="float-right ml-auto text-right"
                    >posts ({{ category.posts.length }})</span
                  >
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    categories: Object,
  },
  components: {
    BreezeAuthenticatedLayout,
    Head,
    Link,
  },
  data() {
    return {};
  },
  mounted() {
  },
  methods() {},
};
</script>
