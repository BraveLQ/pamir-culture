<template>
    <AuthenticatedLayout>

        <div class="p-8">
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select a
                        category</label>
                    <select v-model="form.category_id" id="category_id" name="category_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option v-for="category in categories" :key="category.id" :value="category.id">
                            {{ category.title }}
                        </option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input v-model="form.title" type="text" id="title"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           placeholder="Please enter title" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="image">Upload
                        file</label>
                    <input @input="form.image = $event.target.files[0]"
                           class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none "
                           aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
                <div class="mb-6">
                    <label for="video_url" class="block mb-2 text-sm font-medium text-gray-900">Video URL
                        (optional)</label>
                    <input v-model="form.video_url" type="text" id="video_url"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           placeholder="Please enter video url" required>
                </div>
                <div class="pb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Your
                        descriptions</label>
                    <textarea v-model="form.description" type="text" id="description" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Enter your description"></textarea>
                </div>
                <div class="mb-6">
                    <label for="post_url" class="block mb-2 text-sm font-medium text-gray-900">Post URL
                        (optional)</label>
                    <input v-model="form.post_url" type="text" id="post_url"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           placeholder="Please enter post url" required>
                </div>
                <div class="mb-6">
                    <label for="author" class="block mb-2 text-sm font-medium text-gray-900">Author Name</label>
                    <input v-model="form.author" type="text" id="author"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           placeholder="Please enter author name" required>
                </div>
                <div class="pb-6">
                    <label for="source" class="block mb-2 text-sm font-medium text-gray-900">Your sources</label>
                    <textarea v-model="form.source" type="text" id="source" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Enter your sources"></textarea>
                </div>

                <div>
                    <button type="submit"
                            class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Store
                    </button>
                </div>

            </form>
        </div>

    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {useForm} from "@inertiajs/inertia-vue3";

defineProps({
    categories: Array
})
const form = useForm({
    title: "",
    image: null,
    category_id: "",
    video_url: "",
    description: "",
    post_url: "",
    author: "",
    source: "",

})
const submit = () => {
    form.post(route("posts.store"))
}
</script>

<style scoped>

</style>
