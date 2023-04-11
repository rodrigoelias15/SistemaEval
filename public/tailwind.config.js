/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  safelist: [
    'bg-gradient-to-r',
    {
        pattern: /bg-(red|green|blue|indigo|yellow|purple|emerald|lime)-(100|200|300|400|500|600|700|800|900)/,
        variants:['hover', 'focus'],
    },
    {
        pattern: /text-(red|green|blue|indigo|yellow|purple|emerald|lime)-(100|200|300|400|500|600|700|800|900)/,
    },
    {
        pattern: /border-(red|green|blue|indigo|yellow|purple|emerald|lime)-(100|200|300|400|500|600|700|800|900)/,
    },
    {
        pattern: /from-(red|green|blue|indigo|yellow|purple|emerald|lime)-(100|200|300|400|500|600|700|800|900)/,
    },
    {
        pattern: /via-(red|green|blue|indigo|yellow|purple|emerald|lime)-(100|200|300|400|500|600|700|800|900)/,
    },
    {
        pattern: /to-(red|green|blue|indigo|yellow|purple|emerald|lime)-(100|200|300|400|500|600|700|800|900)/,
    },
    {
        pattern: /overflow-(auto)/,
    },
  ],
}
