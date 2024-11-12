<script setup lang="ts">
defineProps<{
    title?: string
}>()
</script>

<template>
    <div>
        <h1 class="mx-auto">{{ title }}</h1>
    </div>
</template>

<style scoped>

</style>
