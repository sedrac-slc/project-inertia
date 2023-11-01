<script setup>
    import ModalLayout from '@/Layouts/ModalLayout.vue';
    import InputForm from '../InputForm.vue';
    import { ref } from 'vue'

    defineProps({
        model: String,
        action: String,
        text: String,
        textClose: String,
        textSubmit: String,
    });

    const user = ref({
        name: "",
        email: "",
        password: "",
        confirm_password: ""
    });

</script>
<template>
    <ModalLayout action="#" :model="model" :text="text" :text-close="textClose" :text-submit="textSubmit"
        @store-user="console.log(user)">
        <template #form>
            <div class="grid md:grid-cols-2 md:gap-6">
                <InputForm name="floating_name" label="Name" type="text" @change-value="user.name = $event"/>
                <InputForm name="floating_email" label="Email" type="email" @change-value="user.email = $event"/>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <InputForm name="floating_password" label="Password" type="password" @change-value="user.password = $event"/>
                <InputForm name="floating_repeat_password" label="Confirm password" type="password"  @change-value="user.confirm_password = $event"/>
            </div>
        </template>
    </ModalLayout>
</template>
