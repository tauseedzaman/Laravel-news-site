<template>
  <Head title="Welcome" />

  <GuestLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Welcome</h2>
    </template>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-sm sm:rounded-lg">
        		<div class="container px-4 md:px-0 max-w-6xl mx-auto mt-32">


			<div class="">

				<div class=" w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">


				<!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-4 -mx-6">

                    <!-- trend post -->
                    <div class="w-full  p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/1118905/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula.
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>

					<!--1/3 col -->
					<div v-for="post in posts"  :key="post.id" class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="post.id" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">{{ post.title }}</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									{{ post.description }}
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
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
  </GuestLayout>
</template>

<script>
import GuestLayout from "@/Layouts/Guest.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Subscribe from '@/Components/Subscribe.vue';

export default {
  components: {
    GuestLayout,
    Head,
    Subscribe,
  },
  props(){
      posts:Object
  },
  mounted() {
	  console.log(this.posts);
  },
};
</script>
