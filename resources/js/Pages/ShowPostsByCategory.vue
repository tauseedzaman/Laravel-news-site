<template>
    <Head title="Posts" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div>
                            <h1>
                            Hello title
                            </h1>
                            <p>
     * Show the form for creating a new resource. Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nisi velit sed? Ex eos facilis sunt fuga. Tenetur eligendi accusantium rem corrupti dignissimos cumque amet quasi exercitationem non sapiente? Facere!
                            Lorem
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head,Link } from '@inertiajs/inertia-vue3';

export default {
    props:{
        posts:Object,
    },
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Link,
    },
}
</script>
