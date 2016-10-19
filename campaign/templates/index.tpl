{config_load file="test.conf" section="setup"}
{include file="../../templates/header.tpl" title=foo}

<div id="order"><a href="#form"><img src="../commons/images/semi1610/order.gif" alt="今すぐ申し込む" /></a></div>
<div id="contents" class="clear">
  <div id="cont">
    <table>
      <tr>
        <th>会場</th>
        <td>倉敷ケーブルテレビ　1階セミナールーム<br />
          ※駐車場あり</td>
      </tr>
      <tr>
        <th>日程</th>
        <td><ul>
          <li>11月26日（土）<br />
            開場：13:30<br />
          講義：14:00～16:00</li>
          <li>12月7日（水）<br />
          開場：18:30<br />
          講義：19:00～21:00</li>
        </ul></td>
      </tr>
      <tr>
        <th>定員</th>
        <td>各回ともに25名程度（先着順）</td>
      </tr>
      <tr>
        <th>料金</th>
        <td>無料（飲み物・おみやげ付）<br />
          （交通費等はご負担ください。託児スペースはありません。）</td>
      </tr>
      <tr>
        <th>主催</th>
        <td>株式会社倉敷ケーブルテレビ</td>
      </tr>
      <tr>
        <th>協賛</th>
        <td>損保ジャパン日本興亜ひまわり生命保険会社</td>
      </tr>
      <tr>
        <th>申込方法</th>
        <td>先着順（各回ともに25名程度）です。お早めにお申込みください。<br />
          お電話か下記フォームよりお申込みください。</td>
      </tr>
    </table>
    
  </div>
  <div id="koushi">
    <dl>
      <dt><img src="../commons/images/semi1610/koushi.png" /><br />
      藤田 雅基 氏      </dt>
      <dd><p>■ファイナンシャルプランナー<br />
      「マネー」「年金」「保険」などの講演を多数開催。話が面白く、分かりやすい説明のためファンも多く、面談を希望されると数ヶ月待ちなどということもある超多忙な保険プランナー。</p></dd>
    </dl>  
  </div>
</div>
<div id="atten"> 
  <p>※会場内での金融商品の販売や勧誘は一切ありません。</p>
  <p>※セミナー終了後、希望者のみ個別に相談することも出来ます。（相談日に関しては、セミナー当日に日程をお知らせ致します。）参加費は無料です。興味のある方は、この機会に相談してみてください。</p>
  <p>※お客様より知り得た情報は、法令等に従って適正に管理し、今回のセミナー関連以外で使用することはありません。</p>
</div>
<form action="{$formAction}" method="post">
<div class="formBox" id="form"> 
  <h2>お申込み</h2>
  <p>必要事項をご記入の上、[入力内容を確認する]をクリックしてください。<br />
  <span class="hs">※</span>は入力必須項目です。</p>
  <table>
    <tr>



    
      <th>ご希望日程 <span class="hs">※</span></th>
      <td><input type="radio" name="hope" id="radio1" value="1" />
        <label for="radio1">11月26日（土）</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="hope" id="radio2" value="2" />
        <label for="radio2">12月7日（水）</label>
        {if isset($message['hope'])}
        <div class="error"> {$message['hope']}</div>
        {/if}
        </td>
        
    </tr>
    <tr>
      <th>お名前 <span class="hs">※</span></th>
      <td><label for="textfield"></label>
      <input type="text" name="name" id="name" value="" />
        
      {if isset($message['name'])}
      <div class="error"> {$message['name']}</div>
      {/if}
      </td>  
    </tr>
    <tr>
      <th>電話番号 <span class="hs">※</span></th>
      <td><input type="text" name="phone" id="phone" value="" />
      <br />
      ハイフォンなしでご入力ください。
      
      {if !empty($message['phone'])}
      <div class="error"> {$message['phone']}</div>
      {/if}
      </td>
      
    </tr>
    <tr>
      <th>ご同伴者名</th>
      <td><input type="text" name="companion_name" id="companion_name" value="" /></td>
    </tr>
    <tr>
      <th>メールアドレス <span class="hs">※</span></th>
      <td><input type="text" name="mail" id="mail" value="" />
      <br />
      受付完了のメールがkct.co.jpから届きますので，ドメイン指定など、必ず受け取れる設定にしてください。
      
      {if !empty($message['mail'])}
      <div class="error"> {$message['mail']}</div>
      {/if}
      </td>
      
    </tr>
  </table>
  <div class="btn">
    <input type="submit" name="save" id="save" value="入力内容を確認する" />
  </div>
</div>
</form>

{include file="../../templates/footer.tpl"}
