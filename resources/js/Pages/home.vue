<script setup lang="ts">
defineProps<{
    title?: string
}>()
</script>

<template>
    <div>
        <h1 class="mx-auto text-3xl font-bold underline">{{ title }}</h1>
    </div>
</template>

<style scoped>

</style>
