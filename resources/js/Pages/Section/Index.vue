<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-3">
                Разделы
            </h3>
            <Link :href="route('sections.create')" class="block bg-white p-2 border border-gray-300 w-1/6 mr-4 rounded-lg text-center">+ раздел</Link>
            <Link :href="route('branches.create')" class="block bg-white p-2 border border-gray-300 w-1/6 rounded-lg text-center">+ ветку</Link>
        </div>
        <div v-if="sections">
            <div v-for="section in sections" :key="section.id">
                <div class="mt-8" v-if="section.branches">
                    <div class="mb-2 flex items-center">
                        <h3 class="text-lg mr-3">{{ section.title }}</h3>
                        <Link :href="route('sections.edit', section.id)">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        </Link>
                    </div>
                    <Link 
                        :href="route('branches.show', branch.id)"
                        :key="branch.id"
                        v-for="branch in section.branches" 
                        class="block ml-4 bg-white p-2 border border-gray-100">
                        <h3>{{ branch.title }}</h3>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";

export default defineComponent({
    name: "Index",
    layout: MainLayout,
    props: [
        'sections'
    ],

    components: {
        Link
    },
})
</script>

<style scoped>

</style>
