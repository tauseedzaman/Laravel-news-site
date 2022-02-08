<template>
  <Head title="Posts" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">Category / {{ posts[0].category.name }}</h2>
    </template>
    <div class="py-8">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-4 -mx-6">
					<!--1/3 col -->
                    <div v-for="(post,index) in posts"  :key="post.id" class="flex flex-col flex-shrink w-full p-6 md:w-1/3">
						<div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow-lg">
							<Link :href="route('post',post.slug)" class="flex flex-wrap no-underline hover:no-underline">
								<img :src="'http://127.0.0.1:8000/'+post.image" class="w-full h-64 pb-6 rounded-t">
								<p class="w-full px-6 text-xs text-lg text-gray-600 text-green-600 md:text-sm"><b>{{ post.category.name }}</b></p>
								<div class="w-full px-6 text-xl font-bold text-gray-900">{{ post.title }}</div>
								<p class="px-6 mb-5 font-serif text-base text-gray-800">
									{{ post.description }}
								</p>
							</Link>
						</div>
						<div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow-lg">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 mr-4 rounded-full avatar" data-tippy-content="Author Name" :src="'http://127.0.0.1:8000/'+post.author.image" :alt="post.author.name">
								<p class="text-xs text-gray-600 md:text-sm">{{ new Date(post.created_at).toDateString() }}</p>
							</div>
						</div>
					</div>

				</div>
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
    posts: Object,
  },
  mounted(){
      console.log(this.posts);
  },
  components: {
    BreezeAuthenticatedLayout,
    Head,
    Link,
  },
};
</script>
