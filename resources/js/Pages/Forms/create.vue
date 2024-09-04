<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Button from "@/Components/ui/button/Button.vue";
import { Link } from "@inertiajs/vue3";
// import FormControl from "@/Components/ui/form/FormControl.vue";
// import FormDescription from "@/Components/ui/form/FormDescription.vue";
// import FormItem from "@/Components/ui/form/FormItem.vue";
// import FormLabel from "@/Components/ui/form/FormLabel.vue";
// import FormMessage from "@/Components/ui/form/FormMessage.vue";
// const message = 'Hello world';

const form = {
  name: "",
};
</script>

<template>
  <AuthenticatedLayout>
    <!-- <h1>{{ message }}</h1> -->
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <!-- <a href="/forms/new">New Form</a> -->

      <div class="flex items-center justify-between space-y-2">
        <h2 class="text-3xl font-bold tracking-tight">Create a form</h2>
      </div>
      <form action="">
        <div>
          <label class="mb-2">Form Name</label>
          <input type="text" placeholder="Form Name" v-model="form.name" />
        </div>
      </form>
    </div>
  </AuthenticatedLayout>
</template>