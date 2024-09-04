<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Button from '@/Components/ui/button/Button.vue';
import { Link, router } from '@inertiajs/vue3';
// const message = 'Hello world';
const props = defineProps({
    // message : String
    forms: {
        type: Array,
        required: true,
    }
});
</script>

<template>
    <AuthenticatedLayout>
    <!-- <h1>{{ message }}</h1> -->
     <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <!-- <a href="/forms/new">New Form</a> -->

        <div class="flex items-center justify-between space-y-2">
        <h2 class="text-3xl font-bold tracking-tight">
          All Forms
        </h2>
        <div class="flex items-center space-x-2">

            <Button @click="router.visit('forms/new')">Create Form</Button>
        </div>
      </div>
        <table>
            <tr v-for="form in forms" :key="form.id">
                <td>{{ form.id }}</td>
                <td>{{ form.name }}</td>
                <td><a href="/forms/{{ form.id }}">Edit form</a></td>
            </tr>
        </table>

     </div>

    </AuthenticatedLayout>
</template>