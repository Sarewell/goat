<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- link cdn tailwind -->
		<script src="https://cdn.tailwindcss.com"></script>
		<title>contact</title>
	</head>
	<body>
		<!-- header -->
		<header>
			<nav
				class="bg-[#5f43fb] text-white flex justify-between px-20 py-4 text-xl"
			>
				<a href="" class="uppercase font-bold text-3xl">Goat.</a>
				<div class="space-x-6">
					<a href="index.html">Mark</a>
					<a href="elon.html">Elon</a>
					<a href="steve.html">Steve</a>
					<a href="contact.html">Contact</a>
				</div>
			</nav>
		</header>

		<main class="px-20 py-20">
			<h1 class="text-center text-3xl font-bold">Nous contacter</h1>
			<form class="mx-auto max-w-xl mt-10 bg-gray-200 p-20">
				<div class="flex justify-center space-x-8">
					<div class="">
						<label for="nom">Nom</label>
						<input
							type="text"
							name="nom"
							id="nom"
							class="block border border-blue-500"
						/>
					</div>
					<div class="">
						<label for="prenom">Prénom</label>
						<input
							type="text"
							name="prenom"
							id="prenom"
							class="block border border-gray-500"
						/>
					</div>
					<div class="">
						<label for="prenom">hello</label>
						<input
							type="checkbox"
							name="prenom"
							id="prenom"
							class="border ring-red-200 border-blue-500"
						/>
					</div>
				</div>
			</form>
		</main>

		<!-- footer -->
		<footer class="bg-[#5f43fb] text-white mt-28 px-20 py-12 text-center">
			<p class="font-bold text-4xl pb-7">Mon joli footer</p>
			<p class="mx-32">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsam vero
				neque dignissimos adipisci, aperiam, repudiandae suscipit ipsum
				voluptatem aliquid sit perspiciatis amet quod! Doloremque soluta nisi
				minima quidem consectetur.
			</p>
		</footer>
	</body>
</html>
