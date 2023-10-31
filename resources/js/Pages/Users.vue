<script setup>
    import TableLayout from '@/Layouts/TableLayout.vue';
    import TableText from '@/Components/TableText.vue';
    import ButtonModel from '@/Components/ButtonModel.vue';
    import UserModel from '@/Components/Model/UserModel.vue';
    import { ref } from 'vue';
    
    defineProps({
        users: { type: Array, required: true, },
    });

    let model = ref("user-model");
</script>
<template>
    <TableLayout>
        <template #buttons>
            <ButtonModel :model="model" text="Adicionar"/>
        </template>
        <template #thead>
            <TableText text="Name" type="th"/>
            <TableText text="Email" type="th"/>
        </template>
        <template #tbody>
            <tr class="bg-white first:border-b dark:bg-gray-800 dark:border-gray-700" v-for="u in users" :key="u.id">
                <TableText :text="u.name" type="td"/>
                <TableText :text="u.email" type="td"/>
            </tr>
        </template>
        <template #modal>
            <UserModel :model="model" action="#"/>
        </template>
    </TableLayout>
</template>