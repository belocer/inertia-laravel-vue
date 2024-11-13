import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/vue3'
import global from "./Layouts/global.vue";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";

createInertiaApp({
    resolve: async name => {
        const page = await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob("./Pages/**/*.vue"));
        page.default.layout ??= global;
        return page;
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .mount(el)
    },
}).then(r => {
    console.log('app.js')
})
    .catch(e => console.error(e))

