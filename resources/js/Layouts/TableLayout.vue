<script setup>
import DashLayout from '@/Layouts/DashLayout.vue';

defineProps({
  title: String,
  panel: String,
});
</script>
<template>
     <DashLayout :title="title" :panel="panel">
        
        <template #content>
            <section class="divide-y space-y-2 p-3">
                <div>
                    <slot v-if="$slots.buttons" name="buttons"/>
                </div>
                <div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <slot v-if="$slots.thead" name="thead"/>
                            </tr>
                        </thead>
                        <tbody>
                            <slot v-if="$slots.tbody" name="tbody"/>
                        </tbody>
                    </table>
                </div>
                <slot v-if="$slots.modal" name="modal"/>
            </section>
        </template>

     </DashLayout>
</template>