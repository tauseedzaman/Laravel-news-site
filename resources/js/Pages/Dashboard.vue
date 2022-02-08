<template>
  <Head title="Home" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Home</h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
          <div class="container max-w-6xl px-4 mx-auto mt-32 md:px-0">
            <div class="">
              <div
                class="w-full text-xl leading-normal text-gray-800 rounded-t md:text-2xl"
              >
                <!--Posts Container-->
                <div class="flex flex-wrap justify-between pt-4 -mx-6">
                  <!-- trend post -->
                  <div class="flex flex-col flex-grow flex-shrink w-full p-6">
                    <div
                      class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow-lg "
                    >
                      <Link
                        :href="posts[0].slug"
                        class="flex flex-wrap no-underline hover:no-underline"
                      >
                        <img
                          :src="posts[0].image"
                          class="w-full h-screen pb-6 rounded-t"
                        />
                        <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                          {{ posts[0].category.name }}
                        </p>
                        <div
                          class="w-full px-6 text-xl font-bold text-gray-900"
                        >
                          {{ posts[0].title }}
                        </div>
                        <p class="px-6 mb-5 font-serif text-base text-gray-800">
                          {{ posts[0].description }}
                        </p>
                      </Link>
                    </div>
                    <div
                      class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow-lg "
                    >
                      <div class="flex items-center justify-between">
                        <img
                          class="w-8 h-8 mr-4 rounded-full avatar"
                          data-tippy-content="Author Name"
                          :src="
                            'http://127.0.0.1:8000/' + posts[0].author.image
                          "
                          alt="Avatar of Author"
                        />
                        <p class="text-xs text-gray-600 md:text-sm">
                          {{ new Date(posts[0].created_at).toDateString() }}
                        </p>
                      </div>
                    </div>
                  </div>

                  <!--1/3 col -->
                  <div
                    v-for="(post, index) in posts"
                    :key="post.id"
                    class="flex flex-col flex-shrink w-full p-6 md:w-1/3"
                  >
                    <div
                      class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow-lg "
                    >
                      <Link
                        :href="route('post', post.slug)"
                        class="flex flex-wrap no-underline hover:no-underline"
                      >
                        <img
                          :src="post.image"
                          class="w-full h-64 pb-6 rounded-t"
                        />
                        <p class="w-full px-6 text-xs text-gray-600 md:text-sm">
                          {{ post.category != null ? post.category.name : "-" }}
                        </p>
                        <div
                          class="w-full px-6 text-xl font-bold text-gray-900"
                        >
                          {{ post.title }}
                        </div>
                        <p class="px-6 mb-5 font-serif text-base text-gray-800">
                          {{ post.description }}
                        </p>
                      </Link>
                    </div>
                    <div
                      class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow-lg "
                    >
                      <div class="flex items-center justify-between">
                        <img
                          class="w-8 h-8 mr-4 rounded-full avatar"
                          data-tippy-content="Author Name"
                          :src="post.author.image"
                          :alt="post.author.name"
                        />
                        <p class="text-xs text-gray-600 md:text-sm">
                          {{ new Date(post.created_at).toDateString() }}

                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Post Content-->
              </div>
              <Subscribe />
            </div>
          </div>
          <!--  <div class="p-2 bg-white border-b border-gray-200">
          </div>-->
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head,Link } from "@inertiajs/inertia-vue3";
import Subscribe from "@/Components/Subscribe.vue";

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
    Link,
    Subscribe,
  },
  props: {
    posts: Object,
  },
};
</script>
