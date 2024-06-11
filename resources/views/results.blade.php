<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input name="q" :label="false" placeholder="Web Developer" class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl" />
            </x-forms.form>
        </section>

        <section>
            <x-section-heading>Results</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
