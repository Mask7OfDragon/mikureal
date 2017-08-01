function goAdd() {
  var connect, form, response, result, nombre, nombre_jp, fecha, estado, sinopsis, género, trailer, thumbnail;
  nombre = __('nombre').value;
  nombre_jp = __('nombre_jp').value;
  fecha = __('fecha').value;
  estado = __('estado').value;
  sinopsis = __('sinopsis').value;
  género = __('género').value;          
  trailer = __('trailer').value; 
  thumbnail = __('thumbnail').value;     
  form = 'nombre=' + nombre + '&nombre_jp=' + nombre_jp + '&fecha=' + fecha + '&estado=' + estado + '&sinopsis=' + sinopsis + '&género=' + género + '&trailer=' + trailer + '&thumbnail=' + thumbnail;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function() {
    if(connect.readyState == 4 && connect.status == 200) {
      if(connect.responseText == 1) {
        result = '<div class="alert alert-danger no-border"><button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button><span class="text-semibold">Espera!</span> error inesperado...</div>';
        __('_AJAX_LOGIN_').innerHTML = result;
      } else {
        __('_AJAX_LOGIN_').innerHTML = connect.responseText;
      }
    } else if(connect.readyState != 4) {
        result = '<div class="alert alert-info no-border"><button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button><span class="text-semibold">Espera!</span> validando la informacion...</div>';
      __('_AJAX_LOGIN_').innerHTML = result;
    }
  }
  connect.open('POST','/views/panel/ajax/request.php?mode=goMovieAdd',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}


