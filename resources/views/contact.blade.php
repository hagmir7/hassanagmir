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

        <form id="contact-form" method="post" class="validate my-3  contact-form">
            <div class="row">
                <div class="block md:flex md:gap-2">
                    <input class="p-2 rounded-md w-full appearance-none bg-slate-800 focus:outline-none" placeholder="Email" type="email" name="email">
                    <input class="p-2 rounded-md w-full appearance-none bg-slate-800 focus:outline-none" placeholder="Full Name" type="text" name="name">
                </div>
                <div class="col-md-6 mb-3">

                </div>
                <div class="col-md-12 mb-3">
                    <input class="p-2 rounded-md w-full appearance-none bg-slate-800 focus:outline-none" placeholder="Subject" type="text" name="subject">
                </div>
                <div class="col-md-12">
                    <textarea class="p-2 rounded-md w-full appearance-none bg-slate-800 focus:outline-none mb-3" name="body" rows="3" placeholder="Message"></textarea>
                    <button id="Contact button" title="Contact Button" type="submit" class="shrink-0 rounded-md bg-gradient-to-br from-sky-500 to-cyan-400 px-3 py-2 text-sm font-medium hover:from-sky-700 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600/50">
                        Send  Message
                    </button>
                </div>
            </div>
        </form>

    </div>
    {{-- <input class="w-full appearance-none bg-slate-800 focus:outline-none"> --}}
</div>
@endsection
