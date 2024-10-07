<!DOCTYPE html>
<html>
<head>
    <title>Contacto - Salon Fiesta</title>
</head>
<body>
    <h1>Contacto</h1>
    <p>Tu número de contacto es: {{ $numero }}</p>

    <form action="contacto" method="post">
        @csrf
     <p>   <label for="">Nombre
        <input type="text" name="nombre" value="{{old('nombre')}}">
      {!!$errors->first('nombre','<span class=error>:message</span>')!!}</label></p>
      <p> <label for="">E-mail
        <input type="email" name="mail" value="{{old('mail')}}">
        {!!$errors->first('mail','<span class=error>:message</span>')!!}</label></p>
        <p>  <label for="">Mensaje
       <textarea name="mensaje"  cols="30" rows="10">
        {{old('mensaje')}}
       </textarea>{!!$errors->first('mensaje','<span class=error>:message</span>')!!}</label></p>
       <input type="submit" value="Enviar">
     </form>
</body>
</html>
