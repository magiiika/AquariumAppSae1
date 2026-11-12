{% extends "base.mvc.php" %}

{% block title %}Ma Todo List{% endblock %}


{% block body %}


<h1>My Todo List</h1>
<p>Salut tout le monde, la todolist est là!</p>

<ul>
{% for task in tasks %}

<li>{{ task.name }}</li>

{% endfor %}
</ul>

{% endblock %}

 on peut aussi utiliser des double accolades dans ce style {{}}