<x-head />
<x-scripts />

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC] dark:bg-gray-900">

    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        <div
            class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
            <div class="text-center p-6 bg-slate-900 rounded-t">
                <a href="index.html"><img src="assets/images/logo-sm.png" alt=""
                        class="w-14 h-14 mx-auto mb-2"></a>
                <h3 class="font-semibold text-white text-xl mb-1">Let's Get Started Robotech</h3>
                <p class="text-xs text-slate-400">Sign in to continue to Robotech.</p>
            </div>

            <form class="p-6" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                    <input type="email" id="email" name="email"
                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                        placeholder="Your Email" required>
                </div>
                @error('email')
                    <div class="font-bold mt-1 ml-2 text-red-500">{{ $message }}</div>
                @enderror
                <div class="mt-4 mb-2">
                    <label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your
                        password</label>
                    <input type="password" id="password" name="password"
                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 mb-2"
                        placeholder="Password" required>
                </div>
                <a href="#" class="text-xs font-medium text-brand-500 underline ">Forget Password?</a>
                <div class="mt-4">
                    <button
                        class="w-full px-2 py-2 tracking-wide text-white transition-colors duration-200 transform bg-brand-500 rounded hover:bg-brand-600 focus:outline-none focus:bg-brand-600">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
