/** @type {import('tailwindcss').Config} */
import preset from './vendor/filament/filament/tailwind.config.preset';

export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/filament/**/*.blade.php',
    ],

    theme: {},
    plugins: [
        require('@tailwindcss/typography'),
    ],
}
