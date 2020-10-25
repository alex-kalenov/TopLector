<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TopLector</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>

    </body>

    <script>
        let data = {
            parent_id: 0,
            lesson_id: 1,
            time_value: '2020-10-25 11:23:20',
            text: 'test',
        };
        fetch('api/comment',{
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            },
        }).then(res => res.json())
            .then(res => {
                console.log(res);
            });
    </script>
</html>
