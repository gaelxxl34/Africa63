
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Contact</title>
    <style>
    .custom-width {
        max-width: 1350px;
        /* Adjust this value as needed */
        margin: 0 auto;
        padding-left: 1rem;
        padding-right: 1rem;
    }
    </style>
</head>
<body>
    @include('partials.navbar')

    <!-- Contact Section -->
    <section class="custom-width py-16 bg-gray-100">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Contactez Nous</h2>
            <p class="text-lg leading-relaxed max-w-2xl mx-auto">Nous serions ravis de recevoir de vos nouvelles. Veuillez remplir le formulaire ci-dessous et nous vous contacterons dans les plus brefs délais.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-semibold mb-4">Formulaire de Contact</h3>
                <form action="#" method="post" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full px-6 py-2 text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-2xl font-semibold mb-4">Nos Coordonnées</h3>
                <p class="mb-4"><strong>Adresse:</strong> Kampala, Close Boston Primary School, UG</p>
                <p class="mb-4"><strong>Email:</strong> info@example.com</p>
                <p class="mb-4"><strong>Téléphone:</strong> +01 234 567 88</p>
                <p class="mb-4"><strong>Suivez-nous:</strong></p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512" class="w-6 h-6">
                            <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512" class="w-6 h-6">
                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512" class="w-6 h-6">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- Team Section -->
