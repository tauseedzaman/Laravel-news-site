<template>
  <Head title="Categories" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Categories
      </h2>
    </template>

    <div class="py-8">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <ul class="">
              <li class="shadow p-4 my-4 bg-green-400 cursor-pointer" v-for="category in categories" :key="category.id">
                  <Link :href="route('category_posts',category.id)">
                {{ category.name}} <span class="text-right ml-auto float-right">posts ({{ category.posts.length }})</span>
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
    console.log(this.categories);
  },
  methods() {},
};
</script>
