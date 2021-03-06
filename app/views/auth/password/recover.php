{% extends 'templates/default.php' %}

{% block title %} Recover Password {% endblock %}

{% block content %}
  <p>
    Enter your email address to start your password recovery.
  </p>
  <form class="" action="{{ urlFor('password.recover.post') }}" method="post">
    <div class="">
        <label for="email">email</label>
        <input type="text" name="email" id="email"{% if request.post('email') %}value="{{ request.post('email') }}"{% endif %}>
        {% if errors.has('email') %}{{ errors.first('email') }}{% endif %}
    </div>
    <div class="">
      <input type="submit"  value="Request reset">
    </div>
    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
  </form>
{% endblock %}
