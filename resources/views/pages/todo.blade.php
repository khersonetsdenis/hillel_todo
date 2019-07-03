@extends('layout.default')

@section('content')
    <p>Todo list</p>
    <ul id="todo"></ul>
    <hr/>
    <form>
        <div class="form-group">
            <label>Задача:</label>
            <input type="text" name="title" class="form-control" placeholder="Title" required="">
        </div>


        <div class="form-group">
            <label>Описание:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>


        <div class="form-group">
            <label>Сделать до:</label>
            <input type="date" name="dueto" class="form-control">
        </div>


        <div class="form-group">
            <button class="btn btn-success btn-submit" id="add">Добавить задачу</button>
        </div>
    </form>
@stop
