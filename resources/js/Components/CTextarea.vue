<template>
<textarea :cols="cols" :placeholder="placeholder" class="mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="textarea"></textarea>
</template>

<script>
export default {
    name: "CTextarea",

    props: ['modelValue', 'cols', 'placeholder'],

    emits: ['update:modelValue'],

    methods: {
        focus() {
            this.$refs.input.focus()
        }
    }
}
</script>

<style scoped>

</style>
