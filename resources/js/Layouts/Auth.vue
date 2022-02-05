<template>
  <div>
    <div class="min-h-screen bg-gray-100">
      <nav class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex">
              <!-- Logo -->
              <div class="flex items-center shrink-0">
                <Link :href="route('welcome')">
                  <BreezeApplicationLogo class="block w-auto h-9" />
                </Link>
              </div>

              <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <BreezeNavLink
                  :href="route('welcome')"
                  :active="route().current('welcome')"
                  class=""
                >
                  Home
                </BreezeNavLink>
                <BreezeNavLink
                  :href="route('categories')"
                  :active="route().current('categories')"
                  class=""
                >
                  Categories
                </BreezeNavLink>
                <BreezeNavLink
                  :href="route('contactus')"
                  :active="route().current('contactus')"
                >
                  Contact Us
                </BreezeNavLink>
                <BreezeNavLink
                  :href="route('aboutus')"
                  :active="route().current('aboutus')"
                >
                  About Us
                </BreezeNavLink>
                <BreezeNavLink
                  :href="route('login')"
                  :active="route().current('login')"
                >
                  Login
                </BreezeNavLink>
                <BreezeNavLink
                  :href="route('register')"
                  :active="route().current('register')"
                >
                  Register
                </BreezeNavLink>
              </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
              <button
                @click="showingNavigationDropdown = !showingNavigationDropdown"
                class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500"
              >
                <svg
                  class="w-6 h-6"
                  stroke="currentColor"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    :class="{
                      hidden: showingNavigationDropdown,
                      'inline-flex': !showingNavigationDropdown,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                  <path
                    :class="{
                      hidden: !showingNavigationDropdown,
                      'inline-flex': showingNavigationDropdown,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
          :class="{
            block: showingNavigationDropdown,
            hidden: !showingNavigationDropdown,
          }"
          class="sm:hidden"
        >
          <div class="pt-2 pb-3 space-y-1">
            <BreezeResponsiveNavLink
              :href="route('welcome')"
              :active="route().current('welcome')"
            >
              Home
            </BreezeResponsiveNavLink>
            <BreezeResponsiveNavLink
              :href="route('categories')"
              :active="route().current('categories')"
            >
              Categories
            </BreezeResponsiveNavLink>
            <BreezeResponsiveNavLink
              :href="route('contactus')"
              :active="route().current('contactus')"
            >
              Contact Us
            </BreezeResponsiveNavLink>
            <BreezeResponsiveNavLink
              :href="route('aboutus')"
              :active="route().current('aboutus')"
            >
              About Us
            </BreezeResponsiveNavLink>
            <BreezeResponsiveNavLink
              :href="route('login')"
              :active="route().current('login')"
            >
              Login
            </BreezeResponsiveNavLink>
            <BreezeResponsiveNavLink
              :href="route('register')"
              :active="route().current('register')"
            >
              Register
            </BreezeResponsiveNavLink>
          </div>
        </div>
      </nav>

      <!-- Page Heading -->
      <header class="bg-white shadow" v-if="$slots.header">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <slot name="header" />
        </div>
      </header>

      <!-- Page Content -->
      <main class="py-20 m-12 px-96">
        <div class="px-12 py-8 bg-gray-300 rounded-lg shadow">
          <div class="w-24 mx-auto"><BreezeApplicationLogo /></div>
          <slot />
        </div>
      </main>
    </div>
  </div>
      <Footer />
</template>

<script>
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import BreezeDropdown from "@/Components/Dropdown.vue";
import BreezeDropdownLink from "@/Components/DropdownLink.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import Footer from "@/Components/Footer.vue";
import BreezeResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    BreezeApplicationLogo,
    BreezeDropdown,
    Footer,
    BreezeDropdownLink,
    BreezeNavLink,
    BreezeResponsiveNavLink,
    Link,
  },

  data() {
    return {
      showingNavigationDropdown: false,
    };
  },
};
</script>
