<nav class="flex items-center justify-between flex-wrap bg-grey-darkest p-6 mb-8">
    <div class="flex items-center flex-no-shrink text-white mr-6">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.534857 4.1444497" width="120"><path d="M.403 2.777L.81 3.2l-.407.428L0 3.2zM2.963 0l-1.62 4.144H.917L2.532 0zM4.05 2.246h-.205v1.31H3.23V.385q.188-.014.422-.024.234-.01.448-.01.547 0 .83.21.286.21.286.658 0 .2-.048.348-.05.148-.128.258-.08.11-.182.186-.104.076-.217.127l.255.46q.125.218.245.38.124.162.248.258.128.093.272.093h.02v.205q-.07.024-.168.038-.093.017-.21.017-.17 0-.296-.03-.124-.032-.245-.136-.116-.103-.243-.303-.128-.2-.297-.54zm-.095-.313q.127 0 .245-.03.12-.036.19-.084.034-.025.068-.063t.062-.1q.028-.062.045-.158.017-.098.017-.243 0-.16-.038-.272Q4.51.875 4.437.81q-.072-.07-.18-.097-.106-.03-.243-.03-.038 0-.087.003-.044 0-.082.006v1.24zM6.604 3.555V.717L5.678.703l.03-.324h2.443L8.12.69l-.9.025v2.838zM9.164 3.555H8.55V.38h1.782l-.028.32-1.14.017v1.126l1.102.014-.027.293-1.076.024zM13.91 3.555l-.243-2.422-1.09 2.422h-.185l-1.137-2.422-.207 2.422h-.354L11 .358h.576l1.057 2.25L13.64.358h.56l.335 3.197z"/></svg>
        <span class="font-semibold text-xl tracking-tight capitalize">{{ config('app.name') }}</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-grey-lighter border-grey-light hover:text-white hover:border-white">
            <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#placeholder" class="block mt-4 lg:inline-block lg:mt-0 text-grey-light hover:text-white mr-4 no-underline">Placeholder</a>
        @auth
            <a href="{{ route('dashboard') }}" class="block mt-4 lg:inline-block lg:mt-0 text-grey-light hover:text-white mr-4 no-underline">Dashboard</a>
            @role('admin|subscriber')
            <a href="{{ route('blog.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-grey-light hover:text-white mr-4 no-underline">Blog</a>
            @endrole
            @role('admin')
                <a href="{{ route('permissions.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-grey-light hover:text-white mr-4 no-underline">Permissions</a>
                <a href="{{ route('roles.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-grey-light hover:text-white mr-4 no-underline">Roles</a>
            @endrole
            @endauth
        </div>
        @guest
        <div>
            <a href="{{ route('login') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded-sm text-white border-white hover:border-transparent hover:text-grey-darkest hover:bg-white mt-4 lg:mt-0 no-underline mr-2">Login</a>
        </div>
        <div>
            <a href="{{ route('register') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded-sm text-white border-white hover:border-transparent hover:text-grey-darkest hover:bg-white mt-4 lg:mt-0 no-underline">Register</a>
        </div>
        @else
        <div>
            <a href="{{ route('logout') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded-sm text-white border-white hover:border-transparent hover:text-grey-darkest hover:bg-white mt-4 lg:mt-0 no-underline" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        @endguest
    </div>
</nav>
