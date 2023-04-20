const { createApp } = Vue

createApp({
    data() {
        return {
            taskList: [],
            listItem: '',
        }
    },
    methods: {
        list() {
            axios.get('server.php')
            .then(response => {
                console.log(response);
                this.taskList = response.data;

            })
        },
        addTask() {

            const data = {
                addedTask: this.listItem,
            };

            axios.post('server.php', data,
            {
                headers: { 'Content-Type': 'multipart/form-data'}
            }
            ).then(response => {
                this.taskList = response.data;
                this.listItem = '';
            });
        }
    },
    mounted() {
        this.list();
    }
}).mount('#app')