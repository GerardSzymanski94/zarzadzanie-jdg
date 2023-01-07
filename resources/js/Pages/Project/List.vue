<template>
    <AppLayout>
        <div class="row">
            <div class="col-6">
                <p class="h1">Projekty</p></div>
            <div class="col-6"><a href="#" class="btn-sm btn-success">Dodaj</a></div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Opis</th>
                <th scope="col">Operacje</th>
            </tr>
            </thead>
            <tbody>
            <list-item v-for="project in projects" v-bind="project"></list-item>
            </tbody>
        </table>
    </AppLayout>
</template>

<script>
import ListItem from "./ListItem.vue";

import {Head} from "@inertiajs/inertia-vue3";
import AppLayout from "../../Layouts/AppLayout.vue";

export default {
    components: {
        ListItem,
        Head,
        AppLayout
    },
    data() {
        return {
            url: [],
            prs: []
        };
    },
    props: {
        projects: Array,
        success: Boolean
    },
    created() {

        console.log(this.projects);

        const p = new Promise((resolve, reject) => {
        })
            .then((result) => console.log(`Success ${result}`))
            .catch((result) => console.log(`Error ${result}`));

        // axios
        //    .get('/api/projects')
        //   .then(response => (this.prs = response))
        // this.url = process.env.MIX_APP_URL;
    },

    methods: {},
};
</script>
