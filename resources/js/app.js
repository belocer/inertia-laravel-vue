import {createApp, h} from 'vue'
import {App, plugin} from '@inertiajs/inertia-vue3'
import global from "./Layouts/global.vue";

const el = document.getElementById('app')

createApp({
    render: () => h(App, {
        initialPage: JSON.parse(el.dataset.page),
        resolveComponent: name => import(`./Pages/${name}.vue`)
            .then(({default: page}) => {
                if (page.layout === undefined) {
                    page.layout = global
                }
                return page
            })
    })
}).use(plugin).mount(el)

import {InertiaProgress} from '@inertiajs/progress'

InertiaProgress.init()


