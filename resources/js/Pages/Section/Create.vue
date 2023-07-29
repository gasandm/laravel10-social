<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">
                Добавить раздел
            </h3>
        </div>
        <div>
            <div class="mb-4">
                <input placeholder="Заголовок" type="text" v-model="title" class="border-gray-300 p-2 w-1/4"/>
                <div class="text-red-600 text-sm" v-if="this.$page.props.errors.title">{{this.$page.props.errors.title}}</div>
            </div>
            <div>
                <a class="cursor-pointer block w-1/4 py-2 bg-sky-500 border border-sky-600 text-white text-center" @click.prevent="store">Добавить</a>
            </div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import MainLayout from "@/Layouts/MainLayout.vue";
import {Link} from "@inertiajs/vue3";

export default defineComponent({
    name: "Create",
    layout: MainLayout,

    data() {
        return {
            title: ''
        }
    },

    methods: {
        store() {
            this.$inertia.post('/sections', {title: this.title})
        }
    },

    components: {
        Link
    },
})
</script>

<style scoped>

</style>
