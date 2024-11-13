<script setup lang="ts">

defineProps<{
  title?: string
}>()

</script>

<template>
  <div>
    <h1 class="mx-auto text-center font-bold pt-6">-> {{ title }}</h1>
    <div>
      <div class="flex items-center space-x-2 text-base">
        <h4 class="font-semibold text-slate-900">Контрибьюторы</h4>
        <span class="rounded-full bg-slate-100 px-2 py-1 text-xs font-semibold text-slate-700">204</span>
      </div>
      <div class="mt-3 flex -space-x-2 overflow-hidden py-2 px-2 px-1 flex-wrap gap-4">
        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
             src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
             alt="alternate name value"/>
      </div>
      <div class="mt-3 text-sm font-medium">
        <a href="#" class="text-blue-500">+ 2 других</a>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>
