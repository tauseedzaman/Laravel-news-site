<template>
    <Head title="Welcome" />

    <GuestLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Welcome
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        welcome to our news site
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<script>
import GuestLayout from '@/Layouts/Guest.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    props:{
        canLogin: Boolean,
        canRegister: Boolean,
    },
    components: {
        GuestLayout,
        Head,
    },
}
</script>
