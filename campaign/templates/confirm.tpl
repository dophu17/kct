{config_load file="test.conf" section="setup"}
{include file="../../templates/header.tpl" title=foo}

<form action="{$formAction}" method="post">
<input type="hidden" name="hope" value="{$value['hope']}">
<input type="hidden" name="name" value="{$value['name']}">
<input type="hidden" name="phone" value="{$value['phone']}">
<input type="hidden" name="companion_name" value="{$value['companion_name']}">
<input type="hidden" name="mail" value="{$value['mail']}">

<div class="formBox" id="form"> 
  <h2>お申込み</h2>
  <p>以下の内容で申込みします。<br />
  よろしければ、［送信する］をクリックしてください。<br />
  修正する場合は、[もどって修正する]ボタンをクリックしてください。</p>
  <table>
    <tr>
      <th>ご希望日程 <span class="hs">※</span></th>
      <td><label for="radio2">
        {if $value['hope'] == 1}
          11月26日（土）
        {else}
          12月7日（水）
        {/if}
      </label></td>
    </tr>
    <tr>
      <th>お名前 <span class="hs">※</span></th>
      <td><label for="textfield"></label>
      {$value['name']}</td>
    </tr>
    <tr>
      <th>電話番号 <span class="hs">※</span></th>
      <td>{$value['phone']}</td>
    </tr>
    <tr>
      <th>ご同伴者名</th>
      <td>{$value['companion_name']}</td>
    </tr>
    <tr>
      <th>メールアドレス <span class="hs">※</span></th>
      <td>{$value['mail']}</td>
    </tr>
  </table>
  <div class="btn">
    <input type="submit" name="back" id="back" value="もどって修正する" />
    <input type="submit" name="send" id="send" value="送信する" />
  </div>
</div>
</form>

{include file="../../templates/footer.tpl"}
