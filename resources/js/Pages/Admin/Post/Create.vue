<template>
    <AuthenticatedLayout>

        <div class="p-8">
            <form>
                <div class="mb-6">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select an category</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option v-for="category in categories" :key="category.id" :value="category.id">{{category.title}}</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="text" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Please enter title" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none " aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
                <div class="mb-6">
                    <label for="video_url" class="block mb-2 text-sm font-medium text-gray-900">Video URL (optional)</label>
                    <input type="text" id="video_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Please enter video url" required>
                </div>
                <div class="mb-6">
                    <label for="video_url" class="block mb-2 text-sm font-medium text-gray-900">Video URL (optional)</label>
                    <input type="text" id="video_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Please enter video url" required>
                </div>
                <div class="pb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Your descriptions</label>
                    <textarea type="text" id="description" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Enter your description"></textarea>
                </div>
                <div class="mb-6">
                    <label for="post_url" class="block mb-2 text-sm font-medium text-gray-900">Post URL (optional)</label>
                    <input type="text" id="post_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Please enter post url" required>
                </div>
                <div class="mb-6">
                    <label for="author" class="block mb-2 text-sm font-medium text-gray-900">Author Name</label>
                    <input type="text" id="author" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Please enter author name" required>
                </div>
                <div class="pb-6">
                    <label for="source" class="block mb-2 text-sm font-medium text-gray-900">Your sources</label>
                    <textarea type="text" id="source" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Enter your sources"></textarea>
                </div>

                <div>
                    <button type="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Store</button>
                </div>

            </form>
        </div>

    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps({
    categories: Array
})
</script>

<style scoped>

</style>
