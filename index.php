<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    
    <div id="app">
        <div class="container">
            <h1>Elementi della lista</h1>
            <ul class="list-group">
                <li v-for="(task, i) in taskList" :key="i" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" >
                    <div :class="task.done ? 'text-decoration-line-through': ''"> {{ task.testo }}</div>
                    <span class="text-bg-success p-3 rounded" v-if="task.done == true"  @click="confirmDone(i)">Completato</span>
                    <span class="text-bg-danger p-3 rounded" v-else="task.done == false"  @click="confirmDone(i)">Non completato</span>
                    <button class="btn btn-danger" @click="delTask(i)" >Elimina</button>
                </li>

            </ul>
            <input v-model="listItem" min="5" type="text"/>
            <button class="btn btn-primary" @click="addTask" >Aggiungi Task</button>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='main.js'></script>
</body>
</html>