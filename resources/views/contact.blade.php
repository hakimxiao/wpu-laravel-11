<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    @vite('resources/css/app.css');
</head>

<body>
    <section class="flex flex-col items-center justify-center">
        <h1 class="text-3xl font-semibold">Contact Me</h1>
        <div>
            <div class="flex items-center mx-auto gap-10 m-6">
                <article class="border border-slate-800 rounded-md w-[450px] h-[600px] shadow-xl overflow-hidden">
                    <div class="flex justify-between p-5">
                        <h2>Kamu bisa hubungi saya</h2>
                        <p>Jangan lupa salam !</p>
                    </div>
                    <div class="w-full h-full bg-slate-300 flex justify-center ">
                        <ul class="mt-7 gap-5">
                            <li>Whatsapp : </li>
                            <li>Instagram : </li>
                            <li>Gmail : </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>
</body>

</html>