<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">
                Добавить ветку
            </h3>
        </div>
        <div>
            <div class="mb-4" v-if="sections.length > 0">
                <select @change.prevent="getBranches" v-model="section_id">
                    <option value="null" selected disabled>Выберите раздел</option>
                    <option v-for="section in sections" :key="section.id" :value="section.id">{{ section.title }}</option>
                </select>
                <div class="text-red-600 text-sm" v-if="this.$page.props.errors.section_id">{{this.$page.props.errors.section_id}}</div>
            </div>
            <div class="mb-4" v-if="branches.length > 0">
                <select v-model="parent_id">
                    <option value="null" selected disabled>Выберите ветку</option>
                    <option v-for="branch in branches" :key="branch.id" :value="branch.id">{{ branch.title }}</option>
                </select>
            </div>
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
            title: '',
            section_id: null,
            branches: [],
            parent_id: null
        }
    },

    props: [
        'sections'
    ],

    methods: {
        store() {
            this.$inertia.post('/branches', {
                section_id: this.section_id,
                title: this.title,
                parent_id: this.parent_id
            })
        },
        getBranches() {
            this.parent_id = null
            axios.get(`/sections/${this.section_id}/branches`)
                .then( res => {
                    this.branches = res.data
                })
        }
    },

    components: {
        Link
    },
})
</script>

<style scoped>

</style>
