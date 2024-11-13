<script setup lang="ts">

defineProps<{
    title?: string
}>()

</script>

<template>
    <div>
        <h1 class="mx-auto text-center font-bold pt-6">-> {{ title }}</h1>
    </div>
</template>

<style scoped lang="less">

</style>
