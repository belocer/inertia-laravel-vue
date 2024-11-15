<script setup lang="ts">

import {ref} from "vue";
import Pagination from "@/Shared/Pagination.vue";
import {Head, Link} from "@inertiajs/vue3";

const props = defineProps<{
    title?: String,
    users?: Array,
    users_data?: Array,
}>()

const users = ref(props.users)
const users_data = ref(props.users_data)

if (users?.data) {
    console.log(users.data)
    console.log(users_data)
}

const destroy = (id) => {
    if (confirm('Вы уверенны?')) {
        this.$inertia.delete(this.route('users.destroy', id))
    }
}

const format = (date) => {
    let formatDate = new Date(date)
    const day = formatDate.getDate();
    const month = formatDate.getMonth() + 1;
    const year = formatDate.getFullYear();

    return `${day}.${month}.${year}`;
}
</script>

<template>
    <Head :title="title"/>
    <div>
        <h1 class="mx-auto text-center font-bold pt-6 blur-sm">-> Пользователи</h1>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div v-if="users.total > 0" class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="table-custom">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xxs font-bold text-gray-500 uppercase tracking-wider">
                                    #id
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Имя
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    E-mail
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider">
                                    Действия
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="user in users.data" :key="user.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-bold text-gray-900">
                                        {{ user.id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ user.name }}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ user.email }}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ format(user.created_at) }}
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-end items-center space-x-3">
                                    <Link href="#"
                                          class="text-indigo-600 hover:text-indigo-900"
                                          @click.prevent="$route.push(`users/${user.id}/edit`, user.id)"
                                    >Редактировать
                                    </Link>

                                    <Link @click.prevent="destroy(user.id)" type="button" href="#"
                                          class="text-red-600 hover:text-red-900 cursor-pointer"
                                    >Удалить
                                    </Link>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="flex justify-center animate-pulse">
                            <Pagination :links="users.links"/>
                        </div>

                    </div>

                    <div v-else class="text-center font-bold text-xl">
                        Пользователей пока нет
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped lang="less">
@import "@_/app";

.table-custom {
@apply min-w-full divide-y divide-gray-200 mt-2 text-sm rounded-lg px-6 py-8 ring-1 shadow-xl border-0;
}
</style>
