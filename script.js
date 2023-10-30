new Vue({
    el: '#app',
    data: {
      todos: [],
      newTodo: '',
    },
    methods: {
      addTodo() {
        if (this.newTodo.trim() !== '') {
          this.todos.push({ text: this.newTodo, done: false });
          this.saveTodos();
          this.newTodo = '';
        }
      },
      saveTodos() {
        axios.post('save.php', { todos: this.todos })
          .then(response => {
            console.log('Data saved successfully');
          })
          .catch(error => {
            console.error('Error saving data:', error);
          });
      },
      fetchTodos() {
        axios.get('load.php')
          .then(response => {
            this.todos = response.data;
          })
          .catch(error => {
            console.error('Error loading data:', error);
          });
      },
    },
    created() {
      this.fetchTodos();
    },
  });
  