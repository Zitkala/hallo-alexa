<?php

require_once '../Helpers/functions.php';

?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>hallo_alexa_</title>
    <link href="<?= asset('css/app.css') ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hi! Mein Name ist Alexandra und ich bin seit einigen Wochen auf Twitch. Meine Community ist aufgeschlossen, freundlich und familiär!">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#2e3192">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider">
<div class="area absolute z-0">
    <ul class="circles z-0">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div >
<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
        <div class="p-4 md:p-12 text-center lg:text-left">
            <div class="block lg:hidden shadow-xl mx-auto -mt-16 h-48 w-48 rounded-full">
                <img src="<?= asset('images/hallo_alexa.jpg') ?>" alt="hallo_alexa_" class="rounded-full">
            </div>
            <h1 class="text-3xl font-bold pt-8 lg:pt-0">hallo_alexa_</h1>
            <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-teal-500 opacity-25"></div>
            <p class="pt-4 text-sm">Hi! Mein Name ist Alexandra und ich bin seit einigen Wochen auf Twitch. Meine Community ist aufgeschlossen, freundlich und familiär! Wir treffen uns täglich in meinen LiveStream um gemeinsam den Abend mit Games oder Scribble zu verbringen. Bist du offen und lustig, dann bist du herzlich eingeladen</p>
            <div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
                <a class="link fill-current text-gray-600 hover:text-blue-700" href="https://www.twitch.tv/hallo_alexa_" target="_blank" title="hallo_alexa_ auf Twitch"><i class="fa-fw fab fa-twitch fa-2x"></i></a>
                <a class="link fill-current text-gray-600 hover:text-blue-700" href="https://www.instagram.com/hallo_alexa_/" target="_blank" title="hallo_alexa_ auf Instagram"><i class="fa-fw fab fa-instagram fa-2x"></i></a>
                <a class="link fill-current text-gray-600 hover:text-blue-700" href="https://twitter.com/alexa_hallo" target="_blank" title="hallo_alexa_ auf Twitter"><i class="fa-fw fab fa-twitter fa-2x"></i></a>
                <a class="link fill-current text-gray-600 hover:text-blue-700" href="https://www.facebook.com/hallo_alexa_-101553671528532/" target="_blank" title="hallo_alexa_ auf Facebook"><i class="fa-fw fab fa-facebook fa-2x"></i></a>
                <a class="link fill-current text-gray-600 hover:text-blue-700" href="https://discord.gg/fCUT5bF" target="_blank" title="hallo_alexa_ auf Discord"><i class="fa-fw fab fa-discord fa-2x"></i></a>
                <a class="link fill-current text-gray-600 hover:text-blue-700" href="ts3server://5.200.25.16?port=4208" target="_blank" title="hallo_alexa_ auf Teamspeak"><i class="fa-fw fab fa-teamspeak fa-2x"></i></a>
                <a class="link fill-current text-gray-600 hover:text-blue-700" href="https://www.youtube.com/channel/UCetTw1t8fMGzWeYo1_X3vqQ" target="_blank" title="hallo_alexa_ auf YouTube"><i class="fa-fw fab fa-youtube fa-2x"></i></a>
            </div>
        </div>
    </div>
    <div class="w-full lg:w-2/5 z-40">
        <img src="<?= asset('images/hallo_alexa.jpg') ?>" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block" alt="hallo_alexa">
    </div>
</div>
</body>
</html>
