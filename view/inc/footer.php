        </article>
    </main>
    <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />








<HR>


<footer class="  md:flex md:items-center md:justify-between  dark:bg-gray-800"> 
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="<?php echo $url; ?>/" >VBSTAT</a>. No Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="<?php echo $url; ?>/about" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="<?php echo $url; ?>/privacy-policy" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
        </li>

        <li>
            <a href="<?php echo $url; ?>/contact" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>









    </div>
    <!-- scripts -->  



<script>


var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});

</script>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>

  <script src="<?php echo $url; ?>/assets/view/js/tailwind.js"></script>
    <script src="<?php echo $url; ?>/assets/view/js/e.umd.js"></script>
    <script src="<?php echo $url; ?>/assets/view/js/vbstat.umd.js"></script>
    <script>
        const t = new vbstat.Core()
    </script>
</body>
</html>