<section class="custom-width py-16 bg-white" id="equipe">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold mb-4">Notre Équipe</h2>
        <p class="text-lg leading-relaxed max-w-2xl mx-auto">Rencontrez les personnes talentueuses qui composent notre équipe.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Team Member 1 -->
        <div class="team-member text-center bg-gray-100 p-6 rounded-lg shadow-md">
            <img src="/assets/img/sambey beya.jpeg" alt="Sambey Beya Bombesha" class="w-40 h-45 mx-auto mb-4 rounded-full">
            <h3 class="text-xl font-semibold">Sambey Beya Bombesha</h3>
            <p class="text-gray-600">Position, Africa63</p>
            <p class="text-gray-600 mt-2">Physicien de formation de l'universite de kinshasa. DG de la societe SBB GROUP s.a.r.l.u et PCA de L'ONG JESUS RDC, Expert electoral en RDC</p>
            <div class="flex justify-center mt-4 space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M16 8a6 6 0 1 0-11.937 1.74A6 6 0 0 0 16 8zm1.964 6.041a10.043 10.043 0 0 0 2.036 0v3.17H18v-3.17zM5.81 12.875c.58 0 1.145-.07 1.678-.2a3.38 3.38 0 0 1-.44-.99 5.96 5.96 0 0 0-1.238.578v4.183h1.238v-3.57zM18 7.733v1.03a4.48 4.48 0 0 0 1.633.185 7.4 7.4 0 0 0 1.528-1.215v-1.03c-.574.33-1.19.577-1.838.724A5.563 5.563 0 0 0 18 7.733zM8 12.754c.376.217.765.404 1.17.553v3.085H8v-3.638zm2.02-2.683a5.982 5.982 0 0 0 1.28-.773 4.448 4.448 0 0 0 1.256-.186c-.048.278-.07.559-.064.84A4.22 4.22 0 0 1 10.02 10.07z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M20.22 6.99c.01.15.01.29.01.44 0 4.5-3.43 9.68-9.68 9.68a9.62 9.62 0 0 1-5.23-1.53c.29.03.57.04.87.04a6.82 6.82 0 0 0 4.22-1.45 3.41 3.41 0 0 1-3.18-2.36c.23.04.47.07.71.07.34 0 .67-.04.98-.12A3.39 3.39 0 0 1 4.88 9.6v-.04c.46.25.98.4 1.54.42a3.4 3.4 0 0 1-1.05-4.53 9.68 9.68 0 0 0 7.03 3.56 3.4 3.4 0 0 1 5.79-3.1 6.75 6.75 0 0 0 2.15-.82 3.38 3.38 0 0 1-1.5 1.88 6.79 6.79 0 0 0 1.95-.53 6.86 6.86 0 0 1-1.71 1.78z"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Team Member 2 -->
        <div class="team-member text-center bg-gray-100 p-6 rounded-lg shadow-md">
            <img src="https://via.placeholder.com/150" alt="Member Name" class="w-40 h-45 mx-auto mb-4 rounded-full">
            <h3 class="text-xl font-semibold">Justus Tshikona</h3>
            <p class="text-gray-600">Chairman, Africa63</p>
            <p class="text-gray-600 mt-2">Short bio or description of the team member. This should highlight their role and contributions.</p>
            <div class="flex justify-center mt-4 space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M16 8a6 6 0 1 0-11.937 1.74A6 6 0 0 0 16 8zm1.964 6.041a10.043 10.043 0 0 0 2.036 0v3.17H18v-3.17zM5.81 12.875c.58 0 1.145-.07 1.678-.2a3.38 3.38 0 0 1-.44-.99 5.96 5.96 0 0 0-1.238.578v4.183h1.238v-3.57zM18 7.733v1.03a4.48 4.48 0 0 0 1.633.185 7.4 7.4 0 0 0 1.528-1.215v-1.03c-.574.33-1.19.577-1.838.724A5.563 5.563 0 0 0 18 7.733zM8 12.754c.376.217.765.404 1.17.553v3.085H8v-3.638zm2.02-2.683a5.982 5.982 0 0 0 1.28-.773 4.448 4.448 0 0 0 1.256-.186c-.048.278-.07.559-.064.84A4.22 4.22 0 0 1 10.02 10.07z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M20.22 6.99c.01.15.01.29.01.44 0 4.5-3.43 9.68-9.68 9.68a9.62 9.62 0 0 1-5.23-1.53c.29.03.57.04.87.04a6.82 6.82 0 0 0 4.22-1.45 3.41 3.41 0 0 1-3.18-2.36c.23.04.47.07.71.07.34 0 .67-.04.98-.12A3.39 3.39 0 0 1 4.88 9.6v-.04c.46.25.98.4 1.54.42a3.4 3.4 0 0 1-1.05-4.53 9.68 9.68 0 0 0 7.03 3.56 3.4 3.4 0 0 1 5.79-3.1 6.75 6.75 0 0 0 2.15-.82 3.38 3.38 0 0 1-1.5 1.88 6.79 6.79 0 0 0 1.95-.53 6.86 6.86 0 0 1-1.71 1.78z"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Team Member 3 -->
        <div class="team-member text-center bg-gray-100 p-6 rounded-lg shadow-md">
            <img src="https://via.placeholder.com/150" alt="Member Name" class="w-40 h-45 mx-auto mb-4 rounded-full">
            <h3 class="text-xl font-semibold">Nathan Mubembe</h3>
            <p class="text-gray-600">CEO, Africa63</p>
            <p class="text-gray-600 mt-2">Short bio or description of the team member. This should highlight their role and contributions.</p>
            <div class="flex justify-center mt-4 space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M16 8a6 6 0 1 0-11.937 1.74A6 6 0 0 0 16 8zm1.964 6.041a10.043 10.043 0 0 0 2.036 0v3.17H18v-3.17zM5.81 12.875c.58 0 1.145-.07 1.678-.2a3.38 3.38 0 0 1-.44-.99 5.96 5.96 0 0 0-1.238.578v4.183h1.238v-3.57zM18 7.733v1.03a4.48 4.48 0 0 0 1.633.185 7.4 7.4 0 0 0 1.528-1.215v-1.03c-.574.33-1.19.577-1.838.724A5.563 5.563 0 0 0 18 7.733zM8 12.754c.376.217.765.404 1.17.553v3.085H8v-3.638zm2.02-2.683a5.982 5.982 0 0 0 1.28-.773 4.448 4.448 0 0 0 1.256-.186c-.048.278-.07.559-.064.84A4.22 4.22 0 0 1 10.02 10.07z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M20.22 6.99c.01.15.01.29.01.44 0 4.5-3.43 9.68-9.68 9.68a9.62 9.62 0 0 1-5.23-1.53c.29.03.57.04.87.04a6.82 6.82 0 0 0 4.22-1.45 3.41 3.41 0 0 1-3.18-2.36c.23.04.47.07.71.07.34 0 .67-.04.98-.12A3.39 3.39 0 0 1 4.88 9.6v-.04c.46.25.98.4 1.54.42a3.4 3.4 0 0 1-1.05-4.53 9.68 9.68 0 0 0 7.03 3.56 3.4 3.4 0 0 1 5.79-3.1 6.75 6.75 0 0 0 2.15-.82 3.38 3.38 0 0 1-1.5 1.88 6.79 6.79 0 0 0 1.95-.53 6.86 6.86 0 0 1-1.71 1.78z"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Team Member 4 -->
        <div class="team-member text-center bg-gray-100 p-6 rounded-lg shadow-md">
            <img src="https://via.placeholder.com/150" alt="Member Name" class="w-40 h-45 mx-auto mb-4 rounded-full">
            <h3 class="text-xl font-semibold">Ongoriko Bindu Gael</h3>
            <p class="text-gray-600">CTO, Africa63</p>
            <p class="text-gray-600 mt-2">Expert en genie logiciel, Spécialiste en technologies IA et VR, avec une licence de tres grande distinction en sciences informatique de International University of East Africa </p>
            <div class="flex justify-center mt-4 space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M16 8a6 6 0 1 0-11.937 1.74A6 6 0 0 0 16 8zm1.964 6.041a10.043 10.043 0 0 0 2.036 0v3.17H18v-3.17zM5.81 12.875c.58 0 1.145-.07 1.678-.2a3.38 3.38 0 0 1-.44-.99 5.96 5.96 0 0 0-1.238.578v4.183h1.238v-3.57zM18 7.733v1.03a4.48 4.48 0 0 0 1.633.185 7.4 7.4 0 0 0 1.528-1.215v-1.03c-.574.33-1.19.577-1.838.724A5.563 5.563 0 0 0 18 7.733zM8 12.754c.376.217.765.404 1.17.553v3.085H8v-3.638zm2.02-2.683a5.982 5.982 0 0 0 1.28-.773 4.448 4.448 0 0 0 1.256-.186c-.048.278-.07.559-.064.84A4.22 4.22 0 0 1 10.02 10.07z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M20.22 6.99c.01.15.01.29.01.44 0 4.5-3.43 9.68-9.68 9.68a9.62 9.62 0 0 1-5.23-1.53c.29.03.57.04.87.04a6.82 6.82 0 0 0 4.22-1.45 3.41 3.41 0 0 1-3.18-2.36c.23.04.47.07.71.07.34 0 .67-.04.98-.12A3.39 3.39 0 0 1 4.88 9.6v-.04c.46.25.98.4 1.54.42a3.4 3.4 0 0 1-1.05-4.53 9.68 9.68 0 0 0 7.03 3.56 3.4 3.4 0 0 1 5.79-3.1 6.75 6.75 0 0 0 2.15-.82 3.38 3.38 0 0 1-1.5 1.88 6.79 6.79 0 0 0 1.95-.53 6.86 6.86 0 0 1-1.71 1.78z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


    <!-- Footer container -->
    @include('partials.footer')
<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuLinks = mobileMenu.querySelectorAll('a');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when a link is clicked
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

    // Set active class based on current page
    const links = document.querySelectorAll('nav a');
    const currentPath = window.location.pathname;

    links.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
</script>

</body>
</html>
