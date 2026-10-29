<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Board - {{ $title ?? "onboarding top talent" }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
      <!-- ========== HEADER ========== -->
<header class="sticky top-0 inset-x-0 z-50 w-full bg-navbar/80 backdrop-blur-md border-b border-navbar-line">
  <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:px-6 lg:px-8 py-3 md:flex md:items-center md:justify-between md:gap-6" aria-label="Main">

    <!-- Logo + mobile toggle -->
    <div class="flex items-center justify-between">
      <a class="flex items-center gap-2.5 rounded-lg focus:outline-hidden focus-visible:ring-2 focus-visible:ring-primary" href="/" aria-label="Job Board home">
        <span class="flex size-9 items-center justify-center rounded-xl bg-primary text-primary-foreground shadow-sm">
          <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
        </span>
        <span class="font-semibold text-xl tracking-tight text-foreground">Job Board</span>
      </a>

      <div class="md:hidden">
        <button type="button" class="hs-collapse-toggle relative size-9 flex justify-center items-center rounded-lg bg-layer border border-layer-line text-layer-foreground hover:bg-layer-hover focus:outline-hidden focus-visible:ring-2 focus-visible:ring-primary disabled:opacity-50 disabled:pointer-events-none" id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic" aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
          <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Toggle navigation</span>
        </button>
      </div>
    </div>

    <!-- Collapse -->
    <div id="hs-header-classic" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-header-classic-collapse" role="region">
      <div class="mt-3 md:mt-0 flex flex-col md:flex-row md:items-center md:justify-between gap-4 max-h-[75vh] overflow-y-auto md:overflow-visible">

        <!-- Links -->
        
        <div class="flex flex-col md:flex-row md:items-center md:mx-auto gap-15">
          <x-nav-link href="/" :active=" request()->is('/') "> Home</x-nav-link>
          <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
          <x-nav-link href="/contact" :active="request()->is('contact')" >Contact</x-nav-link>
        </div>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row md:items-center gap-2 pt-3 md:pt-0 border-t md:border-t-0 border-navbar-line">
          <a href="/login" class="inline-flex justify-center items-center px-3.5 py-2 text-sm font-medium rounded-lg border border-layer-line bg-layer text-layer-foreground hover:bg-layer-hover focus:outline-hidden focus-visible:ring-2 focus-visible:ring-primary transition-colors">
            Sign in
          </a>
          <a href="/post-job" class="inline-flex justify-center items-center gap-x-1.5 px-3.5 py-2 text-sm font-medium rounded-lg bg-primary text-primary-foreground shadow-sm hover:bg-primary-hover focus:outline-hidden focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 transition-colors">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
            Post a job
          </a>
        </div>

      </div>
    </div>
    <!-- End Collapse -->
  </nav>
</header>
<!-- ========== END HEADER ========== -->

 {{ $slot }} 
</body>
</html>
