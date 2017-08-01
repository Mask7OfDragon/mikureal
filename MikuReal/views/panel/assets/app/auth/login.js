function goLogin() {
  var connect, form, response, result, user, pass;
  user = __('user_login').value;
  pass = __('pass_login').value;
  form = 'user=' + user + '&pass=' + pass;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function() {
    if(connect.readyState == 4 && connect.status == 200) {
      if(connect.responseText == 1) {
        result = '<div class="alert alert-info no-border"><button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button><span class="text-semibold">Espera!</span> te estamos redireccionando...</div>';
        __('_AJAX_LOGIN_').innerHTML = result;
        document.location = "/panel";
      } else {
        __('_AJAX_LOGIN_').innerHTML = connect.responseText;
      }
    } else if(connect.readyState != 4) {
        result = '<div class="alert alert-info no-border"><button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button><span class="text-semibold">Espera!</span> validando la informacion...</div>';
      __('_AJAX_LOGIN_').innerHTML = result;
    }
  }
  connect.open('POST','/views/panel/ajax/request.php?mode=login',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}


