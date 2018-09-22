<h3 class="flex items-center font-normal text-white mb-6 text-base no-underline">
    <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path fill="#B3C1D1" d="M17.222,5.041l-4.443-4.414c-0.152-0.151-0.356-0.235-0.571-0.235h-8.86c-0.444,0-0.807,0.361-0.807,0.808v17.602c0,0.448,0.363,0.808,0.807,0.808h13.303c0.448,0,0.808-0.36,0.808-0.808V5.615C17.459,5.399,17.373,5.192,17.222,5.041zM15.843,17.993H4.157V2.007h7.72l3.966,3.942V17.993z"></path>
        <path fill="#B3C1D1" d="M5.112,7.3c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808c0-0.447-0.363-0.808-0.808-0.808H5.92C5.475,6.492,5.112,6.853,5.112,7.3z"></path>
        <path fill="#B3C1D1" d="M5.92,5.331h4.342c0.445,0,0.808-0.361,0.808-0.808c0-0.446-0.363-0.808-0.808-0.808H5.92c-0.444,0-0.808,0.361-0.808,0.808C5.112,4.97,5.475,5.331,5.92,5.331z"></path>
        <path fill="#B3C1D1" d="M13.997,9.218H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,9.58,14.442,9.218,13.997,9.218z"></path>
        <path fill="#B3C1D1" d="M13.997,11.944H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.446,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,12.306,14.442,11.944,13.997,11.944z"></path>
        <path fill="#B3C1D1" d="M13.997,14.67H5.92c-0.444,0-0.808,0.361-0.808,0.808c0,0.447,0.363,0.808,0.808,0.808h8.077c0.445,0,0.808-0.361,0.808-0.808C14.805,15.032,14.442,14.67,13.997,14.67z"></path>
    </svg>
    <span class="sidebar-label">
        Blogify
    </span>
</h3>
<ul class="list-reset mb-8">
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{name: 'nova-blogify-tool'}" class="text-white ml-8 no-underline dim">
            Dashboard
        </router-link>
    </li>
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'categories'
            }
        }" class="text-white ml-8 no-underline dim">
            Categories
        </router-link>
    </li>
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'posts'
            }
        }" class="text-white ml-8 no-underline dim">
            Posts
        </router-link>
    </li>
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'comments'
            }
        }" class="text-white ml-8 no-underline dim">
            Comments
        </router-link>
    </li>
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'tags'
            }
        }" class="text-white ml-8 no-underline dim">
            Tags
        </router-link>
    </li>
</ul>
