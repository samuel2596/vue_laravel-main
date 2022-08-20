import './bootstrap';
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import ElementPlus from 'element-plus'
import 'element-plus/theme-chalk/index.css'
import * as ElementPlusIconsVue from '@element-plus/icons-vue'
InertiaProgress.init();
createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup: function ({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ElementPlus)
            .use(ElementPlusIconsVue)
            .mount(el);
    },
});

