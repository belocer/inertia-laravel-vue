<template>
    <main>
        <header>
            <inertia-link href="/">Главная</inertia-link>
            <inertia-link href="/about">О нас</inertia-link>
            <inertia-link href="/contact">Контакты</inertia-link>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script>
export default {
    props: {
        title: String,
    },
    watch: {
        title: {
            immediate: true,
            handler(title) {
                document.title = title
            },
        },
    },
}
</script>

<style scoped>

</style>
