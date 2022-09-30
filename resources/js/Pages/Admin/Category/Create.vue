<template>
    <AuthenticatedLayout>

        <div class="p-8">
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="text" id="title"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           placeholder="Please name your category" required>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload
                        file</label>
                    <input
                        class="h-7 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none "
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
                <div class="py-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
                    <textarea id="message" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Enter your description"></textarea>
                </div>
            </form>
        </div>

    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "Create",
    components: {AuthenticatedLayout}
}
</script>

<style scoped>

</style>
