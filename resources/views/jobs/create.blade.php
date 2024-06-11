<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Title" placeholder="CEO" />
        <x-forms.input name="salary" label="Salary" placeholder="$50,000" />
        <x-forms.input name="location" label="Location" placeholder="San Francisco" />

        <x-forms.select name="schedule" label="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="Url" />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (comma separated)" placeholder="php, laravel" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
