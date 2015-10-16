{% if auth  %}
    <p>
      Hello, {{ auth.getFullNameorUsername() }}

      <img src="{{ auth.getAvatarUrl({size: 30}) }}" alt="Your avatar" />
    </p>
{% endif %}
<ul>
  {% if auth %}
  <li><a href="{{ urlFor('home') }}">Home</a></li>
  <li><a href="{{ urlFor('logout') }}">Log out</a></li>
  <li><a href="{{ urlFor('user.profile', {username: auth.username}) }}">Your Profile</a></li>
  <li><a href="{{ urlFor('auth.password.change') }}">Change password</a></li>
    <li><a href="{{ urlFor('account.profile') }}">Update profile</a></li>

      {% if auth.isAdmin %}
        <li><a href="{{ urlFor('admin.example') }}">Admin area</a></li>
      {% endif %}
    Logged in
    {% else %}
  <li><a href="{{ urlFor('register') }}">Register</a></li>
  <li><a href="{{ urlFor('login') }}">Login</a></li>
  {% endif %}
  <li><a href="{{ urlFor('user.all') }}">All users</a></li>
</ul>
