<template>
    <div>
        <div class="flex items-center">
            <h3 class="text-xl mr-3">
                Разделы
            </h3>
            <Link :href="route('sections.create')" class="block bg-white p-2 border border-gray-300 w-1/6 mr-4 rounded-lg text-center">+ раздел</Link>
            <Link :href="route('branches.create')" class="block bg-white p-2 border border-gray-300 w-1/6 rounded-lg text-center">+ ветку</Link>
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

    components: {
        Link
    },
})
</script>

<style scoped>

</style>
