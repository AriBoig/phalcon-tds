<div style="margin-left: 5%;">
    <button><i class="add user icon"></i>{{ link_to("users/add","Nouvel utilisateur") }} </button>
    <div class="ui input focus" style="width: 80%;">
        <input type="text" placeholder="Search...">
    </div>
</div>
<table class="ui celled table" style="width: 90%;margin-left: 5%">
    <thead>
        <tr>
            <th>
                <input type="checkbox" name="example">
            </th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Login</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Bouton</th>
        </tr>
    </thead>
    <tbody>
    {% for user in users %}
    <tr>
        <td>  <input type="checkbox" name="example"/>    </td>
        <td>{{ user.getFirstname() }}</td>
        <td>{{ user.getLastname() }}</td>
        <td>{{ user.getLogin() }}</td>
        <td>{{ user.getEmail() }}</td>
        <td>{{ user.getRole().getName() }}</td>
        <td><button>  {{ link_to("users/update/"~user.getId(),"<i class='write icon'></i>") }}</button><button>  {{ link_to("users/show/"~user.getId(),"<i class='eye icon'></i>") }}</button><button> {{ link_to("users/delete/"~user.getId(),"<i class='remove user icon'></i>") }}</button></td>
    </tr>
    {% endfor %}
    </tbody>
    <tfoot>
    <tr><th colspan="3">
        <div class="ui right floated pagination menu">
            <a class="icon item">
                <i class="left  chevron icon"></i>
            </a>
            <a class="item">1</a>
            <a class="item">2</a>
            <a class="item">3</a>
            <a class="item">4</a>
            <a class="icon item">
                <i class="right chevron icon"></i>
            </a>
        </div>
    </th>
    </tr></tfoot>
</table>


