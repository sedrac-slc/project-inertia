<script setup>
    defineProps({
        text: String,
        type: String,
        colspan: String,
    });
</script>
<template>

    <th class="px-6 py-3" v-if="type == 'th'" :colspan="colspan">
       {{ text }}
    </th>

    <td class="px-6 py-3" v-if="type == 'td'" :colspan="colspan">
        {{ text }}
    </td >
</template>
