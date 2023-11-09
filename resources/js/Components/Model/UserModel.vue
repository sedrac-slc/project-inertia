<script setup>
import ModalLayout from "@/Layouts/ModalLayout.vue";
import InputForm from "../InputForm.vue";
import { router } from "@inertiajs/vue3";

const props = defineProps({
  model: String,
  text: String,
  textClose: String,
  textSubmit: String,
  user: { type: Object, required: false, },
  errors: { type: Object, required: false, },
});

const submit = () => {
    switch(props.text){
        case "Adicionar":
            router.post(route('users.store'), props.user);
            break;
        case "Editar":
            router.put(route('users.update',props.user.id), props.user);
        break;
        case "Eliminar":
            router.delete(route('users.destroy',props.user.id));
        break;
    }
}

</script>
<template>
  <ModalLayout
    :model="model"
    :text="text"
    :text-close="textClose"
    :text-submit="textSubmit"
    @store-user="submit()"
  >
    <template #form>
      <div class="grid md:grid-cols-2 md:gap-6">
        <InputForm
          name="floating_name"
          label="Name"
          type="text"
          :value="user.name"
          @change-value="user.name = $event"
        />
        <InputForm
          name="floating_email"
          label="Email"
          type="email"
          :value="user.email"
          @change-value="user.email = $event"
        />
      </div>

      <div class="grid md:grid-cols-2 md:gap-6">
        <InputForm
          name="floating_phone"
          label="Phone"
          type="text"
          :value="user.phone"
          @change-value="user.phone = $event"
        />
        <InputForm
          name="floating_birthday"
          label="Birthday"
          type="date"
          :value="user.birthday"
          @change-value="user.birthday = $event"
        />
      </div>


      <div class="grid md:grid-cols-2 md:gap-6" v-if="text == 'Adicionar'">
        <InputForm
          name="floating_password"
          label="Password"
          type="password"
          :value="user.password"
          @change-value="user.password = $event"
        />
        <InputForm
          name="floating_repeat_password"
          label="Confirm password"
          type="password"
          :value="user.confirm_password"
          @change-value="user.confirm_password = $event"
        />
      </div>
    </template>
  </ModalLayout>
</template>
