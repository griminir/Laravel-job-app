<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Job Title" name="title" placeholder="CEO" required/>
        <x-forms.input label="Salary" name="salary" type="number" placeholder="500 000 NOK" required />
        <x-forms.input label="Location" name="location" placeholder="Bergen" required />

        <x-forms.select label="Schedule" name="schedule"  required>
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"></x-forms.input>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider />

        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="CEO, Management, Leadership"></x-forms.input>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>