<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperTest - {{$title?? ''}}</title>
    <script>src="https://cdn.tailwindcss.com"</script>
    <meta name="description" content= {{$metaDescription ?? 'Default meta description'}}/>
</head>
    <body>

        <x-layouts.navigation/>
        
        {{$slot}}

        

    </body>
</html>