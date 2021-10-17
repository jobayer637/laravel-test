@component('mail::message')

@component('mail::panel')
# Add New Product <br>
New Product '{{ $product->name }}' is Added.
@endcomponent


@component('mail::panel')
Product Description
@endcomponent

@component('mail::table', ['color'=> 'primary'])
| Name | Price | Action |
| :------------- | :------------- | :------------- |
| {{$product->name}} | {{$product->price}} | <a href="http://localhost:8000/product">Go to Link</a> |
@endcomponent

Thanks,<br>
{{ config('app.name') }} <br>
Developped by # Jobayer Hossain

@endcomponent