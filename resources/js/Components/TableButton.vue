<script setup>
    defineProps({
        model: String,
        text: String,
        type: String,
        colspan: String,
    });

    defineEmits(['clicked']);
</script>
<template>

    <th class="px-6 py-3" v-if="type == 'edit'" :colspan="colspan" @click="$emit('clicked')">
        <button :data-modal-target="model" :data-modal-toggle="model" class="block text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
            {{ text }}
        </button>
    </th>

    <td class="px-6 py-3" v-if="type == 'danger'" :colspan="colspan" @click="$emit('clicked')">
        <button :data-modal-target="model" :data-modal-toggle="model"  class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
            {{ text }}
        </button>
    </td >

</template>
