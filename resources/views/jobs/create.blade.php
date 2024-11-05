<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form action="/jobs" method="POST">
        <x-forms.input label="Title" name="title"  placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Tanta Park , Club" />
        <x-forms.select label="Schedule" name="schedule">
            <option >Part Time</option>
            <option >Full Time</option>
        </x-forms.select>
        <x-forms.checkbox name="featured" label="Feature (Costs Extra)"/>
        <x-forms.input label="Url" name="url" placeholder="http://abc.com/jobs" />

        <x-forms.input label="Tags (comma separeted)" name="tags" placeholder="Frontend , Backend , Api" />
        {{-- <X-forms.divider/> --}}

        <x-forms.button>Public Now</x-forms.button>
    </x-forms.form>
</x-layout>
