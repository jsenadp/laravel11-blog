<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Buat User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <form method="post" action="{{ route('member.users.store') }}" class="space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <header>
                                <h2 class="text-lg font-medium text-gray-900">
                                    Tambah Data User
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    Silakan melakukan penambahan data
                                </p>
                            </header>
                            <div>
                                <x-input-label for="name" value="Nama" />
                                <x-text-input id="name" name="name" value="{{ old('name') }}" type="text" class="mt-1 block w-full"
                                    required />
                            </div>
                            <div>
                                <x-input-label for="email" value="Email" />
                                <x-text-input id="email" name="email" value="{{ old('email') }}" type="text" class="mt-1 block w-full" />
                            </div>
                            <div>
                                <input type="checkbox" value='1' class="border-gray-300 rounded-md" name="email_verified_at" 
                                {{ old('email_verified_at') == null?'':'checked' }}/>
                                <x-input-label for="email_verified_at" value="verifikasi email" class="inline" />

                            </div>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900">
                                    Password
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    Silakan isikan password.
                                </p>
                            </header>
                            <div>
                                <x-input-label for="password" value="Password" />
                                <x-text-input id="password" name="password" value="" type="password"
                                    class="mt-1 block w-full" />
                            </div>
                            <div>
                                <x-input-label for="password_confirmation" value="Konfirmasi Password" />
                                <x-text-input id="password_confirmation" name="password_confirmation" value="" type="password"
                                    class="mt-1 block w-full" />
                            </div>

                            <div class="flex items-center gap-4">
                                <a href="{{ route('member.users.index') }}">
                                    <x-secondary-button>Kembali</x-secondary-button>
                                </a>
                                <x-primary-button>Simpan</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
