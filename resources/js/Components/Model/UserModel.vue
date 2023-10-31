<script setup>
    import ModalLayout from '@/Layouts/ModalLayout.vue';
    
    defineProps({
        model: String,
        action: String,
    });

</script>
<template>
    <ModalLayout :action="action" :model="model">
        <template #form>

        </template>
    </ModalLayout>
</template>