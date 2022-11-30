import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
createApp({
    data() {
        return {
            tasks: null,
            url: 'server.php',
            newTask: '',
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
        addTask() {
            //console.log(this.newTask.replace(/\s/g, '').length);
            if (this.newTask.replace(/\s/g, '').length !== 0) {
                axios.post(this.url, { newTask: this.newTask }, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then(resp => {
                    //console.log(resp);
                    this.tasks = resp.data;
                }).catch(err => {
                    console.log(err);
                })

            }
            this.newTask = '';


        },
        completeTask(index) {
            this.tasks[index].completed = !this.tasks[index].completed;
            //console.log(this.tasks[index].completed)
            axios.post(this.url, { isCurrentCompleted: { completed: this.tasks[index].completed, index: index } }, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then(resp => {
                //console.log(resp);
                this.tasks = resp.data;
            }).catch(err => {
                console.log(err);
            })

        },
        delTask(index) {
            axios.post(this.url, { taskIndex: index }, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then(resp => {
                //console.log(resp);
                this.tasks = resp.data;
            }).catch(err => {
                console.log(err);
            })



        }
    },
    mounted() {
        this.getTasks();
    }
}).mount('#app')