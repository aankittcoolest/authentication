{% extends 'templates/default.php' %}

{% block title %}Login{% endblock %}

{% block content %}
    <form  action="{{ urlFor('login.post') }}" method="post" autocomplete="off">
          <div class="">
              <label for="identifier">Username/email</label>
              <input type="text" name="identifier" id="identifier">
              {% if errors.first('identifier') %}{{  errors.first('identifier') }}{% endif %}
          </div>

          <div class="">
              <label for="password">Password</label>
              <input type="password" name="password" id="password">
              {% if errors.first('password') %}{{  errors.first('password') }}{% endif %}
          </div>

          <div class="">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
          </div>

          <div class="">
              <input type="submit"  value="Login">
          </div>

          <a href="{{ urlFor('password.recover') }}">Forgot your password?</a>

          <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">

    </form>
{% endblock %}
