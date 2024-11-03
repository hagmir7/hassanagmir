@extends('base')


@section('content')
<div class="max-w-2xl m-auto">
    <div class="col-lg-12">
        <h1 class="text-3xl font-bold mt-2" id="send-us-a-message">Contact me</h1>
        <div>
            <p>I'd love to hear from you! Whether you have questions about my services, I'm here to help.</p>
            <h2 class="text-xl font-bold mt-2" id="get-in-touch">Get in Touch</h2>
            <ul>
                <li><strong>Email:</strong> contact@hassanagmir.com</li>
                <li><strong>Hours:</strong> Monday - Friday, 9:00 AM - 5:00 PM EST</li>
            </ul>
            <h2 class="text-xl font-bold mt-2" id="send-us-a-message">Send me a Message</h2>
            <p>Use the form below to send me a message, and I'll get back to you as soon as possible.</p>
        </div>
        @livewire('contact-form')
    </div>
</div>
@endsection
