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
        },
        delTask(index) {
            if (this.tasks !== null) {
                console.log(this.tasks[index])
                this.tasks.splice(index, 1);
            }
            /* axios.delete(this.url, {
                
            }) */


        }
    },
    mounted() {
        this.getTasks();
    }
}).mount('#app')