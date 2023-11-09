<script setup>
    import TableLayout from '@/Layouts/TableLayout.vue';
    import TableText from '@/Components/TableText.vue';
    import ButtonModel from '@/Components/ButtonModel.vue';
    import TableButton from '@/Components/TableButton.vue';
    import UserModel from '@/Components/Model/UserModel.vue';
    import { ref } from 'vue';

    const text = ref("");
    const user = ref({});
    const model = "user-model";

    const params = defineProps({
        users: { type: Object, required: true, },
    });

    const seletedUser = (action, id) => {
        text.value = action;
        user.value = id != 0 ? params.users.data.find(u => u.id === id) : {};
    }

</script>
<template>
    <TableLayout title="Users" panel="Users">
        <template #buttons>
            <ButtonModel :model="model" text="Adicionar"  @click="seletedUser('Adicionar',0)"/>
        </template>
        <template #thead>
            <TableText text="Name" type="th"/>
            <TableText text="Email" type="th"/>
            <TableText text="Phone" type="th"/>
            <TableText text="Birthday" type="th"/>
            <TableText text="Gender" type="th"/>
            <TableText text="Acção" type="th" colspan="2"/>
        </template>
        <template #tbody>
            <tr class="bg-white first:border-b dark:bg-gray-800 dark:border-gray-700" v-for="u in users.data" :key="u.id">
                <TableText :text="u.name" type="td" />
                <TableText :text="u.email" type="td"/>
                <TableText :text="u.phone" type="td"/>
                <TableText :text="u.birthday" type="td"/>
                <TableText :text="u.gender" type="td"/>
                <TableButton :model="model" text="Editar" @clicked="seletedUser('Editar',u.id)" type="edit" />
                <TableButton :model="model" text="Eliminar" @clicked="seletedUser('Eliminar',u.id)" type="danger"/>
            </tr>
        </template>
        <template #modal>
            <UserModel :user="user" :model="model" :text="text" text-close="Cancelar" text-submit="Submeter"/>
        </template>
    </TableLayout>
</template>
