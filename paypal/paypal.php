 
<jdoc:include type="module" name="paypal" />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZE5CNQNM8T6YS">
<table>
<tr><td><input type="hidden" name="on0" value="Periodicidad">Periodicidad</td></tr><tr><td><select name="os0">
    <option value="Mensual">Mensual : €15,00EUR - mensualmente</option>
    <option value="Anual">Anual : €60,00EUR - anualmente</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">

<input type="button" name="submit" value="Darse de alta" />
<input type="button" name="submit" value="Darse de baja" disabled="true" />
<!--input type="image"  oldsrc="https://www.paypal.com/es_ES/ES/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="Alta"-->

<!-- img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1" -->
</form>



