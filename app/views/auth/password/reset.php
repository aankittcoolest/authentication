{% extends 'templates/default.php' %}

{% block title %} Reset  Password{% endblock %}

{% block content %}
<form class="" action="{{ urlFor('password.reset.post') }}?email={{ email }}&identifier={{ identifier|url_encode }}" method="post" autocomplete="off">
    <div class="">
      <label for="password">Password</label>
      <input type="text" name="password" id="password">
      {% if errors.has('password') %}{{ errors.first() }}{% endif %}
    </div>

    <div class="">
      <label for="password_confirm">Confirm Password</label>
      <input type="text" name="password_confirm" id="passwordconfirm">
      {% if errors.has('password_confirm') %}{{ errors.first() }}{% endif %}
    </div>

    <div class="">
        <input type="submit"  value="Change password">
    </div>

    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">


</form>
{% endblock %}
