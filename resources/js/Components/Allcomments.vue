<template>
  <h3 class="font-bold break-normal font-normal text-gray-600 md:text-xl mt-4">
    Comments ({{ comments.length }})
  </h3>
  <div class="container font-sans bg-green-100 rounded mt-1 p-2">
    <div
      class="
        flex-none
        p-6
        mt-auto
        overflow-hidden
        bg-white
        rounded-t-none rounded-b
        shadow-lg
        my-2
      "
      v-for="comment in comments"
      :key="comment.id"
    >
      <div class="flex items-center justify-between">
        <img
          class="w-8 h-8 mr-4 rounded-full avatar"
          data-tippy-content="Author Name"
          :src="'http://127.0.0.1:8000/' + comment.user.image"
          :alt="comment.user.name"
        />
        <p class="text-xs text-gray-600 md:text-sm">{{ comment.user.name }}</p>
      </div>
      <p class="px-6 py-4 mb-5 font-serif text-base text-gray-800">
        {{ comment.content }}
      </p>
      <p class="text-xs text-gray-600 text-right md:text-sm">
        {{ new Date(comment.created_at).toDateString() }}
      </p>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  props: {
    post_id: Number,
  },
  data() {
    return {
      comments: "",
    };
  },

  mounted() {
    let x = axios.get(route("post-comments", this.post_id)).then((data) => {
      this.comments = data.data;
    });
  },
};
</script>
