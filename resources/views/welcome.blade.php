<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>My First Website — Deployed on VPS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="description" content="A simple, beautiful Tailwind CSS starter website for your first VPS deployment." />
</head>
<body class="antialiased bg-gray-50 text-gray-800">
  <!-- Navigation -->
  <header class="bg-white shadow-sm">
    <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="flex items-center gap-3">
        <!-- simple logo -->
        <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-lg flex items-center justify-center text-white font-bold">MF</div>
        <div>
          <h1 class="text-lg font-semibold">My First Website</h1>
          <p class="text-xs text-gray-500">Deployed on VPS</p>
        </div>
      </a>
      <nav class="hidden md:flex items-center gap-6 text-sm">
        <a href="#features" class="hover:text-indigo-600">Features</a>
        <a href="#pricing" class="hover:text-indigo-600">Pricing</a>
        <a href="#contact" class="hover:text-indigo-600">Contact</a>
        <a href="#" class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm text-sm">Get Started</a>
      </nav>
      <button id="menuBtn" class="md:hidden p-2 rounded-md hover:bg-gray-100">
        <!-- menu icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </header>

  <!-- Hero -->
  <section class="max-w-5xl mx-auto px-6 py-16 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1">
      <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">A simple, beautiful website for your first VPS</h2>
      <p class="mt-4 text-gray-600 max-w-xl">Clean layout, responsive components, and ready for production. Use this as a starter to host on any VPS with Nginx or Apache.</p>

      <div class="mt-6 flex flex-wrap gap-3">
        <a href="#pricing" class="px-5 py-3 bg-indigo-600 text-white rounded-md shadow">Launch Now</a>
        <a href="#features" class="px-5 py-3 border border-gray-200 rounded-md">See Features</a>
      </div>

      <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-3">
        <div class="flex items-start gap-3">
          <!-- speed icon -->
          <svg class="w-8 h-8 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"/><path d="M12 18v4"/><path d="M5 7l3 3"/><path d="M19 7l-3 3"/><circle cx="12" cy="12" r="3"/></svg>
          <div>
            <div class="font-semibold">Fast</div>
            <div class="text-xs text-gray-500">Optimized for speed</div>
          </div>
        </div>

        <div class="flex items-start gap-3">
          <!-- mobile icon -->
          <svg class="w-8 h-8 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/></svg>
          <div>
            <div class="font-semibold">Responsive</div>
            <div class="text-xs text-gray-500">Looks great on any screen</div>
          </div>
        </div>

        <div class="flex items-start gap-3">
          <!-- lock icon -->
          <svg class="w-8 h-8 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
          <div>
            <div class="font-semibold">Secure</div>
            <div class="text-xs text-gray-500">HTTPS ready (use Certbot)</div>
          </div>
        </div>
      </div>
    </div>

    <!-- hero image / card -->
    <div class="flex-1">
      <div class="rounded-xl p-6 bg-gradient-to-br from-white to-gray-50 shadow-lg">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="code" class="rounded-lg w-full h-64 object-cover shadow-sm">
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="bg-white border-t">
    <div class="max-w-5xl mx-auto px-6 py-12">
      <h3 class="text-2xl font-bold">Features</h3>
      <p class="text-gray-600 mt-2 max-w-2xl">Everything you need to get started and customise as you learn.</p>

      <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <div class="p-6 bg-gray-50 rounded-lg shadow-sm">
          <div class="flex items-center gap-4">
            <div class="p-3 bg-indigo-100 rounded-md">
              <!-- cloud icon -->
              <svg class="w-6 h-6 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 17.58A5 5 0 0018 9h-1.26A8 8 0 104 16.25"/></svg>
            </div>
            <div>
              <h4 class="font-semibold">Static + Dynamic</h4>
              <p class="text-sm text-gray-500">Use plain HTML or connect to an app backend.</p>
            </div>
          </div>
        </div>

        <div class="p-6 bg-gray-50 rounded-lg shadow-sm">
          <div class="flex items-center gap-4">
            <div class="p-3 bg-indigo-100 rounded-md">
              <!-- server icon -->
              <svg class="w-6 h-6 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="8" rx="2"/><rect x="2" y="13" width="20" height="8" rx="2"/></svg>
            </div>
            <div>
              <h4 class="font-semibold">VPS Ready</h4>
              <p class="text-sm text-gray-500">Deploy easily on Ubuntu, Nginx/Apache.</p>
            </div>
          </div>
        </div>

        <div class="p-6 bg-gray-50 rounded-lg shadow-sm">
          <div class="flex items-center gap-4">
            <div class="p-3 bg-indigo-100 rounded-md">
              <!-- wrench icon -->
              <svg class="w-6 h-6 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 7.3a7 7 0 11-9.9 9.9"/><path d="M16 8l4-4"/></svg>
            </div>
            <div>
              <h4 class="font-semibold">Customisable</h4>
              <p class="text-sm text-gray-500">Tweak styles, icons and content quickly.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing / CTA -->
  <section id="pricing" class="max-w-5xl mx-auto px-6 py-12">
    <h3 class="text-2xl font-bold">Pricing</h3>
    <p class="text-gray-600 mt-2">Simple pricing for small projects — change these as you like.</p>

    <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <div class="p-6 rounded-lg border bg-white shadow-sm">
        <div class="text-sm text-gray-500">Starter</div>
        <div class="mt-4 text-3xl font-extrabold">Free</div>
        <ul class="mt-4 text-sm text-gray-600 space-y-2">
          <li>Single-page site</li>
          <li>Basic styling</li>
          <li>Email support</li>
        </ul>
        <button class="mt-6 w-full px-4 py-2 bg-indigo-600 text-white rounded-md">Choose</button>
      </div>

      <div class="p-6 rounded-lg border bg-white shadow-sm">
        <div class="text-sm text-gray-500">Pro</div>
        <div class="mt-4 text-3xl font-extrabold">₦10,000</div>
        <ul class="mt-4 text-sm text-gray-600 space-y-2">
          <li>Custom domain</li>
          <li>HTTPS</li>
          <li>One month maintenance</li>
        </ul>
        <button class="mt-6 w-full px-4 py-2 border border-indigo-600 text-indigo-600 rounded-md">Choose</button>
      </div>

      <div class="p-6 rounded-lg border bg-white shadow-sm">
        <div class="text-sm text-gray-500">Agency</div>
        <div class="mt-4 text-3xl font-extrabold">Custom</div>
        <ul class="mt-4 text-sm text-gray-600 space-y-2">
          <li>Multiple sites</li>
          <li>Priority support</li>
          <li>Custom integrations</li>
        </ul>
        <button class="mt-6 w-full px-4 py-2 bg-indigo-600 text-white rounded-md">Contact</button>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="bg-white border-t">
    <div class="max-w-5xl mx-auto px-6 py-12">
      <h3 class="text-2xl font-bold">Contact</h3>
      <p class="text-gray-600 mt-2">Drop a message — form here is static but shows fields to collect.</p>

      <form class="mt-6 grid gap-4 sm:grid-cols-2">
        <input class="p-3 border rounded-md" placeholder="Your name" />
        <input class="p-3 border rounded-md" placeholder="Email address" />
        <input class="p-3 border rounded-md sm:col-span-2" placeholder="Subject" />
        <textarea class="p-3 border rounded-md sm:col-span-2" rows="4" placeholder="Message"></textarea>
        <button class="sm:col-span-2 px-4 py-3 bg-indigo-600 text-white rounded-md">Send Message</button>
      </form>

      <div class="mt-8 text-sm text-gray-500">Or email: <a href="mailto:hello@myfirstwebsite.example" class="underline">hello@myfirstwebsite.example</a></div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-12 bg-gray-50 border-t">
    <div class="max-w-5xl mx-auto px-6 py-8 flex flex-col md:flex-row justify-between items-center gap-4">
      <div class="text-sm text-gray-600">© <span id="year"></span> My First Website — Made with Tailwind.</div>
      <div class="flex items-center gap-4 text-sm">
        <a href="#" class="hover:text-indigo-600">Twitter</a>
        <a href="#" class="hover:text-indigo-600">GitHub</a>
        <a href="#" class="hover:text-indigo-600">Docs</a>
      </div>
    </div>
  </footer>

  <script>
    // small JS: mobile menu + year
    document.getElementById('year').textContent = new Date().getFullYear();
    const menuBtn = document.getElementById('menuBtn');
    menuBtn?.addEventListener('click', ()=>{
      alert('Mobile menu: This starter page has no extra pages. Add links as you like!')
    })
  </script>
</body>
</html>