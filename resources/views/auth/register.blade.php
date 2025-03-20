<x-layout>
    <x-page-heading>Register</x-page-heading>

    {{--    enctype adde because of form accepting a file--}}
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name"></x-forms.input>
        <x-forms.input label="Email" name="email" type="email"></x-forms.input>
        <x-forms.input label="Password" name="password" type="password"></x-forms.input>
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password"></x-forms.input>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Employer Name" name="employer" ></x-forms.input>
        <x-forms.input label="Employer Logo" name="logo" type="file"></x-forms.input>


        <x-forms.button>Register</x-forms.button>
    </x-forms.form>
</x-layout>