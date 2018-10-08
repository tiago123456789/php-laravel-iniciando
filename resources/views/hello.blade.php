<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        {{ $name }}
        <form action="/" method="POST">
            {{ csrf_field() }}
            <input type="text" name="name" />
            <input type="submit" />
        </form>
    </body>
</html>