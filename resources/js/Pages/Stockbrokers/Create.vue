<template>
    <AppLayout title="New stockbroker">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New stockbroker
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid  md:gap-6">
                            <div class="mt-5 md:col-span-2 md:mt-0">
                                <form @submit.prevent="form.post(route('stockbrokers.store'))">
                                    <div class="overflow-hidden shadow sm:rounded-md">
                                        <div class="bg-white px-4 py-5 sm:p-6">
                                            <div class="grid grid-cols-12 gap-6">
                                                <div class="col-span-6">
                                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input v-model="form.name" type="text" name="name" id="name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    <div v-if="errors.name" class="text-red-600">
                                                        {{ errors.name }}
                                                    </div>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="full_name" class="block text-sm font-medium text-gray-700">Full name</label>
                                                    <input v-model="form.full_name" type="text" name="full_name" id="full_name" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    <div v-if="errors.full_name" class="text-red-600">
                                                        {{ errors.full_name }}
                                                    </div>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="cnpj" class="block text-sm font-medium text-gray-700">CNPJ</label>
                                                    <input v-model="form.cnpj" type="text" name="cnpj" id="cnpj" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                    <div v-if="errors.cnpj" class="text-red-600">
                                                        {{ errors.cnpj }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                            <button type="submit" :disabled="form.processing" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 mx-2">Save</button>
                                            <Link :href="route('stockbrokers.index')" class="inline-flex justify-center rounded-md border border-transparent bg-gray-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                                                Cancel
                                            </Link>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Link, useForm } from '@inertiajs/inertia-vue3';

    export default {
        components: { AppLayout, Link, useForm },

        props: {
            errors: Object
        },

        setup() {
            const form = useForm({
                name: '',
                full_name: '',
                cnpj: ''
            });

            return { form };
        }
    };
</script>