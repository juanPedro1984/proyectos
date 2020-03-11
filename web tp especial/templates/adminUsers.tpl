
<table class="tablaUser">
  <tr>
    <td class="filaUserHead">Id de usuario</td>
    <td class="filaUserHead">Nombre de usuario</td>
    <td class="filaUserHead">Permiso de administrador</td>
    <td class="filaUserHead">Dar o negar permiso</td>
    <td class="filaUserHead">Eliminar usuario</td>
  </tr>
  {foreach from=$usuarios item=user}

  <tr>
    <td class="filaUser">{$user['id_usuario']} </td>
    <td class="filaUser">{$user['Usuario']}</td>
    <td class="filaUser">{if $user['Admin_permiso'] == 1}
        Si
        {else}
        No
        {/if}
    </td>
    <td class="filaUser">
      <form class="" action="permiso" method="post">
      <input type="hidden" name="idUser" value="{$user['id_usuario']}">
      {if $user['Admin_permiso'] == 0}
        <button type="submit" class="btn" name="permiso" value="1">Conceder permiso</button>
        {elseif  $user['Admin_permiso'] == 1}
        <button type="submit" class="btn" name="permiso" value="0">Revocar permiso</button>
        {/if}
          </form>
    </td>
    <td class="filaUser">
      <form class="" action="delUser" method="get">
          <button type="submit" class="btn" name="delUser" value="{$user['id_usuario']}">Eliminar Usuario</button></td>
      </form>
    </tr>

  {/foreach}
</table>
