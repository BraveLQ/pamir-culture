<template>
    <Head title="Categories"/>
    <AuthenticatedLayout>
        <div class="p-9">
            <div>
                <h1 class="text-xl font-bold">Categories Dashboard</h1>
            </div>
            <div class="py-6">
                <Link :href="route('categories.create')"
                      class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Add New Category
                </Link>
            </div>

            <div>

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-orange-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Description
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="category in categories.data" :key="category.id" class="bg-white border-b  hover:bg-gray-50">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                {{ category.id }}
                            </th>
                            <td class="py-4 px-6">
                                {{ category.title }}
                            </td>
                            <td class="py-4 px-6">
                                {{ category.description }}
                            </td>
                            <td class="py-4 px-6 text-right">
                                <Link :href="route('categories.edit', category.id)" class="font-medium text-blue-500 hover:text-blue-700 mr-2">Edit</Link>
                                <Link :href="route('categories.destroy', category.id)" method="delete" as="button" type="button" class="font-medium text-red-500 hover:text-red-700 ml-6">Delete</Link>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {Link} from '@inertiajs/inertia-vue3';

defineProps({
    categories: Object
})
</script>

<style scoped>

</style>
