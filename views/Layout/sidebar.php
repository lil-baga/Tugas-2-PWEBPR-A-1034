<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title><?= $title ?? ''; ?></title>
    <link rel="icon" type="image" href="contact.png">
</head>

<body>
    <div class="flex flex-row">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-900 h-[100vh] w-full max-w-[20rem] p-4 shadow-xl shadow-gray-900/5">
            <div class="mb-2 p-4 flex flex-col items-center justify-center">
                <h1 class="font-[poppins] text-[#8a4647] text-6xl font-black">Contact.</h1>
                <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-gray-900 mt-2">Halo, <?= $_SESSION['user']['name'] ?></h5>
            </div>
            <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-900">
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z" clip-rule="evenodd"></path>
                        </svg>
                    </div><a href="<?= urlpath('dashboard') ?>">Contact Lists</a>
                    <div class="grid place-items-center ml-auto justify-self-end">
                    </div>
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>Profile
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div><a href="<?= urlpath('logout') ?>">Log Out</a>
                </div>
            </nav>
        </div>

        <?= $body ?? ''; ?>
</body>

</html>