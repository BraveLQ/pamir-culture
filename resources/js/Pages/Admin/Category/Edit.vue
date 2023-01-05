<template>
    <AuthenticatedLayout>

        <div class="p-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit the Category
            </h2>
        </div>
        <div class="p-8">
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="text" id="title"
                           v-model="form.title"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           placeholder="Please name your category" required>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                           for="image">Upload
                        file</label>
                    <input
                        class="h-7 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none "
                        @input="form.image = $event.target.files[0]"
                        id="image" type="file">
                </div>
                <div class="py-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Your
                        descriptions</label>
                    <textarea v-model="form.description" type="text" id="description" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Enter your description"></textarea>
                </div>
                <div>
                    <button type="submit"
                            class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Update
                    </button>
                </div>
            </form>
        </div>

    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {useForm} from '@inertiajs/inertia-vue3';
import {Inertia} from '@inertiajs/inertia'


const props = defineProps({
    category: Object,
})

const form = useForm({
    title: props.category?.title,
    image: null,
    description: props.category?.description,
});

const submit = () => {
    Inertia.post(`/categories/${props.category.id}`, {
        _method: "put",
        title: form.title,
        image: form.image,
        description: form.description,
    })
};

</script>

<style scoped>

</style>
