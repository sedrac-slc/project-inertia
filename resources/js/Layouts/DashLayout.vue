
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({
  title: String,
  panel: String
});

</script>

<template>
    <AppLayout :title="title">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ panel }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <slot v-if="$slots.content" name="content"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>