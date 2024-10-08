<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-3 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-3" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; justify-items: center;">
                    <!-- Row 1: About Us & News -->
                    <a href="{{ url('/admin-abouts') }}" style="text-decoration: none;">
                        <div style="width: 300px; padding: 30px; background-color: #f0f0f0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15); text-align: center;">
                            <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #333;">Hakkımızda</h3>
                            <p style="color: #666;">→</p>
                        </div>
                    </a>
                    <a href="{{ url('/admin-news') }}" style="text-decoration: none;">
                        <div style="width: 300px; padding: 30px; background-color: #f0f0f0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15); text-align: center;">
                            <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #333;">Haberler</h3>
                            <p style="color: #666;">→</p>
                        </div>
                    </a>

                    <!-- Row 2: References & Services -->
                    <a href="{{ url('/admin-references') }}" style="text-decoration: none;">
                        <div style="width: 300px; padding: 30px; background-color: #f0f0f0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15); text-align: center;">
                            <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #333;">Referanslarimiz</h3>
                            <p style="color: #666;">→</p>
                        </div>
                    </a>
                    <a href="{{ url('/admin-services') }}" style="text-decoration: none;">
                        <div style="width: 300px; padding: 30px; background-color: #f0f0f0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15); text-align: center;">
                            <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #333;">Hizmetlerimiz</h3>
                            <p style="color: #666;">→</p>
                        </div>
                    </a>

                    <!-- Row 3: Systems  -->

                    <div style="grid-column: 1 / span 2; display: flex; justify-content: center;">
                        <a href="{{ url('/admin-systems') }}" style="text-decoration: none;">
                            <div class="mb-3 mx-auto" style="width: 300px; padding: 30px; background-color: #f0f0f0; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15); text-align: center;">
                                <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px; color: #333;">Sistemler</h3>
                                <p style="color: #666;">→</p>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
