<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novacraft studio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-950">
    <header>
        <div class="bg-blue-300  px-6 py-5 flex justify-between items-center ">
            <h1 class="text-xl text-blue-950 font-extrabold">Novacraft</h1>
        <nav class="flex gap-8 text-xl ">
            <a href="/home" class="<?php $page==='home' ? 'text-cyan-300' : 'hover:text-cyan-300'?>">Acceuil</a>
            <a href="/about"class="<?php $page==='about' ? 'text-cyan-300' : 'hover:text-cyan-300'?>">About</a>
            <a href="/services"class="<?php $page==='services' ? 'text-cyan-300' : 'hover:text-cyan-300'?>">Service</a>
            <a href="/contact" class="<?php $page==='contact' ? 'text-cyan-300' :'hover :text-cyan-300'?>">Contact</a>
        </nav>
        </div>
        
    </header>
 <main class="max-w-7xl mx-auto px-6 py-16">

