<form wire:submit.prevent='save' class="validate my-3">
    @if (session()->has('message'))
    <div class="bg-green-500 text-white p-2 my-3 rounded">
        {{ session('message') }}
    </div>
    @endif
    <div class="row">
        <div class="block md:flex md:gap-2">
            <input class="p-2 rounded-md w-full appearance-none bg-slate-800 focus:outline-none" placeholder="Full Name"
                type="text" wire:model="full_name">
            <input class="mt-2 md:mt-0 p-2 rounded-md w-full appearance-none bg-slate-800 focus:outline-none" placeholder="Email"
                type="email" wire:model="email">

        </div>
        @error('full_name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        @error('email')
        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
        @enderror
        <div class="my-3">
            <input class="p-2 rounded-md w-full appearance-none bg-slate-800 focus:outline-none" placeholder="Subject"
                type="text" wire:model="subject">
        </div>
        @error('subject')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <div>
            <textarea class="p-2 rounded-md w-full appearance-none bg-slate-800 focus:outline-none"
                wire:model="message" rows="3" placeholder="Message"></textarea>
            @error('message')
            <span class="text-red-500 text-sm">{{ $message }}</span><br>
            @enderror
            <button title="Contact Button" type="submit"
                class="shrink-0 rounded-md bg-gradient-to-br from-sky-500 to-cyan-400 mt-3 px-3 py-2 text-sm font-medium hover:from-sky-700 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600/50">
                Send Message
            </button>
        </div>
    </div>
</form>
