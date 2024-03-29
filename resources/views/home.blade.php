<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Verifica email</title>
</head>
<body>


<div class="m-5 p-10">

    <h1 class="text-3xl font-bold mb-5">Send test email</h1>

    <form action="{{route('invia-email')}}" method="post">
        @csrf
        <x-textarea
            label="Html Email"
            name="testo"
            rows="10"
            inline/>

        <x-input
            label="Sender(email)"
            name="sender_email"
            />

        <x-input
            label="Sender(name)"
            name="sender_name"
        />

        <x-input
            label="To"
            name="to"
        />

        <x-button
            label="Send Email"
            type="submit"
            class="mt-3 w-full"
        />

    </form>
</div>


</body>
</html>
