import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
createApp({
    data() {
        return {
            tasks: null,
            url: 'server.php'
        }
    },
    methods: {
        getTasks() {
            axios.get(this.url)
                .then(resp => {
                    //console.log(resp);
                    this.tasks = resp.data;
                })
                .catch(err => {
                    console.log(err);
                })
        }
    },
    mounted() {
        this.getTasks();
    }
}).mount('#app')