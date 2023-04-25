        </article>
    </main>
    <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
       







<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">



<footer class="  md:flex md:items-center md:justify-between  dark:bg-gray-800"> 
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2020-23 <a href="<?php echo $url; ?>/" >VBSTAT</a>. Some Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="<?php echo $url; ?>/about" class="mr-4 hover:underline md:mr-6 "  title="about visvabharati dept of statistics">About</a>
        </li>
        <li>
            <a href="<?php echo $url; ?>/privacy-policy" class="mr-4 hover:underline md:mr-6"  title="Privacy">Privacy Policy</a>
        </li>

        <li>
            <a href="<?php echo $url; ?>/contact" class="hover:underline"  title="contact VBSTAT">Contact</a>
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











<script src="/js/script.js"></script>

</body>
</html>