<?php
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Todo list</title>

</head>

<body>
    <div id = "app">

        <h1>Todo List</h1>
    
        <div class = "container">
    
            <ul>
    
                <li v-for="(todo, index) in todos" :key="index">{{ todo.text }}</li>
                
            </ul>
    
            <input class = "testo" type="text" v-model="newTodo" @keyup.enter="addTodo" placeholder = "inserisci un nuovo to do:">
    
            <input class = "invio" type="submit" value="inserisci" @click="addTodo">
    
        </div>

    </div>


    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script src="script.js"></script>

</body>

</html>