<x-layout>
    <div class="space-y-6">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl mb-6">Let's Find Your Next Job</h1>
            <x-forms.form action="/search" >
            <x-forms.input :label="false" name="q" placeholder="I'm Looking For ..." class="rounded-xl bg-white/10 transition-colors duration-300 hover:bg-white/25 border-white/10 px-5 py-4 w-full max-w-xl"/>
            </x-forms.form>
        </section>
            <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
                <div class="grid lg:grid-cols-3 gap-8 items-center mt-6">
                    @foreach ($featuredjob as $job)
                    <x-job-card :$job />
                    @endforeach
                </div>
            </section>
            <section>
            <x-section-heading>Tags</x-section-heading>
                <div class="mt-6">

                    @foreach ($tags as $tag )
                        <x-tags :$tag/>
                    @endforeach

                </div>
            </section>
            <section>
                <x-section-heading>Recent Jobs</x-section-heading>
                    <div class="mt-6 space-y-6">
                        @foreach ($jobs as $job)

                        <x-job-card-w :$job />
                        @endforeach


                    </div>
            </section>
</div>
</x-layout>
