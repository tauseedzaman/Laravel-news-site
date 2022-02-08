<template>
  <Head title="Posts" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ post.title }}
      </h2>
    </template>
    <div class="py-8">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <!--Posts Container-->
            <div class="flex flex-wrap justify-between pt-4 -mx-6">
              <div class="flex flex-col flex-grow flex-shrink w-full p-6">
                <div
                  class="
                    flex-1
                    overflow-hidden
                    bg-white
                    rounded-t rounded-b-none
                    shadow-lg
                  "
                >
                  <div class="flex flex-wrap no-underline hover:no-underline">
                    <img
                      :src="'http://127.0.0.1:8000/' + post.image"
                      class="w-full h-full pb-6 rounded-t"
                    />
                    <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                      {{ post.category.name }}
                    </p>
                    <p class="px-6 mb-5 font-serif text-base text-gray-800">
                      {{ post.description }}
                    </p>
                  </div>
                </div>
                <div
                  class="
                    flex-none
                    p-6
                    mt-auto
                    overflow-hidden
                    bg-white
                    rounded-t-none rounded-b
                    shadow-lg
                  "
                >
                  <div class="flex items-center justify-between">
                    <img
                      class="w-8 h-8 mr-4 rounded-full avatar"
                      data-tippy-content="Author Name"
                      :src="'http://127.0.0.1:8000/' + post.author.image"
                      alt="Avatar of Author"
                    />
                    <p class="text-xs text-gray-600 md:text-sm">
                      {{ new Date(post.created_at).toDateString() }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <Comments :post_id="post.id" />
            <Allcomments :post_id="post.id" />
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import Comments from "@/Components/Comments.vue";
import Allcomments from "@/Components/Allcomments.vue";

import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    post: Object,
  },
  mounted() {
  },
  components: {
    BreezeAuthenticatedLayout,
    Head,
    Link,
    Comments,
    Allcomments,
  },
};
</script>
