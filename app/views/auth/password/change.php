{% extends 'templates/default.php' %}

{% block title %} Change password {% endblock %}

{% block content %}
  <form class="{{ urlFor('password.change.post') }}"  method="post" autocomplete="off">
      <div class="">
          <label for="password_old">Old password</label>
          <input type="password" name="password_old" id="password_old">
          {% if errors.has('password_old') %}{{ errors.first('password_old') }}{% endif %}
      </div>

      <div class="">
          <label for="password">New password</label>
          <input type="password" name="password" id="password">
          {% if errors.has('password') %}{{ errors.first('password') }}{% endif %}
      </div>

      <div class="">
          <label for="password_confirm">Confirm password</label>
          <input type="password" name="password_confirm" id="password_confirm">
          {% if errors.has('password_confirm') %}{{ errors.first('password_confirm') }}{% endif %}
      </div>

      <div class="">
          <input type="submit" value="Change">
      </div>

      <div class="">
          <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </div>
  </form>
{% endblock %}
