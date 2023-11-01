<script setup>
    import ModalLayout from '@/Layouts/ModalLayout.vue';
    import InputForm from '../InputForm.vue';

    defineProps({
        model: String,
        action: String,
        text: String,
        textClose: String,
        textSubmit: String,
    });

</script>
<template>
    <ModalLayout :action="action" :model="model" :text="text" :text-close="textClose" :text-submit="textSubmit">
        <template #form>
            <div class="grid md:grid-cols-2 md:gap-6">
                <InputForm name="floating_name" label="Name" type="text"/>
                <InputForm name="floating_email" label="Email" type="email"/>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <InputForm name="floating_password" label="Password" type="password"/>
                <InputForm name="floating_repeat_password" label="Confirm password" type="password"/>
            </div>
        </template>
    </ModalLayout>
</template>
