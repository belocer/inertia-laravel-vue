<script setup lang="ts">
import {ref, watch} from 'vue'
import {Head} from "@inertiajs/vue3";
import {Link} from "@inertiajs/inertia-vue3";

const props = defineProps<{
    title?: string
}>()

const title = ref(props.title)

watch(title, async (new_val, old_val) => {
    document.title = new_val
})

</script>

<template>
    <Head :title="title"/>
    <main class="container mx-auto">
        <header>
            <nav class="flex justify-center space-x-4">
                <Link href="/"
                      class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                    Главная
                </Link>
                <Link href="/users"
                      class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                    Пользователи
                </Link>
                <Link href="/about"
                      class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                    О нас
                </Link>
                <Link href="#"
                      class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                    Отчеты
                </Link>
            </nav>
        </header>
        <article>
            <slot/>
        </article>
    </main>
</template>

<style scoped>

</style>
