{% extends 'templates/default.php' %}

{% block title %}Registet{% endblock %}

{% block content %}
    <form class="" action="{{ urlFor('register.post') }}" method="post" autocomplete="off">
        <div class="">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" {% if request.post('email') %}value="{{ request.post('email') }}"{% endif %}>
            {% if errors.first('email') %} {{ errors.first('email') }} {% endif %}
        </div>

        <div class="">
            <label for="username">Username </label>
            <input type="text" name="username" id="username" {% if request.post('username') %}value="{{ request.post('username') }}"{% endif %}>
            {% if errors.first('username') %} {{ errors.first('username') }} {% endif %}
        </div>

        <div class="">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            {% if errors.first('password') %} {{ errors.first('password') }} {% endif %}
        </div>

        <div class="">
            <label for="password_confirm">Confirm Password</label>
            <input type="password" name="password_confirm" id="password_confirm">
            {% if errors.first('password_confirm') %} {{ errors.first('password_confirm') }} {% endif %}
        </div>

        <div class="">
            <input type="submit"  value="Register">
        </div>

        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>
{% endblock %}
