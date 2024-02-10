const { createApp } = Vue;

createApp({
    data() {
        return {
            todos: [],
            newTodo: ''
        }
    },
    created() {
        axios
            .get('http://localhost/classe114/php-todo-list-json/todos.php', {
                params: {
                    used: true
                }
            })
            .then(res => {
                console.log(res.data);
                this.todos = res.data;
            });
    },
}).mount('#app');