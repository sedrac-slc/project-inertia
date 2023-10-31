<script setup>
    defineProps({
        text: String,
        type: String
    });
</script>
<template>

    <th scope="col" class="px-6 py-3" v-if="type == 'th'">
       {{ text }}
    </th>

    <td class="px-6 py-3" v-if="type == 'td'">
        {{ text }}
    </td >
</template>