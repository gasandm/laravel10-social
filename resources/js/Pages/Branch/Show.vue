<template>
    <div>
        <div class="flex items-center mb-4">
            <h3 class="text-xl mr-4">
                {{ branch.title}}
            </h3>
        </div>
        <div>
        </div>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import MainLayout from "@/Layouts/MainLayout.vue";

export default defineComponent({
    name: "Show",
    layout: MainLayout,

    data() {
        return {}
    },

    props: [
        'branch'
    ],
})
</script>

<style scoped>

</style>
