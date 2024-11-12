<script setup lang="ts">
import { ref, watch } from 'vue'
import {Head} from "@inertiajs/vue3";

const props = defineProps<{
    title?: string
}>()

const title = ref(props.title)

watch(title, async (new_val, old_val) => {
    document.title = new_val
})

</script>

<template>
    <Head :title="title" />
    <main class="container mx-auto">
        <header>
            <inertia-link href="/">Главная</inertia-link>
            <inertia-link href="/">О нас</inertia-link>
            <inertia-link href="/">Контакты</inertia-link>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<style scoped>

</style>
