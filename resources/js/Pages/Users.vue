<script setup>
    import TableLayout from '@/Layouts/TableLayout.vue';
    import TableText from '@/Components/TableText.vue';

    defineProps({
        users: { type: Array, required: true, },
    });

</script>
<template>
    <TableLayout>
        <template #thead>
            <TableText text="Name" type="th"/>
            <TableText text="Email" type="th"/>
        </template>
        <template #tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="u in users" :key="u.id">
                <TableText :text="u.name" type="td"/>
                <TableText :text="u.email" type="td"/>
            </tr>
        </template>
    </TableLayout>
</template>