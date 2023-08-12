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
                    <div class="mb-2">
                        <h3 class="text-lg">{{ section.title }}</h3>
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
