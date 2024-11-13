<script setup lang="ts">

import {Head} from "@inertiajs/vue3";

defineProps<{
    title?: string
}>()

</script>

<template>
    <Head :title="title"/>
    <div>
        <h1 class="mx-auto text-center font-bold pt-6">-> {{ title }}</h1>
    </div>
</template>

<style scoped lang="less">

</style>
