<?php 
require 'db-connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Jesse Shaihor-Mario Campos">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>TO-DO List</title>
<style>
body {
    background: beige;
}

* {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}

.main-section {
    background: transparent;
    max-width: 500px;
    width: 90%;
    height: 500px;
    margin: 30px auto;
    border-radius: 10px;
}

.add-section {
    width: 100%;
    background: white;
    margin: 0px auto;
    padding: 10px;
    border-radius: 5px;
}

.add-section input {
    display: block;
    width: 95%;
    height: 40px;
    margin: 10px auto;
    border: 2px solid white;
    font-size: 16px;
    border-radius: 5px;
    padding: 0px 5px;
}

.add-section button {
    display: block;
    width: 95%;
    height: 40px;
    margin: 0px auto;
    border: none;
    outline: none;
    background: orange;
    color: white;
    font-family: sans-serif;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.add-section button:hover {
    box-shadow: 0 2px 2px 0 gray, 0 2px 3px 0 gray;
    opacity: 0.7;
}

.add-section button span {
    border: 1px solid white;
    border-radius: 50%;
    display: inline-block;
    width: 20px;
    height: 18px;
    padding-bottom: 20px;
}

#errorMes {
    display: block;
    background: black;
    width: 95%;
    margin: 0px auto;
    color: red;
    padding: 10px;
    height: 35px;
}

.todo-section {
    width: 100%;
    background: white;
    margin: 30px auto;
    padding: 10px;
    border-radius: 5px;
}

.todo-item {
    width: 95%;
    margin: 10px auto;
    padding: 20px 10px;
    box-shadow: 0 4px 8px 0 gray, 0 6px 20px 0 gray;
    border-radius: 5px;
}

.todo-item h2 {
    display: inline-block;
    padding: 0px 5px;
    font-family: sans-serif;
    font-size: 17px;
    color: darkslategrey;
}

.todo-item small {
    display: block;
    width: 100%;
    padding: 5px 0px;
    padding-left: 30px;
    font-family: sans-serif;
    font-size: 14px;
    color: darkgrey;
}

.remove-todo {
    display: block;
    float: right;
    width: 20px;
    height: 20px;
    font-family: sans-serif;
    color: blue;
    text-decoration: none;
    text-align: right;
    padding: 0px 5px 8px 0px;
    boder-radius: 50%;
    transition: background 1s;
    cursor: pointer;
}

.remove-todo:hover {
    background: yellow;
    color: green;
}

.checked {
    color: red !important;
    text-decoration: line-through;
}

.todo-item input {
    margin: 0px 5px;
}

.empty {
    font-family: sans-serif;
    font-size: 16px;
    text-align: center;
    color: red;
}
</style>
</head>
<body>
    <div class="main-section">
        <div class="add-section">
            <form action ="">
                <input type="text" name="title" placeholder="This is required"/>
                <button type="submit">Add &nbsp; <span>&#43;</span></button>
            </form>
        </div>
        <div class="todo-section">
            <div class="todo-item">
                <input type="checkbox">
                <h2>HELLO</h2>
                <small>created: 5/13/2024</small>
            </div>
        </div>
    </div>
</body>
</html>