<template>
    <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('welcome')">
                                    <BreezeApplicationLogo class="block h-9 w-auto" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <BreezeNavLink :href="route('welcome')" :active="route().current('welcome')" class="">
                                    Home
                                </BreezeNavLink>

                                <BreezeNavLink :href="route('welcome')" :active="route().current('welcome')" class="">
                                    Categories
                                </BreezeNavLink>
                                <BreezeNavLink :href="route('contactus')" :active="route().current('contactus')">
                                    Contact Us
                                </BreezeNavLink>
                                <BreezeNavLink :href="route('aboutus')" :active="route().current('aboutus')">
                                    About Us
                                </BreezeNavLink>
                                <BreezeNavLink :href="route('login')" :active="route().current('login')">
                            Login
                        </BreezeNavLink>
                        <BreezeNavLink :href="route('register')" :active="route().current('register')">
                            Register
                        </BreezeNavLink>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <BreezeResponsiveNavLink :href="route('welcome')" :active="route().current('welcome')">
                            Home
                        </BreezeResponsiveNavLink>
                        <BreezeResponsiveNavLink :href="route('contactus')" :active="route().current('contactus')">
                            Contact Us
                        </BreezeResponsiveNavLink>
                        <BreezeResponsiveNavLink :href="route('aboutus')" :active="route().current('aboutus')">
                            About Us
                        </BreezeResponsiveNavLink>
                        <BreezeResponsiveNavLink :href="route('login')" :active="route().current('login')">
                            Login
                        </BreezeResponsiveNavLink>
                        <BreezeResponsiveNavLink :href="route('register')" :active="route().current('register')">
                            Register
                        </BreezeResponsiveNavLink>
                    </div>

                </div>
            </nav>
</template>
<script>
export default {

}
</script>
