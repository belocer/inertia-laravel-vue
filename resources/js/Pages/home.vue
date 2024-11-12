<script setup>
import { Head } from '@inertiajs/vue3';
defineProps(['title'])
</script>

<template>
    <Head :title="title" />
    <div>
        <h1>{{ title }}</h1>
    </div>
</template>

<style scoped>

</style>
